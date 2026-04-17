<html lang="id">

<head>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/imgs/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/imgs/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/imgs/favicon.ico" />
    <meta name="theme-color" content="#F9FAFB" />
    <meta name="msapplication-TileColor" content="#F9FAFB" />

    <script>
        try {
            if (window.parent && window.parent !== window) {
                window.parent.promotekit_referral = "1fd2949a-d22c-431b-92bf-02d4ad04ee24";
                window.parent.document.cookie = "promotekit_referral=1fd2949a-d22c-431b-92bf-02d4ad04ee24;path=/;domain=.aura.build;max-age=31536000";
            }
        } catch (e) {}
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link id="all-fonts-link-font-manrope" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" />
    <link id="all-fonts-link-font-quicksand" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bilman - 404 Halaman Tidak Ditemukan</title>
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
                !(function() {
                    if (!window.UnicornStudio) {
                        window.UnicornStudio = {
                            isInitialized: !1
                        };
                        var i = document.createElement("script");
                        ((i.src = "https://cdn.jsdelivr.net/gh/hiunicornstudio/unicornstudio.js@v1.4.29/dist/unicornStudio.umd.js"),
                            (i.onload = function() {
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
        <a href="/" class="block">
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

    <!-- Main Content (404) -->
    <main class="flex-1 flex flex-col items-center justify-center w-full max-w-7xl px-6 py-24 text-center relative z-10">
        <div class="mb-8 w-20 h-20 rounded-[2rem] bg-white flex items-center justify-center text-blue-600 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-gray-100">
            <iconify-icon icon="solar:planet-3-linear" style="font-size: 40px; stroke-width: 1.5"></iconify-icon>
        </div>

        <h1 class="text-7xl md:text-9xl font-semibold tracking-tighter bg-clip-text text-transparent bg-gradient-to-b from-[#010101] to-[#989898] mb-4 leading-none">404</h1>

        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-gray-900 mb-4">Halaman tidak ditemukan</h2>

        <p class="text-lg text-gray-500 max-w-md mx-auto mb-10 leading-relaxed">Maaf, halaman yang Anda tuju mungkin telah dihapus, dipindahkan, atau tidak pernah ada.</p>

        <a
            href="/"
            class="bg-blue-600 cursor-pointer text-white px-8 py-3 rounded-full text-base font-medium hover:bg-blue-700 transition-all shadow-[0_4px_14px_0_rgba(37,99,235,0.39)] active:scale-95 inline-flex items-center gap-2">
            <iconify-icon icon="solar:arrow-left-linear" width="18" height="18"></iconify-icon>
            Kembali ke Beranda
        </a>
    </main>

    <!-- Footer -->
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
                            class="text-sm hover:text-blue-500 transition-colors">LinkedIn</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="text-xs text-neutral-500 uppercase tracking-wider">Legalitas</span>
                        <a href="/kebijakan-privasi.html" class="text-sm text-neutral-300 hover:text-blue-500 transition-colors">Kebijakan Privasi</a>
                        <a href="/syarat-dan-ketentuan.html" class="text-sm text-neutral-300 hover:text-blue-500 transition-colors">Syarat & Ketentuan</a>
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