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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/test/xml','Test\TestController@xmlTest');







Route::get('/wx','Weixin\WxController@wechat');

Route::post('/wx','Weixin\WxController@receiv');  //接受微信的推送事件