<?php

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

// Route::get('/in', function () {
//     return view('index');
// });

// Route::fallback(function () {
//     return view('not');
// });

// Route::get('mhs/{no}', function ($no) {
//     echo "ini halaman informasi mahasiswa dengan no $no";
// });

// Route::get('/hai/haii/haii', function () {
//     echo "hello every body";
// });
