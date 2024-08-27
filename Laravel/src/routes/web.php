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
  // オフィシャルサポーター
  Route::get('/officialsupporter/top', 'user\UserController@officialsupporter')->name('officialsupporter.top');
  // お問い合わせ
  Route::get('/officialsupporter/contact','user\UserController@contact')->name('contact.top');
  // 確認画面
  Route::post('/officialsupporter/confirm','user\UserController@confirm')->name('contact.confirm');
  // 完了画面
  Route::post('/officialsupporter/complete','user\UserController@complete')->name('contact.complete');
});