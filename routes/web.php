<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('home', function (){
    return view('main');
});

Route::get('/logout', [ProfileController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::get('/tambahdaftar', [DaftarController::class, 'tambahdaftar']);
Route::post('/insertdaftar', [DaftarController::class, 'insertdaftar'])->name('insertdaftar');

Route::get('/tampilkandata/{id}', [DaftarController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DaftarController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DaftarController::class, 'delete'])->name('delete');

Route::get('/bobot', [BobotController::class, 'index'])->name('bobot');
Route::get('/tambahbobot', [BobotController::class, 'tambahbobot'])->name('tambahbobot');
Route::post('/insertbobot', [BobotController::class, 'insertbobot'])->name('insertbobot');

Route::get('/tampilkanbobot/{id}', [BobotController::class, 'tampilkanbobot'])->name('tampilkanbobot');
Route::post('/updatebobot/{id}', [BobotController::class, 'updatebobot'])->name('updatebobot');

Route::get('/deletebobot/{id}', [BobotController::class, 'deletebobot'])->name('deletebobot');
// Route::get('daftar/{id}', [DaftarController::class, 'logout'])->where('id', '[0-9]+');

// Route::get('/grafik_percetakan', [DaftarController::class, 'grafik'])->name('grafik');

Route::get('/home', [BobotController::class, 'home'])->name('home');

