<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [

            ['nama_pelanggan'=>'Hadi', 'nama_barang'=>'Yamaha NMAX','qty'=>'220', 'tgl_pesan'=>'2021-10-27'],
            ['nama_pelanggan'=>'Kidam', 'nama_barang'=>'Yamaha WR','qty'=>'200','tgl_pesan'=>'2021-10-28'],
            ['nama_pelanggan'=>'Gilang', 'nama_barang'=>'Honda Vario','qty'=>'230','tgl_pesan'=>'2021-10-29'],
            ['nama_pelanggan'=>'Jenal', 'nama_barang'=>'Honda Beat','qty'=>'250','tgl_pesan'=>'2021-11-30'],
            ['nama_pelanggan'=>'Priyadi', 'nama_barang'=>'Honda CRF','qty'=>'210','tgl_pesan'=>'2021-12-27']

        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
