<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Warung Makan Lamongan',
            'alamat' => 'Jl. rawasari Timur',
            'telepon' => '082122332706',
            'tipe_nota' => 1, // kecil
            'path_logo' => '/img/logo.png',
        ]);
    }
}
