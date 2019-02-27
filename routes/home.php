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
Route::get('/', function () {
    
    return view('layout/home');
});

































































































































// 前台注册页
Route::get('/register','UserController@create');

 ?>