@extends('layout.bbslayout')
  
@section('header')



<header class="u2-header">
    <div class="u2-header__container-inner">
        <a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
    </div>
</header>

<div class="u2-global-navbar">
    <ul class="reset-ul row v2-global-navbar__links">
        <li class="u2-global-navbar__link"><a href="#class-sub">classc subject</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
        <li class="u2-global-navbar__link"><a href="#all-bbs">bbs</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
        <li class="u2-global-navbar__link"><a href="#all-bbs">sns</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
        <li class="u2-global-navbar__link"><a href="#all-bbs">about </a><i class="fas fa-angle-double-down nav-arrows"></i></li>
    </ul>
</div>
@endsection
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<!-- <link href="/css/bbs/style.css" rel="stylesheet">  -->
@endsection


 
@section('content')

@if (session('poststatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('poststatus') }}
    </div>
@endif


<!--いいね平均-->
<?php
    $goodss = 0;

    foreach ($goodpost2s as $goodpost2){
        $goodss +=$goodpost2->good;
        }

    $average = round($goodss/$post2s->total(),2);
?>


{{$average}}


<div>
    <ul class="reset-ul row feature-title-box">
        <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-2 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>

<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h4 mb-4 font-weight-bold">
            評価投稿の新規作成
        </h1>
 
        <form method="POST" action="{{ route('evaluation.store') }}">
            @csrf
 
            <fieldset class="mb-4">
 
                <div class="form-group">
                    <label for="name">
                        ニックネーム
                    </label>
                    <input
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        type="text"
                    >
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                <input
                    id="category_id"
                    name="category_id"
                    value = "{{ $category_id }}"
                    class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                    text="text"
                    type="hidden"
                >
                </div>
 
                <div class="form-group">
                    <label for="year">
                        学年
                    </label>
                    <input
                        id="year"
                        name="year"
                        class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
                        value="{{ old('year') }}"
                        type="text"
                    >
                    @if ($errors->has('year'))
                        <div class="invalid-feedback">
                            {{ $errors->first('year') }}
                        </div>
                    @endif
                </div>

                <div class="p-modal-bkm__fav-spinner">
        <label for="good">
                いいね
        </label>
                    <input 
                        id="good"
                        type="number" 
                        step="1" 
                        min="1.0" 
                        max="5.0" 
                        name="good"
                        class="form-control {{ $errors->has('good') ? 'is-invalid' : '' }}"
                        value="{{ old('good') }}"
                        placeholder="-" 
                        maxlength="3" 
                        style="width: 50px; margin-right: 20px; text-align: right;"
                    >
                        <div class="ui-spinner ui-widget">
                            <div class="ui-spinner-buttons" style="height: 31px; left: -16px; top: 0px; width: 16px;">
                                <div class="ui-spinner-up ui-spinner-button ui-state-default ui-corner-tr" style="width: 16px; height: 15.5px;">
                                <span class="ui-icon ui-icon-triangle-1-n" style="margin-left: 0px; margin-top: -0.25px;">&nbsp;
                                </span>
                                </div>
                                <div class="ui-spinner-down ui-spinner-button ui-state-default ui-corner-br" style="width: 16px; height: 15.5px;">
                                <span class="ui-icon ui-icon-triangle-1-s" style="margin-left: 0px; margin-top: -0.25px;">&nbsp;
                                </span>
                            </div>
                        </div>
                    </div>

                    @if ($errors->has('good'))
                        <div class="invalid-feedback">
                            {{ $errors->first('good') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="difficulty">
                        単位取得難易度
                    </label>
                    <input
                        id="difficulty"
                        name="difficulty"
                        class="form-control {{ $errors->has('difficulty') ? 'is-invalid' : '' }}"
                        value="{{ old('difficulty') }}"
                        type="text"
                    >
                    @if ($errors->has('difficulty'))
                        <div class="invalid-feedback">
                            {{ $errors->first('difficulty') }}
                        </div>
                    @endif
                </div>
               
                <div class="form-group">
                    <label for="busyness">
                        忙しさ
                    </label>
                    <input
                        id="busyness"
                        name="busyness"
                        class="form-control {{ $errors->has('busyness') ? 'is-invalid' : '' }}"
                        value="{{ old('busyness') }}"
                        type="text"
                    >
                    @if ($errors->has('busyness'))
                        <div class="invalid-feedback">
                            {{ $errors->first('busyness') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="atmosphere">
                        雰囲気
                    </label>
                    <input
                        id="atmosphere"
                        name="atmosphere"
                        class="form-control {{ $errors->has('atmosphere') ? 'is-invalid' : '' }}"
                        value="{{ old('atmosphere') }}"
                        type="text"
                    >
                    @if ($errors->has('atmosphere'))
                        <div class="invalid-feedback">
                            {{ $errors->first('atmosphere') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="message">
                        コメント
                    </label>
 
                    <textarea
                        id="message"
                        name="message"
                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
 <!--
                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('bbs.index') }}">
                        キャンセル
                    </a>                -->
 
                    <button type="submit" class="">
                      <i class="fas fa-paper-plane post-icon">POST</i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>


 


<div class="mt-4 mb-4 text-center">
    <p>{{ $post2s->total() }}件が見つかりました。</p>
</div>


        <div class="container">
            <div class="table table-hover">

                <div>

                @foreach ($post2s as $post2)

       

                    <div class="comment-box">

                        <div class="evaluation-text">

                                <div><p> 学年{{ $post2->year }}</p></div>
                                <div><p> < 授業名 > </p></div>
                                <div> <p>いいね{{ $post2->good }}</p></div>

                        </div>

                        <div class="evaluation-container  border-top border-bottom">
                             <div class="evaluation-item ">難しさ{{ $post2->difficulty }}</div>
                             <div class="evaluation-item ">雰囲気{{ $post2->atmosphere }}</div>
                             <div class="evaluation-item ">忙しさ{{ $post2->busyness }}</div>
                             

                        </div>
                        
                        <div>
                            <div class="evaluation-message">
                                <p>コメント：{{ $post2->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">投稿日時　{{ $post2->created_at->format('Y.m.d .H:i') }}</div>
                            <div class="f-item float-right">name{{ $post2->name }}</div>
                        </div>
                    </div>

                    @endforeach
                </div>

            </div>
        </div>

<div class="d-flex justify-content-center mb-5">
    {{ $post2s->appends(['category_id' => $category_id])->links() }}
</div>

<p id="page-top" ><a href="#"><i class="fas fa-arrow-up"></i></a></p>

@endsection


@section('footer')
<footer>
        <!-- SNS連携 -->
        <div class="footer-contents .align-middle">
            <a class="footer-logo">Sophia univ.</a>
            <div class="footer-sns d-flex justify-content-around" style="width: 200px;">
                <ul class="sns-lists .text-center	">

                    <li class="sns-item twitter list-inline-item">
                        <a target="_blank" href="https://mobile.twitter.com/8pilotis">

                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>


                    <li class="sns-item youtube list-inline-item">
                        <a target="_blank" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="sns-item instagram list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/8pilotis">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
	

    </footer>
@endsection

 
