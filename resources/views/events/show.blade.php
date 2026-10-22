@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($event->banner) }}" class="img-fluid rounded border border-warning" alt="{{ $event->name }}">
        </div>
        <div class="col-md-6">
            <h2 class="text-warning fw-bold">{{ $event->name }}</h2>
            <p class="text-muted">Diselenggarakan oleh: <strong>{{ $event->organizer }}</strong></p>
            <hr class="border-warning">
            <p><strong>Lokasi:</strong> {{ $event->location }}</p>
            <p><strong>Tanggal:</strong> {{ $event->date }}</p>
            <p><strong>Waktu:</strong> {{ $event->time }}</p>
            <h4 class="text-success">Rp {{ number_format($event->ticket_price, 0, ',', '.') }}</h4>
            <p class="mt-4">{{ $event->description }}</p>
            <a href="/" class="btn btn-outline-warning mt-3">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection