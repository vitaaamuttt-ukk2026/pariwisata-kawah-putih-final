

<?php $__env->startSection('title', 'Pengaturan'); ?>

<?php $__env->startSection('content'); ?>
<div class="flex flex-col items-center justify-center py-20 bg-white border border-slate-100 rounded-2xl shadow-sm border-dashed border-2">
  <div class="w-16 h-16 rounded-2xl bg-slate-50 text-slate-400 flex items-center justify-center mb-4">
    <span class="material-symbols-outlined text-[32px]">tune</span>
  </div>
  <h3 class="text-lg text-slate-900 font-bold tracking-tight">Pusat Pengaturan Sistem</h3>
  <p class="text-xs text-slate-500 mt-1 text-center max-w-sm">Kelola akun pengguna, konfigurasi gerbang tiket, integrasi API pembayaran, dan preferensi notifikasi sistem di sini.</p>
  <button class="mt-6 px-4 py-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-xl text-xs font-bold hover:bg-emerald-100 transition-colors">
    Buka Konfigurasi
  </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pengelola', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pariwisata-kawah-putih\resources\views/pengelola/pengaturan.blade.php ENDPATH**/ ?>