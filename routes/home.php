<?php 
/**
 * 路由使用范例
 * 所有控制器 访问 均在 app/http/controller/home 下
 *
 * 浏览器地址 输入 localhost 访问以下路由
 * 
 */
// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * 路由使用范例
 * 浏览器地址 输入 网址访问网站首页
 * 
 */
Route::get('/','HomeController@index');

































































































































// 前台注册页
Route::get('/register','UserController@create');

















































// 前台登录
// 跳转到登录页面
Route::get('/login','LoginController@login');
// 登录
Route::post('/dologin','LoginController@dologin');
// 退出
Route::get('/logout','LoginController@logout');
// 手机号登录页面
Route::get('/yzmlogin', 'LoginController@tellogin');
// 手机号登录
Route::get('/teldologin', 'LoginController@teldologin');
Route::get('/yzm', 'LoginController@yzm');

// 手机号短信验证
Route::post('/store','UserController@store');

// 验证码
Route::get('/yzm','UserController@yzm');
