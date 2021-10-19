<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Priyadi','alamat'=>'Kp.Lampegan','kode_pos'=>40111, 'kota'=>'Bandung'],
            ['nama'=>'Hadi','alamat'=>'Kp.Kebon Kalapa','kode_pos'=>40112, 'kota'=>'Bandung'],
            ['nama'=>'Gilang','alamat'=>'Jln.Junti Girang','kode_pos'=>40113, 'kota'=>'Bandung'],
            ['nama'=>'Jenal', 'alamat'=>'Kp.Lampegan','kode_pos'=>40114, 'kota'=>'Bandung'],
            ['nama'=>'Kidam','alamat'=>'Jln.Sayuran','kode_pos'=>40115, 'kota'=>'Bandung']
        ];
        DB::table('supliers')->insert($suplier);

    }
}
