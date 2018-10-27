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


Route::group(['prefix' => '/v1', 'namespace' => 'Api'], function(){

  /**
   * Authentication
   * */
  Route::post('/login','AuthController@postLogin');
  // Register
  Route::post('/register','AuthController@postRegister');
  // Protected with APIToken Middleware
  Route::middleware('APIToken')->group(function () {
    // Logout
    Route::post('/logout','AuthController@postLogout');

    /**
     * Restful users api
    * */
    Route::get('users', 'UserController@index');
    Route::get('users/{id}', 'UserController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UserController@destroy');

    /**
     * Restful phong api
     * */
    Route::get('phongs', 'PhongController@index');
    Route::get('phongs/{id}', 'PhongController@show');
    Route::post('phongs', 'PhongController@store');
    Route::put('phongs/{id}', 'PhongController@update');
    Route::delete('phongs/{id}', 'PhongController@destroy');

    /**
     * Restful danh muc api
     * */
    Route::get('danhmucs', 'DanhMucController@index');
    Route::get('danhmucs/{id}', 'DanhMucController@show');
    Route::post('danhmucs', 'DanhMucController@store');
    Route::put('danhmucs/{id}', 'DanhMucController@update');
    Route::delete('danhmucs/{id}', 'DanhMucController@destroy');

    /**
     * Restful loai khach api
     * */
    Route::get('loaikhachs', 'LoaiKhachController@index');
    Route::get('loaikhachs/{id}', 'LoaiKhachController@show');
    Route::post('loaikhachs', 'LoaiKhachController@store');
    Route::put('loaikhachs/{id}', 'LoaiKhachController@update');
    Route::delete('loaikhachs/{id}', 'LoaiKhachController@destroy');

    /**
     * Restful khach luu tru api
     * */
    Route::get('khachluutrus', 'KhachLuuTruController@index');
    Route::get('khachluutrus/{id}', 'KhachLuuTruController@show');
    Route::post('khachluutrus', 'KhachLuuTruController@store');
    Route::put('khachluutrus/{id}', 'KhachLuuTruController@update');
    Route::delete('khachluutrus/{id}', 'KhachLuuTruController@destroy');
    /**
     * Restful dang ky online tru api
     * */
    Route::get('dangkyonlines', 'DangKyOnlineController@index');
    Route::get('dangkyonlines/{id}', 'DangKyOnlineController@show');
    Route::post('dangkyonlines', 'DangKyOnlineController@store');
    Route::put('dangkyonlines/{id}', 'DangKyOnlineController@update');
    Route::delete('dangkyonlines/{id}', 'DangKyOnlineController@destroy');

    Route::get('taisan', 'TaiSanController@index');
    Route::get('taisan/{id}', 'TaiSanController@show');
    Route::post('taisan', 'TaiSanController@store');
    Route::put('taisan/{id}', 'TaiSanController@update');
    Route::delete('taisan/{id}', 'TaiSanController@destroy');
    
  });
});
