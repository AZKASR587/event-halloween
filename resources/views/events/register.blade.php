@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <div class="card bg-dark text-white p-4 rounded-4 shadow-lg" style="border: 1px solid #ff751a;">
        <div class="text-center mb-4">
            <span class="fs-1">🎃</span>
            <h3 class="fw-bold text-warning mt-2">FORMULIR PENDAFTARAN EVENT</h3>
            <p class="text-muted small">Amankan tiketmu dan bergabunglah dalam keseraman Halloween Community Night!</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Ubah event.store menjadi events.store -->
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-warning">Nama Lengkap</label>
                <input type="text" class="form-control bg-black text-white border-secondary" id="name" name="name" required placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-warning">Alamat Email</label>
                <input type="email" class="form-control bg-black text-white border-secondary" id="email" name="email" required placeholder="nama@email.com">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label text-warning">Nomor WhatsApp / Telepon</label>
                <input type="text" class="form-control bg-black text-white border-secondary" id="phone" name="phone" required placeholder="08xxxxxxxxxx">
            </div>

            <div class="mb-4">
                <label for="event_id" class="form-label text-warning">Pilih Kegiatan / Event</label>
                <select class="form-select bg-black text-white border-secondary" id="event_id" name="event_id" required>
                    <option value="" selected disabled>-- Pilih Acara --</option>
                    @foreach($events ?? [] as $ev)
                        <option value="{{ $ev->id }}">{{ $ev->name }} (Rp {{ number_format($ev->ticket_price, 0, ',', '.') }})</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-orange w-100 py-2 fw-bold rounded-pill">Kirim Pendaftaran 🦇</button>
            <div class="text-center mt-3">
                <a href="{{ route('events.index') }}" class="text-decoration-none text-muted small">← Kembali ke Beranda</a>
            </div>
        </form>
    </div>
</div>
@endsection