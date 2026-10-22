<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween Community</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0b0813;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            position: relative;
            z-index: 1050;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #ffffff !important;
        }
        .navbar-nav .nav-link {
            color: #cccccc !important;
            font-weight: 500;
            margin: 0 10px;
            cursor: pointer !important;
            pointer-events: auto !important;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #ff751a !important;
        }
        .btn-orange {
            background-color: #ff751a;
            color: #ffffff;
            font-weight: 600;
            border-radius: 30px;
            padding: 8px 22px;
            border: none;
            position: relative;
            z-index: 1050;
            text-decoration: none;
        }
        .btn-orange:hover {
            background-color: #e6640e;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 px-4" style="background-color: #0b0813;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('events.index') }}">
                <span class="fs-3 me-2">🎃</span> 
                <div>
                    <span style="color: #ff751a; display: block; font-size: 18px; line-height: 1;">HALLOWEEN</span>
                    <span style="font-size: 14px; letter-spacing: 2px; color: #fff;">COMMUNITY</span>
                </div>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('events.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('events/about') ? 'active' : '' }}" href="{{ route('events.about') }}">Tentang Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('events/kegiatan') ? 'active' : '' }}" href="{{ route('events.kegiatan') }}">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('events/galeri') ? 'active' : '' }}" href="{{ route('events.galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('events/kontak') ? 'active' : '' }}" href="{{ route('events.kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block">
                <a href="{{ route('events.register') }}" class="btn btn-orange">👤 Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>