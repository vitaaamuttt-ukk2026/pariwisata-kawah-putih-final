@extends('layouts.pengunjung')
@section('title', 'Pilihan Wisata')

@section('content')
<section class="flex flex-col gap-3 md:gap-space-lg w-full mb-6 md:mb-space-xl pb-20 md:pb-24">
  <div class="flex flex-wrap items-end justify-between gap-2 md:gap-space-sm border-b border-surface-container-high pb-3 md:pb-4">
    <div class="flex flex-col gap-1">
      <div class="flex items-center gap-space-xs text-primary font-label-sm text-label-sm uppercase tracking-wider">
        <span class="material-symbols-outlined text-[16px]">travel_explore</span><span>Paket & Tiket</span>
      </div>
      <h2 class="text-lg md:font-headline-lg md:text-headline-lg text-on-surface font-bold">Daftar Harga Wisata</h2>
      <p class="text-xs md:text-body-md text-on-surface-variant">Pilih tiket atau wahana, lalu tambahkan ke keranjang.</p>
    </div>
  </div>

  <!-- KATEGORI 1: TIKET MASUK (WAJIB) -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h3 class="text-sm md:font-headline-sm md:text-headline-sm text-on-surface font-bold flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[18px] md:text-[24px]">badge</span> Tiket Masuk
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-space-md">
      <!-- Tiket WNI -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">person</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-primary-fixed/50 text-on-primary-fixed-variant uppercase tracking-wider">Wajib</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Tiket Masuk (WNI)</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Wisatawan Indonesia / Domestik.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-primary">Rp 31.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-wni', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-wni" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-wni', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-primary hover:bg-primary-container flex items-center justify-center text-on-primary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-wni" disabled onclick="addCardToCart('tiket-wni', 'Tiket Masuk (WNI)', 31000, 'qty-wni')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Tiket WNA -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">passport</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Wajib</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Tiket Masuk (WNA)</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Wisatawan Asing / Mancanegara.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 90.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-wna', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-wna" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-wna', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-wna" disabled onclick="addCardToCart('tiket-wna', 'Tiket Masuk (WNA)', 90000, 'qty-wna')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>
    </div>
  </div>

  <!-- KATEGORI 2: PAKET BUNDLE -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h3 class="text-sm md:font-headline-sm md:text-headline-sm text-on-surface font-bold flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[18px] md:text-[24px]">volcano</span> Paket Bundle
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-space-md">
      <!-- Paket WNI + Ontang-anting -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border-2 border-primary flex flex-col justify-between group relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-primary text-on-primary text-[8px] md:text-[10px] font-bold uppercase tracking-wider px-2 md:px-3 py-1 rounded-bl-xl">Best Value</div>
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-primary text-on-primary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">directions_bus</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-primary text-on-primary uppercase tracking-wider">Paket</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">WNI + Ontang-anting</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Tiket masuk + Shuttle PP. Hemat!</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-primary/5 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-primary">Rp 63.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-wni-ontang', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-wni-ontang" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-wni-ontang', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-primary hover:bg-primary-container flex items-center justify-center text-on-primary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-wni-ontang" disabled onclick="addCardToCart('paket-wni-ontang', 'Tiket WNI + Ontang-anting PP', 63000, 'qty-wni-ontang')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Paket WNA + Ontang-anting -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border-2 border-secondary flex flex-col justify-between group relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-secondary text-on-secondary text-[8px] md:text-[10px] font-bold uppercase tracking-wider px-2 md:px-3 py-1 rounded-bl-xl">Best Value</div>
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary text-on-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">directions_bus</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary text-on-secondary uppercase tracking-wider">Paket</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">WNA + Ontang-anting</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Tiket masuk WNA + Shuttle PP.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-secondary/5 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 122.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-wna-ontang', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-wna-ontang" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-wna-ontang', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-wna-ontang" disabled onclick="addCardToCart('paket-wna-ontang', 'Tiket WNA + Ontang-anting PP', 122000, 'qty-wna-ontang')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Paket Sunrise WNI -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border-2 border-tertiary flex flex-col justify-between group relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-tertiary text-on-tertiary text-[8px] md:text-[10px] font-bold uppercase tracking-wider px-2 md:px-3 py-1 rounded-bl-xl">Sunrise</div>
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary text-on-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">wb_twilight</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary text-on-tertiary uppercase tracking-wider">Paket</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Sunrise WNI + Sunan Ibu</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Nikmati sunrise di Puncak Sunan Ibu.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-tertiary/5 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 84.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-sunrise-wni', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-sunrise-wni" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-sunrise-wni', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-sunrise-wni" disabled onclick="addCardToCart('paket-sunrise-wni', 'Sunrise WNI + Kawah Putih + Sunan Ibu', 84000, 'qty-sunrise-wni')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Paket Sunrise WNA -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border-2 border-tertiary flex flex-col justify-between group relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-tertiary text-on-tertiary text-[8px] md:text-[10px] font-bold uppercase tracking-wider px-2 md:px-3 py-1 rounded-bl-xl">Sunrise</div>
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary text-on-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">wb_twilight</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary text-on-tertiary uppercase tracking-wider">Paket</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Sunrise WNA + Sunan Ibu</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Nikmati sunrise di Puncak Sunan Ibu.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-tertiary/5 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 143.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-sunrise-wna', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-sunrise-wna" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-sunrise-wna', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-sunrise-wna" disabled onclick="addCardToCart('paket-sunrise-wna', 'Sunrise WNA + Kawah Putih + Sunan Ibu', 143000, 'qty-sunrise-wna')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>
    </div>
  </div>

  <!-- KATEGORI 3: TRANSPORTASI -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h3 class="text-sm md:font-headline-sm md:text-headline-sm text-on-surface font-bold flex items-center gap-2">
      <span class="material-symbols-outlined text-secondary text-[18px] md:text-[24px]">directions_bus</span> Transport & Parkir
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-space-md">
      <!-- Ontang-anting -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">directions_bus</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Transport</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Ontang-anting PP</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Shuttle PP dari parkir ke kawah.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 29.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-ontang', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-ontang" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-ontang', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-ontang" disabled onclick="addCardToCart('ontang-anting', 'Ontang-anting PP', 29000, 'qty-ontang')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Parkir Motor -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-surface-container text-on-surface flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">two_wheeler</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-surface-container-high text-on-surface-variant uppercase tracking-wider">Parkir</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Parkir Motor</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Area parkir resmi sepeda motor.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-on-surface">Rp 10.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-parkir-motor', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-parkir-motor" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-parkir-motor', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-high hover:bg-surface-container-highest flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-parkir-motor" disabled onclick="addCardToCart('parkir-motor', 'Parkir Motor', 10000, 'qty-parkir-motor')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Parkir Mobil -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-surface-container text-on-surface flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">local_parking</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-surface-container-high text-on-surface-variant uppercase tracking-wider">Parkir</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Parkir Mobil</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Area parkir resmi untuk mobil.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-on-surface">Rp 18.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-parkir-mobil', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-parkir-mobil" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-parkir-mobil', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-high hover:bg-surface-container-highest flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-parkir-mobil" disabled onclick="addCardToCart('parkir-mobil', 'Parkir Mobil', 18000, 'qty-parkir-mobil')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Parkir Bus -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-surface-container text-on-surface flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">directions_bus_filled</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-surface-container-high text-on-surface-variant uppercase tracking-wider">Parkir</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Parkir Bus</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Area parkir resmi bus pariwisata.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-on-surface">Rp 48.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-parkir-bus', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-parkir-bus" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-parkir-bus', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-high hover:bg-surface-container-highest flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-parkir-bus" disabled onclick="addCardToCart('parkir-bus', 'Parkir Bus', 48000, 'qty-parkir-bus')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- LHKP -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">car_rental</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-primary-fixed/50 text-on-primary-fixed-variant uppercase tracking-wider">LHKP</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Kendaraan ke Kawah</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Charge kendaraan pribadi masuk area kawah.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-primary">Rp 179.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-lhkp', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-lhkp" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-lhkp', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-primary hover:bg-primary-container flex items-center justify-center text-on-primary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-lhkp" disabled onclick="addCardToCart('lhkp', 'Kendaraan Pribadi ke Kawah (LHKP)', 179000, 'qty-lhkp')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>
    </div>
  </div>

  <!-- KATEGORI 4: WAHANA -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h3 class="text-sm md:font-headline-sm md:text-headline-sm text-on-surface font-bold flex items-center gap-2">
      <span class="material-symbols-outlined text-tertiary text-[18px] md:text-[24px]">sports_esports</span> Wahana & Aktivitas
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-space-md">
      <!-- Sunan Ibu -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">landscape</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Puncak Sunan Ibu</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Spot sunrise & lautan awan di 2.223 mdpl.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 15.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-sunan-ibu', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-sunan-ibu" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-sunan-ibu', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-sunan-ibu" disabled onclick="addCardToCart('sunan-ibu', 'Puncak Sunan Ibu', 15000, 'qty-sunan-ibu')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Jembatan Apung -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">footprint</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Jembatan Apung</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Jembatan kayu di atas danau kawah.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 17.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-ponton', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-ponton" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-ponton', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-ponton" disabled onclick="addCardToCart('jembatan-ponton', 'Jembatan Apung / Dermaga Ponton', 17000, 'qty-ponton')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Skywalk Canopy -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">forest</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Skywalk Canopy</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Skywalk di atas kanopi hutan Cantigi.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 17.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-skywalk', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-skywalk" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-skywalk', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-skywalk" disabled onclick="addCardToCart('skywalk-canopy', 'Skywalk Canopy / Cantigi', 17000, 'qty-skywalk')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Taman Bermain Mini -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">child_care</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Taman Bermain</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Area bermain untuk anak-anak.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 17.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-taman', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-taman" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-taman', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-taman" disabled onclick="addCardToCart('taman-bermain', 'Taman Bermain Mini', 17000, 'qty-taman')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Kuda Tunggang -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">pets</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Kuda Tunggang</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Berkuda di area wisata (per sesi).</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 55.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-kuda', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-kuda" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-kuda', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-kuda" disabled onclick="addCardToCart('kuda-tunggang', 'Kuda Tunggang', 55000, 'qty-kuda')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Panahan -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">sports</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-wider">Wahana</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Panahan</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Wahana panahan (per sesi).</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-tertiary">Rp 22.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-panahan', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-panahan" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-panahan', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-tertiary hover:bg-tertiary/90 flex items-center justify-center text-on-tertiary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-panahan" disabled onclick="addCardToCart('panahan', 'Panahan', 22000, 'qty-panahan')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>
    </div>
  </div>

  <!-- KATEGORI 5: LAYANAN -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h3 class="text-sm md:font-headline-sm md:text-headline-sm text-on-surface font-bold flex items-center gap-2">
      <span class="material-symbols-outlined text-secondary text-[18px] md:text-[24px]">room_service</span> Layanan Tambahan
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-space-md">
      <!-- Penitipan Helm -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">sports_motorsports</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Layanan</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Penitipan Helm</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Layanan penitipan helm motor.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 3.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-helm', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-helm" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-helm', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-helm" disabled onclick="addCardToCart('penitipan-helm', 'Penitipan Helm', 3000, 'qty-helm')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Jasa Fotografer -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">photo_camera</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Layanan</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Jasa Fotografer</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Dokumentasi profesional selama kunjungan.</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 11.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-foto', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-foto" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-foto', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-foto" disabled onclick="addCardToCart('fotografer', 'Jasa Fotografer Profesional', 11000, 'qty-foto')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Sesi Foto / Prewedding -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">photo_library</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Layanan</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Sesi Foto / Prewed</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Sesi foto profesional (per sesi).</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 550.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-prewedding', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-prewedding" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-prewedding', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-prewedding" disabled onclick="addCardToCart('prewedding', 'Sesi Foto / Prewedding', 550000, 'qty-prewedding')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Syuting Komersial -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">videocam</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Layanan</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Syuting Komersial</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Izin syuting komersial (per kegiatan).</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 3.300.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-syuting', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-syuting" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-syuting', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-syuting" disabled onclick="addCardToCart('syuting-komersial', 'Syuting Komersial', 3300000, 'qty-syuting')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>

      <!-- Jasa Pemandu Sunan Ibu -->
      <div class="bg-surface-container-lowest p-2 md:p-space-md rounded-xl md:rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 border border-surface-container-high flex flex-col justify-between group">
        <div class="flex flex-col gap-2 md:gap-3">
          <div class="flex items-center justify-between">
            <div class="w-8 h-8 md:w-11 md:h-11 rounded-lg md:rounded-xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-105 transition-transform"><span class="material-symbols-outlined text-[18px] md:text-[24px]">guide</span></div>
            <span class="px-1.5 md:px-2.5 py-0.5 rounded-full text-[9px] md:text-[11px] font-bold bg-secondary-fixed text-on-secondary-fixed uppercase tracking-wider">Layanan</span>
          </div>
          <div>
            <h3 class="text-xs md:text-base font-bold text-on-surface">Pemandu Sunan Ibu</h3>
            <p class="text-[10px] md:text-body-sm text-on-surface-variant mt-0.5 md:mt-1 line-clamp-2">Pemandu resmi (maks. 30 peserta).</p>
          </div>
          <div class="p-1.5 md:p-2.5 bg-surface-container-low/70 rounded-lg md:rounded-xl flex flex-col gap-1">
            <div class="flex justify-between items-center text-xs md:text-body-sm"><span class="text-on-surface-variant">Harga:</span><span class="font-bold text-secondary">Rp 350.000</span></div>
          </div>
          <div class="flex items-center justify-between bg-surface-container-low rounded-lg md:rounded-xl p-1">
            <button type="button" onclick="updateCardQty('qty-pemandu', -1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-surface-container-lowest hover:bg-surface-container flex items-center justify-center text-on-surface shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">remove</span></button>
            <span id="qty-pemandu" class="text-xs md:font-headline-sm font-bold text-on-surface w-6 md:w-8 text-center">0</span>
            <button type="button" onclick="updateCardQty('qty-pemandu', 1)" class="w-7 h-7 md:w-9 md:h-9 rounded-md md:rounded-lg bg-secondary hover:bg-secondary/90 flex items-center justify-center text-on-secondary shadow-sm transition-colors"><span class="material-symbols-outlined text-[16px] md:text-[18px]">add</span></button>
          </div>
        </div>
        <button id="btn-pemandu" disabled onclick="addCardToCart('pemandu-sunan-ibu', 'Jasa Pemandu Sunan Ibu', 350000, 'qty-pemandu')" class="mt-2 md:mt-3 w-full py-2 md:py-2.5 px-2 md:px-3 bg-surface-container-high text-on-surface-variant text-center rounded-lg md:rounded-xl text-xs md:text-label-md transition-all flex items-center justify-center gap-1 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
          <span class="material-symbols-outlined text-[16px] md:text-[18px]">add_shopping_cart</span><span class="hidden md:inline">Tambah ke Keranjang</span><span class="md:hidden">Tambah</span>
        </button>
      </div>
    </div>
  </div>

