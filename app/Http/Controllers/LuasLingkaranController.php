<?php

namespace App\Http\Controllers;

class LuasLingkaranController extends Controller
{
    public function hitungLuasLingkaran($radius)
    {
        // Menggunakan nilai pi yang lebih akurat
        $pi = pi();
        $luas = $pi * pow($radius, 2);

        // Tampilkan hasil menggunakan view
        return view('luas-lingkaran', ['radius' => $radius, 'luas' => $luas]);
    }
}