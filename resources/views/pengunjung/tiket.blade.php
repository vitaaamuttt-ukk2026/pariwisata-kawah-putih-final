@extends('layouts.pengunjung')
@section('title', 'Status E-Tiket')

@section('content')
<section class="flex flex-col gap-space-lg w-full">
  <div class="flex flex-col">
    <div class="flex items-center gap-space-xs text-primary font-label-sm text-label-sm uppercase tracking-wider">
      <span class="material-symbols-outlined text-[16px]">task_alt</span><span>Status Booking</span>
    </div>
    <h2 class="font-headline-lg text-headline-lg text-on-surface">Status Booking & E-Tiket Digital</h2>
  </div>

  @if($booking)
    @if($booking->status === 'pending')
      <!-- TAMPILAN MENUNGGU VERIFIKASI -->
      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col md:flex-row items-center gap-space-md border-l-4 border-amber-500">
        <div class="w-16 h-16 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center shrink-0 ring-8 ring-amber-50">
          <span class="material-symbols-outlined text-[36px]">hourglass_top</span>
        </div>
        <div class="flex flex-col text-center md:text-left gap-1">
          <div class="flex flex-wrap items-center justify-center md:justify-start gap-2">
            <span class="font-headline-md text-headline-md text-on-surface font-bold">Status: Menunggu Verifikasi</span>
            <span class="bg-amber-100 text-amber-700 text-xs font-mono font-bold px-2.5 py-0.5 rounded-full">{{ $booking->booking_code }}</span>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
            Pesanan Anda telah berhasil dibuat dan sedang <strong class="text-amber-600">menunggu verifikasi</strong> dari admin. 
            E-Tiket akan otomatis diterbitkan dan dapat diunduh setelah pembayaran Anda diverifikasi.
          </p>
        </div>
      </div>
    @else
      <!-- TAMPILAN E-TIKET (JIKA SUDAH PAID/CONFIRMED) -->
      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col md:flex-row items-center gap-space-md border-l-4 border-primary">
        <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 ring-8 ring-primary/5">
          <span class="material-symbols-outlined text-[36px]">check_circle</span>
        </div>
        <div class="flex flex-col text-center md:text-left gap-1">
          <div class="flex flex-wrap items-center justify-center md:justify-start gap-2">
            <span class="font-headline-md text-headline-md text-on-surface font-bold">Status: Pembayaran Berhasil ✓</span>
            <span class="bg-primary text-on-primary text-xs font-mono font-bold px-2.5 py-0.5 rounded-full">{{ $booking->booking_code }}</span>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
            Booking Anda telah <strong class="text-primary">dikonfirmasi</strong> dan <strong class="text-primary">diproses</strong>. 
            E-Tiket di bawah siap digunakan saat kunjungan.
          </p>
        </div>
        <div class="md:ml-auto shrink-0 flex items-center gap-1.5 bg-primary-fixed/30 text-on-primary-fixed-variant px-3 py-1.5 rounded-xl font-label-sm text-label-sm">
          <span class="material-symbols-outlined text-[18px]">verified</span><span>Valid Terdaftar</span>
        </div>
      </div>

      <!-- KARTU E-TIKET -->
      <div class="relative w-full max-w-4xl mx-auto bg-surface-container-lowest rounded-3xl shadow-xl overflow-hidden flex flex-col">
        <div class="h-3 bg-gradient-to-r from-primary via-primary-container to-secondary"></div>
        <div class="p-space-xl flex flex-col gap-space-lg">
          <div class="flex flex-wrap items-center justify-between gap-space-md pb-space-md">
            <div class="flex items-center gap-space-sm">
              <div class="w-12 h-12 rounded-xl bg-primary text-on-primary flex items-center justify-center font-display text-[22px] font-bold shadow-sm">KP</div>
              <div class="flex flex-col">
                <span class="font-headline-md text-headline-md text-on-surface font-bold">Kawah Putih Ciwidey</span>
                <span class="font-label-sm text-label-sm text-outline">Perum Perhutani Jawa Barat</span>
              </div>
            </div>
            <div class="flex flex-col items-end">
              <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Kategori:</span>
              <span class="font-headline-sm text-headline-sm font-bold text-primary">E-PASS REGULER</span>
              <span class="font-mono text-xs text-on-surface-variant">Ref: {{ $booking->booking_code }}</span>
            </div>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md bg-surface-container-low/70 p-space-lg rounded-2xl">
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Nama Pemesan</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold truncate">{{ $booking->nama_lengkap }}</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Jumlah Pengunjung</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $booking->jumlah_pengunjung }} Orang</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Tanggal Kunjungan</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ \Carbon\Carbon::parse($booking->tanggal_kunjungan)->format('d M Y') }}</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Titik Masuk</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Gerbang Utama</span>
            </div>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md bg-surface-container-low/70 p-space-lg rounded-2xl">
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Paket</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $booking->paket }}</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Metode Bayar</span>
              <span class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">{{ $booking->metode_pembayaran }}</span>
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-label-sm text-label-sm text-outline uppercase">Total Dibayar</span>
              <span class="font-headline-sm text-headline-sm text-primary font-bold">Rp {{ number_format($booking->total_bayar, 0, ',', '.') }}</span>
            </div>
          </div>

          <div class="flex flex-col md:flex-row items-center justify-between gap-space-lg bg-surface-container-low/40 p-space-lg rounded-2xl">
            <div class="relative p-3 bg-surface-container-lowest rounded-2xl shadow-sm shrink-0 flex items-center justify-center">
              <svg class="w-36 h-36" fill="none" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                <rect height="36" rx="4" stroke="#006948" stroke-width="6" width="36" x="10" y="10"></rect>
                <rect fill="#006948" height="16" rx="2" width="16" x="20" y="20"></rect>
                <rect height="36" rx="4" stroke="#006948" stroke-width="6" width="36" x="94" y="10"></rect>
                <rect fill="#006948" height="16" rx="2" width="16" x="104" y="20"></rect>
                <rect height="36" rx="4" stroke="#006948" stroke-width="6" width="36" x="10" y="94"></rect>
                <rect fill="#006948" height="16" rx="2" width="16" x="20" y="104"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="8" x="56" y="14"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="8" x="72" y="14"></rect>
                <rect fill="#006948" height="8" rx="1.5" width="8" x="56" y="28"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="12" x="72" y="32"></rect>
                <rect fill="#131b2e" height="12" rx="1.5" width="8" x="14" y="56"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="12" x="30" y="60"></rect>
                <rect fill="#006948" height="10" rx="2" width="10" x="52" y="52"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="16" x="70" y="52"></rect>
                <rect fill="#006948" height="10" rx="1.5" width="10" x="94" y="56"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="12" x="114" y="56"></rect>
                <rect fill="#131b2e" height="16" rx="1.5" width="8" x="52" y="70"></rect>
                <rect fill="#006948" height="12" rx="1.5" width="12" x="68" y="72"></rect>
                <rect fill="#131b2e" height="14" rx="1.5" width="8" x="88" y="72"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="20" x="106" y="72"></rect>
                <rect fill="#131b2e" height="10" rx="1.5" width="10" x="56" y="96"></rect>
                <rect fill="#006948" height="8" rx="1.5" width="14" x="74" y="96"></rect>
                <rect fill="#131b2e" height="12" rx="1.5" width="12" x="96" y="96"></rect>
                <rect fill="#131b2e" height="10" rx="1.5" width="10" x="116" y="96"></rect>
                <rect fill="#006948" height="8" rx="1.5" width="16" x="56" y="114"></rect>
                <rect fill="#131b2e" height="14" rx="1.5" width="12" x="80" y="112"></rect>
                <rect fill="#131b2e" height="8" rx="1.5" width="26" x="100" y="116"></rect>
              </svg>
            </div>
            <div class="flex flex-col items-center md:items-start flex-1 gap-space-xs">
              <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Barcode Akses Turnstile</span>
              <span class="font-mono text-sm tracking-widest text-on-surface font-semibold mt-2">*{{ str_replace('-', '', $booking->booking_code) }}*</span>
              <div class="inline-flex items-center gap-1.5 mt-1 bg-surface-container px-2.5 py-1 rounded text-[11px] font-mono font-semibold text-outline uppercase tracking-wider">
                <span class="material-symbols-outlined text-[14px] text-primary">security</span>
                <span>TERVERIFIKASI RESMI</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap items-center justify-center gap-space-md pt-space-xs">
        <button class="inline-flex items-center gap-space-xs bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-primary-container shadow-sm transition-all" type="button">
          <span class="material-symbols-outlined text-[20px]">download</span><span>Simpan / Unduh E-Tiket</span>
        </button>
        <button class="inline-flex items-center gap-space-xs bg-surface-container-lowest text-on-surface px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-surface-container shadow-sm transition-all" onclick="window.print()" type="button">
          <span class="material-symbols-outlined text-[20px]">print</span><span>Cetak Tiket</span>
        </button>
        <a href="{{ route('pengunjung.wisata') }}" class="inline-flex items-center gap-space-xs bg-surface-container-low text-on-surface px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-surface-container-high shadow-sm transition-all no-underline">
          <span class="material-symbols-outlined text-[20px]">add_shopping_cart</span><span>Pesan Tiket Lagi</span>
        </a>
      </div>
    @endif
  @else
    <div class="flex flex-col items-center justify-center py-20 bg-surface-container-lowest rounded-3xl shadow-sm border-2 border-dashed border-surface-container-high">
      <div class="w-20 h-20 rounded-full bg-surface-container-low flex items-center justify-center mb-4">
        <span class="material-symbols-outlined text-[48px] text-outline">confirmation_number</span>
      </div>
      <h3 class="font-headline-md text-headline-md text-on-surface font-bold mb-2">Belum Ada E-Tiket</h3>
      <p class="text-body-md text-on-surface-variant text-center max-w-md mb-6">
        Anda belum melakukan pemesanan. Silakan pilih tiket wisata terlebih dahulu.
      </p>
      <a href="{{ route('pengunjung.wisata') }}" class="inline-flex items-center gap-space-xs bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md text-label-md hover:bg-primary-container shadow-sm transition-all no-underline">
        <span class="material-symbols-outlined text-[20px]">travel_explore</span><span>Pilih Tiket Wisata</span>
      </a>
    </div>
  @endif
</section>

<script>
  @if(session('booking'))
    localStorage.removeItem('cart');
    let h = document.getElementById('header-cart-count');
    if (h) h.innerText = '0 Item';
  @endif
</script>
@endsection