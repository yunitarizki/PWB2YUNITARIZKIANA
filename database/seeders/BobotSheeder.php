<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BobotSheeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bobotkriteria')->insert([
            'kriteria' => 'harga',
            'bobot' => '30',
        ]);
        DB::table('bobotkriteria')->insert([
            'kriteria' => 'kualitas',
            'bobot' => '30',
        ]);
        DB::table('bobotkriteria')->insert([
            'kriteria' => 'pilihan_desain',
            'bobot' => '20',
        ]);
        DB::table('bobotkriteria')->insert([
            'kriteria' => 'jarak',
            'bobot' => '10',
        ]);
        DB::table('bobotkriteria')->insert([
            'kriteria' => 'pelayanan',
            'bobot' => '10',
        ]);
    }
}
