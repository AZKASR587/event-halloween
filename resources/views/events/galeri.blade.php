@extends('layouts.app') <!-- Sesuaikan dengan layout utama kamu jika menggunakan template terpisah -->

@section('content')
<div class="min-h-screen bg-[#0b0c10] text-white py-12 px-6">
    <div class="max-w-7xl mx-auto">
        
        <!-- Header Galeri -->
        <div class="mb-10 text-center md:text-left">
            <div class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-wider text-orange-400 uppercase mb-2">
                <i class="fa-solid fa-images text-lg"></i>
                <span>Dokumentasi Keseruan</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold uppercase tracking-tight text-white">
                🖼️ Galeri Keseruan <span class="text-orange-500">Event</span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base mt-2 max-w-xl">
                Berikut adalah dokumentasi momen-momen seru, kostum terbaik, dan penampilan spesial dari perayaan malam Halloween Community Night.
            </p>
        </div>

        <!-- Grid Kartu Galeri / Dokumentasi -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Dokumentasi 1: Kostum -->
            <div class="bg-black/40 border border-orange-500/20 rounded-2xl p-6 shadow-xl hover:border-orange-500/50 transition flex flex-col justify-between group">
                <div class="h-48 bg-slate-800/50 rounded-xl mb-4 flex items-center justify-center border border-dashed border-gray-700 group-hover:border-orange-500/50 overflow-hidden relative">
                    <!-- Jika ada gambar, bisa dimasukkan tag <img> di sini -->
                    <i class="fa-solid fa-ghost text-4xl text-orange-500/50 group-hover:scale-110 transition"></i>
                </div>
                <div>
                    <span class="text-xs text-orange-400 font-semibold uppercase tracking-wider">Kostum Spesial</span>
                    <h4 class="text-lg font-bold text-white mt-1">Dokumentasi Kostum 1</h4>
                    <p class="text-xs text-gray-400 mt-1">Koleksi kostum paling kreatif, unik, dan menyeramkan dari para peserta.</p>
                </div>
            </div>

            <!-- Dokumentasi 2: Konser / DJ -->
            <div class="bg-black/40 border border-orange-500/20 rounded-2xl p-6 shadow-xl hover:border-orange-500/50 transition flex flex-col justify-between group">
                <div class="h-48 bg-slate-800/50 rounded-xl mb-4 flex items-center justify-center border border-dashed border-gray-700 group-hover:border-orange-500/50 overflow-hidden relative">
                    <i class="fa-solid fa-music text-4xl text-orange-500/50 group-hover:scale-110 transition"></i>
                </div>
                <div>
                    <span class="text-xs text-orange-400 font-semibold uppercase tracking-wider">Panggung & Musik</span>
                    <h4 class="text-lg font-bold text-white mt-1">Dokumentasi Konser / DJ</h4>
                    <p class="text-xs text-gray-400 mt-1">Kemeriahan panggung musik dan penampilan DJ yang memeriahkan malam.</p>
                </div>
            </div>

            <!-- Dokumentasi 3: Trick or Treat -->
            <div class="bg-black/40 border border-orange-500/20 rounded-2xl p-6 shadow-xl hover:border-orange-500/50 transition flex flex-col justify-between group">
                <div class="h-48 bg-slate-800/50 rounded-xl mb-4 flex items-center justify-center border border-dashed border-gray-700 group-hover:border-orange-500/50 overflow-hidden relative">
                    <i class="fa-solid fa-candy-cane text-4xl text-orange-500/50 group-hover:scale-110 transition"></i>
                </div>
                <div>
                    <span class="text-xs text-orange-400 font-semibold uppercase tracking-wider">Aktivitas Komunitas</span>
                    <h4 class="text-lg font-bold text-white mt-1">Dokumentasi Trick or Treat 3</h4>
                    <p class="text-xs text-gray-400 mt-1">Keseruan berburu permen dan interaksi seru antar anggota komunitas.</p>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection