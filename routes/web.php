<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\LoginController;
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



// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'App\Http\Controllers\PegawaiController@index');
// Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');



    // Route::get('/pegawai/lte', 'App\Http\Controllers\PegawaiController@adminlte');


    //item
    Route::get('/', 'App\Http\Controllers\PegawaiController@index');
    Route::get('/tambah', 'App\Http\Controllers\PegawaiController@tambah');
    Route::post('/store', 'App\Http\Controllers\PegawaiController@store');
    Route::put('/update/{id}', 'App\Http\Controllers\PegawaiController@update');
    Route::get('/list_item', 'App\Http\Controllers\PegawaiController@list_item');
    Route::get('/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
    Route::get('/hapus/{id}', 'App\Http\Controllers\PegawaiController@delete');


    //kategori
    // Route::get('/', 'App\Http\Controllers\KategoriController@index');
    Route::get('/kat/tambah', 'App\Http\Controllers\KategoriController@tambah');
    Route::post('/kat/store', 'App\Http\Controllers\KategoriController@store');
    Route::put('/kat/update/{id}', 'App\Http\Controllers\KategoriController@update');
    Route::get('/kat/list_kategori', 'App\Http\Controllers\KategoriController@list_kategori');
    Route::get('/kat/edit/{id}', 'App\Http\Controllers\KategoriController@edit');
    Route::get('/kat/hapus/{id}', 'App\Http\Controllers\KategoriController@delete');


    // proposal
    Route::post('/proposal/store', 'App\Http\Controllers\ProposalController@store');
    Route::get('/proposal/pdf/{id}', 'App\Http\Controllers\ProposalController@pdf');

    Route::post('/proposal/edit/', 'App\Http\Controllers\ProposalController@edit');
    Route::post('/proposal/hapus/', 'App\Http\Controllers\ProposalController@hapus');

    Route::put('/proposal/update/{id}', 'App\Http\Controllers\ProposalController@update');
    

    Route::get('/proposal/pdf/{id}', 'App\Http\Controllers\ProposalController@pdf');
    Route::get('/proposal/pdfnew', 'App\Http\Controllers\ProposalController@pdfnew');
    
    Route::get('/proposal/test_pdf', 'App\Http\Controllers\ProposalController@test_pdf');
    Route::get('/proposal/file', 'App\Http\Controllers\ProposalController@file');

    Route::get('admin/pdfile/{id}', 'App\Http\Controllers\ProposalController@pdfile')->name('pdfile');


    Route::get('/list_proposal', 'App\Http\Controllers\ProposalController@list_proposal');

