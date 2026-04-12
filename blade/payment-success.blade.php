<!DOCTYPE html>
<html class="dark" dir="rtl" lang="ar">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Data Analysis Pro - تم الدفع بنجاح 🎉</title>
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

    @keyframes checkmark-draw {
      0% { stroke-dashoffset: 100; }
      100% { stroke-dashoffset: 0; }
    }

    @keyframes circle-scale {
      0% { transform: scale(0); opacity: 0; }
      60% { transform: scale(1.1); opacity: 1; }
      100% { transform: scale(1); opacity: 1; }
    }

    @keyframes confetti-fall {
      0% { transform: translateY(-20px) rotate(0deg); opacity: 1; }
      100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
    }

    @keyframes float-up {
      0% { transform: translateY(30px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    @keyframes glow-pulse {
      0%, 100% { box-shadow: 0 0 20px rgba(0, 251, 251, 0.2); }
      50% { box-shadow: 0 0 50px rgba(0, 251, 251, 0.5), 0 0 80px rgba(0, 251, 251, 0.2); }
    }

    .circle-scale { animation: circle-scale 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; }
    .checkmark-draw {
      stroke-dasharray: 100;
      stroke-dashoffset: 100;
      animation: checkmark-draw 0.6s ease-out 0.4s forwards;
    }
    .float-up { animation: float-up 0.6s ease-out forwards; }
    .float-up-1 { animation: float-up 0.6s ease-out 0.1s both; }
    .float-up-2 { animation: float-up 0.6s ease-out 0.2s both; }
    .float-up-3 { animation: float-up 0.6s ease-out 0.3s both; }
    .glow-pulse { animation: glow-pulse 2s ease-in-out infinite; }

    .confetti-piece {
      position: fixed;
      top: -20px;
      width: 10px;
      height: 10px;
      animation: confetti-fall linear forwards;
      border-radius: 2px;
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body antialiased min-h-screen flex flex-col">
  <!-- Confetti container -->
  <div id="confetti-container" aria-hidden="true"></div>

  <!-- HEADER -->
  <header class="glass-header sticky top-0 z-50 px-6 py-4 w-full flex flex-row-reverse justify-between items-center border-b border-surface-bright/30">
    <div class="font-headline text-right font-black tracking-tighter flex items-center gap-2">
      <span class="text-xl text-white">Data Analysis Pro</span>
    </div>
    <div class="flex items-center gap-2 text-secondary-container font-bold text-sm md:text-base">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">verified</span>
      <span>تم الدفع بنجاح</span>
    </div>
  </header>

  <main class="flex-1 flex items-center justify-center px-4 py-16">
    <div class="max-w-lg w-full text-center space-y-8">
      <!-- Success Icon -->
      <div class="mx-auto w-32 h-32 circle-scale">
        <div class="w-32 h-32 rounded-full bg-secondary-container/10 border-2 border-secondary-container glow-pulse flex items-center justify-center">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
            <polyline class="checkmark-draw" points="12,32 26,46 52,18"
              stroke="#00fbfb" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>

      <!-- Heading -->
      <div class="space-y-3 float-up-1">
        <h1 class="text-4xl font-black text-white font-headline">🎉 تم الدفع بنجاح!</h1>
        <p class="text-on-surface-variant leading-relaxed text-lg">أهلاً بك في عائلة Data Analysis Pro. رحلتك نحو الاحتراف بدأت الآن!</p>
      </div>

      <!-- Next Steps Card -->
      <div class="bg-surface-container-high rounded-xl border border-secondary-container/20 p-6 text-right space-y-4 float-up-2">
        <h2 class="text-secondary-container font-bold text-lg flex items-center gap-2">
          <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">checklist</span>
          الخطوات التالية
        </h2>
        <div class="space-y-3">
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-secondary-container/10 border border-secondary-container flex items-center justify-center shrink-0 mt-0.5">
              <span class="text-secondary-container text-xs font-black">١</span>
            </div>
            <p class="text-on-surface-variant text-sm leading-relaxed">ستصلك رسالة تأكيد على بريدك الإلكتروني خلال دقائق</p>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-secondary-container/10 border border-secondary-container flex items-center justify-center shrink-0 mt-0.5">
              <span class="text-secondary-container text-xs font-black">٢</span>
            </div>
            <p class="text-on-surface-variant text-sm leading-relaxed">سيتواصل معك أحد أعضاء الفريق لإرشادك للخطوة الأولى</p>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-secondary-container/10 border border-secondary-container flex items-center justify-center shrink-0 mt-0.5">
              <span class="text-secondary-container text-xs font-black">٣</span>
            </div>
            <p class="text-on-surface-variant text-sm leading-relaxed">احتفظ بالرقم المرجعي للمعاملة لأي استفسارات مستقبلية</p>
          </div>
        </div>
      </div>

      <!-- CTA Buttons -->
      <div class="space-y-3 float-up-3">
        <a href="https://wa.me/201000143085" target="_blank"
          class="w-full bg-[#25D366] text-white py-4 rounded-xl font-black text-base hover:scale-[1.02] active:scale-95 transition-all shadow-xl shadow-[#25D366]/20 flex items-center justify-center gap-2">
          <i class="fa-brands fa-whatsapp text-xl"></i>
          تواصل مع الفريق عبر واتساب
        </a>
        <a href="{{ route('dapro.index') }}"
          class="w-full bg-surface-container-high border border-outline-variant/20 text-on-surface py-4 rounded-xl font-bold text-base hover:border-primary/40 hover:bg-surface-container-highest transition-all flex items-center justify-center gap-2">
          <span class="material-symbols-outlined text-sm">home</span>
          العودة للرئيسية
        </a>
      </div>

      <!-- Instructor Card -->
      <div class="flex items-center gap-4 p-4 rounded-xl bg-surface-container border border-outline-variant/10 float-up-3">
        <img alt="Instructor" class="w-14 h-14 rounded-full border-2 border-tertiary object-cover"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5LROCZyYkIvSLaydInuDngSFKC8XCBR2wdlK2DqBNV0f6Bnh-VQpC-YCqUUGg8IMwzphThcM-0QUTlLTFMa11AP8nzSr09LqWoP5cW-bSA8WYNwOdLdhK-lByp2nxvaszkPw0M6zSJB_9DqoBfj1fkiIDfL423ZTt4FlbK703zdQcBD5vJzuwBHt9DraBKgZnZKJjTUKbNFOvdmr9403EFN1-0N97Rwp-i_DcoeDTlfOD79oCbZ3-4irbi7dpkiY6I9gcZZT0BHM" />
        <div class="text-right">
          <p class="text-white font-bold">محمد عبد الفتاح</p>
          <p class="font-label text-on-surface-variant text-sm">Senior Data Analyst &amp; Instructor</p>
          <p class="text-secondary-container text-xs mt-1">يتطلع للقائك في الكورس! 🚀</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Floating WhatsApp Button -->
  <a class="fixed bottom-6 left-6 z-[60] bg-[#25D366] text-white w-14 h-14 rounded-full shadow-2xl hover:scale-110 transition-transform animate-bounce flex items-center justify-center border-2 border-white/20"
    href="https://wa.me/201000143085" target="_blank">
    <i class="fa-brands fa-whatsapp text-3xl"></i>
  </a>

  <footer class="py-6 border-t border-white/5 text-center">
    <p class="text-on-surface-variant text-sm">© 2026 Data Analysis Pro. جميع الحقوق محفوظة.</p>
  </footer>

  <script>
    // Confetti effect
    (function () {
      const colors = ['#00fbfb', '#e9c400', '#bbc7df', '#ffffff', '#00dddd'];
      const container = document.getElementById('confetti-container');

      for (let i = 0; i < 60; i++) {
        const piece = document.createElement('div');
        piece.className = 'confetti-piece';
        piece.style.left = Math.random() * 100 + 'vw';
        piece.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        piece.style.animationDuration = (Math.random() * 2 + 2) + 's';
        piece.style.animationDelay = (Math.random() * 2) + 's';
        piece.style.width = (Math.random() * 8 + 6) + 'px';
        piece.style.height = (Math.random() * 8 + 6) + 'px';
        container.appendChild(piece);
      }
    })();
  </script>
</body>

</html>
