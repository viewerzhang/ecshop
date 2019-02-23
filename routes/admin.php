<?php 
/**
 * 路由使用范例
 * 所有控制器 访问 均在 app/http/controller/admin 下
 *
 * 浏览器地址 输入 localhost/admin/1访问以下路由
 * 
 */
Route::get('/',function (){

    return 'hello!';
});

/**
 * 路由使用范例
 * 浏览器地址 输入 localhost/admin/user访问以下路由
 * 
 */
Route::resource('user','UserController');

//后台框架
Route::get('/index', function () {
    
    return view('layout/admin');
});

//友情链接
Route::get('/links/add','LinksController@create');
Route::get('/links/index','LinksController@index');


// 商品品牌管理路由
Route::post('/goodsbrand/files','GoodsBrandController@files');
Route::resource('/goodsbrand','GoodsBrandController');






































































Route::resource('lunbo','LunboController');


