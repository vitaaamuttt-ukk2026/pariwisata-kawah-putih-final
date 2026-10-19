@extends('layouts.pengelola')

@section('title', 'Dasbor Operasional')

@section('content')
<!-- Top Title & Header Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-2 border-b border-slate-200/80">
  <div class="flex flex-col">
    <div class="flex items-center gap-2.5">
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700">
        <span class="material-symbols-outlined text-[18px]">travel_explore</span>
      </span>
      <h1 class="text-2xl text-slate-900 tracking-tight font-extrabold">Dasbor Operasional Cagar Alam &amp; Wisata</h1>
    </div>
    <p class="text-xs text-slate-500 mt-1">Sistem Manajemen Operasional Terpadu • Real-time Eco-Capacity Control &amp; Visitor Stream Monitoring</p>
  </div>
  <div class="flex flex-wrap items-center gap-2.5">
    <div class="flex items-center p-1 bg-white border border-slate-200 rounded-xl shadow-sm">
      <button class="px-3.5 py-1.5 rounded-lg bg-emerald-600 text-white text-xs font-bold shadow-sm shadow-emerald-600/30 transition-all">Hari Ini</button>
      <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 transition-colors">Minggu Ini</button>
      <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 transition-colors">Bulan Ini</button>
    </div>
    <button class="flex items-center gap-2 px-4 py-2 bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 rounded-xl text-xs font-bold shadow-sm transition-all">
      <span class="material-symbols-outlined text-slate-500 text-[18px]">file_download</span>
      <span>Ekspor Laporan</span>
    </button>
  </div>
</div>

<!-- SECTION 1: Daily Bookings & Metrics (4 KPI Grid) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
  <!-- Stat 1 -->
  <div class="flex flex-col justify-between p-5 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
    <div class="flex items-center justify-between">
      <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Total Pemesanan Harian</span>
      <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center">
        <span class="material-symbols-outlined text-[20px]">confirmation_number</span>
      </div>
    </div>
    <div class="mt-3 flex items-baseline justify-between">
      <span class="text-3xl text-slate-900 font-extrabold">1.420</span>
      <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-100">
        <span class="material-symbols-outlined text-[13px]">arrow_upward</span> +14,2%
      </span>
    </div>
  </div>
  <!-- Stat 2 -->
  <div class="flex flex-col justify-between p-5 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
    <div class="flex items-center justify-between">
      <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Wisatawan Aktif di Kawasan</span>
      <div class="w-9 h-9 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center">
        <span class="material-symbols-outlined text-[20px]">groups</span>
      </div>
    </div>
    <div class="mt-3 flex items-baseline justify-between">
      <span class="text-3xl text-slate-900 font-extrabold">850</span>
      <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-amber-50 text-amber-700 text-xs font-bold border border-amber-200">
        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Beban 70,8%
      </span>
    </div>
    <div class="mt-4 flex flex-col gap-1.5 pt-3 border-t border-slate-100">
      <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden">
        <div class="bg-gradient-to-r from-emerald-500 via-teal-500 to-amber-500 h-full rounded-full transition-all duration-500" style="width: 70.8%"></div>
      </div>
      <div class="flex justify-between text-xs text-slate-500 font-medium">
        <span>850 Hadir</span>
        <span>1.200 Kapasitas Maks</span>
      </div>
    </div>
  </div>
  <!-- Stat 3 -->
  <div class="flex flex-col justify-between p-5 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
    <div class="flex items-center justify-between">
      <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Pendapatan Hari Ini</span>
      <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center">
        <span class="material-symbols-outlined text-[20px]">payments</span>
      </div>
    </div>
    <div class="mt-3 flex items-baseline justify-between">
      <span class="text-2xl xl:text-3xl text-slate-900 font-extrabold tracking-tight">Rp 48.650.000</span>
      <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-100">
        <span class="material-symbols-outlined text-[13px]">trending_up</span> +8,7%
      </span>
    </div>
  </div>
  <!-- Stat 4 -->
  <div class="flex flex-col justify-between p-5 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
    <div class="flex items-center justify-between">
      <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Tingkat Selesai Check-in</span>
      <div class="w-9 h-9 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center">
        <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
      </div>
    </div>
    <div class="mt-3 flex items-baseline justify-between">
      <span class="text-3xl text-slate-900 font-extrabold">94,6%</span>
      <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-100">Jalur Cepat Aktif</span>
    </div>
  </div>
</div>

<!-- Booking Trends & Visitor Flow Section -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
  <div class="lg:col-span-8 flex flex-col justify-between">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4">
      <div>
        <h2 class="text-lg text-slate-900 font-bold">Tren Pemesanan Harian &amp; Alur Pengunjung per Jam</h2>
        <p class="text-xs text-slate-500">Pemantauan arus masuk berkelanjutan di dermaga feri, pelabuhan kapal cepat &amp; terminal wisata</p>
      </div>
    </div>
    <div class="relative w-full h-64 select-none border border-slate-100 rounded-xl p-3 bg-gradient-to-b from-slate-50/40 to-white flex items-center justify-center">
        <p class="text-slate-400 text-sm font-medium">[Grafik Tren Pemesanan Akan Ditampilkan Di Sini]</p>
    </div>
  </div>
  <div class="lg:col-span-4 bg-slate-50/70 p-5 rounded-2xl border border-slate-100 flex flex-col justify-between">
    <div class="flex flex-col gap-1">
      <div class="flex items-center justify-between">
        <span class="text-sm font-bold text-slate-900">Arus Kanal Pemesanan</span>
        <span class="text-[11px] font-bold uppercase text-emerald-700 border border-emerald-200 px-2 py-0.5 rounded-full bg-emerald-50">Hari Ini</span>
      </div>
    </div>
    <div class="my-4 flex flex-col gap-4">
      <div class="flex flex-col gap-1.5">
        <div class="flex items-center justify-between text-xs font-semibold">
          <span class="text-slate-800 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>Portal Resmi Daring</span>
          <span class="text-slate-900 font-bold">58% <span class="text-slate-400 font-normal">(824)</span></span>
        </div>
        <div class="w-full bg-slate-200/80 rounded-full h-2.5 overflow-hidden">
          <div class="bg-emerald-500 h-full rounded-full" style="width: 58%"></div>
        </div>
      </div>
      <div class="flex flex-col gap-1.5">
        <div class="flex items-center justify-between text-xs font-semibold">
          <span class="text-slate-800 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>Mitra Agen &amp; Dinas Wisata</span>
          <span class="text-slate-900 font-bold">27% <span class="text-slate-400 font-normal">(383)</span></span>
        </div>
        <div class="w-full bg-slate-200/80 rounded-full h-2.5 overflow-hidden">
          <div class="bg-sky-500 h-full rounded-full" style="width: 27%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection