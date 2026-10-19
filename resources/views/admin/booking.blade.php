@extends('layouts.panel')
@section('title', 'Kelola Booking')
@section('page-title', 'Kelola Booking')

@section('content')
<section class="flex flex-col gap-space-md mb-space-xl">
    <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-sm">
            <div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center"><span class="material-symbols-outlined text-2xl">confirmation_number</span></div>
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs"><h2 class="font-headline-md text-headline-md text-on-surface">Kelola Data Booking & Verifikasi Tiket</h2><span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-bold flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-primary animate-ping"></span> Live Gateway</span></div>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Validasi e-ticket, pelunasan transfer, dan penerbitan tiket barcode loket</span>
            </div>
        </div>
    </div>
    
    <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead><tr class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md uppercase tracking-wider"><th class="py-3.5 px-4 font-semibold">Booking ID</th><th class="py-3.5 px-4 font-semibold">Nama Pemesan</th><th class="py-3.5 px-4 font-semibold">Destinasi</th><th class="py-3.5 px-4 font-semibold">Total Tagihan</th><th class="py-3.5 px-4 font-semibold">Status</th><th class="py-3.5 px-4 font-semibold text-right">Aksi</th></tr></thead>
                <tbody class="divide-y divide-surface-container-high font-body-sm text-body-sm text-on-surface">
                    <tr class="hover:bg-surface-container/40 transition-colors">
                        <td class="py-3.5 px-4 font-mono font-bold text-secondary"><div class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-secondary">receipt_long</span><span>#KP-20241025-8849</span></div></td>
                        <td class="py-3.5 px-4"><span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Julian Saputra</span></td>
                        <td class="py-3.5 px-4"><span class="font-medium text-on-surface">Kawah Putih + Shuttle</span></td>
                        <td class="py-3.5 px-4"><span class="font-headline-sm text-headline-sm text-on-surface font-bold">Rp 180.000</span></td>
                        <td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold"><span class="material-symbols-outlined text-xs">attachment</span> Menunggu Verifikasi</span></td>
                        <td class="py-3.5 px-4 text-right"><div class="inline-flex items-center gap-1.5 justify-end"><button class="px-3 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-semibold flex items-center gap-1 hover:bg-primary-container transition-all shadow-sm" type="button"><span class="material-symbols-outlined text-sm">check</span> Verifikasi</button></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection