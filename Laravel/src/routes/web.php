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

// 管理画面
Route::group(['middleware'=>'admin','prefix' => '/admin', 'as' => 'admin.'], function(){
  // 管理画面トップ
  Route::get('/', 'admin\AdminController@index')->name('index');
  // 商品登録画面
  Route::get('/product/add', 'admin\ProductController@add')->name('product.add');
  // 商品登録処理
  Route::post('/product/list', 'admin\ProductController@addProduct')->name('product.list');
  // 商品詳細画面
  Route::get('/product/detail/{id}','admin\ProductController@detail')->name('product.detail');
  // 商品更新
  Route::post('/product/update/{id}','admin\ProductController@update')->name('product.update');
  // 商品削除
  Route::get('/product/delete/{id}', 'admin\ProductController@delete')->name('product.delete');
  // 商品一覧
  Route::get('/product/list', 'admin\ProductController@list')->name('product.list');
  // お知らせ登録画面
  Route::get('/notification/add', 'admin\NotificationController@add')->name('notification.add');
  // お知らせ登録処理
  Route::post('/notification/list','admin\NotificationController@addNotification')->name('notification.list');
  //　お知らせ詳細画面
  Route::get('/notification/detail/{id}','admin\NotificationController@detail')->name('notification.detail');
  // お知らせ更新
  Route::post('/notification/update/{id}','admin\NotificationController@update')->name('notification.update');
  // お知らせ削除
  Route::get('/notification/delete/{id}','admin\NotificationController@delete')->name('notification.delete');
  // お知らせ一覧
  Route::get('/notification/list', 'admin\NotificationController@list')->name('notification.list');
});

// ユーザー画面
Route::group(['prefix' => '/user', 'as' => 'user.'], function(){
  // ユーザートップ画面
  Route::get('/', 'user\UserController@top')->name('top');
  // ログイン画面
  Route::get('/login/login','LoginController@login')->name('user.login');
  //　ログイン処理
  Route::post('/login/login','LoginController@authenticate')->name('login.check');
  // ログアウト処理
  Route::get('/logout','LoginController@logout')->name('logout');
  // 会員登録画面
  Route::get('/registration/registration','user\UserController@registration')->name('registration.registration');
  // 会員登録内容確認画面
  Route::post('/registration/confirm', 'user\UserController@confirm')->name('registration.confirm');
  // 会員登録
  Route::post('/registration/complete','user\UserController@complete')->name('registration.complete');
  // カテゴリ別
  Route::get('/category/detail/{id}','user\UserController@categoryDetail')->name('category.detail');
  //　商品詳細
  Route::get('/product/detail/{id}','user\UserController@productDetail')->name('product.detail');
  //　お知らせ一覧画面
  Route::get('/notification/list','user\UserController@notificationList')->name('notification.list');
  // お知らせ詳細
  Route::get('/notification/detail/{id}','user\UserController@notificationDetail')->name('notification.detail');
  // お気に入り機能
  Route::post('/product/detail','FavoriteController@toggleFavorite')->name('product.favorite');

});