</section>

<!-- STICKY CART BAR (Diperbaiki untuk mobile: left-0 md:left-64) -->
<div id="wisata-cart-bar" class="fixed bottom-16 md:bottom-0 left-0 md:left-64 right-0 bg-surface-container-lowest/95 backdrop-blur-xl border-t border-surface-container-high p-3 md:p-4 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] z-40 transform translate-y-full transition-transform duration-300">
  <div class="max-w-[1440px] mx-auto flex items-center justify-between gap-2">
    <div class="flex flex-col">
      <span class="font-label-sm text-label-sm text-on-surface-variant text-xs">Total di Keranjang</span>
      <div class="flex items-baseline gap-1">
        <span id="wisata-cart-total-items" class="font-headline-md text-headline-md text-on-surface font-bold text-sm">0</span>
        <span class="text-outline text-xs">•</span>
        <span id="wisata-cart-total-price" class="font-headline-md text-headline-md text-primary font-bold text-sm">Rp 0</span>
      </div>
    </div>
    <a href="{{ route('pengunjung.booking') }}" class="bg-primary text-on-primary px-4 py-2 md:px-6 md:py-3 rounded-xl font-label-md text-label-md hover:bg-primary-container shadow-md transition-all flex items-center gap-2 text-xs md:text-sm no-underline whitespace-nowrap">
      <span class="material-symbols-outlined text-[18px] md:text-[20px]">shopping_cart</span><span>Booking</span>
    </a>
  </div>
</div>
@endsection