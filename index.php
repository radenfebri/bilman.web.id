<html lang="id">
  <head>
    <!-- SEO  -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bilman – Aplikasi Billing MikroTik & Manajemen Pelanggan WiFi</title>
    <meta
      name="description"
      content="Bilman adalah aplikasi billing MikroTik untuk pelanggan internet. Cek status pembayaran, tanggal jatuh tempo, paket aktif, dan kirim komplain langsung ke admin — semua data real-time." />
    <meta
      name="keywords"
      content="billing mikrotik, aplikasi billing ISP, cek tagihan internet, billing wifi, billing pelanggan internet, mikrotik billing app, manajemen pelanggan ISP, aplikasi internet rumahan, cek status internet, isolir internet" />
    <meta name="author" content="Bilman" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://bilman.web.id/" />

    <!-- Lang/Localization -->
    <meta http-equiv="content-language" content="id" />
    <link rel="alternate" hreflang="id" href="https://bilman.web.id/" />
    <link rel="alternate" hreflang="x-default" href="https://bilman.web.id/" />

    <!-- OPEN GRAPH (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Bilman" />
    <meta property="og:title" content="Bilman – Aplikasi Billing MikroTik & Manajemen Pelanggan WiFi" />
    <meta
      property="og:description"
      content="Pantau status tagihan, masa aktif, dan paket internet Anda secara real-time. Kirim komplain langsung ke admin tanpa perlu telepon atau buka website." />
    <meta property="og:url" content="https://bilman.web.id/" />
    <meta property="og:image" content="./assets/imgs/logo-ori.png" />
    <meta property="og:image:secure_url" content="./assets/imgs/logo-ori.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Bilman – Aplikasi Billing MikroTik untuk Pelanggan Internet" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@bilman_app" />
    <meta name="twitter:creator" content="@bilman_app" />
    <meta name="twitter:title" content="Bilman – Aplikasi Billing MikroTik & Manajemen Pelanggan WiFi" />
    <meta name="twitter:description" content="Pantau status tagihan, masa aktif, dan paket internet Anda secara real-time. Kirim komplain langsung ke admin." />
    <meta name="twitter:image" content="./assets/imgs/logo-ori.png" />
    <meta name="twitter:image:alt" content="Bilman – Aplikasi Billing MikroTik" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/imgs/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/imgs/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/imgs/favicon.ico" />
    <link rel="manifest" href="/site.webmanifest" />
    <meta name="theme-color" content="#F9FAFB" />
    <meta name="msapplication-TileColor" content="#F9FAFB" />

    <!-- Mobile PWA -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="Bilman" />
    <meta name="application-name" content="Bilman" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Security Guard -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="strict-origin-when-cross-origin" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com" />

    <!-- SCHEMA.ORG JSON-LD (Data Terstruktur) -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "Bilman",
        "alternateName": "Bilman Billing MikroTik",
        "description": "Aplikasi billing MikroTik untuk pelanggan internet. Cek status pembayaran, tanggal jatuh tempo, paket aktif, dan kirim komplain ke admin secara real-time.",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web, Android, iOS",
        "url": "https://yourdomain.com/",
        "inLanguage": "id",
        "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "IDR"
        },
        "featureList": [
          "Cek status pembayaran: LUNAS, BELUM BAYAR, atau ISOLIR",
          "Lihat tanggal jatuh tempo dan masa aktif internet",
          "Informasi paket internet yang sedang digunakan",
          "Halaman komplain langsung ke admin ISP",
          "Data diperbarui otomatis secara real-time"
        ],
        "publisher": {
          "@type": "Organization",
          "name": "Bilman",
          "url": "https://bilman.web.id/"
        }
      }
    </script>

    <!-- Based -->
    <script>
      try {
        if (window.parent && window.parent !== window) {
          window.parent.promotekit_referral = "1fd2949a-d22c-431b-92bf-02d4ad04ee24";
          window.parent.document.cookie = "promotekit_referral=1fd2949a-d22c-431b-92bf-02d4ad04ee24;path=/;domain=.aura.build;max-age=31536000";
        }
      } catch (e) {}
    </script>

    <link id="all-fonts-link-font-manrope" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" />
    <link id="all-fonts-link-font-quicksand" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
      body {
        font-family: "Manrope", sans-serif;
      }
      ::-webkit-scrollbar {
        width: 6px;
      }
      ::-webkit-scrollbar-track {
        background: transparent;
      }
      ::-webkit-scrollbar-thumb {
        background: #e5e7eb;
        border-radius: 10px;
      }
    </style>
  </head>
  <body class="antialiased min-h-screen flex flex-col items-center selection:bg-blue-100 selection:text-blue-900 text-[#111] bg-[#F9FAFB]">
    <!-- Water Effect Overlay Background -->
    <div
      class="aura-background-component fixed top-0 w-full h-screen opacity-50 -z-10 mix-blend-normal"
      data-alpha-mask="50"
      style="
        mask-image: linear-gradient(to bottom, transparent, black 0%, black 50%, transparent);
        -webkit-mask-image: linear-gradient(to bottom, transparent, black 0%, black 50%, transparent);
      ">
      <div class="aura-background-component top-0 w-full -z-10 absolute h-full">
        <div data-us-project="ty3N7ZPaIU7KlWixQFIc" class="absolute w-full h-full left-0 top-0 -z-10"></div>
        <script type="text/javascript">
          !(function () {
            if (!window.UnicornStudio) {
              window.UnicornStudio = { isInitialized: !1 };
              var i = document.createElement("script");
              ((i.src = "https://cdn.jsdelivr.net/gh/hiunicornstudio/unicornstudio.js@v1.4.29/dist/unicornStudio.umd.js"),
                (i.onload = function () {
                  window.UnicornStudio.isInitialized || (UnicornStudio.init(), (window.UnicornStudio.isInitialized = !0));
                }),
                (document.head || document.body).appendChild(i));
            }
          })();
        </script>
      </div>
    </div>

    <!-- Navbar -->
    <nav
      class="flex sticky z-40 transition-all duration-300 bg-[#F9FAFB]/80 w-full max-w-7xl maxWidthContainer border-transparent border-b py-3 px-6 top-0 backdrop-blur-md items-center justify-between">
      <!-- Logo -->
      <a href="#" class="block">
        <img src="./assets/imgs/logo.png" alt="Bilman-Logo" class="w-auto h-9 object-cover" />
      </a>

      <!-- Button -->
      <a
        href="https://play.google.com/store/apps/details?id=com.rasoltek.billing"
        rel="noopener noreferrer"
        target="_blank"
        class="transition-all duration-300 active:scale-95 hover:bg-zinc-800 hover:text-white hover:shadow-[0_0_20px_rgba(0,0,0,0.15)] text-sm font-semibold text-black bg-transparent border-zinc-600 border rounded-full py-1.5 px-5 shadow-none">
        <img src="./assets/imgs/gp.png" alt="googleplay-Logo" class="w-auto h-5 object-cover" />
      </a>
    </nav>

    <!-- MainContent -->
    <main class="md:space-y-20 w-full max-w-7xl maxWidthContainer pt-8 px-6 pb-16 space-y-12">
      <!-- Hero Section -->
      <section class="relative">
        <div class="flex flex-col lg:flex-row lg:items-start gap-8 mb-6 md:mb-16 gap-x-8 gap-y-8 justify-between">
          <!-- Left: Headline -->
          <div class="lg:w-[60%] space-y-4">
            <span class="text-[10px] uppercase text-sm font-semibold text-gray-600 tracking-normal bg-white border-gray-200 border rounded-full pt-0.5 pr-3 pb-0.5 pl-3 shadow-sm"
              >Tersedia di Google Play</span
            >
            <h1 class="leading-[1.1] bg-clip-text md:text-7xl text-5xl font-semibold text-transparent tracking-tighter bg-gradient-to-b from-[#010101] to-[#989898] scale-100">
              Kelola Billing ISP<br />
              <span class="xl:bg-clip-text xl:text-transparent">Tanpa Ribet.</span>
            </h1>
          </div>

          <!-- Right: Subtext & CTA -->
          <div class="lg:w-[35%] flex flex-col lg:items-end lg:text-right text-left py-10 space-y-5 items-center">
            <p class="leading-relaxed text-lg text-gray-500 tracking-tight max-w-md">
              Monitor pembayaran, masa aktif, dan status internet Anda secara real-time dalam satu aplikasi.
            </p>
            <button
              onclick="document.getElementById('why-section').scrollIntoView({ behavior: 'smooth' })"
              class="bg-blue-600 cursor-pointer text-white px-8 py-3 rounded-full text-base font-medium hover:bg-blue-700 transition-all shadow-[0_4px_14px_0_rgba(37,99,235,0.39)] active:scale-95">
              Explore
            </button>
          </div>
        </div>

        <!-- Hero Image -->
        <div class="flex w-full pb-8 relative backdrop-blur-none scale-100 justify-center">
          <!-- Decorative Glow -->
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[70%] h-[80%] bg-blue-100 blur-[90px] rounded-full -z-10 opacity-60 pointer-events-none"></div>

          <img
            src="./assets/imgs/phone.png"
            alt="bilman-mockup"
            class="md:max-w-[500px] lg:max-w-[540px] transform hover:scale-[1.01] transition-transform duration-500 w-full max-w-[340px] object-contain z-10 relative shadow scale-95"
            style="mask-image: linear-gradient(transparent, black 5%, black 75%, transparent)" />

          <!-- Floating Feature Badge 1 -->
          <div class="absolute top-[40%] left-[24%] z-50 animate-bounce duration-[3000ms] hidden md:block">
            <div class="bg-white border-gray-50 border rounded-xl pt-2 pr-3 pb-2 pl-3 flex !scale-[1.75] origin-right transform-gpu gap-x-2 gap-y-2 items-center shadow-lg">
              <div class="text-green-600 bg-green-100 rounded-full pt-1.5 pr-1.5 pb-1.5 pl-1.5 flex">
                <iconify-icon icon="solar:bolt-linear" width="16" height="16"></iconify-icon>
              </div>
              <div class="text-left">
                <div class="text-[10px] leading-tight font-medium text-gray-500">Cepat</div>
                <div class="leading-tight text-xs font-semibold text-gray-900">Mudah Dipakai</div>
              </div>
            </div>
          </div>

          <!-- Floating Feature Badge 2 -->
          <div class="absolute top-[62%] right-[24%] z-50 animate-bounce duration-[3000ms] delay-500 hidden md:block">
            <div class="bg-white border-gray-50 border rounded-xl pt-2 pr-3 pb-2 pl-3 flex !scale-[1.75] origin-left transform-gpu gap-x-2 gap-y-2 items-center shadow-lg">
              <div class="text-blue-600 bg-blue-100 rounded-full pt-1.5 pr-1.5 pb-1.5 pl-1.5 flex">
                <iconify-icon icon="solar:shield-check-linear" width="16" height="16"></iconify-icon>
              </div>
              <div class="text-left">
                <div class="text-[10px] leading-tight font-medium text-gray-500">Keamanan</div>
                <div class="leading-tight text-xs font-semibold text-gray-900">Terjamin</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Section -->
      <section id="why-section" class="flex flex-col items-center">
        <div class="text-center space-y-3 mb-10 max-w-2xl">
          <h2 class="text-3xl font-semibold text-gray-900 tracking-tighter md:text-6xl">Kenapa BilMan?</h2>
          <p class="text-base text-gray-500">Lebih efisien, lebih cepat, tanpa ribet.</p>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 w-full">
          <!-- Card 1 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:users-group-rounded-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Simple Monitoring</h3>
              <p class="text-sm text-gray-500 leading-relaxed">Monitoring pelanggan jadi lebih praktis.</p>
            </div>
            <div class="mt-6 flex flex-col gap-2 relative h-16 justify-end overflow-hidden">
              <div class="flex items-center gap-3 bg-blue-50/60 border border-blue-100/50 p-2 rounded-xl group-hover:translate-x-2 transition-transform duration-500">
                <div class="w-5 h-5 rounded-full bg-blue-200 shrink-0"></div>
                <div class="flex-1 h-1.5 rounded-full bg-blue-200/60"></div>
                <div class="w-10 h-1.5 rounded-full bg-green-400 shrink-0"></div>
              </div>
              <div class="flex items-center gap-3 bg-blue-50/60 border border-blue-100/50 p-2 rounded-xl ml-4 group-hover:translate-x-1 transition-transform duration-500 delay-75">
                <div class="w-5 h-5 rounded-full bg-blue-200 shrink-0"></div>
                <div class="flex-1 h-1.5 rounded-full bg-blue-200/60"></div>
                <div class="w-6 h-1.5 rounded-full bg-blue-300 shrink-0"></div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:clock-circle-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Status Real-time</h3>
              <p class="text-sm text-gray-500 leading-relaxed">Status pembayaran selalu real-time.</p>
            </div>
            <div class="mt-6 flex flex-col items-end justify-center h-16 gap-3 relative">
              <div class="absolute right-[21px] top-2 bottom-0 w-[1px] bg-indigo-100 group-hover:bg-indigo-200 transition-colors"></div>
              <div class="flex items-center gap-3 w-full justify-end z-10 group-hover:-translate-y-1 transition-transform duration-500">
                <div class="w-16 h-1.5 bg-indigo-100 rounded-full"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-indigo-500 ring-4 ring-indigo-50 animate-pulse shrink-0"></div>
              </div>
              <div class="flex items-center gap-3 w-full justify-end z-10 opacity-40">
                <div class="w-24 h-1.5 bg-indigo-100 rounded-full"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-indigo-300 ring-4 ring-white shrink-0"></div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center text-orange-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:document-text-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Transparansi</h3>
              <p class="leading-relaxed text-sm text-gray-500">Kurangi komplain dengan informasi transparan.</p>
            </div>
            <div class="mt-6 flex justify-center overflow-hidden h-16">
              <div
                class="bg-orange-50/80 border border-orange-100 rounded-t-xl w-32 p-3 flex flex-col gap-2.5 translate-y-4 group-hover:translate-y-2 transition-transform duration-500">
                <div class="flex justify-between items-center">
                  <div class="w-10 h-1 bg-orange-200 rounded-full"></div>
                  <div class="w-6 h-1 bg-orange-200 rounded-full"></div>
                </div>
                <div class="flex justify-between items-center">
                  <div class="w-12 h-1 bg-orange-200 rounded-full"></div>
                  <div class="w-8 h-1 bg-orange-200 rounded-full"></div>
                </div>
                <div class="w-full h-px bg-orange-200/60 my-0.5 border-t border-dashed border-orange-300"></div>
                <div class="flex justify-between items-center">
                  <div class="w-8 h-1.5 bg-orange-300 rounded-full"></div>
                  <div class="w-10 h-1.5 bg-orange-400 rounded-full"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center text-cyan-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:magic-stick-3-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Serba Otomatis</h3>
              <p class="text-sm text-gray-500 leading-relaxed">Tidak perlu cek manual atau konfirmasi admin.</p>
            </div>
            <div class="mt-6 flex justify-center items-center h-16">
              <div class="w-16 h-8 bg-zinc-100 rounded-full p-1 relative transition-colors duration-500 group-hover:bg-cyan-100 flex items-center">
                <div
                  class="w-6 h-6 bg-white shadow-sm rounded-full absolute left-1 transition-all duration-500 group-hover:left-[calc(100%-1.75rem)] group-hover:shadow-cyan-500/20 flex items-center justify-center">
                  <iconify-icon
                    icon="solar:check-circle-linear"
                    class="text-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 text-xs"
                    style="stroke-width: 1.5"></iconify-icon>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:smartphone-update-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Fleksibel</h3>
              <p class="text-sm text-gray-500 leading-relaxed">Akses data kapan saja langsung dari aplikasi.</p>
            </div>
            <div class="mt-6 relative h-16 flex items-end justify-center pb-1">
              <!-- Desktop Frame -->
              <div
                class="w-24 h-14 bg-teal-50 border border-teal-100/50 rounded-t-lg absolute bottom-0 shadow-sm translate-x-3 transition-transform duration-500 group-hover:-translate-x-3 overflow-hidden">
                <div class="w-full h-2.5 bg-teal-100/50 border-b border-teal-100/50 flex items-center px-1.5 gap-0.5">
                  <div class="w-1 h-1 rounded-full bg-teal-200"></div>
                  <div class="w-1 h-1 rounded-full bg-teal-200"></div>
                </div>
              </div>
              <!-- Mobile Frame -->
              <div
                class="w-9 h-16 bg-white border border-teal-100 shadow-md rounded-md absolute bottom-0 left-1/2 -translate-x-6 z-10 transition-transform duration-500 group-hover:translate-x-4 p-0.5">
                <div class="w-full h-full bg-teal-50/80 rounded-[4px] flex flex-col gap-1 p-1 items-center pt-2">
                  <div class="w-full h-1 bg-teal-200/70 rounded-sm"></div>
                  <div class="w-2/3 h-1 bg-teal-200/70 rounded-sm"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 6 -->
          <div
            class="bg-white rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col justify-between group hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div class="space-y-3">
              <div class="w-10 h-10 rounded-xl bg-pink-50 flex items-center justify-center text-pink-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:leaf-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <h3 class="text-lg font-semibold tracking-tight text-gray-900">Mudah Digunakan</h3>
              <p class="text-sm text-gray-500 leading-relaxed">Sistem ringan, sederhana, dan mudah digunakan.</p>
            </div>
            <div class="mt-6 flex flex-col justify-center h-16 px-4">
              <div class="w-full h-2 bg-pink-50 rounded-full relative">
                <!-- Progress track -->
                <div class="absolute left-0 top-0 bottom-0 w-1/4 bg-pink-300/80 rounded-full transition-all duration-700 ease-out group-hover:w-full"></div>
                <!-- Dragger handle -->
                <div
                  class="absolute top-1/2 -translate-y-1/2 left-1/4 w-4 h-4 bg-white border border-pink-200 rounded-full shadow-sm transition-all duration-700 ease-out group-hover:left-full group-hover:-translate-x-full flex items-center justify-center">
                  <div class="w-1 h-1 bg-pink-300 rounded-full opacity-0 transition-opacity duration-700 group-hover:opacity-100 delay-300"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Status Section -->
      <section class="bg-white w-full border-gray-100 border rounded-[2.5rem] pt-10 pr-10 pb-10 pl-10 shadow-[0_2px_40px_-10px_rgba(0,0,0,0.04)]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100 text-center gap-x-8 gap-y-8">
          <div class="md:pt-0 pt-4">
            <div class="leading-[1.1] bg-clip-text md:text-7xl text-5xl font-semibold text-transparent tracking-tighter bg-gradient-to-b from-[#010101] to-[#989898] scale-100">
              100%
            </div>
            <div class="uppercase text-sm font-medium text-gray-500 tracking-normal">Real Time Monitoring</div>
          </div>
          <div class="pt-4 md:pt-0">
            <div class="leading-[1.1] bg-clip-text md:text-7xl text-5xl font-semibold text-transparent tracking-tighter bg-gradient-to-b from-[#010101] to-[#989898] scale-100">
              1 APP
            </div>
            <div class="uppercase text-sm font-medium text-gray-500 tracking-tight">Semua Dalam Satu Tempat</div>
          </div>
          <div class="md:pt-0 pt-4">
            <div class="leading-[1.1] bg-clip-text md:text-7xl text-5xl font-semibold text-transparent tracking-tighter bg-gradient-to-b from-[#010101] to-[#989898] scale-100">
              0 RIBET
            </div>
            <div class="uppercase text-sm font-medium text-gray-500 tracking-tight">Tanpa Proses Manual</div>
          </div>
        </div>
      </section>

      <!-- Fitur -->

      <section class="flex flex-col items-center">
        <div class="text-center space-y-3 mb-10 max-w-2xl">
          <h2 class="text-3xl font-semibold text-gray-900 tracking-tighter md:text-6xl">Fitur Utama</h2>
          <p class="text-base text-gray-500">
            Bilman mengintegrasikan penagihan, pembayaran, komunikasi, dan peta jaringan agar proses harian lebih cepat, terlacak, dan dapat ditingkatkan skalanya.
          </p>
        </div>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
          <!-- Large Card -->
          <div
            class="md:col-span-2 md:row-span-2 bg-white rounded-[2rem] p-7 md:p-10 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 group relative overflow-hidden h-full min-h-[400px] hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div
              class="absolute inset-x-0 top-0 h-[2px] bg-blue-500 translate-y-[-100%] group-hover:translate-y-[600px] transition-transform duration-[1.5s] ease-in-out z-10"></div>
            <div class="flex flex-col justify-between h-full relative z-0">
              <div>
                <div class="flex justify-between items-start mb-6">
                  <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:scale-110 transition-transform duration-300">
                    <iconify-icon icon="solar:wi-fi-router-linear" style="font-size: 24px; stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">01</span>
                </div>
                <h3 class="text-sm font-semibold uppercase tracking-wider mb-4 group-hover:text-blue-600 transition-colors text-gray-500">Multi router & tanpa limit user</h3>
                <p class="text-2xl text-gray-900 font-semibold leading-tight tracking-tight max-w-lg">
                  Skalakan operasional tanpa menambah kompleksitas: kelola banyak router/site dalam satu panel, dengan pengguna admin tanpa batas.
                </p>
                <span class="flex items-start gap-x-3 mt-3 opacity-70">
                  <div class="w-1.5 h-1.5 rounded-full bg-zinc-300 mt-2 shrink-0"></div>
                  Terpusat untuk multi-site</span
                >
                <span class="flex items-start gap-x-3 opacity-70">
                  <div class="w-1.5 h-1.5 rounded-full bg-zinc-300 mt-2 shrink-0"></div>
                  Akses tim lebih fleksibel</span
                >
              </div>
              <div class="mt-8 pt-8 border-t border-gray-100 flex gap-4 text-[10px] font-semibold text-gray-400 uppercase tracking-wider">
                <span>ROUTER: INTEGRATED</span>
                <span>UPDATE: REAL-TIME</span>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white flex flex-col justify-between gap-6 rounded-[2rem] p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 group relative overflow-hidden h-64 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div
              class="absolute inset-x-0 top-0 h-[2px] bg-indigo-500 translate-y-[-100%] group-hover:translate-y-[400px] transition-transform duration-[1s] ease-in-out delay-100 z-10"></div>
            <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:smartphone-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <span class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">02</span>
            </div>
            <div class="flex flex-col h-full justify-end">
              <h3 class="text-sm font-semibold uppercase tracking-wider mb-2 group-hover:text-indigo-600 transition-colors text-gray-500">Self Update</h3>
              <p class="text-sm text-gray-500 leading-relaxed">
                Pembaruan sistem lebih efisien dan terkendali, sehingga fitur dan perbaikan dapat diterapkan tanpa mengganggu operasional.
              </p>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white rounded-[2rem] flex flex-col justify-between gap-6 p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.04)] border border-gray-100 group relative overflow-hidden h-64 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-1">
            <div
              class="absolute inset-x-0 top-0 h-[2px] bg-orange-500 translate-y-[-100%] group-hover:translate-y-[400px] transition-transform duration-[1s] ease-in-out delay-200 z-10"></div>
            <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center text-orange-600 group-hover:scale-110 transition-transform duration-300">
                <iconify-icon icon="solar:map-linear" style="font-size: 20px; stroke-width: 1.5"></iconify-icon>
              </div>
              <span class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider">03</span>
            </div>
            <div class="flex flex-col h-full justify-end">
              <h3 class="text-sm font-semibold uppercase tracking-wider mb-2 group-hover:text-orange-600 transition-colors text-gray-500">Mapping</h3>
              <p class="text-sm text-gray-500 leading-relaxed">
                Pemetaan server, OLT, ODP, dan pelanggan untuk memperkuat visibilitas jaringan, pemeliharaan, serta rencana ekspansi.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Harga -->
      <section class="flex flex-col items-center w-full">
        <div class="text-center space-y-4 mb-12 max-w-2xl">
          <h2 class="text-3xl font-medium text-zinc-900 tracking-tighter md:text-5xl">Harga Transparan & Fleksibel</h2>
        </div>

        <div class="w-full max-w-2xl bg-white rounded-[2rem] p-8 md:p-12 shadow-[0_8px_40px_-12px_rgba(0,0,0,0.08)] border border-zinc-200/80 relative overflow-hidden group">
          <!-- Decorative background glow -->
          <div
            class="absolute -top-24 -right-24 w-64 h-64 bg-blue-100/50 blur-[80px] rounded-full pointer-events-none group-hover:bg-blue-200/50 transition-colors duration-700"></div>

          <div class="relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
              <div>
                <h3 class="text-lg font-medium text-blue-600 mb-2 tracking-tight">Bilman — Paket Utama</h3>
                <div class="flex items-baseline gap-x-2">
                  <span class="text-5xl md:text-6xl font-medium tracking-tighter text-zinc-900">Rp35.000</span>
                  <span class="text-base text-zinc-500 font-light">/ router</span>
                </div>
              </div>
            </div>

            <div class="my-8 w-full h-px bg-gradient-to-r from-zinc-200 via-zinc-200 to-transparent"></div>

            <div class="flex flex-col gap-y-6">
              <ul class="space-y-4">
                <li class="flex items-start gap-x-3">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 text-blue-600">
                    <iconify-icon icon="solar:check-circle-linear" class="text-base" style="stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-base text-zinc-700 font-light">Multi-router sesuai kebutuhan</span>
                </li>
                <li class="flex items-start gap-x-3">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 text-blue-600">
                    <iconify-icon icon="solar:check-circle-linear" class="text-base" style="stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-base text-zinc-700 font-light">Tanpa batas admin/operator</span>
                </li>
                <li class="flex items-start gap-x-3">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 text-blue-600">
                    <iconify-icon icon="solar:check-circle-linear" class="text-base" style="stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-base text-zinc-700 font-light">Aplikasi client sudah termasuk</span>
                </li>
                <li class="flex items-start gap-x-3">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 text-blue-600">
                    <iconify-icon icon="solar:check-circle-linear" class="text-base" style="stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-base text-zinc-700 font-light">Sistem terintegrasi (billing–monitoring)</span>
                </li>
                <li class="flex items-start gap-x-3">
                  <div class="mt-0.5 w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center shrink-0 text-blue-600">
                    <iconify-icon icon="solar:check-circle-linear" class="text-base" style="stroke-width: 1.5"></iconify-icon>
                  </div>
                  <span class="text-base text-zinc-700 font-light">Maps titik lokasi (server/OLT/ODP/client) sesuai modul yang digunakan</span>
                </li>
              </ul>

              <!-- Example Box -->
              <div class="mt-2 bg-zinc-50 border border-zinc-200/80 rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-white border border-zinc-200/80 shadow-sm flex items-center justify-center text-zinc-500 shrink-0">
                  <iconify-icon icon="solar:calculator-linear" class="text-xl" style="stroke-width: 1.5"></iconify-icon>
                </div>
                <div>
                  <span class="block text-sm font-medium tracking-tight text-zinc-900 mb-0.5">Contoh Perhitungan:</span>
                  <span class="block text-sm font-light text-zinc-600">3 router = 3 × Rp35.000 = <strong class="font-medium text-zinc-900">Rp105.000</strong></span>
                </div>
              </div>

              <!-- Notes -->
              <div class="mt-2 flex items-start gap-x-2.5 px-1">
                <iconify-icon icon="solar:info-circle-linear" class="text-sm text-zinc-400 shrink-0 mt-0.5" style="stroke-width: 1.5"></iconify-icon>
                <p class="text-sm font-light text-zinc-500 leading-relaxed">
                  <span class="font-medium text-zinc-700 tracking-tight">Add-on (opsional):</span> VPN, WhatsApp Gateway, dan Payment Gateway mengikuti penyedia layanan pihak
                  ketiga.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="text-center pt-2 space-y-6">
        <div class="space-y-2">
          <div
            class="inline-flex text-[10px] uppercase text-xs font-bold text-blue-600 tracking-normal bg-blue-50 border-blue-100 border rounded-full mb-2 pt-1 pr-3 pb-1 pl-3 items-center">
            Official Launching
          </div>
          <h2 class="text-3xl font-semibold text-gray-900 tracking-tighter md:text-6xl">Ayo, Mulai Bergabung!</h2>
          <p class="text-base text-gray-500 max-w-md mx-auto">
            Gunakan Bilman untuk mempermudah monitoring pelanggan, mempercepat proses pembayaran, dan meningkatkan efisiensi operasional Anda.
          </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-3">
          <a
            href="https://play.google.com/store/apps/details?id=com.rasoltek.billing"
            rel="noopener noreferrer"
            target="_blank"
            class="bg-[#111] text-white px-8 py-3 rounded-full text-base font-medium hover:bg-gray-800 transition-all shadow-lg hover:-translate-y-0.5 active:scale-95">
            Download di Google Play
          </a>
          <a
            href="https://wa.me/?text=Halo%20Raden%20Solusi%20Teknologi%2C%20saya%20ingin%20konsultasi%20implementasi%20Bilman%20(Raden%20Solusi%20Teknologi).%0AJumlah%20router%2Fsite%20yang%20akan%20dikelola%3A%20...%0APerkiraan%20pelanggan%3A%20...%0AKebutuhan%20add-on%3A%20VPN%20%2F%20WA%20Sender%20%2F%20Payment%20Gateway%20(pilih%20yang%20diperlukan).%0AMohon%20info%20skema%20implementasi%20dan%20demo."
            rel="noopener noreferrer"
            target="_blank"
            class="bg-blue-600 text-white px-8 py-3 rounded-full text-base font-medium hover:bg-blue-800 transition-all shadow-lg hover:-translate-y-0.5 active:scale-95">
            Konsultasi di WA
          </a>
        </div>
      </section>
    </main>

    <footer class="w-full bg-[#0A0A0A] text-[#F4F4F4] pt-32 pb-8 px-6 relative overflow-hidden">
      <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 bg-gradient-to-b from-blue-600 to-transparent blur-3xl pointer-events-none"></div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-32 mx-auto relative z-10 w-full max-w-7xl maxWidthContainer">
        <div class="lg:col-span-6">
          <h2 class="text-6xl md:text-8xl font-medium tracking-tighter leading-none mb-8">
            Stop ribet<br />
            <span class="text-blue-500">Pakai BilMan.</span>
          </h2>
        </div>
        <div class="lg:col-span-4 lg:col-start-8 flex flex-col justify-between">
          <div class="flex flex-col gap-6">
            <p class="text-neutral-400 text-sm max-w-sm">Kelola pelanggan, pembayaran, dan status layanan dalam satu aplikasi yang terintegrasi.</p>
            <a href="mailto:halo@rasoltek.co.id" class="inline-flex items-center gap-2 text-2xl font-medium tracking-tight hover:text-blue-600 transition-colors">
              halo@rasoltek.co.id
              <iconify-icon icon="solar:arrow-right-up-linear" width="24"></iconify-icon>
            </a>
          </div>

          <div class="mt-16 grid grid-cols-2 gap-8">
            <div class="flex flex-col gap-2">
              <span class="text-xs text-neutral-500 uppercase tracking-wider">Socials</span>
              <a href="https://www.facebook.com/rasoltek.id" rel="noopener noreferrer" target="_blank" class="text-sm hover:text-blue-500 transition-colors">Facebook</a>
              <a href="https://www.instagram.com/rasoltek.id" rel="noopener noreferrer" target="_blank" class="text-sm hover:text-blue-500 transition-colors">Instagram</a>
              <a
                href="https://www.linkedin.com/uas/login?session_redirect=%2Fcompany%2F104416189%2F"
                rel="noopener noreferrer"
                target="_blank"
                class="text-sm hover:text-blue-500 transition-colors"
                >LinkedIn</a
              >
            </div>
            <div class="flex flex-col gap-2">
              <span class="text-xs text-neutral-500 uppercase tracking-wider">Legalitas</span>
              <a href="/kebijakan-privasi" class="text-sm text-neutral-300 hover:text-blue-500 transition-colors">Kebijakan Privasi</a>
              <a href="/syarat-dan-ketentuan" class="text-sm text-neutral-300 hover:text-blue-500 transition-colors">Syarat & Ketentuan</a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="border-t maxWidthContainer w-full max-w-7xl mx-auto border-neutral-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 font-medium tracking-wide uppercase">
        <span>© 2026 BilMan - Seluruh hak cipta dilindungi.</span>

        <span class="mt-4 md:mt-0">RasolTek.</span>
      </div>
    </footer>
  </body>
</html>
