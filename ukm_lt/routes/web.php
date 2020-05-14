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

//route CRUD

//read
Route::get('/member','MemberController@index');

//create
Route::get('/member/tambah','MemberController@tambah');
Route::post('/member/store','MemberController@store');

//update
Route::get('/member/edit/{id}','MemberController@edit');
Route::post('/member/update','MemberController@update');

//delete
Route::get('/member/hapus/{id}','MemberController@hapus');
