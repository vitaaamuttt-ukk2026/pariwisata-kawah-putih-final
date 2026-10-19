<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminController extends Controller
{
    /** 1. Dashboard: Ringkasan + daftar semua pesanan */
    public function dashboard(Request $request): View
    {
        $stats = [
            'pendapatan' => (int) Booking::where('status', 'paid')->sum('total_bayar'),
            'lunas'      => Booking::where('status', 'paid')->count(),
            'pending'    => Booking::where('status', 'pending')->count(),
            'pengunjung' => (int) Booking::where('status', 'paid')->sum('jumlah_pengunjung'),
        ];

        $bookings = Booking::query()
            ->when($request->filled('status'), fn ($q) => $q->where('status', $request->string('status')))
            ->when($request->filled('q'), function ($q) use ($request) {
                $term = '%' . $request->string('q')->trim() . '%';
                $q->where(fn ($w) => $w->where('booking_code', 'like', $term)
                    ->orWhere('nama_lengkap', 'like', $term)
                    ->orWhere('no_hp', 'like', $term)
                    ->orWhere('email', 'like', $term));
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.dashboard', compact('stats', 'bookings'));
    }

    /** 2. Halaman View: Wisata, Penginapan, Booking (TAMBAHAN BARU) */
    public function wisata(): View { return view('admin.wisata'); }
    public function penginapan(): View { return view('admin.penginapan'); }
    public function booking(): View { return view('admin.booking'); }

    /** 3. Aksi: Konfirmasi pesanan pending menjadi lunas */
    public function confirm(Booking $booking): RedirectResponse
    {
        if ($booking->status !== 'pending') {
            return back()->with('error', 'Hanya pesanan berstatus pending yang bisa dikonfirmasi.');
        }
        $booking->update(['status' => 'paid', 'paid_at' => now()]);
        return back()->with('success', "Pesanan {$booking->booking_code} ditandai LUNAS.");
    }

    /** 4. Aksi: Batalkan pesanan yang belum dibayar */
    public function cancel(Booking $booking): RedirectResponse
    {
        if ($booking->status !== 'pending') {
            return back()->with('error', 'Hanya pesanan berstatus pending yang bisa dibatalkan.');
        }
        $booking->update(['status' => 'cancelled']);
        return back()->with('success', "Pesanan {$booking->booking_code} dibatalkan.");
    }

    /* ---------------- 5. Kelola akun pengelola (CRUD) ---------------- */
    public function pengelola(): View
    {
        $pengelola = User::where('role', 'pengelola')->orderBy('name')->get();
        return view('admin.pengelola', compact('pengelola'));
    }

    public function storePengelola(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'pengelola',
        ]);

        return back()->with('success', "Akun pengelola {$data['name']} berhasil dibuat.");
    }

    public function destroyPengelola(User $user): RedirectResponse
    {
        abort_unless($user->role === 'pengelola', 404);
        $user->delete();
        return back()->with('success', "Akun {$user->name} dihapus.");
    }

    public function verifyBooking($id)
    {
    $booking = Booking::findOrFail($id);
    
    // Ubah status menjadi paid/confirmed dan isi tanggal bayar
    $booking->update([
        'status' => 'paid',
        'paid_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Booking berhasil diverifikasi! E-Tiket telah diterbitkan.');
    }
}