<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['nama'=>'candra', 'gender'=>'male',
            'bornDate'=>'1998-08-08','weight'=>57,
            'height'=>161],
            ['nama'=>'Priyadi', 'gender'=>'male',
            'bornDate'=>'2003-03-27','weight'=>48,
            'height'=>163]
        ];
        DB::table('biodatas')->insert($bio);
    }
}
