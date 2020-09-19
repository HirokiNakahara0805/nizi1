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
Route::resource('/', 'TopPageController', ['only' => ['index']]);

//一般教養ページ
Route::resource('departmenttop', 'DepartmenttopController', ['only' => ['index','store']]);

//掲示板ページ
Route::resource('bbs', 'PostsController', ['only' => ['index', 'show', 'create', 'store']]);
Route::resource('comment', 'CommentsController', ['only' => ['store']]);


//評価投稿ページ
Route::resource('evaluation', 'Post2sController', ['only' => ['index','create', 'store']]);


//般教Top画面テストページ
Route::resource('subjecttop', 'SubjecttopController', ['only' => ['index']]);

//チャットテストページ
Route::resource('chat', 'ChatsController', ['only' => ['index', 'store']]);

//初めての方へページ
Route::get('/beginnersguide', function () {
    return view('footer.beginnersguide');
});

//運営組織ページ
Route::get('/organization', function () {
    return view('footer.organization');
});

//利用規約ページ
Route::get('/terms', function () {
    return view('footer.terms');
});

//プライバシーポリシーページ
Route::get('/privacypolicy', function () {
    return view('footer.privacypolicy');
});

//コンテンツポリシーページ
Route::get('/contentpolicy', function () {
    return view('footer.contentpolicy');
});

//よくあるご質問ページ
Route::get('/faq', function () {
    return view('footer.faq');
});

//お問い合わせページ
Route::get('/inquiry', function () {
    return view('footer.inquiry');
});

//検索結果を表示する
Route::get('/serchnew','UsersController@serch');

//ユーザー一覧と検索画面
Route::get('/serch','UsersController@index');