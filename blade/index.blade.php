<html class="dark" dir="rtl" lang="ar">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Data Analysis Pro | احترف تحليل البيانات</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Tajawal:wght@400;500;700;800&amp;family=Inter:wght@400;600&amp;family=Space+Grotesk:wght@500&amp;family=Cairo:wght@700;800&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    }

    .glass-nav {
      background: rgba(7, 19, 37, 0.4);
      backdrop-filter: blur(20px);
    }

    .kinetic-border {
      position: relative;
    }

    .kinetic-border::after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 4px;
      height: 100%;
      background: #e9c400;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .kinetic-border:hover::after {
      opacity: 1;
    }

    .bg-mist {
      background: linear-gradient(180deg, rgba(187, 199, 223, 0.15) 0%, rgba(10, 22, 40, 0) 100%);
    }

    html,
    body {
      overflow-x: hidden;
      width: 100%;
      position: relative;
    }
  </style>
</head>

<body
  class="bg-background text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">
  <!-- Section 1: TopAppBar -->
  <header class="fixed top-0 w-full z-50 bg-[#071325]/40 backdrop-blur-xl shadow-[0_40px_40px_rgba(215,227,252,0.08)]">
    <nav
      class="flex flex-row-reverse justify-between items-center px-4 md:px-6 py-4 max-w-7xl mx-auto font-['Plus_Jakarta_Sans','Tajawal'] font-bold text-right gap-2">
      <div class="text-lg md:text-2xl font-black text-white tracking-tighter flex-shrink truncate">Data Analysis Pro
      </div>
      <div class="hidden md:flex flex-row-reverse gap-8 items-center">
        <a class="text-[#D7E3FC] hover:text-white transition-colors" href="{{ route('dapro.index') }}#faq">الأسئلة</a>
        <a class="text-[#D7E3FC] hover:text-white transition-colors" href="#testimonials">قصص النجاح</a>
        <a class="text-[#D7E3FC] hover:text-white transition-colors" href="#pricing">الأسعار</a>
        <a class="text-[#D7E3FC] hover:text-white transition-colors" href="#instructor">المدرب</a>
        <a class="text-[#D7E3FC] hover:text-white transition-colors" href="#roadmap">المسار</a>
        <a class="text-[#FFD700] border-b-2 border-[#FFD700] pb-1" href="#">الرئيسية</a>
      </div>
      <a href="{{ route('dapro.checkout') }}"
        class="bg-tertiary text-on-tertiary text-sm md:text-lg px-4 md:px-6 py-2 rounded-md font-bold hover:scale-95 active:scale-90 duration-200 transition-all flex items-center justify-center whitespace-nowrap flex-shrink-0">
        سجل الآن
      </a>
    </nav>
  </header>
  <!-- Section 1: Hero -->
  <section class="relative pt-32 pb-20 overflow-hidden bg-mist">
    <div class="max-w-7xl w-full mx-auto px-6 flex flex-col items-center text-center gap-8">

      <div class="w-full flex flex-col items-center">
        <div
          class="inline-block bg-surface-container-highest text-secondary-fixed-dim px-4 py-1 rounded-full text-sm font-body mb-6"
          data-aos="fade-down">
          +2000 متدرب سبقوك
        </div>
        <h1 class="text-5xl md:text-7xl font-headline font-extrabold text-white leading-tight mb-4" data-aos="fade-up"
          data-aos-delay="100">
          ابدأ مسارك كـ <span class="text-tertiary">محلل بيانات</span> محترف
        </h1>
        <h2 class="text-2xl md:text-3xl font-headline font-bold text-on-primary-container mb-6" data-aos="fade-up"
          data-aos-delay="200">
          Data Analysis Pro
        </h2>
        <div class="bg-error-container/20 text-error border-b-4 border-error px-6 py-2 mb-4 inline-block"
          data-aos="fade-up" data-aos-delay="300">
          مقاعد محدودة - ١ مايو
        </div>
      </div>

      <div class="w-full max-w-5xl mx-auto relative mb-4" data-aos="fade-up" data-aos-delay="400">
        <script src="https://fast.wistia.com/player.js" async></script>
        <script src="https://fast.wistia.com/embed/oihdw2z0nu.js" async type="module"></script>
        <style>
          wistia-player[media-id='oihdw2z0nu']:not(:defined) {
            background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/oihdw2z0nu/swatch');
            display: block;
            filter: blur(5px);
            padding-top: 56.25%;
          }
        </style> <wistia-player media-id="oihdw2z0nu" aspect="1.7777777777777777"></wistia-player>
      </div>

      <div
        class="flex flex-row-reverse items-center justify-center gap-8 md:gap-12 opacity-90 transition-all hover:opacity-100"
        data-aos="fade-up" data-aos-delay="500">
        <div class="flex flex-col items-center gap-2 group">
          <div
            class="w-14 h-14 md:w-16 md:h-16 bg-surface-container-high rounded-xl flex items-center justify-center shadow-xl border border-outline-variant/10 group-hover:border-[#F2C811]/50 group-hover:scale-110 transition-all duration-300">
            <svg class="w-8 h-8 md:w-10 md:h-10 drop-shadow-[0_0_8px_rgba(242,200,17,0.3)]" viewBox="0 0 32 32"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="7" y="14" width="5" height="13" rx="1" fill="#E8B021" />
              <rect x="14" y="8" width="5" height="19" rx="1" fill="#F2C811" />
              <rect x="21" y="2" width="5" height="25" rx="1" fill="#FFD400" />
            </svg>
          </div>
          <span class="font-label text-white text-xs md:text-sm font-bold opacity-60">Power BI</span>
        </div>

        <div class="flex flex-col items-center gap-2 group">
          <div
            class="w-14 h-14 md:w-16 md:h-16 bg-surface-container-high rounded-xl flex items-center justify-center shadow-xl border border-outline-variant/10 group-hover:border-[#217346]/50 group-hover:scale-110 transition-all duration-300">
            <svg class="w-8 h-8 md:w-10 md:h-10 drop-shadow-[0_0_8px_rgba(33,115,70,0.3)]" viewBox="0 0 32 32"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M21 5H9C7.89543 5 7 5.89543 7 7V25C7 26.1046 7.89543 27 9 27H23C24.1046 27 25 26.1046 25 25V11L21 5Z"
                fill="#217346" />
              <path d="M21 5V11H25" fill="#155533" />
              <path d="M12 15L15 19L12 23H14L16 20.2L18 23H20L17 19L20 15H18L16 17.8L14 15H12Z" fill="white" />
            </svg>
          </div>
          <span class="font-label text-white text-xs md:text-sm font-bold opacity-60">Excel</span>
        </div>
      </div>

      <div data-aos="fade-up" data-aos-delay="600" class="mt-2 w-full flex justify-center">
        <a href="{{ route('dapro.checkout') }}"
          class="bg-tertiary text-center text-on-tertiary text-base md:text-xl px-12 py-5 rounded-md font-extrabold hover:shadow-[0_0_20px_rgba(233,196,0,0.4)] transition-all inline-block w-full md:w-auto whitespace-nowrap">
          سجّل الآن و احجز مكانك
        </a>
      </div>

    </div>
  </section>
  <!-- Section 7: Testimonials -->
  <section class="pt-24 bg-surface-dim overflow-hidden" id="testimonials">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h2 class="text-4xl font-headline font-bold text-center mb-20">قصص نجاح أبطالنا</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-20">
        <!-- Testimonial 1 -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:translate-y-8 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div
              class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-white border border-outline-variant/20">
              <i class="fa-solid fa-circle-user text-3xl opacity-40"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">احمد فتحي</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">

            كل الشكرو التقدير لمستر محمد على شرحه الاحترافي للكورس و اسلوبه المنظم و الواضح الي فرق معانا جدا ف الفهم و
            التطبيق 👌
          </p>
        </div>
        <!-- Testimonial 2  -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:-translate-y-4 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div
              class="w-16 h-16 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
              <i class="fa-solid fa-circle-user text-3xl opacity-60"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">بدر على</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            شكرا يا دكتور على الشرح بتشرح بضمير وفهمت منك و طريقتك حلوة جدا ف الشرح 🙏
          </p>
        </div>
        <!-- Testimonial 3 - Mahmoud -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:translate-y-12 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div class="w-16 h-16 rounded-full flex items-center justify-center bg-tertiary text-black">
              <i class="fa-solid fa-circle-user text-3xl opacity-60"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">يوسف</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            شكرا مستر محمد
            شرح مبسط جدا توصيل المعلومة بكل بساطة سرعة الرد على كل استفسار اعادة الشرح اكتر من مرة بجد استفدت من حضرتك
            جدا
          </p>
        </div>
        <!-- Testimonial 4 - Hoda -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:translate-y-12 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div class="w-16 h-16 rounded-full bg-tertiary flex items-center justify-center text-on-tertiary">
              <i class="fa-solid fa-circle-user text-3xl opacity-80"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">بافلي بركات</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            الصراحة شوفت ال Excel مع حضرتك ف الكورس بطريقة مختلفة 😃 بالتوفيق دايما 👏

          </p>
        </div>
        <!-- Testimonial 5 - Omar -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:-translate-y-4 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="400">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div
              class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-white border border-outline-variant/20">
              <i class="fa-solid fa-circle-user text-3xl opacity-40"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">نورة عبدالوهاب</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            شكرا لك شرح سهل سلس و في المفيد
          </p>
        </div>
        <!-- Testimonial 6 - Laila -->
        <div
          class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 md:translate-y-12 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="500">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div
              class="w-16 h-16 rounded-full bg-secondary-fixed-dim flex items-center justify-center text-on-secondary-container">
              <i class="fa-solid fa-circle-user text-3xl opacity-60"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">محمد جمال</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            شكرا جدا لحضرتك المحاضرة فيها تفاصيل حلوة و مهمة
          </p>
        </div>
        <!-- Testimonial 7 - Youssef -->
        <div
          class="bg-surface-container-low md:col-start-2 p-8 rounded-xl border border-outline-variant/10 md:-translate-y-4 hover:scale-[1.02] transition-all duration-300"
          data-aos="fade-up" data-aos-delay="600">
          <div class="flex items-center gap-4 mb-6 flex-row">
            <div
              class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center text-white border border-tertiary/20">
              <i class="fa-solid fa-circle-user text-3xl opacity-40"></i>
            </div>
            <div class="text-right">
              <h5 class="font-bold">رأفت اسماعيل</h5>
              <div class="text-tertiary flex gap-1 justify-start">
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
                <span class="material-symbols-outlined text-xs" style='font-variation-settings: "FILL" 1;'>star</span>
              </div>
            </div>
          </div>
          <p class="text-on-surface-variant italic text-right leading-relaxed">
            انا عايز اقولك اني استفدت من حضرتك كتير في العمل كتير اكون مش عارف حاجة برجع في الفيديوهات بلاقي حل
            المشكلةياريت يكون هناك كورس جديد نتعلم من حضرتك تاني
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- Section 2: Pricing Section (Redesigned) -->
  <section class="py-24 bg-surface-container-low" id="pricing">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h3 class="text-4xl font-headline font-black text-center mb-16">قيمة الكورس مقابل استثمارك</h3>
      <div class="space-y-8">
        <!-- Main Course Card -->
        <div
          class="bg-surface-container-highest rounded-2xl p-8 pt-16 md:p-12 border-2 border-secondary-container shadow-[0_0_40px_rgba(0,251,251,0.1)] relative overflow-hidden"
          data-aos="zoom-in">
          <div
            class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-6 py-1 rounded-full text-sm font-bold">
            الأكثر طلباً</div>
          <div class="flex flex-col md:flex-row-reverse justify-between items-center gap-6">
            <div class="text-center md:text-left flex flex-col items-center md:items-start">
              <span class="text-4xl font-label text-secondary-container font-black">4,500 EGP</span>
              <span class="text-xl font-label text-on-surface-variant/60 line-through">9,000 EGP</span>
              <span class="bg-error-container text-white text-[10px] px-2 py-0.5 rounded mt-1 font-bold">خصم 50%</span>
            </div>
            <div class="text-right">
              <h4 class="text-3xl md:text-4xl font-black mb-4">كورس Data Analysis Pro الأساسي</h4>
              <p class="text-on-surface-variant text-lg">المنهج المتكامل من الصفر حتى الاحتراف في 20 أسبوع.</p>
            </div>
          </div>
        </div>
        <!-- Bonus Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Bonus 1 -->
          <div
            class="bg-surface-container-high rounded-2xl p-8 border-4 border-outline-variant/20 hover:border-tertiary transition-colors group">
            <div class="flex flex-col h-full">
              <span class="text-4xl mb-4 group-hover:scale-110 transition-transform inline-block">🎁</span>
              <h5 class="text-xl font-bold mb-2">محاضرة كتابة التقارير الاحترافية</h5>
              <p class="text-on-surface-variant text-sm mb-4 leading-relaxed">تعلم كيفية صياغة وتصميم التقارير الإدارية
                والفنية التي تبهر صناع القرار.</p>
              <div class="mt-auto pt-6 flex justify-between items-end flex-row-reverse">
                <span class="text-tertiary font-black text-2xl">مجاناً</span>
                <span class="text-sm line-through opacity-40 font-label">1,500 EGP</span>
              </div>
            </div>
          </div>
          <!-- Bonus 2 -->
          <div
            class="bg-surface-container-high rounded-2xl p-8 border-4 border-outline-variant/20 hover:border-tertiary transition-colors group">
            <div class="flex flex-col h-full">
              <span class="text-4xl mb-4 group-hover:scale-110 transition-transform inline-block">🎁</span>
              <h5 class="text-xl font-bold mb-2">محاضرة مقدمة في Data Science</h5>
              <p class="text-on-surface-variant text-sm mb-4 leading-relaxed">افهم الفرق بين تحليل البيانات وعلم
                البيانات، وتعرف على الأدوات والمسارات المستقبلية.</p>
              <div class="mt-auto pt-6 flex justify-between items-end flex-row-reverse">
                <span class="text-tertiary font-black text-2xl">مجاناً</span>
                <span class="text-sm line-through opacity-40 font-label">1,000 EGP</span>
              </div>
            </div>
          </div>
          <!-- Bonus 3 -->
          <div
            class="bg-surface-container-high rounded-2xl p-8 border-4 border-outline-variant/20 hover:border-tertiary transition-colors group">
            <div class="flex flex-col h-full">
              <span class="text-4xl mb-4 group-hover:scale-110 transition-transform inline-block">🎁</span>
              <h5 class="text-xl font-bold mb-2">Eraa Data Camp البوتكامب العملي</h5>
              <p class="text-on-surface-variant text-sm mb-4 leading-relaxed">تدريب مكثف على مشاريع حقيقية لتطبيق ما
                تعلمته وبناء معرض أعمالك الخاص.</p>
              <div class="mt-auto pt-6 flex justify-between items-end flex-row-reverse">
                <span class="text-tertiary font-black text-2xl">مجاناً</span>
                <span class="text-sm line-through opacity-40 font-label">5,000 EGP</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Total Savings Summary -->
        <div
          class="bg-gradient-to-l from-surface-container-highest to-surface-dim rounded-3xl p-12 text-center border-t-4 border-tertiary shadow-2xl">
          <div class="mb-6 flex flex-col items-center gap-2">
            <span class="text-xl opacity-60">القيمة الإجمالية للمحتوى مع الهدايا: <span
                class="line-through font-label">16,500
                EGP</span></span>
            <div
              class="inline-block bg-error-container text-white px-8 py-2 rounded-full font-black text-xl animate-pulse">
              هتوفر 12,000 جنيه مصري!
            </div>
          </div>
          <div class="text-6xl md:text-9xl font-headline font-black text-white mb-8 leading-tight">4,500 <span
              class="text-3xl md:text-4xl align-middle">EGP</span></div>
          <a href="{{ route('dapro.checkout') }}"
            class="w-full max-w-2xl mx-auto bg-tertiary text-on-tertiary px-8 py-6 rounded-xl font-black text-sm md:text-2xl hover:brightness-110 hover:scale-[1.02] transition-all shadow-[0_20px_40px_rgba(233,196,0,0.2)] block">
            اشترك دلوقتي عشان تستفيد من الخصم
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 8: Meet the Instructor -->
  <section class="py-24 bg-surface-dim" id="instructor">
    <div class="max-w-7xl w-full mx-auto px-6">
      <div class="bg-surface-container-high rounded-3xl overflow-hidden flex flex-col lg:flex-row-reverse">
        <div class="w-full lg:w-2/5 relative">
          <img class="w-full h-full object-cover" data-alt="Mohammad Abdelfattah - Lead Instructor"
            src="{{ asset('images/da-pro-1.jpeg') }}" />
          <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-surface-container-high to-transparent h-32">
          </div>
        </div>
        <div class="w-full lg:w-3/5 p-12 text-right">
          <h2 class="text-4xl font-headline font-black mb-4">م. محمد عبدالفتاح</h2>
          <p class="text-tertiary text-xl font-bold mb-8">خبير تحليل البيانات بخبرة ١٧ عاماً</p>
          <p class="text-on-surface-variant leading-relaxed text-lg mb-8">
            اشتغل في ٢٧ دولة حول العالم، وساعد آلاف الطلاب على دخول مجال البيانات. صاحب قناة يوتيوب تضم أكثر من ١٠٠ ألف
            مشترك مهتم بمجال تحليل البيانات والبيزنس إنتليجنس.
          </p>
          <div class="grid grid-cols-2 md:grid-cols-4 items-center gap-6 mb-12 mt-12">
            <img alt="Cinnabon"
              src="https://cdn.brandfetch.io/idoZDUCAQs/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1667799445101" />
            <img alt="EFS"
              src="https://cdn.brandfetch.io/idUGYozgU1/theme/light/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1769066974423" />
            <img alt="Saint-Gobain"
              src="https://cdn.brandfetch.io/idF7E-qR6-/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1667873606889" />
            <img alt="Alyoum" class="scale-[80%]"
              src="https://cdn.brandfetch.io/idnr4gxlT6/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1688961164022" />
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-12 border-t border-outline-variant/10 pt-12">
            <div class="text-center">
              <div class="text-4xl md:text-7xl font-black text-secondary-container mb-2">17+</div>
              <div class="text-lg opacity-80">سنة خبرة</div>
            </div>
            <div class="text-center">
              <div class="text-4xl md:text-7xl font-black text-secondary-container mb-2">100k+</div>
              <div class="text-lg opacity-80">متابع</div>
            </div>
            <div class="text-center">
              <div class="text-4xl md:text-7xl font-black text-secondary-container mb-2">27</div>
              <div class="text-lg opacity-80">دولة</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Section 3: High Contrast CTA -->
  <section class="py-24 bg-tertiary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 pointer-events-none">
      <div class="absolute top-0 left-0 w-full h-full"
        style="background-image: radial-gradient(circle at 20% 50%, #000 1%, transparent 1%); background-size: 40px 40px;">
      </div>
    </div>
    <div class="max-w-7xl w-full mx-auto px-6 text-center relative z-10">
      <h2 class="text-4xl md:text-7xl font-headline font-black text-on-tertiary mb-8">ابدأ رحلتك للاحتراف فوراً</h2>
      <p class="text-2xl md:text-3xl text-on-tertiary/80 font-bold mb-12 max-w-3xl mx-auto">متخليش الفرصة تفوتك، الاماكن
        المتاحة بالخصم الحالي محدودة جدا!</p>
      <a href="{{ route('dapro.checkout') }}"
        class="bg-surface-dim text-white px-16 py-6 rounded-full font-black text-sm md:text-2xl hover:bg-black transition-all shadow-2xl flex items-center gap-4 mx-auto w-fit">
        <span>سجل الآن و احجز مكانك</span>
        <span class="material-symbols-outlined text-3xl">arrow_back</span>
      </a>
    </div>
  </section>
  <!-- Section 4: Pain Points -->
  <section class="py-24 bg-surface-container">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h2 class="text-4xl font-headline font-bold text-right mb-16">ليه الكورس ده معمول عشانك؟</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
        <div class="p-8 bg-surface-container-low kinetic-border hover:bg-surface-container-high transition-all"
          data-aos="fade-up" data-aos-delay="0">
          <span class="material-symbols-outlined text-tertiary text-4xl mb-4">school</span>
          <h4 class="text-xl font-bold mb-4">خريج وملقتش وظيفة؟</h4>
          <p class="text-on-surface-variant leading-relaxed">سوق العمل محتاج مهارات فعلية مش مجرد شهادة أكاديمية.</p>
        </div>
        <div class="p-8 bg-surface-container-low kinetic-border hover:bg-surface-container-high transition-all"
          data-aos="fade-up" data-aos-delay="100">
          <span class="material-symbols-outlined text-tertiary text-4xl mb-4">psychology</span>
          <h4 class="text-xl font-bold mb-4">حاسس إنه صعب؟</h4>
          <p class="text-on-surface-variant leading-relaxed">بنبسطلك التعقيد وبناخدك من الصفر لحد الاحتراف خطوة بخطوة.
          </p>
        </div>
        <div class="p-8 bg-surface-container-low kinetic-border hover:bg-surface-container-high transition-all"
          data-aos="fade-up" data-aos-delay="200">
          <span class="material-symbols-outlined text-tertiary text-4xl mb-4">work_history</span>
          <h4 class="text-xl font-bold mb-4">تايه في المصادر؟</h4>
          <p class="text-on-surface-variant leading-relaxed">وفرنا عليك تشتت اليوتيوب في منهج واحد متكامل ومرتب.</p>
        </div>
        <div class="p-8 bg-surface-container-low kinetic-border hover:bg-surface-container-high transition-all"
          data-aos="fade-up" data-aos-delay="300">
          <span class="material-symbols-outlined text-tertiary text-4xl mb-4">trending_up</span>
          <h4 class="text-xl font-bold mb-4">عايز تغير مجالك؟</h4>
          <p class="text-on-surface-variant leading-relaxed">تحليل البيانات هو أسرع طريق لمجال واعد ومرتبات مجزية.</p>
        </div>
      </div>
      <div class="text-center">
        <p class="text-2xl font-headline text-secondary-container font-bold">الكورس متصمم مخصوص عشانك وعشان يحللك كل
          المشاكل دي.</p>
      </div>
    </div>
  </section>
  <!-- Section 5: Roadmap -->
  <section class="bg-surface-dim py-24" id="curriculum">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-20">
        <h2 class="text-4xl md:text-6xl font-headline font-black mb-6">خريطة الكورس</h2>
        <p class="text-xl text-on-surface-variant font-bold">١٦ محاضرة تدريبية مكثفة من الصفر للاحتراف</p>
      </div>

      <div class="max-w-4xl mx-auto space-y-6">

        <!-- Stage 1 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-primary transition-all duration-300 shadow-xl"
          data-aos="fade-up">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-primary text-on-primary flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-primary/20">
              ١</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">مقدمة وتحليل البيانات الأساسي</h3>
              <p class="text-primary font-bold text-right">فهم أساسيات البيانات وذكاء الأعمال في إكسل (محاضرة ١-٢)</p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">مفاهيم تحليل البيانات وذكاء الأعمال
                (BI)</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">واجهة إكسل وأنواع البيانات</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">الدوال الأساسية، النصية،
                والمنطقية</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">التنسيق الشرطي (Conditional
                Formatting)</span>
            </div>
          </div>
        </div>

        <!-- Stage 2 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-secondary-container transition-all duration-300 shadow-xl"
          data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-secondary-container text-on-secondary-container flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-secondary-container/20">
              ٢</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">الجداول المحورية والتقارير المتقدمة</h3>
              <p class="text-secondary-container font-bold text-right">تحليل البيانات الضخمة وعرضها بوضوح (محاضرة ٣-٤)
              </p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">احتراف Pivot Tables والحسابات
                المتقدمة</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">استخدام Slicers و Timelines لفلترة
                التقارير</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تصميم الرسوم البيانية وبناء
                الداشبورد</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تطبيقات وأسئلة عملية شاملة</span>
            </div>
          </div>
        </div>

        <!-- Stage 3 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-tertiary transition-all duration-300 shadow-xl"
          data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-tertiary text-on-tertiary flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-tertiary/20">
              ٣</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">أدوات القوة - Power Query & Pivot</h3>
              <p class="text-tertiary font-bold text-right">تنظيف البيانات وبناء نماذج البيانات (محاضرة ٥-٦)</p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">مفهوم الـ ETL وسحب البيانات من مصادر
                مختلفة</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تنظيف وتحويل البيانات بـ Power
                Query</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">مفهوم نماذج البيانات (Data Model)
                والعلاقات</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">استخدام Power Pivot لإدارة
                البيانات</span>
            </div>
          </div>
        </div>

        <!-- Stage 4 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-primary transition-all duration-300 shadow-xl"
          data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-primary text-on-primary flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-primary/20">
              ٤</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">المشروع التطبيقي (Excel Dashboard)</h3>
              <p class="text-primary font-bold text-right">بناء لوحة بيانات مبيعات متكاملة (محاضرة ٧-٨)</p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تنظيف وهيكلة بيانات المبيعات
                الحقيقية</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">حساب الـ KPIs ومؤشرات الأداء
                للأعمال</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">بناء داشبورد تفاعلي بالكامل
                بالسلايسرز</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-primary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تحليل الأداء الإقليمي والمنتجات
                زمنياً</span>
            </div>
          </div>
        </div>

        <!-- Stage 5 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-secondary-container transition-all duration-300 shadow-xl"
          data-aos="fade-up" data-aos-delay="400">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-secondary-container text-on-secondary-container flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-secondary-container/20">
              ٥</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">أساسيات Power BI ونمذجة البيانات</h3>
              <p class="text-secondary-container font-bold text-right">بناء تقارير متطورة في أهم أداة BI في العالم
                (محاضرة ٩-١١)</p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">واجهة Power BI واستيراد وتحويل
                البيانات</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تحويل البيانات المتقدم بـ Power
                Query</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تصميم Data Model (Star Schema)</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-secondary-container">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">بناء الرسوم البيانية التفاعلية
                الأساسية</span>
            </div>
          </div>
        </div>

        <!-- Stage 6 -->
        <div
          class="group bg-surface-container-high rounded-3xl p-8 border border-outline-variant/10 hover:border-tertiary transition-all duration-300 shadow-xl"
          data-aos="fade-up" data-aos-delay="500">
          <div class="flex items-center gap-6 mb-6 flex-row-reverse">
            <div
              class="w-14 h-14 bg-tertiary text-on-tertiary flex items-center justify-center rounded-2xl font-black text-2xl shadow-lg shadow-tertiary/20">
              ٦</div>
            <div class="text-right flex-1">
              <h3 class="text-2xl font-headline font-black mb-2 text-white">التحليل المتقدم ونشر التقارير</h3>
              <p class="text-tertiary font-bold text-right">لغة DAX والحماية ونشر Dashboard (محاضرة ١٢-١٣)</p>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-outline-variant/10 pt-6">
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">أساسيات لغة DAX وكتابة الـ
                Measures</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">تصميم داشبورد احترافي ومتقدم</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">أمن البيانات (Row Level
                Security)</span>
            </div>
            <div class="flex items-center gap-3 flex-row">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-sm font-bold text-on-surface-variant text-right">النشر على Power BI Service
                والمشاركة</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Section 6: Course Format -->
  <section class="py-24 bg-surface-container-low">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h2 class="text-3xl font-headline font-bold text-center mb-16" data-aos="fade-down">نظام الدراسة في الكورس</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div
          class="p-8 bg-surface-container-highest rounded-2xl flex items-center gap-6 flex-row border border-outline-variant/10 group hover:border-tertiary transition-colors"
          data-aos="fade-up">
          <div class="bg-tertiary/10 p-5 rounded-xl group-hover:bg-tertiary transition-colors">
            <i class="fa-solid fa-calendar-days text-tertiary text-4xl group-hover:text-on-tertiary"></i>
          </div>
          <div class="text-right">
            <div class="text-2xl font-black">8 اسابيع</div>
            <div class="text-on-surface-variant text-sm">مدة البرنامج الكاملة</div>
          </div>
        </div>
        <div
          class="p-8 bg-surface-container-highest rounded-2xl flex items-center gap-6 flex-row border border-outline-variant/10 group hover:border-tertiary transition-colors"
          data-aos="fade-up" data-aos-delay="100">
          <div class="bg-tertiary/10 p-5 rounded-xl group-hover:bg-tertiary transition-colors">
            <i class="fa-solid fa-video text-tertiary text-4xl group-hover:text-on-tertiary"></i>
          </div>
          <div class="text-right">
            <div class="text-2xl font-black">16 محاضرة لايف</div>
            <div class="text-on-surface-variant text-sm">تفاعل مباشر مع المدرب</div>
          </div>
        </div>
        <div
          class="p-8 bg-surface-container-highest rounded-2xl flex items-center gap-6 flex-row border border-outline-variant/10 group hover:border-tertiary transition-colors"
          data-aos="fade-up" data-aos-delay="200">
          <div class="bg-tertiary/10 p-5 rounded-xl group-hover:bg-tertiary transition-colors">
            <i class="fa-solid fa-calendar-check text-tertiary text-4xl group-hover:text-on-tertiary"></i>
          </div>
          <div class="text-right">
            <div class="text-2xl font-black">جلستين أسبوعياً</div>
            <div class="text-on-surface-variant text-sm">وتيرة تعليمية متوازنة</div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:flex lg:justify-center gap-6 mb-6">
        <div
          class="p-8 bg-surface-container-highest rounded-2xl flex items-center gap-6 flex-row border border-outline-variant/10 group hover:border-secondary-container transition-colors"
          data-aos="fade-up" data-aos-delay="300">
          <div class="bg-secondary-container/10 p-5 rounded-xl group-hover:bg-secondary-container transition-colors">
            <i
              class="fa-solid fa-diagram-project text-secondary-container text-4xl group-hover:text-on-secondary-container"></i>
          </div>
          <div class="text-right">
            <div class="text-2xl font-black">تطبيقات عملية</div>
            <div class="text-on-surface-variant text-sm">مشاريع كاملة</div>
          </div>
        </div>
        <div
          class="p-8 bg-surface-container-highest rounded-2xl flex items-center gap-6 flex-row border border-outline-variant/10 group hover:border-secondary-container transition-colors"
          data-aos="fade-up" data-aos-delay="400">
          <div class="bg-secondary-container/10 p-5 rounded-xl group-hover:bg-secondary-container transition-colors">
            <i class="fa-solid fa-bolt text-secondary-container text-4xl group-hover:text-on-secondary-container"></i>
          </div>
          <div class="text-right">
            <div class="text-2xl font-black">محتوى اضافي</div>
            <div class="text-on-surface-variant text-sm">محاضرات اضافية حصرية</div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12" data-aos="zoom-in" data-aos-delay="500">
        <a href="{{ route('dapro.checkout') }}"
          class="bg-secondary-container text-on-secondary-container px-12 py-5 rounded-md font-black text-xl hover:scale-105 transition-transform inline-block">
          سجل الآن </a>
      </div>
    </div>
  </section>


  <!-- Section 10: Sample Video (Redesigned into two sub-sections) -->
  <section class="py-24 bg-surface-container-low">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h2 class="text-4xl font-headline font-black text-center mb-20">شوف بنفسك جودة الشرح</h2>
      <!-- Sub-section 1: Text Right / Video Left -->
      <div class="flex flex-col md:flex-row items-center gap-12 mb-24">
        <div class="w-full md:w-1/2 text-right">
          <h3 class="text-3xl font-bold mb-6 text-secondary-container">احتراف Power BI في عرض البيانات</h3>
          <ul class="space-y-4">
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">بناء التقارير التفاعلية (Dashboards) من الصفر.</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">ربط مصادر البيانات المختلفة وتحويلها لنتائج مرئية.</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">تصميم واجهات احترافية تسهل اتخاذ القرار.</span>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/2">
          <div
            class="aspect-video bg-black rounded-2xl flex items-center justify-center group cursor-pointer relative overflow-hidden shadow-2xl border border-outline-variant/20">
            <script src="https://fast.wistia.com/player.js" async></script>
            <script src="https://fast.wistia.com/embed/4gvj5e40wn.js" async type="module"></script>
            <style>
              wistia-player[media-id='4gvj5e40wn']:not(:defined) {
                background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/4gvj5e40wn/swatch');
                display: block;
                filter: blur(5px);
                padding-top: 56.25%;
              }
            </style> <wistia-player media-id="4gvj5e40wn" aspect="1.7777777777777777"></wistia-player>
          </div>
          <p class="text-center mt-4 text-on-surface-variant text-sm italic">مقتطف من كورس Power BI Pro - أساسيات بناء
            التقارير</p>
        </div>
      </div>
      <!-- Sub-section 2: Video Right / Text Left -->
      <div class="flex flex-col md:flex-row-reverse items-center gap-12">
        <div class="w-full md:w-1/2 text-right">
          <h3 class="text-3xl font-bold mb-6 text-secondary-container">تحليل البيانات المتقدم باستخدام DAX</h3>
          <ul class="space-y-4">
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">كتابة معادلات DAX متقدمة للحسابات المعقدة.</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">تنظيف وتجهيز البيانات باستخدام Power Query.</span>
            </li>
            <li class="flex items-center gap-3">
              <span class="material-symbols-outlined text-tertiary">check_circle</span>
              <span class="text-lg">إنشاء نماذج بيانات (Data Modeling) قوية وفعالة.</span>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/2">
          <div
            class="aspect-video bg-black rounded-2xl flex items-center justify-center group cursor-pointer relative overflow-hidden shadow-2xl border border-outline-variant/20">
            <script src="https://fast.wistia.com/player.js" async></script>
            <script src="https://fast.wistia.com/embed/kvhuhy7kjn.js" async type="module"></script>
            <style>
              wistia-player[media-id='kvhuhy7kjn']:not(:defined) {
                background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/kvhuhy7kjn/swatch');
                display: block;
                filter: blur(5px);
                padding-top: 56.25%;
              }
            </style> <wistia-player media-id="kvhuhy7kjn" aspect="1.7777777777777777"></wistia-player>
          </div>
          <p class="text-center mt-4 text-on-surface-variant text-sm italic">مقتطف من كورس Power BI Pro - تحليل البيانات
            المتقدم</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 11: Who Is This For (Redesigned Grid) -->
  <section class="py-24 bg-surface-dim">
    <div class="max-w-7xl w-full mx-auto px-6">
      <h2 class="text-4xl md:text-5xl font-headline font-black text-center mb-16">الكورس ده صُمم خصيصاً ليك لو كنت...
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Card 1 -->
        <div
          class="bg-surface-container-high p-8 rounded-3xl shadow-xl group hover:-translate-y-2 transition-all duration-300 border border-outline-variant/10 flex flex-col items-center text-center"
          data-aos="fade-up">
          <span class="material-symbols-outlined text-6xl text-tertiary mb-6">school</span>
          <h3 class="text-xl font-black mb-3 text-white">طالب أو خريج جديد</h3>
          <p class="text-on-surface-variant leading-relaxed text-sm">عايز تبدأ مستقبلك بمهارة مطلوبة جداً وتضمن وظيفة
            بمرتبات مجزية.</p>
        </div>
        <!-- Card 2 -->
        <div
          class="bg-surface-container-high p-8 rounded-3xl shadow-xl group hover:-translate-y-2 transition-all duration-300 border border-outline-variant/10 flex flex-col items-center text-center"
          data-aos="fade-up" data-aos-delay="100">
          <span class="material-symbols-outlined text-6xl text-tertiary mb-6">leaderboard</span>
          <h3 class="text-xl font-black mb-3 text-white">موظف عايز يطور نفسه</h3>
          <p class="text-on-surface-variant leading-relaxed text-sm">عايز تستخدم قوة البيانات والداشبوردز عشان تترقى في
            شغلك الحالي وتسبق الكل.</p>
        </div>
        <!-- Card 3 -->
        <div
          class="bg-surface-container-high p-8 rounded-3xl shadow-xl group hover:-translate-y-2 transition-all duration-300 border border-outline-variant/10 flex flex-col items-center text-center"
          data-aos="fade-up" data-aos-delay="200">
          <span class="material-symbols-outlined text-6xl text-tertiary mb-6">move_down</span>
          <h3 class="text-xl font-black mb-3 text-white">عاوز تغير مجالك</h3>
          <p class="text-on-surface-variant leading-relaxed text-sm">شغال في مجال تاني وعايز تنقل لمجال البيانات الواعد
            بأقل وقت ومجهود ممكن.</p>
        </div>
        <!-- Card 4 -->
        <div
          class="bg-surface-container-high p-8 rounded-3xl shadow-xl group hover:-translate-y-2 transition-all duration-300 border border-outline-variant/10 flex flex-col items-center text-center"
          data-aos="fade-up" data-aos-delay="300">
          <span class="material-symbols-outlined text-6xl text-tertiary mb-6">person_search</span>
          <h3 class="text-xl font-black mb-3 text-white">مبتدئ بدون خلفية تقنية</h3>
          <p class="text-on-surface-variant leading-relaxed text-sm">معندكش أي خبرة في البرمجة، وعايز تتعلم الأدوات اللي
            تخليك محلل بيانات شاطر.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section 12: Final Price & Urgency (Redesigned) -->
  <section class="py-32 bg-surface-container-highest relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
      <h2 class="text-4xl md:text-6xl font-headline font-black mb-8">جاهز تبدأ النهاردة؟</h2>
      <p class="text-2xl text-secondary-container mb-12">الاماكن المتاحة محدودة جدا!</p>
      <!-- Focal Countdown -->
      <div class="flex justify-center gap-6 md:gap-12 mb-16">
        <div class="flex flex-col items-center">
          <div class="text-6xl md:text-9xl font-black text-white font-label tracking-tighter">02</div>
          <div class="text-sm md:text-xl font-bold text-tertiary mt-2">أيام</div>
        </div>
        <div class="text-4xl md:text-6xl text-white/30 self-start mt-4">:</div>
        <div class="flex flex-col items-center">
          <div class="text-6xl md:text-9xl font-black text-white font-label tracking-tighter">14</div>
          <div class="text-sm md:text-xl font-bold text-tertiary mt-2">ساعات</div>
        </div>
        <div class="text-4xl md:text-6xl text-white/30 self-start mt-4">:</div>
        <div class="flex flex-col items-center">
          <div class="text-6xl md:text-9xl font-black text-white font-label tracking-tighter">45</div>
          <div class="text-sm md:text-xl font-bold text-tertiary mt-2">دقائق</div>
        </div>
      </div>
      <div class="flex flex-col items-center gap-2 mb-8">
        <span class="text-2xl md:text-5xl text-white/40 line-through font-label">16,500 EGP</span>
        <div class="text-6xl md:text-9xl font-headline font-black text-white">4,500 <span class="text-3xl">EGP</span>
        </div>
      </div>
      <a href="{{ route('dapro.checkout') }}"
        class="bg-tertiary text-on-tertiary px-16 py-8 rounded-md font-black text-base md:text-3xl shadow-[0_20px_60px_rgba(233,196,0,0.3)] hover:scale-105 transition-transform duration-300 inline-block">
        سجّل الآن و احجز مكانك 🔥
      </a>
    </div>
  </section>
  <!-- Section 13: FAQs -->
  <section class="py-24 bg-surface-dim" id="faq">
    <div class="max-w-3xl w-full mx-auto px-6">
      <h2 class="text-4xl font-headline font-bold text-center mb-16">الأسئلة الشائعة</h2>
      <div class="space-y-4">
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">مناسب لو معنديش خلفية؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            طبعاً! الكورس بيبدأ معاك من تحت الصفر تماماً، وبناخدك تدريجياً لحد ما تبقى متمكن من كل الأدوات.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="50">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">لو فاتني محاضرة لايف؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            كل الجلسات مسجلة ومتاحة للأبد، تقدر ترجع لها في أي وقت وتشوفها من أي جهاز.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="100">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">هل بحتاج لابتوب بمواصفات معينة؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            أهم حاجة يكون الجهاز بيشغل نظام ويندوز وبمواصفات متوسطة (على الأقل 8 جيجا رام ومعالج i5) عشان تقدر تطبق عملي
            بسهولة.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="150">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">بناخد شهادة في نهاية الكورس؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            نعم، بتحصل على شهادة "إتمام البرنامج التدريبي" من Data Analysis Pro بعد تسليم مشروع التخرج.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="200">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">إيه نظام المتابعة لو واجهتني مشكلة؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            بيكون ليك وصول لجروب واتساب خاص بالدفعة ومتابعة يومية من التيم التقني للرد على أي استفسار أو مشكلة تواجهك
            أثناء التطبيق.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="250">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">هل في مساعدة في تجهيز الـ CV؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            أكيد، في محاضرةز خاصة بنعلمك فيها إزاي تبني الـ CV والـ LinkedIn بتاعك بشكل احترافي يخطف عين الـ Recruiters.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="300">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">ممكن أقسط مصاريف الكورس؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            نعم، بنوفر أنظمة تقسيط مختلفة لتسهيل الاشتراك، تواصل معنا واتساب لمعرفة التفاصيل والأنظمة المتاحة.
          </div>
        </details>
        <details class="group bg-surface-container-low rounded-xl overflow-hidden" data-aos="fade-up"
          data-aos-delay="350">
          <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
            <span class="font-bold text-lg">إيه الأدوات اللي بنتعلمها بالظبط؟</span>
            <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
          </summary>
          <div class="px-6 pb-6 text-on-surface-variant text-right leading-relaxed">
            بنركز على "أقوى" 3 أدوات في السوق حالياً: Excel المتقدم، SQL لإدارة قواعد البيانات، و Power BI لتحليل وعرض
            البيانات.
          </div>
        </details>
      </div>
    </div>
  </section>
  <!-- Floating WhatsApp Button -->
  <a class="fixed bottom-6 left-6 z-[60] bg-[#25D366] text-white w-14 h-14 rounded-full shadow-2xl hover:scale-110 transition-transform animate-bounce flex items-center justify-center border-2 border-white/20"
    href="https://wa.me/201000143085" target="_blank">
    <i class="fa-brands fa-whatsapp text-3xl"></i>
  </a>

  <!-- Section 14: Footer (Redesigned) -->
  <footer class="bg-[#030E20] border-t border-white/5 pt-20 pb-12">
    <div class="max-w-7xl w-full mx-auto px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16 text-right">
        <!-- Navigation Menu -->
        <div class="col-span-1">
          <h4 class="text-white font-bold mb-6">روابط سريعة</h4>
          <ul class="space-y-4 text-on-surface-variant">
            <li><a href="{{ route('dapro.index') }}#" class="hover:text-tertiary transition-colors">الرئيسية</a></li>
            <li><a href="{{ route('dapro.index') }}#roadmap" class="hover:text-tertiary transition-colors">مسار الكورس</a></li>
            <li><a href="{{ route('dapro.index') }}#pricing" class="hover:text-tertiary transition-colors">أسعار الاشتراك</a></li>
            <li><a href="{{ route('dapro.index') }}#instructor" class="hover:text-tertiary transition-colors">تعرف على المدرب</a></li>
            <li><a href="{{ route('dapro.index') }}#testimonials" class="hover:text-tertiary transition-colors">قصص النجاح</a></li>
          </ul>
        </div>
        <!-- Support -->
        <div class="col-span-1">
          <h4 class="text-white font-bold mb-6">الدعم والمساعدة</h4>
          <ul class="space-y-4 text-on-surface-variant">
            <li><a href="{{ route('dapro.index') }}#faq" class="hover:text-tertiary transition-colors">الأسئلة الشائعة</a></li>
            <li><a href="https://wa.me/201000143085" class="hover:text-tertiary transition-colors">تواصل معنا واتساب</a>
            </li>
            <li><a href="{{ route('dapro.privacy') }}" class="hover:text-tertiary transition-colors">سياسة الخصوصية</a></li>
            <li><a href="{{ route('dapro.refund') }}" class="hover:text-tertiary transition-colors">سياسة الاسترجاع</a></li>
            <li><a href="{{ route('dapro.terms') }}" class="hover:text-tertiary transition-colors">شروط الاستخدام</a></li>
          </ul>
        </div>
        <!-- Brand Info -->
        <div class="col-span-1 md:col-span-1">
          <div class="text-2xl font-black text-white mb-6">Data Analysis Pro</div>
          <p class="text-on-surface-variant mb-8 leading-relaxed">
            أول برنامج تعليمي عربي متكامل يهدف لتمكينك من مجال تحليل البيانات بأحدث الأدوات والتقنيات العالمية.
          </p>
          <!-- Social Media Icons -->
          <div class="flex flex-row-reverse gap-4">
            <a class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#1877F2] hover:text-white transition-all hover:-translate-y-1 shadow-lg"
              href="https://www.facebook.com/eraapro" title="Facebook">
              <i class="fa-brands fa-facebook-f text-xl"></i>
            </a>
            <a class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#25D366] hover:text-white transition-all hover:-translate-y-1 shadow-lg"
              href="https://wa.me/201000143085" title="WhatsApp">
              <i class="fa-brands fa-whatsapp text-xl"></i>
            </a>
            <a class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#0A66C2] hover:text-white transition-all hover:-translate-y-1 shadow-lg"
              href="https://www.linkedin.com/company/eraapro/" title="LinkedIn">
              <i class="fa-brands fa-linkedin-in text-xl"></i>
            </a>
            <!-- <a class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#26A5E4] hover:text-white transition-all hover:-translate-y-1 shadow-lg"
              href="#" title="Telegram">
              <i class="fa-brands fa-telegram text-xl"></i>
            </a> -->
          </div>
        </div>
        <!-- Newsletter/Contact -->
        <!-- <div class="col-span-1">
          <h4 class="text-white font-bold mb-6">احصل على تحديثاتنا</h4>
          <p class="text-sm text-on-surface-variant mb-6 leading-relaxed">
            اشترك في القائمة البريدية لتحصل على نصائح أسبوعية في تحليل البيانات.
          </p>
          <div class="flex flex-row-reverse gap-2">
            <input type="email" placeholder="بريدك الإلكتروني" class="bg-white/5 border border-white/10 rounded-lg px-4 py-2 w-full focus:outline-none focus:border-tertiary text-sm">
            <button class="bg-tertiary text-on-tertiary px-4 py-2 rounded-lg font-bold hover:brightness-110 transition-all text-sm">اشترك</button>
          </div>
        </div> -->
      </div>
      <!-- Bottom Footer -->
      <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row-reverse justify-between items-center gap-6">
        <p class="text-on-surface-variant text-sm text-center md:text-right">
          © 2026 Data Analysis Pro. جميع الحقوق محفوظة.
        </p>
        <p class="text-on-surface-variant text-sm text-center md:text-left">
          صنع بكل ❤️ لمجتمع محللي البيانات العربي
        </p>
      </div>
    </div>
  </footer>
  <script>
    AOS.init();
  </script>
</body>

</html>