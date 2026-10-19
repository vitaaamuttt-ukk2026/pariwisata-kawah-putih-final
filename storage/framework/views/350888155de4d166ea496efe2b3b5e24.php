<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> - Kawah Putih Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { "on-primary-fixed": "#002114", "primary-fixed-dim": "#68dba9", "surface-container": "#eaedff", "surface": "#faf8ff", "on-secondary-fixed": "#001d31", "secondary": "#006398", "surface-container-lowest": "#ffffff", "on-tertiary-fixed-variant": "#005236", "surface-bright": "#faf8ff", "on-tertiary-container": "#f5fff6", "tertiary-fixed-dim": "#4edea3", "on-secondary-fixed-variant": "#004b73", "inverse-primary": "#68dba9", "outline": "#6d7a72", "on-surface": "#131b2e", "error-container": "#ffdad6", "primary-container": "#00855d", "surface-tint": "#006c4a", "secondary-fixed": "#cce5ff", "surface-container-highest": "#dae2fd", "on-error-container": "#93000a", "tertiary-container": "#00855b", "error": "#ba1a1a", "on-background": "#131b2e", "on-tertiary": "#ffffff", "tertiary-fixed": "#6ffbbe", "background": "#faf8ff", "secondary-container": "#5bb8fe", "inverse-surface": "#283044", "inverse-on-surface": "#eef0ff", "on-secondary-container": "#00476e", "on-surface-variant": "#3d4a42", "on-secondary": "#ffffff", "on-tertiary-fixed": "#002113", "on-primary-fixed-variant": "#005137", "surface-container-low": "#f2f3ff", "on-error": "#ffffff", "on-primary-container": "#f5fff7", "secondary-fixed-dim": "#93ccff", "primary-fixed": "#85f8c4", "outline-variant": "#bccac0", "on-primary": "#ffffff", "primary": "#006948", "surface-dim": "#d2d9f4", "surface-variant": "#dae2fd", "surface-container-high": "#e2e7ff", "tertiary": "#006947" },
                    borderRadius: { DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px" },
                    spacing: { "space-xs": "0.25rem", "space-lg": "1.5rem", "space-md": "1rem", "margin": "2rem", "space-sm": "0.5rem", "space-xl": "2rem", "gutter": "1.5rem", "margin-mobile": "1rem", "gutter-mobile": "0.75rem" },
                    fontFamily: { "headline-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "display": ["Plus Jakarta Sans"], "metric-numeral": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"], "body-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"] },
                    fontSize: { "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.025em", "fontWeight": "700"}], "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}], "headline-lg-mobile": ["22px", {"lineHeight": "28px", "letterSpacing": "-0.02em", "fontWeight": "700"}], "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}], "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}], "label-md": ["13px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600"}], "display": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "700"}], "metric-numeral": ["32px", {"lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "700"}], "headline-sm": ["16px", {"lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600"}], "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}], "headline-md": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}] }
                }
            }
        };
    </script>
    <style>
        @layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}
        .page-content { opacity: 0; animation: pageEnter 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes pageEnter { 0% { opacity: 0; transform: translateY(24px) scale(0.98); filter: blur(6px); } 100% { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); } }
        .nav-link { transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1); }
        .nav-link:hover:not(.bg-primary-fixed) { transform: translateX(4px); }
        tr { transition: background-color 0.2s ease; }
        button, a { transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
        button:active, a:active { transform: scale(0.96); }
    </style>
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased min-h-screen">

<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col justify-between">
  <div class="flex flex-col">
    <div class="h-20 flex items-center gap-space-sm px-space-lg bg-surface-container-lowest">
      <img alt="Brand logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1UaxpdbcZLhX-uTmkK30Yxhm0OH7fhPQhSDhlhQmh3OmBCkgRkgg3HydIgFMVhtaRqNYvOeKU4tiQojQXayWyQbbSKdPhnQ0XthaXSIsckKu5bgNDsCbINjBuRe9U-v3hoZCQDuOyjoFD8qM7BXSuj1aXIoibiQRzJFr3H7Gf-OwdUeYWNp-9aDaCN5LCL8AWOUPcUNpfSEuTNJXq2s8auwCqWpvUu6MmX0GddsKqPg7I_dJ4TOuoYtunvU"/>
      <div class="flex flex-col"><span class="font-headline-sm text-headline-sm text-primary leading-tight tracking-tight">Kawah Putih</span><span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">IslaGest Eco System</span></div>
    </div>
    <div class="px-space-md py-space-sm">
      <p class="px-space-sm py-space-xs font-label-sm text-label-sm text-on-surface-variant uppercase">Menu Navigasi</p>
      <nav class="flex flex-col gap-space-xs">
        <!-- ✅ INI PERBAIKANNYA: Menggunakan route Laravel, BUKAN .html -->
        <a class="nav-link flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface transition-all <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-primary-fixed text-on-primary-fixed font-headline-sm' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>"><span class="material-symbols-outlined text-xl">dashboard</span><span class="font-body-md text-body-md">Dashboard</span></a>
        <a class="nav-link flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface transition-all <?php echo e(request()->routeIs('admin.wisata') ? 'bg-primary-fixed text-on-primary-fixed font-headline-sm' : ''); ?>" href="<?php echo e(route('admin.wisata')); ?>"><span class="material-symbols-outlined text-xl">nature_people</span><span class="font-body-md text-body-md">Kelola Wisata</span></a>
        <a class="nav-link flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface transition-all <?php echo e(request()->routeIs('admin.penginapan') ? 'bg-primary-fixed text-on-primary-fixed font-headline-sm' : ''); ?>" href="<?php echo e(route('admin.penginapan')); ?>"><span class="material-symbols-outlined text-xl">cabin</span><span class="font-body-md text-body-md">Kelola Penginapan</span></a>
        <a class="nav-link flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface transition-all <?php echo e(request()->routeIs('admin.booking') ? 'bg-primary-fixed text-on-primary-fixed font-headline-sm' : ''); ?>" href="<?php echo e(route('admin.booking')); ?>"><span class="material-symbols-outlined text-xl">confirmation_number</span><span class="font-body-md text-body-md">Kelola Booking</span></a>
      </nav>
    </div>
  </div>
  <div class="p-space-md bg-surface-container-lowest">
    <div class="w-full h-px bg-surface-container-high mb-space-md"></div>
    <div class="bg-surface-container-low p-space-md rounded-xl mb-space-sm flex items-center justify-between">
      <div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-primary-fixed-dim"></span><span class="font-label-sm text-label-sm text-on-surface-variant">Jaringan Cagar Biosfer</span></div>
      <span class="font-label-sm text-label-sm text-primary font-bold">Aktif</span>
    </div>
    <!-- ✅ Logout menggunakan Form agar aman di Laravel -->
    <form method="POST" action="<?php echo e(route('panel.logout')); ?>" class="w-full">
        <?php echo csrf_field(); ?>
        <button type="submit" class="nav-link w-full flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-error hover:bg-error-container hover:text-on-error-container transition-all text-left bg-transparent border-0 cursor-pointer">
            <span class="material-symbols-outlined text-xl">logout</span><span class="font-body-md text-body-md font-semibold">Keluar Sistem</span>
        </button>
    </form>
  </div>
</aside>

<div class="pl-72">
  <header class="fixed top-0 left-72 right-0 h-20 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center justify-between px-space-lg">
    <div class="flex items-center gap-space-md">
      <div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface-variant"><span class="font-medium">Portal Admin</span><span class="material-symbols-outlined text-base">chevron_right</span><span class="text-primary font-semibold"><?php echo $__env->yieldContent('page-title', 'Dashboard Operasional'); ?></span></div>
      <div class="h-4 w-px bg-surface-container-high mx-space-xs"></div>
      <div class="hidden xl:flex items-center gap-space-xs bg-surface-container-low px-space-sm py-space-xs rounded-full"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span><span class="font-label-sm text-label-sm text-on-surface-variant">Sistem Live: Destinasi Normal</span></div>
    </div>
    <div class="flex items-center gap-space-md">
      <div class="relative flex items-center"><span class="material-symbols-outlined absolute left-3 text-outline text-lg pointer-events-none">search</span><input class="w-64 pl-9 pr-4 py-2 bg-surface-container-low rounded-xl text-on-surface font-body-sm text-body-sm placeholder:text-on-surface-variant/70 focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary transition-all" placeholder="Cari pesanan, tiket, tamu..." type="text"/></div>
      <button aria-label="Notifications" class="relative w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high transition-colors" type="button"><span class="material-symbols-outlined text-xl">notifications</span><span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span></button>
      <div class="flex items-center gap-space-sm pl-space-xs">
        <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WTflpaDJMYWG5FZSKgfXyiStMbkF-RFaZtD_FR7ykrwCV_mt2xRiBzQZHh22Cci9q4N5jaIexDymlf_ZEHgWo0MQe-7ElIIWmBnJKcXSZej0pocBMwONhick0ZbjmGW9FECg7tECUTVV1OZ862wPDNQ75S76vyZD-pGYefOf2c_9bXSi_r60tAky1Lo0U8ZmMS_wKY7H2CAFdC9v27n7AI4kqwcbf0ExIt_lw5JkDbAUdQXKLHsTD5aD8"/>
        <div class="flex flex-col text-left"><span class="font-label-md text-label-md text-on-surface font-bold leading-tight"><?php echo e(Auth::user()->name ?? 'Admin'); ?></span><span class="font-label-sm text-label-sm text-on-surface-variant capitalize"><?php echo e(Auth::user()->role ?? 'Super Admin'); ?></span></div>
      </div>
    </div>
  </header>
  
  <main class="w-full pt-20 px-space-xl pb-space-xl bg-surface min-h-screen">
    <div class="page-content flex flex-col w-full">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
  </main>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\pariwisata-kawah-putih\resources\views/layouts/panel.blade.php ENDPATH**/ ?>