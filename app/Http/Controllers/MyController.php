<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\Suplier;


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
        // mengambil semua data dari biodata
        $bio = Biodata::all();
        return view('biodata', compact('bio'));
    }

    public function barang()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }

    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }

    public function pembeli()
    {
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }

    public function suplier()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }

    public function singleBarang($id)
    {
        $barang = Barang::findOrFail($id);
        return view('singleBarang', compact('barang'));
    }

    public function singlePembelian($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('singlePembelian', compact('pembelian'));
    }

    public function singlePembeli($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('singlePembeli', compact('pembeli'));
    }

    public function singleSuplier($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('singleSuplier', compact('suplier'));
    }

    public function singlePesanan($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('singlePesanan', compact('pesanan'));
    }
}
