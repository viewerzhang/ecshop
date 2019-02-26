<?php 
/**
 * 路由使用范例
 * 所有控制器 访问 均在 app/http/controller/admin 下
 *
 * 浏览器地址 输入 localhost/admin/1访问以下路由
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


// 商品品牌图标上传路由
Route::post('/goodsbrand/files','GoodsBrandController@files');

// 商品品牌 状态调整 路由
Route::get('/goodsbrand/editstatus/{id}','GoodsBrandController@editstatus');

// 商品品牌管理路由
Route::resource('/goodsbrand','GoodsBrandController');

/*** 管理员个人中心路由 ***/
// 执行发送修改手机号短信
Route::post('/admin/revise/{id}','AdminController@revise');
// 执行发送修改密码短信
Route::post('/admin/editpwd/{id}','AdminController@editpwd');
// 执行更换头像
Route::post('/admin/pic/{id}','AdminController@pic');
Route::resource('/admin','AdminController');

/*** 分类操作 ***/
Route::resource('/goodscategory','GoodsCategoryController');




































































//轮播图管理
Route::resource('lunbo','LunboController');
//文章管理
Route::resource('articles','ArticlesController');


















































// 广告路由
Route::resource('ad','AdvertisingController');

// 导航路由
Route::resource('nav','NavigationController');















































 Route::view('/index', 'index.index');
