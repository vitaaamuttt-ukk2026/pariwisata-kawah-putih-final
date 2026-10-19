@extends('layouts.pengunjung')
@section('title', 'Booking & Pembayaran')

@section('content')
<section class="flex flex-col gap-space-lg w-full mb-space-xl">
  <div class="flex flex-col">
    <div class="flex items-center gap-space-xs text-primary font-label-sm text-label-sm uppercase tracking-wider">
      <span class="material-symbols-outlined text-[16px]">shopping_cart</span><span>Booking & Pembayaran</span>
    </div>
    <h2 class="font-headline-lg text-headline-lg text-on-surface">Review Pesanan & Checkout</h2>
  </div>

  <form id="booking-form" action="{{ route('pengunjung.pembayaran.proses') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
    @csrf
    
    <!-- KOLOM KIRI: Data Pemesan -->
    <div class="lg:col-span-5 flex flex-col gap-space-lg">
      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-primary text-[20px]">calendar_month</span>
          <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Tanggal Kunjungan</h3>
        </div>
        <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" required min="{{ date('Y-m-d') }}" class="w-full p-3 border border-surface-container-high rounded-xl focus:ring-2 focus:ring-primary outline-none bg-surface-container-low font-body-md text-on-surface">
      </div>

      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-primary text-[20px]">person</span>
          <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Data Pengunjung</h3>
        </div>
        
        <div class="flex flex-col gap-1">
          <label class="font-label-sm text-label-sm text-on-surface font-semibold">Nama Lengkap *</label>
          <div class="flex items-center bg-surface-container-low px-3 py-2.5 rounded-xl gap-2 focus-within:ring-2 focus-within:ring-primary">
            <span class="material-symbols-outlined text-outline text-[18px]">badge</span>
            <input type="text" name="nama_pengunjung" required class="bg-transparent text-body-md text-on-surface outline-none w-full" placeholder="Sesuai KTP">
          </div>
        </div>

        <div class="flex flex-col gap-1">
          <label class="font-label-sm text-label-sm text-on-surface font-semibold">Email *</label>
          <div class="flex items-center bg-surface-container-low px-3 py-2.5 rounded-xl gap-2 focus-within:ring-2 focus-within:ring-primary">
            <span class="material-symbols-outlined text-outline text-[18px]">mail</span>
            <input type="email" name="email" required class="bg-transparent text-body-md text-on-surface outline-none w-full" placeholder="email@contoh.com">
          </div>
        </div>

        <div class="flex flex-col gap-1">
          <label class="font-label-sm text-label-sm text-on-surface font-semibold">Nomor HP / WhatsApp *</label>
          <div class="flex items-center bg-surface-container-low px-3 py-2.5 rounded-xl gap-2 focus-within:ring-2 focus-within:ring-primary">
            <span class="material-symbols-outlined text-outline text-[18px]">phone</span>
            <input type="tel" name="no_hp" required class="bg-transparent text-body-md text-on-surface outline-none w-full" placeholder="08xxxxxxxxxx">
          </div>
        </div>

        <div class="flex flex-col gap-1">
          <label class="font-label-sm text-label-sm text-on-surface font-semibold">Jumlah Pengunjung *</label>
          <div class="flex items-center bg-surface-container-low px-3 py-2.5 rounded-xl gap-2">
            <span class="material-symbols-outlined text-outline text-[18px]">group</span>
            <input type="number" name="jumlah_tiket" id="jumlah-tiket-input" min="1" value="1" required class="bg-transparent text-body-md text-on-surface font-semibold outline-none w-full">
            <span class="text-body-sm text-on-surface-variant">Orang</span>
          </div>
          <span class="text-[11px] text-outline">Diatur manual oleh Anda</span>
        </div>
      </div>
    </div>

    <!-- KOLOM TENGAH: Rincian Keranjang -->
    <div class="lg:col-span-4 bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col gap-space-md">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-primary text-[20px]">receipt_long</span>
          <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Rincian Tiket Dipilih</h3>
        </div>
        <button type="button" onclick="clearCart()" class="text-xs text-error hover:underline font-semibold">Kosongkan</button>
      </div>
      
      <div id="cart-items-container" class="flex flex-col gap-space-sm max-h-[400px] overflow-y-auto pr-1">
        <div class="text-center py-8 text-on-surface-variant">
          <span class="material-symbols-outlined text-4xl mb-2 opacity-50">shopping_cart</span>
          <p class="font-body-sm">Keranjang masih kosong.</p>
          <a href="{{ route('pengunjung.wisata') }}" class="mt-4 text-primary font-semibold hover:underline text-sm inline-block">Pilih Tiket Dulu</a>
        </div>
      </div>

      <input type="hidden" name="cart_data" id="cart-data-input">
    </div>

    <!-- KOLOM KANAN: Total & Pembayaran -->
    <div class="lg:col-span-3 flex flex-col gap-space-lg">
      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-primary text-[20px]">account_balance_wallet</span>
          <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Total Tagihan</h3>
        </div>
        <div class="bg-surface-container-low p-space-md rounded-xl">
          <div class="flex justify-between items-baseline">
            <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Total:</span>
            <div class="text-right">
              <div id="cart-total-display" class="font-display text-display text-primary font-bold">Rp 0</div>
              <span class="font-label-sm text-label-sm text-on-surface-variant">Menunggu Verifikasi Admin</span>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-primary text-[20px]">credit_card</span>
          <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Metode Pembayaran</h3>
        </div>
        
        <div class="flex flex-col gap-space-sm">
          <label class="relative flex flex-col p-space-md rounded-xl bg-surface-container-low cursor-pointer shadow-sm transition-all group ring-2 ring-primary">
            <input checked class="sr-only" name="metode_pembayaran" value="qris" type="radio"/>
            <div class="flex items-center justify-between mb-2">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-lg bg-primary-fixed/50 text-primary flex items-center justify-center font-bold text-xs">QR</div>
                <span class="font-label-md text-label-md font-bold text-on-surface">QRIS Instan</span>
              </div>
              <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">GoPay, OVO, Dana, ShopeePay</p>
          </label>
          
          <label class="relative flex flex-col p-space-md rounded-xl bg-surface-container-low/60 hover:bg-surface-container-low cursor-pointer transition-all group">
            <input class="sr-only" name="metode_pembayaran" value="va" type="radio"/>
            <div class="flex items-center justify-between mb-2">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-lg bg-secondary-fixed/50 text-secondary flex items-center justify-center font-bold text-xs">VA</div>
                <span class="font-label-md text-label-md font-bold text-on-surface">Virtual Account</span>
              </div>
              <span class="material-symbols-outlined text-outline text-[20px] group-hover:text-primary">radio_button_unchecked</span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">BCA, Mandiri, BRI, BNI</p>
          </label>
        </div>
      </div>

      <button type="submit" id="checkout-btn" disabled class="w-full bg-primary hover:bg-primary-container text-on-primary py-4 px-space-lg rounded-xl font-headline-sm text-headline-sm flex items-center justify-center gap-space-sm shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
        <span class="material-symbols-outlined text-[20px]">lock</span>
        <span>Konfirmasi & Ajukan Booking</span>
      </button>
    </div>
  </form>
</section>
@endsection