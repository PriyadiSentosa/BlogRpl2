<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Honda Vario', 'nama_supplier'=>'Gilang',
            'qty'=>'230','tgl'=>'2021-10-29'],
            ['nama_barang'=>'Honda CRF', 'nama_supplier'=>'Priyadi',
            'qty'=>'210','tgl'=>'2021-12-27'],
            ['nama_barang'=>'Honda Beat', 'nama_supplier'=>'Jenal',
            'qty'=>'250','tgl'=>'2021-11-30'],
            ['nama_barang'=>'Yamaha NMAX', 'nama_supplier'=>'Hadi',
            'qty'=>'220','tgl'=>'2021-10-27'],
            ['nama_barang'=>'Yamaha WR', 'nama_supplier'=>'Kidam',
            'qty'=>'200','tgl'=>'2021-10-28']


        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
