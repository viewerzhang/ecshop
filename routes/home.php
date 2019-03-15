<?php 
Route::get('/aaa','GoodsOrderController@share');
Route::get('/','HomeController@index');
// 前台注册页
Route::get('/register','UserController@create');
// 前台搜索
Route::get('/search','GoodlistController@search');
// 前台优惠券
Route::get('/coupons','CouponsController@index');
//商品列表页
Route::resource('goodlist','GoodlistController');
//文章列表页
Route::resource('articles','ArticlesController');
// 添加到购物车路由
Route::post('/shoppingcar/caradd','ShoppingCarController@caradd');
// 购物车资源路由
Route::resource('/shoppingcar','ShoppingCarController');
// 订单完成，分享页面
Route::post('/goodsorder/share','GoodsOrderController@share');
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
Route::get('/grzx/balance','UserBalanceController@balance');
// 提交充值
Route::post('/balance','UserBalanceController@index');
// 我的礼品券
Route::get('/coupons/my','CouponsController@my');
// 注意以上路由/circle/**** 只要使用过的 用户昵称不可填 ************************************
// 好友请求页面
Route::get('/circle/fwllowask','CircleController@fwllowask');
// 同意添加好友
Route::get('/circle/agree/{id}','CircleController@agree');
// 好友列表页面
Route::get('/circle/fwllow','CircleController@fwllow');
// 请求添加好友
Route::get('/circle/add/{id}','CircleController@add');
// 删除好友
Route::get('/circle/delete/{id}','CircleController@delete');
// 请求添加好友
Route::get('/circle/add/{id}','CircleController@add');
// 设置购物圈
Route::get('/circle/config','CircleController@config');
// 提交设置
Route::post('/circle/config/{method}','CircleController@doconfig');
// 我的购物圈
Route::resource('/circle','CircleController');
//商品列表页
Route::resource('goodlist','GoodlistController');
// 前台搜索
Route::get('/search','GoodlistController@search');
// 退出
Route::get('/logout','LoginController@logout');
// 手机号登录页面
Route::get('/yzmlogin', 'LoginController@tellogin');
// 手机号登录
Route::get('/teldologin', 'LoginController@teldologin');
Route::post('/yzm', 'LoginController@yzm');
// 手机号短信验证
Route::post('/store','UserController@store');
// 验证码
Route::get('/yzm','UserController@yzm');
// 个人中心
Route::get('/grzx/yzyx','GrzxController@yzyx');
Route::post('/grzx/revisea/{id}','GrzxController@revisea');
Route::put('/grzx/sendcode/{id}','GrzxController@sendcode');
// 个人信息
Route::get('/grzx/grxx', 'GrzxController@grzx');
// 修改手机号
Route::post('/grzx/revise/{id}', 'GrzxController@revise');
// 修改头像
Route::post('/grzx/pic/{id}', 'GrzxController@pic');
// 修改密码
Route::post('/grzx/editpwd/{id}', 'GrzxController@editpwd');
// 修改个人信息
Route::post('/grzx/editgrxx/{id}', 'GrzxController@xgxx');
Route::resource('grzx', 'GrzxController');
// 个人中心资源路由
Route::resource('grzx', 'GrzxController');
// 邮箱验证
Route::resource('email', 'EmailController');
// 回复
Route::resource('reply', 'ReplyController');