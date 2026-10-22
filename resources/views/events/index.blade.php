<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween Community Night</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#0b0c10] text-white font-sans antialiased selection:bg-orange-500 selection:text-white">

    <!-- Hero Wrapper dengan Background Gambar -->
    <div class="relative min-h-screen bg-cover bg-center bg-no-repeat flex flex-col justify-between" 
         style="background-image: linear-gradient(to bottom, rgba(11, 12, 16, 0.6), rgba(11, 12, 16, 0.95)), url('{{ asset('/images/hallo ween here cafe.jpeg') }}');">

        <!-- Header / Navbar -->
        <header class="w-full max-w-7xl mx-auto px-6 py-6 flex items-center justify-between z-10">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <span class="text-4xl text-orange-500"><i class="fa-solid fa-jack-o-lantern"></i></span>
                <div class="leading-tight">
                    <h1 class="text-xl font-black tracking-wider uppercase text-orange-500">Halloween</h1>
                    <p class="text-xs tracking-widest font-semibold uppercase text-gray-300">Community</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('events.index') }}" class="text-gray-300 hover:text-orange-400 transition">Beranda</a>
                <a href="{{ route('events.about') }}" class="text-gray-300 hover:text-orange-400 transition">Tentang Event</a>
                <a href="{{ route('events.kegiatan') }}" class="text-gray-300 hover:text-orange-400 transition">Kegiatan</a>
                <a href="{{ route('events.galeri') }}" class="text-gray-300 hover:text-orange-400 transition">Galeri</a>
                <a href="{{ route('events.kontak') }}" class="text-gray-300 hover:text-orange-400 transition">Kontak</a>
            </nav>

            <!-- CTA Register Button -->
            <div>
                <a href="{{ route('events.register') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-semibold px-6 py-2.5 rounded-full shadow-lg shadow-orange-500/20 transition transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-user-plus text-sm"></i>
                    <span>Daftar Sekarang</span>
                </a>
            </div>
        </header>

        <!-- Main Hero Content -->
        <main class="w-full max-w-7xl mx-auto px-6 py-12 my-auto z-10">
            <!-- Tag Subtitle -->
            <div class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-wider text-orange-400 uppercase mb-4">
                <i class="fa-solid fa-hat-wizard text-lg"></i>
                <span>Selamat Datang di Acara Utama</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold uppercase tracking-tight text-white mb-4 leading-none drop-shadow-md">
                Halloween <br>
                <span class="text-orange-500">Community Night</span>
            </h1>

            <!-- Description -->
            <p class="text-gray-300 text-base sm:text-lg max-w-2xl mb-8 leading-relaxed">
                Malam penuh misteri, keseruan, dan kebersamaan komunitas! Nikmati berbagai aktivitas menyeramkan yang mendebarkan.
            </p>

            <!-- Hero Action Buttons -->
            <div class="flex flex-wrap items-center gap-4 mb-8">
                <a href="{{ route('events.kegiatan') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-orange-500 to-amber-600 hover:opacity-90 text-white font-bold px-7 py-3.5 rounded-full shadow-lg transition">
                    <i class="fa-solid fa-arrow-right"></i>
                    <span>Lihat Kegiatan</span>
                </a>
                <a href="{{ route('events.about') }}" class="inline-flex items-center gap-3 bg-black/40 hover:bg-black/60 border border-slate-700 text-white font-semibold px-7 py-3.5 rounded-full backdrop-blur-md transition">
                    <i class="fa-solid fa-circle-info text-sky-400"></i>
                    <span>Info Event</span>
                </a>
            </div>

            <!-- Identitas Pembuat -->
            <div class="inline-block bg-black/40 border border-orange-500/20 backdrop-blur-md rounded-xl px-5 py-3 text-sm text-gray-300">
                <p class="mb-0">Dibuat oleh <strong class="text-white">Azka Syahmi Ramadhan</strong></p>
                <p class="mb-0 text-xs text-orange-400 mt-0.5"><strong class="text-white">251011700012</strong> &bull; <strong class="text-white">03SIFE004</strong></p>
            </div>
        </main>

        <!-- Info Bar (Date, Time, Location) -->
        <div class="w-full max-w-7xl mx-auto px-6 mb-12 z-10">
            <div class="bg-black/50 border border-orange-500/30 backdrop-blur-md rounded-2xl p-6 grid grid-cols-1 md:grid-cols-3 gap-6 divide-y md:divide-y-0 md:divide-x divide-orange-500/20 shadow-2xl">
                
                <!-- Date -->
                <div class="flex items-center gap-4 pt-4 md:pt-0">
                    <div class="bg-orange-500/10 p-3.5 rounded-xl border border-orange-500/30 text-orange-500 text-2xl">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white">31 Oktober 2026</h4>
                        <p class="text-xs text-gray-400">Tanggal Pelaksanaan</p>
                    </div>
                </div>

                <!-- Time -->
                <div class="flex items-center gap-4 pt-4 md:pt-0 md:pl-6">
                    <div class="bg-orange-500/10 p-3.5 rounded-xl border border-orange-500/30 text-orange-500 text-2xl">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white">20.00 WIB</h4>
                        <p class="text-xs text-gray-400">Waktu Mulai</p>
                    </div>
                </div>

                <!-- Location -->
                <div class="flex items-center gap-4 pt-4 md:pt-0 md:pl-6">
                    <div class="bg-orange-500/10 p-3.5 rounded-xl border border-orange-500/30 text-orange-500 text-2xl">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white">here cafe</h4>
                        <p class="text-xs text-gray-400">Lokasi Acara</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section Separator -->
        <div class="w-full max-w-3xl mx-auto px-6 pb-8 flex items-center gap-4 z-10">
            <div class="h-0.5 flex-1 bg-gradient-to-r from-transparent to-orange-500"></div>
            <div class="flex items-center gap-2 text-orange-500 font-extrabold tracking-widest uppercase text-lg">
                <i class="fa-solid fa-jack-o-lantern"></i>
                <span>Keseruan Malam <span class="text-orange-400">Halloween</span></span>
            </div>
            <div class="h-0.5 flex-1 bg-gradient-to-l from-transparent to-orange-500"></div>
        </div>

    </div>

</body>
</html>