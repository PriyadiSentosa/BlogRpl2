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
            ['nama_pelanggan'=>'Priyadi', 'nama_barang'=>'Honda CRF',
            'qty'=>'200','tgl_pesan'=>'2021-27-10'],
            ['nama_pelanggan'=>'Hadi', 'nama_barang'=>'Yamaha NMAX',
            'qty'=>'210','tgl_pesan'=>'2021-28-10'],
            ['nama_pelanggan'=>'Kidam', 'nama_barang'=>'Yamaha WR',
            'qty'=>'250','tgl_pesan'=>'2021-29-10'],
            ['nama_pelanggan'=>'Gilang', 'nama_barang'=>'Honda Vario',
            'qty'=>'250','tgl_pesan'=>'2021-30-10'],
            ['nama_pelanggan'=>'Jenal', 'nama_barang'=>'Honda Beat',
            'qty'=>'260','tgl_pesan'=>'2021-11-11']


        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
