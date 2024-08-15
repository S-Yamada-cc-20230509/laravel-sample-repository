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

// ユーザー画面
Route::group(['prefix' => '/user', 'as' => 'user.'], function(){
  // ユーザートップ画面
  Route::get('/', 'user\UserController@top')->name('top');
});