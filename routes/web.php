<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('units', \App\Http\Controllers\UnitController::class)
    ->middleware('auth');

Route::resource('datagajis', \App\Http\Controllers\DatagajiController::class)
    ->middleware('auth');

// // Data Gaji
// use App\Http\Controllers\DatagajiController; 
// Route::get('/datagajis', [DatagajiController::class, 'index'])->name('datagajis.index')->middleware('auth');
// Route::get('/datagajis/edit/{id}', [DatagajiController::class, 'edit'])->name('datagajis.edit')->middleware('auth');
// Route::post('/datagajis/update/{id}', [DatagajiController::class, 'update'])->name('datagajis.update')->middleware('auth');




Route::resource('proyeksigajis', \App\Http\Controllers\ProyeksigajiController::class)
    ->middleware('auth');

// Route::resource('proyeksigajis', [\App\Http\Controllers\ProyeksigajiController::class. 'spHitungproyeksi'])
//     ->middleware('auth');

Route::resource('pphpembulatans', \App\Http\Controllers\PphpembulatanController::class)
    ->middleware('auth');

Route::resource('penyesuaians', \App\Http\Controllers\PenyesuaianController::class)
    ->middleware('auth');

Route::resource('rapels', \App\Http\Controllers\RapelController::class)
    ->middleware('auth');

Route::resource('mutasimasuks', \App\Http\Controllers\MutasimasukController::class)
    ->middleware('auth');

Route::resource('mutasikeluars', \App\Http\Controllers\MutasikeluarController::class)
    ->middleware('auth');

// // Route::get('/spHitungproyeksi','App\Http\Controllers\ProyeksigajiController@spHitungproyeksi')->name('spHitungproyeksi');
// // Route::get('/cetakProyeksi','App\Http\Controllers\ProyeksigajiController@cetakProyeksi')->name('cetakProyeksi');
// Route::get('/cetakProyeksi', [App\Http\Controllers\ProyeksigajiController::class, 'cetakProyeksi'])->name('cetakProyeksi');
// // Route::get('/create','App\Http\Controllers\ProyeksigajiController@create')->name('create');

Route::resource('proyeksigajis', \App\Http\Controllers\ProyeksigajiController::class)
->middleware('auth');

Route::resource('konfigurasis', \App\Http\Controllers\KonfigurasiController::class)
->middleware('auth');

Route::resource('pelengkaps', \App\Http\Controllers\PelengkapController::class)
->middleware('auth');
