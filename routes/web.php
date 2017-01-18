<?php

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

Route::get('/', 'TopsController@index');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'master'], function () {
  Route::get('/login', 'MasterAuth\LoginController@showLoginForm');
  Route::post('/login', 'MasterAuth\LoginController@login');
  Route::post('/logout', 'MasterAuth\LoginController@logout');

  Route::get('/register', 'MasterAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'MasterAuth\RegisterController@register');

  Route::post('/password/email', 'MasterAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'MasterAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'MasterAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'MasterAuth\ResetPasswordController@showResetForm');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
// 問題の広場ページ
Route::get('/exercise', 'ExercisesController@index');
// カテゴリー別のページを閲覧
Route::get('/exercise/{id}', 'ExercisesController@show');
