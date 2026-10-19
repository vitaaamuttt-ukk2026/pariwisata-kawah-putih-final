<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PengelolaController extends Controller
{
    public function dashboard(): View { return view('pengelola.dashboard'); }

    public function operasional(): View { return view('pengelola.operasional'); }
    public function analitik(): View { return view('pengelola.analitik'); }
    public function pengaturan(): View { return view('pengelola.pengaturan'); }

    // 1. Tampilkan halaman reservasi + ambil data dari database
    public function reservasi(): View
    {
        $reservasis = Reservasi::latest()->get();
        return view('pengelola.reservasi', compact('reservasis'));
    }

    // 2. Fungsi untuk MENAMBAH data
    public function storeReservasi(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'jumlah_pax' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        Reservasi::create([
            'nama_tamu' => $request->nama_tamu,
            'jumlah_pax' => $request->jumlah_pax,
            'status' => 'Menunggu',
            'tanggal' => $request->tanggal,
        ]);

        return back()->with('success', 'Data reservasi berhasil ditambahkan!');
    }

    // 3. Fungsi untuk MENGHAPUS data
    public function destroyReservasi(Reservasi $reservasi): RedirectResponse
    {
        $reservasi->delete();
        return back()->with('success', 'Data reservasi berhasil dihapus!');
    }
}