<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Halaman utama — sesuai contoh materi P6:
     * controller mengembalikan view Blade.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mengirim data ke Blade dengan compact().
     */
    public function sapa()
    {
        $nama = 'Andi';

        return view('home', compact('nama'));
    }
}
