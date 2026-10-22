<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Event - Halloween Community Night</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#0b0c10] text-white font-sans antialiased selection:bg-orange-500 selection:text-white min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="w-full max-w-7xl mx-auto px-6 py-6 flex items-center justify-between z-10 border-b border-orange-500/10">
        <!-- Logo -->
        <a href="{{ route('events.index') }}" class="flex items-center gap-3">
            <span class="text-3xl text-orange-500"><i class="fa-solid fa-jack-o-lantern"></i></span>
            <div class="leading-tight">
                <h1 class="text-lg font-black tracking-wider uppercase text-orange-500">Halloween</h1>
                <p class="text-[10px] tracking-widest font-semibold uppercase text-gray-300">Community</p>
            </div>
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
            <a href="{{ route('events.index') }}" class="text-gray-300 hover:text-orange-400 transition">Beranda</a>
            <a href="{{ route('events.about') }}" class="text-orange-500 border-b-2 border-orange-500 pb-1">Tentang Event</a>
            <a href="{{ route('events.kegiatan') }}" class="text-gray-300 hover:text-orange-400 transition">Kegiatan</a>
            <a href="{{ route('events.galeri') }}" class="text-gray-300 hover:text-orange-400 transition">Galeri</a>
            <a href="{{ route('events.kontak') }}" class="text-gray-300 hover:text-orange-400 transition">Kontak</a>
        </nav>

        <!-- CTA Register Button -->
        <div>
            <a href="{{ route('events.register') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white text-sm font-semibold px-5 py-2 rounded-full shadow-lg shadow-orange-500/20 transition transform hover:-translate-y-0.5">
                <i class="fa-solid fa-user-plus text-xs"></i>
                <span>Daftar Sekarang</span>
            </a>
        </div>
    </header>

    <!-- Content: About Section -->
    <main class="w-full max-w-7xl mx-auto px-6 py-12 my-auto">
        
        <!-- Header Title -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-wider text-orange-400 uppercase mb-3">
                <i class="fa-solid fa-ghost"></i>
                <span>Mengenal Lebih Dekat</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                Tentang <span class="text-orange-500">Halloween Community Night</span>
            </h1>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                Ajang berkumpul tahunan terbesar bagi para pecinta misteri, kostum kreatif, dan keseruan komunitas. Menghadirkan malam tak terlupakan dengan atmosfer yang mendebarkan!
            </p>
        </div>

        <!-- Grid 2 Kolom: Deskripsi & Stat Card -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            
            <!-- Left Column: Story -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-orange-400 flex items-center gap-3">
                    <i class="fa-solid fa-hat-wizard text-xl"></i>
                    <span>Keseruan Malam Penuh Misteri</span>
                </h2>
                <p class="text-gray-300 leading-relaxed text-sm md:text-base">
                    <strong>Halloween Community Night</strong> adalah perayaan komunitas yang dirancang untuk mempererat tali silaturahmi melalui berbagai aktivitas interaktif, kompetisi kostum, pertunjukan seni, hingga permainan berhadiah.
                </p>
                <p class="text-gray-400 leading-relaxed text-sm">
                    Dihadiri oleh ratusan peserta dari berbagai kalangan, acara ini menjadi wadah untuk mengekspresikan kreativitas tanpa batas dalam suasana Halloween yang magis dan menyenangkan.
                </p>

                <!-- Feature Highlights -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-center gap-3 bg-black/40 border border-slate-800 p-3.5 rounded-xl">
                        <i class="fa-solid fa-mask text-orange-500 text-xl"></i>
                        <span class="text-sm font-semibold text-gray-200">Costume Contest</span>
                    </div>
                    <div class="flex items-center gap-3 bg-black/40 border border-slate-800 p-3.5 rounded-xl">
                        <i class="fa-solid fa-music text-orange-500 text-xl"></i>
                        <span class="text-sm font-semibold text-gray-200">Live Music & DJ</span>
                    </div>
                    <div class="flex items-center gap-3 bg-black/40 border border-slate-800 p-3.5 rounded-xl">
                        <i class="fa-solid fa-gamepad text-orange-500 text-xl"></i>
                        <span class="text-sm font-semibold text-gray-200">Fun Spooky Games</span>
                    </div>
                    <div class="flex items-center gap-3 bg-black/40 border border-slate-800 p-3.5 rounded-xl">
                        <i class="fa-solid fa-utensils text-orange-500 text-xl"></i>
                        <span class="text-sm font-semibold text-gray-200">Food & Drink Market</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Info Card Box -->
            <div class="bg-gradient-to-br from-orange-950/30 to-black/80 border border-orange-500/30 backdrop-blur-md rounded-3xl p-8 relative overflow-hidden shadow-2xl">
                <!-- Decorative Glow -->
                <div class="absolute -top-12 -right-12 w-40 h-40 bg-orange-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <h3 class="text-xl font-bold text-white mb-6 border-b border-slate-800 pb-3 flex items-center gap-2">
                    <i class="fa-solid fa-circle-info text-orange-500"></i>
                    <span>Informasi Ringkas Event</span>
                </h3>

                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="bg-orange-500/10 p-3 rounded-xl border border-orange-500/30 text-orange-500 mt-1">
                            <i class="fa-regular fa-calendar-days text-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">Tanggal</p>
                            <p class="text-base font-bold text-white">31 Oktober 2026</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-orange-500/10 p-3 rounded-xl border border-orange-500/30 text-orange-500 mt-1">
                            <i class="fa-regular fa-clock text-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">Waktu</p>
                            <p class="text-base font-bold text-white">20.00 WIB - Selesai</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-orange-500/10 p-3 rounded-xl border border-orange-500/30 text-orange-500 mt-1">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">Lokasi</p>
                            <p class="text-base font-bold text-white">HERE CAFE SERANG</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-orange-500/10 p-3 rounded-xl border border-orange-500/30 text-orange-500 mt-1">
                            <i class="fa-solid fa-ticket text-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">HTM / Tiket</p>
                            <p class="text-base font-bold text-emerald-400">Gratis (Registrasi Wajib)</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-4">
                    <a href="{{ route('events.register') }}" class="block w-full text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded-xl shadow-lg transition">
                        Gabung Bersama Kami
                    </a>
                </div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="w-full border-t border-slate-900 bg-black/60 py-6 text-center text-xs text-gray-500">
        <p>&copy; 2026 Halloween Community Night. All rights reserved.</p>
    </footer>

</body>
</html>