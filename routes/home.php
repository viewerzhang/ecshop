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
// 添加到购物车路由
Route::post('/shoppingcar/caradd','ShoppingCarController@caradd');
// 购物车资源路由
Route::resource('/shoppingcar','ShoppingCarController');

// 订单路由
Route::resource('/goodsorder','GoodsOrderController');

// 用户地址路由
Route::resource('/useraddr','UserAddrController');

// 收藏中心
Route::resource('/goodshouse','GoodsHouseController');

// 历史浏览
Route::get('/goodshistory','GoodsHistoryController@index');
Route::delete('/goodshistory/{id}','GoodsHistoryController@del');

// 个人中心 -- 账户充值
Route::get('/grzx/balance','GrzxController@balance');



































































//商品列表页

Route::resource('goodlist','GoodlistController');




//




































































































// 前台注册页
Route::get('/register','UserController@create');

// 前台搜索
Route::get('/search','GoodlistController@search');















































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
// 个人中心
Route::get('/grzx/grxx', 'GrzxController@grzx');
Route::post('/grzx/revise/{id}', 'GrzxController@revise');
Route::post('/grzx/pic/{id}', 'GrzxController@pic');
Route::post('/grzx/editpwd/{id}', 'GrzxController@editpwd');
Route::post('/grzx/editgrxx/{id}', 'GrzxController@xgxx');
Route::resource('grzx', 'GrzxController');