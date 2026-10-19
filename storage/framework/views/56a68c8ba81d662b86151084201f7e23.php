
<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<section class="flex flex-col gap-4 md:gap-space-lg w-full mb-6 md:mb-space-xl pb-10">
  
  <!-- 1. HERO SECTION -->
  <div class="relative w-full rounded-xl md:rounded-2xl overflow-hidden min-h-[280px] md:min-h-[460px] shadow-lg flex flex-col justify-end p-4 md:p-space-xl text-on-primary">
    <img alt="Kawah Putih" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWB-BaOaU0EOElGhO3V7MdoRaeHe_-Gsr-yCxPoR5gQMfNM1ESQY7VyJUM7L651ZsgDPRFycTwPXiiMbos59LqsQLZimhDqBLOKnDFLEKE-DZCO4U4PVoX9Cbktm2S5qs1oNmbffcdwJOhGICtl9DZv2GuocjkaIcJdMzmYRB6xHoCN1Su-Sio1DqD6k2vi6dEOSlVpIjWbjOtBFgWVHBm5i1kwVg1U8bYm5dbrVDYN-zG7IYgtXaz6g"/>
    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-primary/60 to-transparent"></div>
    <div class="relative z-10 flex flex-col max-w-3xl gap-2 md:gap-space-sm">
      <div class="inline-flex items-center gap-1 md:gap-space-xs bg-surface-container-lowest/20 backdrop-blur-md px-2 md:px-3.5 py-1 rounded-full w-fit text-on-primary text-[10px] md:text-label-sm">
        <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-primary-fixed animate-pulse"></span>
        <span>Buka 07:00 - 17:00 WIB</span>
      </div>
      <h1 class="text-xl md:text-display text-on-primary tracking-tight leading-tight md:leading-none mt-1">Selamat Datang di Kawah Putih</h1>
      <p class="text-xs md:text-body-lg text-surface-variant max-w-2xl line-clamp-2 md:line-clamp-none">Jelajahi keindahan kawah vulkanik belerang toska alami.</p>
      <div class="flex flex-wrap items-center gap-2 md:gap-space-md pt-1 md:pt-space-sm">
        <a href="<?php echo e(route('pengunjung.wisata')); ?>" class="inline-flex items-center gap-1 md:gap-space-xs bg-primary text-on-primary px-4 md:px-6 py-2 md:py-3 rounded-lg md:rounded-xl text-xs md:text-label-md hover:bg-primary-container shadow-md transition-all no-underline">
          <span class="material-symbols-outlined text-[16px] md:text-[20px]">shopping_cart</span><span>Pesan Tiket</span>
        </a>
        <a href="<?php echo e(route('pengunjung.info')); ?>" class="inline-flex items-center gap-1 md:gap-space-xs bg-surface-container-lowest/30 backdrop-blur-md text-on-primary px-3 md:px-5 py-2 md:py-3 rounded-lg md:rounded-xl text-xs md:text-label-md hover:bg-surface-container-lowest/40 transition-all no-underline">
          <span class="material-symbols-outlined text-[16px] md:text-[20px]">info</span><span>Info Wisata</span>
        </a>
      </div>
    </div>
  </div>

  <!-- 2. STATS CARDS -->
  <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-space-md w-full">
    <div class="bg-surface-container-lowest p-3 md:p-space-lg rounded-xl md:rounded-2xl shadow-sm flex flex-col justify-between gap-2 md:gap-space-md hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between"><span class="text-[10px] md:text-label-sm text-outline uppercase tracking-wider">Cuaca</span><div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-secondary-fixed/50 text-secondary flex items-center justify-center"><span class="material-symbols-outlined text-[18px] md:text-[22px]">foggy</span></div></div>
      <div><div class="text-lg md:text-headline-lg text-on-surface">19°C</div><div class="text-[10px] md:text-label-md text-primary font-semibold">Sejuk</div></div>
    </div>
    <div class="bg-surface-container-lowest p-3 md:p-space-lg rounded-xl md:rounded-2xl shadow-sm flex flex-col justify-between gap-2 md:gap-space-md hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between"><span class="text-[10px] md:text-label-sm text-outline uppercase tracking-wider">Kepadatan</span><div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-primary-fixed/40 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[18px] md:text-[22px]">group</span></div></div>
      <div><div class="text-lg md:text-headline-lg text-on-surface">Sedang</div><div class="text-[10px] md:text-label-md text-tertiary font-semibold">45%</div></div>
    </div>
    <div class="bg-surface-container-lowest p-3 md:p-space-lg rounded-xl md:rounded-2xl shadow-sm flex flex-col justify-between gap-2 md:gap-space-md hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between"><span class="text-[10px] md:text-label-sm text-outline uppercase tracking-wider">Tarif</span><div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-tertiary-fixed/40 text-tertiary flex items-center justify-center"><span class="material-symbols-outlined text-[18px] md:text-[22px]">payments</span></div></div>
      <div class="flex flex-col gap-0.5 md:gap-1"><div class="text-sm md:text-headline-md text-on-surface">Rp 30rb <span class="text-[9px] md:text-body-sm text-outline font-normal">/ WNI</span></div><div class="text-[10px] md:text-label-md text-on-surface-variant">Rp 80rb <span class="text-[9px] md:text-body-sm text-outline font-normal">/ WNA</span></div></div>
    </div>
    <div class="bg-surface-container-lowest p-3 md:p-space-lg rounded-xl md:rounded-2xl shadow-sm flex flex-col justify-between gap-2 md:gap-space-md hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between"><span class="text-[10px] md:text-label-sm text-outline uppercase tracking-wider">Wahana</span><div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-secondary-container/30 text-secondary flex items-center justify-center"><span class="material-symbols-outlined text-[18px] md:text-[22px]">verified</span></div></div>
      <div><div class="text-lg md:text-headline-lg text-primary">100%</div><div class="text-[10px] md:text-label-md text-on-surface-variant">Aktif</div></div>
    </div>
  </div>

  <!-- 3. REKOMENDASI BERDASARKAN MOOD -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">psychology</span> Rekomendasi Berdasarkan Mood
    </h2>
    <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
      <a href="#" class="flex-shrink-0 bg-primary/10 hover:bg-primary/20 border border-primary/20 text-primary px-4 py-3 rounded-xl flex items-center gap-3 transition-all min-w-[160px]">
        <span class="material-symbols-outlined text-2xl">self_improvement</span>
        <div><div class="font-bold text-sm">Santai</div><div class="text-[10px] opacity-80">Tenang & Sejuk</div></div>
      </a>
      <a href="#" class="flex-shrink-0 bg-tertiary/10 hover:bg-tertiary/20 border border-tertiary/20 text-tertiary px-4 py-3 rounded-xl flex items-center gap-3 transition-all min-w-[160px]">
        <span class="material-symbols-outlined text-2xl">hiking</span>
        <div><div class="font-bold text-sm">Petualangan</div><div class="text-[10px] opacity-80">Trekking & Sunrise</div></div>
      </a>
      <a href="#" class="flex-shrink-0 bg-secondary/10 hover:bg-secondary/20 border border-secondary/20 text-secondary px-4 py-3 rounded-xl flex items-center gap-3 transition-all min-w-[160px]">
        <span class="material-symbols-outlined text-2xl">favorite</span>
        <div><div class="font-bold text-sm">Romantis</div><div class="text-[10px] opacity-80">Spot Foto Pasangan</div></div>
      </a>
      <a href="#" class="flex-shrink-0 bg-orange-500/10 hover:bg-orange-500/20 border border-orange-500/20 text-orange-600 px-4 py-3 rounded-xl flex items-center gap-3 transition-all min-w-[160px]">
        <span class="material-symbols-outlined text-2xl">family_restroom</span>
        <div><div class="font-bold text-sm">Keluarga</div><div class="text-[10px] opacity-80">Aman untuk Anak</div></div>
      </a>
    </div>
  </div>

  <!-- 4. SPOT FOTO FAVORIT & DAFTAR FAVORIT (Side by Side di Desktop) -->
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-space-lg">
    <!-- Spot Foto -->
    <div class="lg:col-span-2 flex flex-col gap-3 md:gap-space-md">
      <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
        <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">photo_camera</span> Spot Foto Favorit
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
        <div class="relative group rounded-xl overflow-hidden aspect-[3/4] cursor-pointer">
          <img src="https://images.unsplash.com/photo-1604608672516-f1b9b1d1f1f3?w=400&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-3">
            <span class="text-white text-xs font-bold">Jembatan Ponton</span>
            <span class="text-white/80 text-[10px]">1.2k Foto</span>
          </div>
        </div>
        <div class="relative group rounded-xl overflow-hidden aspect-[3/4] cursor-pointer">
          <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=400&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-3">
            <span class="text-white text-xs font-bold">Sunan Ibu</span>
            <span class="text-white/80 text-[10px]">850 Foto</span>
          </div>
        </div>
        <div class="relative group rounded-xl overflow-hidden aspect-[3/4] cursor-pointer">
          <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-3">
            <span class="text-white text-xs font-bold">Hutan Cantigi</span>
            <span class="text-white/80 text-[10px]">600 Foto</span>
          </div>
        </div>
        <div class="relative group rounded-xl overflow-hidden aspect-[3/4] cursor-pointer">
          <img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=400&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-3">
            <span class="text-white text-xs font-bold">Skywalk</span>
            <span class="text-white/80 text-[10px]">420 Foto</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Daftar Favorit -->
    <div class="flex flex-col gap-3 md:gap-space-md">
      <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
        <span class="material-symbols-outlined text-rose-500 text-[20px] md:text-2xl">favorite</span> Daftar Favorit
      </h2>
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high p-3 md:p-4 flex flex-col gap-3">
        <div class="flex items-center gap-3 p-2 bg-surface-container-low rounded-lg">
          <img src="https://images.unsplash.com/photo-1604608672516-f1b9b1d1f1f3?w=100&q=80" class="w-12 h-12 rounded-lg object-cover">
          <div class="flex-1">
            <h4 class="text-sm font-bold text-on-surface">Paket Lengkap</h4>
            <p class="text-[10px] text-on-surface-variant">Rp 63.000</p>
          </div>
          <button class="text-rose-500 hover:bg-rose-50 p-1.5 rounded-full transition-colors"><span class="material-symbols-outlined text-[20px]">favorite</span></button>
        </div>
        <div class="flex items-center gap-3 p-2 bg-surface-container-low rounded-lg">
          <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=100&q=80" class="w-12 h-12 rounded-lg object-cover">
          <div class="flex-1">
            <h4 class="text-sm font-bold text-on-surface">Sunan Ibu</h4>
            <p class="text-[10px] text-on-surface-variant">Rp 15.000</p>
          </div>
          <button class="text-rose-500 hover:bg-rose-50 p-1.5 rounded-full transition-colors"><span class="material-symbols-outlined text-[20px]">favorite</span></button>
        </div>
        <a href="<?php echo e(route('pengunjung.wisata')); ?>" class="text-center text-xs text-primary font-semibold py-2 hover:underline">Lihat Semua Favorit</a>
      </div>
    </div>
  </div>

  <!-- 5. ESTIMASI BUDGET & RUTE PERJALANAN -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-space-lg">
    <!-- Estimasi Budget -->
    <div class="flex flex-col gap-3 md:gap-space-md">
      <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
        <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">account_balance_wallet</span> Estimasi Budget
      </h2>
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high p-4 md:p-space-lg">
        <div class="space-y-4">
          <div class="flex justify-between items-center p-3 bg-surface-container-low rounded-xl">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-green-100 text-green-700 flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">savings</span></div>
              <div><div class="font-bold text-sm text-on-surface">Paket Hemat</div><div class="text-[10px] text-on-surface-variant">Tiket WNI + Parkir Motor</div></div>
            </div>
            <span class="font-bold text-primary text-sm">~Rp 41.000</span>
          </div>
          <div class="flex justify-between items-center p-3 bg-primary/5 border border-primary/20 rounded-xl">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-primary/20 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">star</span></div>
              <div><div class="font-bold text-sm text-on-surface">Paket Standar</div><div class="text-[10px] text-on-surface-variant">Tiket + Ontang-anting + Jembatan</div></div>
            </div>
            <span class="font-bold text-primary text-sm">~Rp 93.000</span>
          </div>
          <div class="flex justify-between items-center p-3 bg-surface-container-low rounded-xl">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">workspace_premium</span></div>
              <div><div class="font-bold text-sm text-on-surface">Paket Lengkap</div><div class="text-[10px] text-on-surface-variant">Semua Wahana + Fotografer</div></div>
            </div>
            <span class="font-bold text-primary text-sm">~Rp 175.000</span>
          </div>
        </div>
        <p class="text-[10px] text-on-surface-variant mt-3 text-center">*Harga estimasi untuk 1 orang, dapat berubah sesuai wahana yang dipilih.</p>
      </div>
    </div>

    <!-- Rute / Perjalanan -->
    <div class="flex flex-col gap-3 md:gap-space-md">
      <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
        <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">map</span> Rute Perjalanan
      </h2>
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high p-4 md:p-space-lg">
        <div class="relative pl-6 border-l-2 border-primary/30 space-y-6">
          <div class="relative">
            <div class="absolute -left-[31px] w-4 h-4 rounded-full bg-primary ring-4 ring-surface-container-lowest"></div>
            <h4 class="font-bold text-sm text-on-surface">Bandara / Stasiun Bandung</h4>
            <p class="text-[10px] text-on-surface-variant mt-1">Sewa mobil atau travel menuju Ciwidey (Estimasi 1.5 - 2 jam).</p>
          </div>
          <div class="relative">
            <div class="absolute -left-[31px] w-4 h-4 rounded-full bg-primary ring-4 ring-surface-container-lowest"></div>
            <h4 class="font-bold text-sm text-on-surface">Alun-alun Ciwidey</h4>
            <p class="text-[10px] text-on-surface-variant mt-1">Titik terakhir untuk membeli oleh-oleh atau makan sebelum naik.</p>
          </div>
          <div class="relative">
            <div class="absolute -left-[31px] w-4 h-4 rounded-full bg-tertiary ring-4 ring-surface-container-lowest"></div>
            <h4 class="font-bold text-sm text-on-surface">Loket Tiket Kawah Putih</h4>
            <p class="text-[10px] text-on-surface-variant mt-1">Tunjukkan E-Tiket, parkir kendaraan, dan naik Ontang-anting.</p>
          </div>
        </div>
        <a href="https://maps.app.goo.gl/kawahputih" target="_blank" class="mt-4 flex items-center justify-center gap-2 w-full py-2.5 bg-surface-container text-on-surface rounded-xl text-xs font-semibold hover:bg-surface-container-high transition-colors">
          <span class="material-symbols-outlined text-[18px]">open_in_new</span> Buka di Google Maps
        </a>
      </div>
    </div>
  </div>

  <!-- 6. ITINERARY PERJALANAN (NOTE) -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">edit_note</span> Contoh Itinerary Perjalanan (1 Hari)
    </h2>
    <div class="bg-gradient-to-br from-primary/5 to-tertiary/5 border border-primary/20 rounded-xl md:rounded-2xl p-4 md:p-space-lg">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
          <div class="text-primary font-bold text-xs mb-1">06:00 - 08:00</div>
          <h4 class="font-bold text-sm text-on-surface mb-1">Sunrise di Sunan Ibu</h4>
          <p class="text-[10px] text-on-surface-variant">Tiba pagi-pagi untuk menghindari keramaian dan mendapatkan cahaya terbaik.</p>
        </div>
        <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
          <div class="text-primary font-bold text-xs mb-1">08:30 - 10:30</div>
          <h4 class="font-bold text-sm text-on-surface mb-1">Eksplorasi Kawah Utama</h4>
          <p class="text-[10px] text-on-surface-variant">Turun ke kawah, foto di Jembatan Ponton, dan nikmati pemandangan toska.</p>
        </div>
        <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
          <div class="text-primary font-bold text-xs mb-1">11:00 - 13:00</div>
          <h4 class="font-bold text-sm text-on-surface mb-1">Istirahat & Makan Siang</h4>
          <p class="text-[10px] text-on-surface-variant">Makan di area food court atau bawa bekal. Kunjungi Skywalk Cantigi.</p>
        </div>
        <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
          <div class="text-primary font-bold text-xs mb-1">13:30 - 15:00</div>
          <h4 class="font-bold text-sm text-on-surface mb-1">Oleh-oleh & Pulang</h4>
          <p class="text-[10px] text-on-surface-variant">Mampir ke kebun stroberi atau pusat oleh-oleh Ciwidey sebelum pulang.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 7. REKOMENDASI PENGINAPAN TERDEKAT -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">hotel</span> Rekomendasi Penginapan Terdekat
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-space-md">
      <!-- Penginapan 1 -->
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high overflow-hidden hover:shadow-md transition-all">
        <div class="relative h-40">
          <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&q=80" class="w-full h-full object-cover">
          <div class="absolute top-3 right-3 bg-primary text-on-primary px-2 py-1 rounded-lg text-[10px] font-bold flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">star</span> 4.8
          </div>
        </div>
        <div class="p-4 flex flex-col gap-2">
          <h4 class="font-bold text-sm text-on-surface">Ciwidey Valley Resort</h4>
          <div class="flex items-center gap-1 text-[10px] text-on-surface-variant">
            <span class="material-symbols-outlined text-[14px] text-primary">location_on</span> 2.5 km dari Kawah Putih
          </div>
          <div class="flex flex-wrap gap-1.5 my-1">
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">wifi</span> WiFi</span>
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">local_parking</span> Parkir</span>
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">pool</span> Kolam Renang</span>
          </div>
          <div class="flex items-center justify-between pt-2 border-t border-surface-container-high mt-1">
            <div>
              <span class="text-[10px] text-outline">Mulai dari</span>
              <div class="font-bold text-primary text-sm">Rp 450.000<span class="text-outline font-normal text-[10px]"> /malam</span></div>
            </div>
            <a href="#" class="bg-primary text-on-primary px-3 py-1.5 rounded-lg text-[11px] font-semibold hover:bg-primary-container transition-colors no-underline">Booking</a>
          </div>
        </div>
      </div>

      <!-- Penginapan 2 -->
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high overflow-hidden hover:shadow-md transition-all">
        <div class="relative h-40">
          <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=600&q=80" class="w-full h-full object-cover">
          <div class="absolute top-3 right-3 bg-primary text-on-primary px-2 py-1 rounded-lg text-[10px] font-bold flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">star</span> 4.6
          </div>
        </div>
        <div class="p-4 flex flex-col gap-2">
          <h4 class="font-bold text-sm text-on-surface">Glamping Lakeside Rancabali</h4>
          <div class="flex items-center gap-1 text-[10px] text-on-surface-variant">
            <span class="material-symbols-outlined text-[14px] text-primary">location_on</span> 4.1 km dari Kawah Putih
          </div>
          <div class="flex flex-wrap gap-1.5 my-1">
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">wifi</span> WiFi</span>
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">fireplace</span> Api Unggun</span>
          </div>
          <div class="flex items-center justify-between pt-2 border-t border-surface-container-high mt-1">
            <div>
              <span class="text-[10px] text-outline">Mulai dari</span>
              <div class="font-bold text-primary text-sm">Rp 650.000<span class="text-outline font-normal text-[10px]"> /malam</span></div>
            </div>
            <a href="#" class="bg-primary text-on-primary px-3 py-1.5 rounded-lg text-[11px] font-semibold hover:bg-primary-container transition-colors no-underline">Booking</a>
          </div>
        </div>
      </div>

      <!-- Penginapan 3 -->
      <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high overflow-hidden hover:shadow-md transition-all">
        <div class="relative h-40">
          <img src="https://images.unsplash.com/photo-1587061949409-02df41d5e562?w=600&q=80" class="w-full h-full object-cover">
          <div class="absolute top-3 right-3 bg-primary text-on-primary px-2 py-1 rounded-lg text-[10px] font-bold flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">star</span> 4.7
          </div>
        </div>
        <div class="p-4 flex flex-col gap-2">
          <h4 class="font-bold text-sm text-on-surface">The Pinus Pengalengan</h4>
          <div class="flex items-center gap-1 text-[10px] text-on-surface-variant">
            <span class="material-symbols-outlined text-[14px] text-primary">location_on</span> 5.8 km dari Kawah Putih
          </div>
          <div class="flex flex-wrap gap-1.5 my-1">
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">forest</span> Alam</span>
            <span class="px-2 py-0.5 bg-surface-container-low text-on-surface-variant text-[9px] rounded-md flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">coffee</span> Cafe</span>
          </div>
          <div class="flex items-center justify-between pt-2 border-t border-surface-container-high mt-1">
            <div>
              <span class="text-[10px] text-outline">Mulai dari</span>
              <div class="font-bold text-primary text-sm">Rp 380.000<span class="text-outline font-normal text-[10px]"> /malam</span></div>
            </div>
            <a href="#" class="bg-primary text-on-primary px-3 py-1.5 rounded-lg text-[11px] font-semibold hover:bg-primary-container transition-colors no-underline">Booking</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 8. REVIEW YANG PERNAH DIBUAT -->
  <div class="flex flex-col gap-3 md:gap-space-md">
    <h2 class="text-base md:text-xl font-bold text-on-surface flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-[20px] md:text-2xl">rate_review</span> Review Kamu
    </h2>
    <div class="bg-surface-container-lowest rounded-xl md:rounded-2xl shadow-sm border border-surface-container-high p-4 md:p-space-lg flex flex-col md:flex-row gap-4 items-start">
      <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
        <span class="material-symbols-outlined text-[28px]">person</span>
      </div>
      <div class="flex-1 w-full">
        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
          <div>
            <h4 class="font-bold text-sm text-on-surface">Pengalaman yang Luar Biasa!</h4>
            <div class="flex items-center gap-1 text-amber-400">
              <span class="material-symbols-outlined text-[16px]">star</span>
              <span class="material-symbols-outlined text-[16px]">star</span>
              <span class="material-symbols-outlined text-[16px]">star</span>
              <span class="material-symbols-outlined text-[16px]">star</span>
              <span class="material-symbols-outlined text-[16px]">star_half</span>
              <span class="text-[10px] text-on-surface-variant ml-1">12 Oktober 2024</span>
            </div>
          </div>
          <span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded-full flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">verified</span> Terverifikasi
          </span>
        </div>
        <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed mb-3">
          "Pemandangannya sangat indah, terutama saat pagi hari. Jembatan pontonnya seru banget untuk foto-foto. Ontang-antingnya juga nyaman. Sangat recommended untuk liburan keluarga!"
        </p>
        <div class="flex gap-2">
          <button class="text-xs text-primary font-semibold flex items-center gap-1 hover:underline">
            <span class="material-symbols-outlined text-[16px]">edit</span> Edit Review
          </button>
          <button class="text-xs text-rose-500 font-semibold flex items-center gap-1 hover:underline">
            <span class="material-symbols-outlined text-[16px]">delete</span> Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pengunjung', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pariwisata-kawah-putih\resources\views/pengunjung/dashboard.blade.php ENDPATH**/ ?>