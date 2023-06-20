<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert(
            [
                [
                    'Nama' => 'Firman',
                    'NIK' => 8020200026,
                    'jenis_kelamin'=>'Laki-Laki',
                    'tempat_lahir'=>'jambi',
                    'tanggal_lahir'=>'2002-05-02',
                    'alamat'=>'Mayang'
                ]
            ]
        );
    }
}
