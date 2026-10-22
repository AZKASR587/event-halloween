@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Kontak -->
    <div class="row justify-content-center text-center mb-4">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Hubungi hollowen</h2>
            <p class="text-muted lead">Punya pertanyaan seputar produk, promo event, atau kerja sama? Silakan hubungi kami melalui informasi di bawah ini.</p>
        </div>
    </div>

    <!-- Event Halloween Special Contact Banner -->
    <div class="card border-0 shadow-lg p-4 mb-5 bg-dark text-white rounded-4 overflow-hidden position-relative" style="background: linear-gradient(135deg, #111111 0%, #3b0944 50%, #d35400 100%);">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-8 mb-3 mb-md-0">
                <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-2 rounded-pill text-uppercase">
                    🎃 Halloween Customer Care
                </span>
                <h4 class="fw-bold text-white mb-2">Layanan Khusus Event Halloween 👻</h4>
                <p class="text-light mb-0 small">
                    Tim CS kami siap melayani pertanyaan seputar <strong>Voucher Promo Halloween</strong>, ketersediaan produk terbatas, hingga kendala pemesanan selama 24/7!
                </p>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <a href="https://wa.me/6281234567890?text=Halo%20Yohan%20Store,%20saya%20ingin%20tanya%20promo%20Halloween" target="_blank" class="btn btn-warning fw-bold px-4 py-2 rounded-pill text-dark shadow-sm">
                    💬 Chat CS Halloween
                </a>
            </div>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Info Kontak Card -->
        <div class="col-md-5">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white rounded-4">
                <h4 class="fw-bold text-primary mb-4">📍 Informasi Kontak</h4>
                
                <div class="mb-3 d-flex align-items-start">
                    <span class="fs-4 me-3">🏢</span>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                        <p class="text-muted mb-0">Jl. Puspitek Raya No. 10, Serpong, Tangerang Selatan</p>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <span class="fs-4 me-3">📧</span>
                    <div>
                        <h6 class="fw-bold mb-1">Email Resmi</h6>
                        <p class="text-muted mb-0">support@yohanstore.com</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <span class="fs-4 me-3">📞</span>
                    <div>
                        <h6 class="fw-bold mb-1">Telepon / WhatsApp</h6>
                        <p class="text-muted mb-0">+62 812-3456-7890</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulir Pesan -->
        <div class="col-md-7">
            <div class="card border-0 shadow-sm p-4 bg-white rounded-4">
                <h4 class="fw-bold text-primary mb-4">💬 Kirim Pesan</h4>
                
                <!-- PERUBAHAN ADA DISINI: Mengarahkan action ke route('events.kontak.store') -->
                <form action="{{ route('events.kontak.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label fw-semibold">Kategori Pesan</label>
                        <select class="form-select" id="subject" name="subject">
                            <option value="Umum">Pertanyaan Umum</option>
                            <option value="Promo Halloween" selected>🎃 Promo & Event Halloween</option>
                            <option value="Kendala Teknis">Kendala Teknis / Produk</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tuliskan pesan atau pertanyaan anda..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection