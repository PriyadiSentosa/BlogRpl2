<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Priyadi', 'jns_kelamin'=>'Laki-Laki',
            'alamat'=>'Kp.Lampegan','kode_pos'=>40111, 'kota'=>'Bandung','tgl_lahir'=>'2003-12-27'],
            ['nama'=>'Hadi', 'jns_kelamin'=>'Laki-Laki',
            'alamat'=>'Kp.Kebon Kalapa','kode_pos'=>40112, 'kota'=>'Bandung','tgl_lahir'=>'2006-10-08'],
            ['nama'=>'Gilang', 'jns_kelamin'=>'Laki-Laki',
            'alamat'=>'Jln.Junti Girang','kode_pos'=>40113, 'kota'=>'Bandung','tgl_lahir'=>'2003-11-28'],
            ['nama'=>'Jenal', 'jns_kelamin'=>'Laki-Laki',
            'alamat'=>'Kp.Lampegan','kode_pos'=>40114, 'kota'=>'Bandung','tgl_lahir'=>'1987-07-10'],
            ['nama'=>'Kidam', 'jns_kelamin'=>'Laki-Laki',
            'alamat'=>'Jln.Sayuran','kode_pos'=>40115, 'kota'=>'Bandung','tgl_lahir'=>'2003-08-14'],



        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
