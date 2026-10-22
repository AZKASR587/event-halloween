@extends('layouts.app')

@section('content')
<div class="container my-5 text-white">
    <!-- Section Title -->
    <div class="d-flex items-center gap-2 mb-4">
        <h2 class="text-warning fw-bold m-0">🦇 Daftar Kegiatan Utama</h2>
    </div>

    <!-- Grid Events -->
    <div class="row">
        @forelse($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white border-warning h-100 shadow-sm">
                    <img src="{{ asset($event->banner) }}" class="card-img-top" style="height: 180px; object-fit: cover;" alt="{{ $event->name }}">
                    <div class="card-body d-flex flex-column justify-between">
                        <div>
                            <h5 class="card-title text-warning font-bold">{{ $event->name }}</h5>
                            <p class="small text-secondary">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-outline-warning w-100">Detail Event</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-secondary fs-5">Belum ada kegiatan yang terdaftar saat ini.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection