<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'yunita rizkiana',
            'email' => 'yunitarizkiana3@gmail.com',
            'password' => Hash::make('admin'),]);
        User::create([
            'name' => 'yunita',
            'email' => 'yunitarizki.stu@pnc.ac.id',
            'password' => Hash::make('admin123'),]);
    }
}