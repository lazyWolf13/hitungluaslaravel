<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function hitungLuas($panjang, $lebar)
    {
        // Menghitung luas persegi panjang
        $luas = $panjang * $lebar;

        // Menampilkan hasil
        return view('luas_persegi_panjang', ['panjang' => $panjang, 'lebar' => $lebar, 'luas' => $luas]);
    }
}
