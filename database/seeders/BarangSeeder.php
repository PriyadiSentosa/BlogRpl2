<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Honda Vario', 'varian'=>'150CC',
            'harga_beli'=>'23000000','harga_jual'=>'17000000'],
            ['nama'=>'Honda Beat', 'varian'=>'150CC',
            'harga_beli'=>'22000000','harga_jual'=>'15000000'],
            ['nama'=>'Honda CRF', 'varian'=>'150CC',
            'harga_beli'=>'37000000','harga_jual'=>'30000000'],
            ['nama'=>'Yamaha NMAX', 'varian'=>'155CC',
            'harga_beli'=>'32000000','harga_jual'=>'26000000'],
            ['nama'=>'Yamaha WR', 'varian'=>'155CC',
            'harga_beli'=>'38000000','harga_jual'=>'32000000']

        ];
        DB::table('barangs')->insert($barang);
    }
}
