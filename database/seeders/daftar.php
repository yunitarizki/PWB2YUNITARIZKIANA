<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('daftar')->insert([
            'nama_percetakan' => 'Leojaya Printing',
            'alamat' => 'Jl Raya Tritih Lor Jeruklegi Cilacap',
            'reting' => '80',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'Abata Printing Cilacap',
            'alamat'=>'Jl Sulawesi Gunungsimping Cilacap Tengah',
            'reting'=>'85',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'AanCr Sablon & Percetakan Cilacap',
            'alamat'=>'Jl Nyamplung Tritih Kulon Cilacap Utara',
            'reting'=>'78',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'Percetakan Aksara',
            'alamat'=>'Jl Majapahit Raya Tegalkamulyan Cilacap Selatan',
            'reting'=>'75',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'Josh Advertising',
            'alamat'=>'Jl Gatot Subroto Sidanegara Cilacap Tengah',
            'reting'=>'81',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'Mastercom Group',
            'alamat'=>'Jl Kinibalu Sidanegara Cilacap Tengah',
            'reting'=>'70',
        ]);
        DB::table('daftar')->insert([
            'nama_percetakan'=>'New Compress',
            'alamat'=>'Jl Damar Tritih Kulon Cilacap Utara',
            'reting'=>'90',
        ]);
    }
}
