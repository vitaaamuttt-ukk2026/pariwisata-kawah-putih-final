@extends('layouts.pengelola')

@section('title', 'Analitik')

@section('content')
<div class="flex flex-col items-center justify-center py-20 bg-white border border-slate-100 rounded-2xl shadow-sm border-dashed border-2">
  <div class="w-16 h-16 rounded-2xl bg-slate-50 text-slate-400 flex items-center justify-center mb-4">
    <span class="material-symbols-outlined text-[32px]">monitoring</span>
  </div>
  <h3 class="text-lg text-slate-900 font-bold tracking-tight">Modul Analitik Mendalam</h3>
  <p class="text-xs text-slate-500 mt-1 text-center max-w-sm">Halaman ini akan menampilkan grafik tren historis, analisis demografi pengunjung, dan laporan pendapatan bulanan yang terintegrasi.</p>
  <button class="mt-6 px-4 py-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-xl text-xs font-bold hover:bg-emerald-100 transition-colors">
    Muat Data Analitik
  </button>
</div>
@endsection