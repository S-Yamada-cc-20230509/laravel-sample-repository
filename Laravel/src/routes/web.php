<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailSendController;

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

Route::group(['prefix' => '/auth', 'as' => 'admin.'], function(){
  // 管理者画面
  Route::get('/','admin\AdminController@top')->name('top');
  // news登録画面
  Route::get('/news/add','admin\AdminController@add')->name('news.add');
  // news登録処理
  Route::post('/news/list','admin\AdminController@addNews')->name('addnews');
  // news一覧
  Route::get('/news/list','admin\AdminController@list')->name('news.list');
  // news詳細画面
  Route::get('/news/detail/{id}','admin\AdminController@detail')->name('news.detail');
  // news更新
  Route::post('/news/detail/{id}','admin\AdminController@update')->name('news.update');
});

Route::get('auth/login', function () {
  return view('auth.login');
});

Route::get('auth/register', function () {
  return view('auth.register');
});

Route::get('/email', [MailSendController::class, 'index']);