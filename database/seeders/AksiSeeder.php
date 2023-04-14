<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('daftar')->insert([
            'nama_percetakan' => 'Yunprint',
            'alamat' => 'jalan cempaka',
            'reting' => '50',
        ]);
    }
}
