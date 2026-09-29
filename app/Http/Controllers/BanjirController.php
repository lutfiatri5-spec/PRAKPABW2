<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    public function form()
    {
        return view('laporbanjir');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('hasilbanjir', [
            'nama' => $nama,
            'lokasi' => $lokasi,
            'tinggi' => $tinggi
        ]);
    }
}