<!DOCTYPE html>
<html class="dark" dir="rtl" lang="ar">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Data Analysis Pro - جارٍ التحقق من الدفع</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&family=Tajawal:wght@400;500;700;800&family=Inter:wght@400;600&family=Space+Grotesk:wght@500&family=Cairo:wght@700;800&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet" />
  <script src="https://kit.fontawesome.com/4e9a8de8b8.js" crossorigin="anonymous"></script>

  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "surface-bright": "#2e394d",
            "tertiary": "#e9c400",
            "on-tertiary": "#3a3000",
            "error-container": "#93000a",
            "secondary-fixed": "#00fbfb",
            "surface-container-highest": "#2a3548",
            "outline": "#8f9097",
            "secondary-fixed-dim": "#00dddd",
            "on-primary-container": "#758096",
            "surface-dim": "#071325",
            "surface-tint": "#bbc7df",
            "tertiary-fixed-dim": "#e9c400",
            "background": "#071325",
            "on-tertiary-fixed": "#221b00",
            "on-primary-fixed": "#101c2e",
            "on-surface": "#d7e3fc",
            "secondary": "#ffffff",
            "tertiary-fixed": "#ffe16d",
            "on-secondary-fixed-variant": "#004f4f",
            "primary": "#bbc7df",
            "surface": "#071325",
            "surface-variant": "#2a3548",
            "error": "#ffb4ab",
            "on-primary": "#253144",
            "primary-fixed-dim": "#bbc7df",
            "on-secondary-fixed": "#002020",
            "secondary-container": "#00fbfb",
            "outline-variant": "#45474c",
            "on-secondary-container": "#007070",
            "inverse-primary": "#535f74",
            "surface-container-low": "#101c2e",
            "on-tertiary-fixed-variant": "#544600",
            "tertiary-container": "#c8a900",
            "on-surface-variant": "#c5c6cd",
            "surface-container-lowest": "#030e20",
            "on-secondary": "#003737",
            "primary-container": "#0a1628",
            "inverse-on-surface": "#253144",
            "on-primary-fixed-variant": "#3c475b",
            "primary-fixed": "#d7e3fc",
            "on-background": "#d7e3fc",
            "inverse-surface": "#d7e3fc",
            "on-tertiary-container": "#4b3e00",
            "on-error": "#690005",
            "on-error-container": "#ffdad6",
            "surface-container-high": "#1f2a3d",
            "surface-container": "#142032"
          },
          fontFamily: {
            "headline": ["Plus Jakarta Sans", "Tajawal"],
            "body": ["Inter", "Tajawal"],
            "label": ["Space Grotesk"]
          },
          borderRadius: { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }

    .glass-header {
      background: rgba(7, 19, 37, 0.4);
      backdrop-filter: blur(20px);
    }

    html, body {
      overflow-x: hidden;
      width: 100%;
      position: relative;
    }

    @keyframes spin-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    @keyframes pulse-ring {
      0% { transform: scale(0.8); opacity: 1; }
      100% { transform: scale(2); opacity: 0; }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-12px); }
    }

    @keyframes progress-bar {
      0% { width: 0%; }
      100% { width: 100%; }
    }

    .spin-slow { animation: spin-slow 3s linear infinite; }
    .pulse-ring {
      animation: pulse-ring 1.5s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
    }
    .float-anim { animation: float 3s ease-in-out infinite; }
    .progress-bar-anim { animation: progress-bar 3s ease-in-out forwards; }

    .bg-gradient-radial {
      background: radial-gradient(ellipse at center, rgba(187,199,223,0.08) 0%, transparent 70%);
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body antialiased min-h-screen flex flex-col">
  <!-- HEADER -->
  <header class="glass-header sticky top-0 z-50 px-6 py-4 w-full flex flex-row-reverse justify-between items-center border-b border-surface-bright/30">
    <div class="font-headline text-right font-black tracking-tighter flex items-center gap-2">
      <span class="text-xl text-white">Data Analysis Pro</span>
    </div>
    <div class="flex items-center gap-2 text-white font-bold text-sm md:text-base">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">lock</span>
      <span>دفع آمن ومشفر 100%</span>
    </div>
  </header>

  <main class="flex-1 flex items-center justify-center px-4 py-16">
    <div class="max-w-md w-full text-center space-y-8">
      <!-- Animated Icon -->
      <div class="relative mx-auto w-32 h-32 float-anim">
        <div class="absolute inset-0 rounded-full bg-primary/10 pulse-ring"></div>
        <div class="absolute inset-0 rounded-full bg-primary/5 pulse-ring" style="animation-delay: 0.5s;"></div>
        <div class="relative w-32 h-32 rounded-full bg-surface-container-high border-2 border-primary/30 flex items-center justify-center shadow-2xl">
          <i class="fa-solid fa-circle-notch fa-spin text-primary text-5xl"></i>
        </div>
      </div>

      <!-- Text -->
      <div class="space-y-3">
        <h1 class="text-3xl font-black text-white font-headline">جارٍ التحقق من الدفع</h1>
        <p class="text-on-surface-variant leading-relaxed">نقوم بالتحقق من حالة معاملتك، يرجى الانتظار لحظة...</p>
      </div>

      <!-- Progress Bar -->
      <div class="bg-surface-container-high rounded-full h-2 overflow-hidden">
        <div id="progress" class="h-full bg-gradient-to-l from-secondary-container to-primary rounded-full progress-bar-anim"></div>
      </div>

      <!-- Status Card -->
      <div class="bg-surface-container-high rounded-xl border border-outline-variant/20 p-6 text-right space-y-3">
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">security</span>
          <span class="text-sm text-on-surface-variant">يتم التحقق من الدفع بشكل آمن</span>
        </div>
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">verified_user</span>
          <span class="text-sm text-on-surface-variant">البيانات محمية بتشفير SSL</span>
        </div>
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">sync</span>
          <span class="text-sm text-on-surface-variant">سيتم التحويل تلقائياً خلال ثوانٍ</span>
        </div>
      </div>
    </div>
  </main>

  <footer class="py-6 border-t border-white/5 text-center">
    <p class="text-on-surface-variant text-sm">© 2026 Data Analysis Pro. جميع الحقوق محفوظة.</p>
  </footer>

  <script>
    (function () {
      const params = new URLSearchParams(window.location.search);
      const success = params.get('success');

      // Give the animation time to play, then redirect
      setTimeout(function () {
        if (success === 'true') {
          window.location.href = "{{ route('dapro.payment.success') }}";
        } else {
          window.location.href = "{{ route('dapro.payment.failure') }}";
        }
      }, 3000);
    })();
  </script>
</body>

</html>
