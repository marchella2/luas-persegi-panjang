<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function index() {
        return view('persegi-panjang.input');
    }

    public function hitung(Request $request) {
        $luas = $request->panjang * $request->lebar;

        return view('persegi-panjang.hasil', compact('luas'));
    }
}
