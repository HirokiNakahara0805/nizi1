<?php

use Illuminate\Support\Facades\Route;

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
//トップページ
Route::get('/', 'TopPageController@show');

//一般教養ページ
Route::get('/general', 'GeneralPageController@show');

//掲示板テストページ
Route::resource('bbs', 'PostsController', ['only' => ['index', 'show', 'create', 'store']]);
Route::resource('comment', 'CommentsController', ['only' => ['store']]);

//掲示板テストページ
Route::get('/bbskari', function () {
    return view('bbskari');
});
//経営学　カテゴリーid1
