<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function hitungLuas($alas, $tinggi)
    {
        // Menghitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        // Menampilkan hasil di view
        return view('luas_segitiga', ['luas_segitiga' => $luas]);
    }
}