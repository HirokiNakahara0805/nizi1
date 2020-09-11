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
Route::resource('general', 'GeneralPageController', ['only' => ['index']]);

//掲示板テストページ
Route::resource('bbs', 'PostsController', ['only' => ['index', 'show', 'create', 'store']]);
Route::resource('comment', 'CommentsController', ['only' => ['store']]);

//掲示板テストページ
Route::get('/bbskari', function () {
    return view('bbskari');
});

//評価投稿テストページ
Route::resource('evaluation', 'Post2sController', ['only' => ['index','create', 'store']]);

//シラバステストページ
Route::resource('syllabus', 'SyllabiController', ['only' => ['index']]);

//般教Top画面テストページ
Route::resource('generaltop', 'GeneraltopController', ['only' => ['index']]);

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

