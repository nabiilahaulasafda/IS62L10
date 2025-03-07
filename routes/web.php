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

// Route::get('/mahasiswa', function () {
// $kelas = "IS62";
// $data = ["bil","bila","bibil","nabila","nabiilah"];

//     // return view('mahasiswa.index')->with ('mhs', $data);
//     return view('mahasiswa.index',compact('kelas','data'));
// });

Route::get('/mahasiswa', function (){
    $nama = "Nabiilah Aula Safda";
    $nilai = 97;

    $nilai2 = [85,70,50,45,90,100];

    return view('mahasiswa', compact('nama', 'nilai', 'nilai2'));
});
