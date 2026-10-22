<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function kegiatan()
    {
        // Mengambil semua data event dari database
        $events = Event::all(); 

        // Mengirimkan variabel $events ke view resources/views/events/kegiatan.blade.php
        return view('events.kegiatan', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function create()
    {
        $events = Event::all(); // Ambil data event dari database
        return view('events.register', compact('events'));
    }

    public function store(Request $request)
    {
        // Validasi input data pendaftaran dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'event_id' => 'required|exists:events,id',
        ]);

        // Simpan data pendaftaran (atau sesuaikan dengan Model Pendaftaran/Registration kamu jika ada)
        return redirect()->route('events.register')->with('success', 'Pendaftaran berhasil! Tiket Anda telah diamankan. 🎃');
    }

    // Method galeri yang sebelumnya di luar class, sekarang sudah dipindahkan ke dalam class
    public function galeri()
    {
        return view('events.galeri');
    }
}