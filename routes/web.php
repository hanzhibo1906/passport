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



Route::get('/login/login','UserController@login');                      //登录视图
Route::post('/login/login_do','UserController@loginDo');                 //登录视图
Route::post('/login/center','UserController@center');                 //个人中心

//注册
Route::get('/register','UserController@register'); //注册视图
Route::post('/regDo','UserController@regDo'); //注册编辑
