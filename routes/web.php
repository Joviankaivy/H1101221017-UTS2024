<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\InputdataController;
use App\Http\Controllers\FormjabatanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LogoutController;
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

Route::get('/',[HomeController::class,'home']);

Route::get('/pegawai',[PegawaiController::class,'index']);

Route::get('/jabatan',[JabatanController::class,'index']);

Route::get('/pendidikan',[PendidikanController::class,'index']);

Route::get('/profil',[ProfilController::class,'index']);

Route::get('/inputdata',[InputdataController::class,'index']);

Route::get('/formjabatan',[FormjabatanController::class,'index']);

Route::get('/logout',[LogoutController::class,'index']);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/inputdata', function () {
    return view('inputdata');
});

Route::get('/jabatan', function () {
    return view('jabatan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/formjabatan', function () {
    return view('formjabatan');
});


Route::get('/logout', function () {
    return view('logout');
});
