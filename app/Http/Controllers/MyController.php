<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;


class MyController extends Controller
{
    public function latihan(){
    $data = "latihan-controller";
    return view('latihan', compact('latihan'));
}

    public function biodata(){

        $nama = "Priyadi Sentosa";
        $ttl = "Bandung 27 Desember 2003";
        $umur = "17 Tahun";
        $alamat = "Kp. Lampegan";
        $asalSekolah = "MTS Yamisa";
        return view('biodata', compact('nama','ttl','umur','alamat','asalSekolah'));
    }

    public function bio()
    {
        $bio = Biodata::all();
        return view('biodata', compact('bio'));
    }
}
