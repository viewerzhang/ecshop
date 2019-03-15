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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 // 后台登录
 Route::get('/admin/login', 'Admin\AdminController@login');
 Route::post('/admin/delogin', 'Admin\AdminController@delogin');
 // 管理员邮箱验证
 Route::get('/admin/yxyx/{email}/{token}/{id}','Admin\AdminController@yxyx');
 // 普通会员验证邮箱
 Route::get('/yxyx/{email}/{token}/{id}','Home\GrzxController@jm');
 // 领取优惠券
 Route::get('/discount/draw/{id}','Home\CouponsController@draw');
// 登录
Route::post('/dologin','Home\LoginController@dologin');
// 前台登录
// 跳转到登录页面
Route::get('/login','Home\LoginController@login');
// 前台注册页
Route::get('/register','Home\UserController@create');
// VIP简介
Route::view('/grzx/vip','home.grzx.vip');