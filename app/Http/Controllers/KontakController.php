<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Menampilkan halaman kontak (form)
    public function index()
    {
        return view('events.kontak');
    }

    // Memproses pesan yang dikirim dari halaman kontak
    public function store(Request $request)
    {
        // Validasi input form kontak
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // (Opsional) Di sini kamu bisa simpan ke database jika sudah membuat Model & Migration untuk Kontak

        // Redirect kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('events.kontak')->with('success', 'Pesan berhasil dikirim! Terima kasih sudah menghubungi kami.');
    }
}