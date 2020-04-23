<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


////////////PETUGAS

Route::post('register', 'PetugasController@register');
Route::post('login', 'petugasController@login');
Route::put('/ubah_petugas/{id}','PetugasController@update');
Route::delete('/hapus_petugas/{id}','PetugasController@hapus');
Route::get('/tampil_petugas','PetugasController@tampil_petugas');
Route::get('/',function(){
    return Auth::user()->level;
});

/////////////CUSTOMER

Route::post('/tambah_cust', 'CustController@store');
Route::put('/ubah_cust/{id}','CustController@update');
Route::delete('/hapus_cust/{id}','CustController@hapus');
Route::get('/tampil_cust','CustController@tampil_cust');
