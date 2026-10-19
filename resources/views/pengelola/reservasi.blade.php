@extends('layouts.pengelola')

@section('title', 'Reservasi')

@section('content')
{{-- Pesan Sukses --}}
@if(session('success'))
    <div class="mb-4 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl flex items-center gap-3">
        <span class="material-symbols-outlined text-emerald-600">check_circle</span>
        {{ session('success') }}
    </div>
@endif

<!-- Header & Tombol Tambah -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-4 border-b border-slate-200 mb-6">
    <div>
        <h2 class="text-xl text-slate-900 font-bold tracking-tight">Kelola Data Reservasi</h2>
        <p class="text-xs text-slate-500 mt-1">Tambah, verifikasi, atau hapus data kunjungan wisatawan.</p>
    </div>
    <!-- Tombol ini akan membuka Modal -->
    <button onclick="document.getElementById('modalTambah').classList.remove('hidden')" class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-xs font-bold flex items-center gap-2 shadow-sm transition-all">
        <span class="material-symbols-outlined text-[18px]">add</span> Tambah Kunjungan Manual
    </button>
</div>

<!-- Tabel Data Reservasi -->
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-600 text-xs uppercase font-semibold">
                <tr>
                    <th class="py-4 px-6">Nama Tamu / Rombongan</th>
                    <th class="py-4 px-6">Jumlah Pax</th>
                    <th class="py-4 px-6">Tanggal</th>
                    <th class="py-4 px-6">Status</th>
                    <th class="py-4 px-6 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($reservasis as $item)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-4 px-6 font-medium text-slate-900">{{ $item->nama_tamu }}</td>
                    <td class="py-4 px-6 text-slate-600">{{ $item->jumlah_pax }} Orang</td>
                    <td class="py-4 px-6 text-slate-600">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 rounded-full text-xs font-bold 
                            {{ $item->status == 'Hadir' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
                            {{ $item->status }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <!-- Tombol Hapus dengan Form DELETE -->
                        <form action="{{ route('pengelola.reservasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-rose-600 hover:text-rose-800 hover:bg-rose-50 p-2 rounded-lg transition-colors" title="Hapus Data">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-8 px-6 text-center text-slate-400">
                        Belum ada data reservasi. Silakan tambah data baru.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- ========================================== -->
<!-- MODAL POP-UP: TAMBAH DATA -->
<!-- ========================================== -->
<div id="modalTambah" class="hidden fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-[60] flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-900">Tambah Kunjungan Manual</h3>
            <button onclick="document.getElementById('modalTambah').classList.add('hidden')" class="text-slate-400 hover:text-slate-600">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        
        <form action="{{ route('pengelola.reservasi.store') }}" method="POST" class="p-5 space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Tamu / Rombongan</label>
                <input type="text" name="nama_tamu" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="Contoh: Bpk. Hendra & Rombongan">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Jumlah Pax</label>
                    <input type="number" name="jumlah_pax" required min="1" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500" placeholder="0">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tanggal Kunjungan</label>
                    <input type="date" name="tanggal" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
            </div>
            
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')" class="flex-1 px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl text-sm font-bold transition-colors">Batal</button>
                <button type="submit" class="flex-1 px-4 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-sm font-bold shadow-sm transition-colors">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection