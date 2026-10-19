<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PengunjungController extends Controller
{
    public function index(): View { return view('pengunjung.dashboard'); }
    public function info(): View { return view('pengunjung.info'); }
    public function wisata(): View { return view('pengunjung.wisata'); }
    public function penginapan(): View { return view('pengunjung.penginapan'); }
    public function booking(): View { return view('pengunjung.booking'); }
    public function pembayaran(): View { return view('pengunjung.pembayaran'); }

    public function prosesPembayaran(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'nama_pengunjung'   => 'required|string|max:255',
        'email'             => 'required|email|max:255',
        'no_hp'             => 'required|string|max:20',
        'tanggal_kunjungan' => 'required|date',
        'jumlah_tiket'      => 'required|integer|min:1',
        'metode_pembayaran' => 'required|string|in:qris,va',
        'cart_data'         => 'nullable|string',
    ]);

    $cartItems = [];
    $totalBayar = 0;
    $paketRingkasan = 'Paket Wisata Kawah Putih';
    
    if (!empty($validated['cart_data'])) {
        try {
            $cartItems = json_decode($validated['cart_data'], true);
            if (is_array($cartItems)) {
                foreach ($cartItems as $item) {
                    $totalBayar += ($item['price'] ?? 0) * ($item['qty'] ?? 0);
                }
                $namaPaket = array_map(function($item) {
                    return $item['name'] . ' (x' . $item['qty'] . ')';
                }, $cartItems);
                $paketRingkasan = implode(', ', $namaPaket);
            }
        } catch (\Exception $e) {
            // Fallback jika error
        }
    }
    
    if ($totalBayar == 0) {
        $totalBayar = 31000 * $validated['jumlah_tiket'];
        $paketRingkasan = 'Tiket Masuk (WNI) x ' . $validated['jumlah_tiket'];
    }

    $bookingCode = 'KP-' . date('Ymd') . '-' . strtoupper(substr(md5(time() . rand()), 0, 4));

    // SIMPAN KE DATABASE DENGAN STATUS PENDING
    $booking = Booking::create([
        'booking_code'      => $bookingCode,
        'nama_lengkap'      => $validated['nama_pengunjung'],
        'email'             => $validated['email'],
        'no_hp'             => $validated['no_hp'],
        'jumlah_pengunjung' => $validated['jumlah_tiket'],
        'tanggal_kunjungan' => $validated['tanggal_kunjungan'],
        'paket'             => $paketRingkasan,
        'total_bayar'       => $totalBayar,
        'metode_pembayaran' => $validated['metode_pembayaran'],
        'status'            => 'pending', // <--- UBAH MENJADI PENDING
        'paid_at'           => null,      // <--- KOSONGKAN DULU
    ]);

    return redirect()->route('pengunjung.tiket')->with([
        'success' => 'Pesanan berhasil dibuat! Silakan tunggu verifikasi dari admin. E-Tiket akan diterbitkan setelah pembayaran diverifikasi.',
        'booking' => $booking,
    ]);
}

    public function statusTiket(): View
    {
        // Ambil booking dari session (hanya ada jika baru saja bayar)
        $booking = session('booking');
        
        return view('pengunjung.tiket', compact('booking'));
    }
}