<!---------------------------GENERAL TOPのページ------------------------------>

@extends('layout.bbslayout')
@section('header')

@foreach($category2s as $category2)
<title>{{ $category2->name }}のTOP - ∞pilotis</title>
@endforeach



<header class="u2-header">
    <div class="u2-header__container-inner">
        <a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
    </div>
</header>

<div class="u2-global-navbar">
    <ul class="reset-ul row v2-global-navbar__links">
        <li class="u2-global-navbar__link"><a href="#evaluation">evaluation</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
        <li class="u2-global-navbar__link"><a href="#all-bbs">bbs</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
    </ul>
</div>
@endsection
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')

@endsection
 
 
@section('content')

<!--いいね平均-->
<?php
    $goodss = 0;

    foreach ($goodpost2s as $goodpost2){
        $goodss +=$goodpost2->good;
        }

    $average = round($goodss/$post2s->total(),2);

     //全体星表示用数値
     $stars = $average*20;
?>


<div class="container general-top-title-frame">

@foreach ($category2s as $category2)
        <div class="row subject-info-top-frame ">
            <p class="col-md-1 subject-info-top"> {{ $category2->department }}</p>
            <p class="col-md-1 subject-info-top"> {{ $category2->period }}</p>
            <p class="col-md-1 subject-info-top"> {{ $category2->time }}</p>
    </div>

                <div class="general-top-title title-star"> 
                    <tr>
                        {{ $category2->name }}
                    </tr>
                    <p>{{$average}}<div class="star-ratings-sprite"><span style="width: {{ $stars }}%" class="star-ratings-sprite-rating"></span></div></p>
                    <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >{{$post2s->total()}}</a>
                </div>
    
    
    <div>
        <div class="row mb-5">
            <p class="col-md-2 subject-info-contents"> {{ $category2->department }}</p>
            <p class="col-md-2 subject-info-contents"> {{ $category2->period }}</p>
            <p class="col-md-2 subject-info-contents"> {{ $category2->time }}</p>
            <p class="col-md-2 subject-info-contents"> {{ $category2->code }}</p>
            <p class="col-md-2 subject-info-contents"> {{ $category2->teacher }}</p>

        </div>


        <div class="row mt-5">
            <div class="col-md-2">
                <p class="subject-info-contents"> {{ $category2->book1 }}</p>
                <p class="subject-info-contents"> {{ $category2->link1 }}</p>
            </div>
            <div class="col-md-2">
                <p class="subject-info-contents"> {{ $category2->book2 }}</p>
                <p class="subject-info-contents"> {{ $category2->link2 }}</p>
            </div>
            <div class="col-md-2">
                <p class="subject-info-contents"> {{ $category2->book2 }}</p>
                <p class="subject-info-contents"> {{ $category2->link2 }}</p>
            </div>
            
           

        </div>
        <div class="row subject-info-comment-frame">
            <p class="col-md-6 subject-info-comment-top">
            {{ $category2->content }}
            </p>
        </div>
    </div>
    @endforeach
</div>


<div>
    <ul class="reset-ul row feature-title-box">
        <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>



        <div class="container">

			<div class="row">

				<div class="col-md-8  top-all-bbs-backgroundcolor"  id="evaluation">

                    <div class="row">
                        <div class="common-btn list-inline-item text-center col-md-3"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" ><p class="mt-2">評価投稿</p></a></div>

                        <div class="newtopic-evaluation col-md-6"><p class="text-center">New post</p></div>
                    </div>


                    @foreach ($evaluations as $evaluation)
                    @if($loop->iteration < 4)


                    <div class="comment-box">

                        <div class="evaluation-text border-bottom mb-5 p-2">
                        @foreach ($generaltops as $generaltop)
                                <div><p> {{ $generaltop->name }}</p></div>
                        @endforeach

                        <p><div class="star-ratings-sprite"><span style="width: {{  $evaluation->good*20 }}%" class="star-ratings-sprite-rating"></span></div></p>

                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">

                                <div>

                                    <div> <p>難しさ{{ $evaluation->difficulty }}</p></div>

                                    <div class="title text-center">レポート</div> <div class=""> <p>{{ $evaluation->report }}</p></div>
                                    <div class="title text-center">テスト</div> <div class=""><p>{{ $evaluation->test }}</p></div>


                                </div>

                        </div>

                        <div>

                            <div class="title text-center">コメント</div>
                            <div class="evaluation-message evaluation-text mb-5 p-2">
                                        
                                <p>{{ $evaluation->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">
                                <div class="f-item float-right">{{ $evaluation->created_at->format('Y.m.d .H:i') }}</div>
                                <div class="f-item float-right">{{ $evaluation->year }}年</div>
                                <div class="f-item float-right">{{ $evaluation->name }}</div>
                        </div>
                                </div>
                    @endif
                    @endforeach


                     <div class="text-center common-btn-ikkoue ">
                         <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" class="common-btn">

                                All post
                          </a>
                    </div>



				</div>

				<div class="col-md-4">
						<a><p class="koukoku-box">教授名</p></a>
						<a><p class="koukoku-box">時限</p></a>
						<a><p class="koukoku-box">参考書リンク</p></a>
						<a><p class="koukoku-box">教授名</p></a>
						<a><p class="koukoku-box">時限</p></a>
                        <a><p class="koukoku-box">参考書リンク</p></a>
                        <a><p class="koukoku-box">教授名</p></a>
						<a><p class="koukoku-box">時限</p></a>
						<a><p class="koukoku-box">参考書リンク</p></a>
				</div>

			</div>

        </div>
        
<div class="container" >

			<div class="row top-all-bbs-backgroundcolor2-bottom">

				<div class="col-md-8 top-all-bbs-backgroundcolor2" id="all-bbs">

                    <div class="row mx-auto" >
                        <div class="common-btn list-inline-item text-center col-md-3"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" ><p class="mt-2">掲示板</p></a></div>

                        <div class="newtopic-evaluation col-md-6"><p class="text-center">New post</p></div>
                    </div>
                    
                    @foreach ($bbss as $bbs)
                    @if($loop->iteration < 6) 
                    <div class="comment-box">
                        <div class="comment-text">{!! nl2br(e(Str::limit($bbs->message, 100))) !!}
                        </div>
                        <div class="">
                            <div class="f-container comment-info border-top">
                                <div class="f-item float-right">{{ $bbs->created_at->format('Y.m.d H:i') }}</div>
                                <div class="f-item float-right">{{ $bbs->name }}</div>
                                <div class="f-item float-right ">{{ $bbs->year }}年</div>

                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                    <div class="text-center common-btn-ikkoue ">
                         <a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" class="common-btn">

                                All post
                          </a>
                    </div>


				</div>

				<div class="col-md-4">
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
						<a><p class="koukoku-box">広告</p></a>
				</div>

			</div>

        </div>

        

            
            <p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>

        <!--CSS読み込み-->
        <link href="{{ asset('css/generaltop.css') }}" rel="stylesheet">
@endsection


@section('footer')
<footer>
        <!-- SNS連携 -->
        <div class="footer-contents .align-middle">

            <a class="footer-logo" href="">∞pilotis</a>

            <div class="footer-sns justify-content-around footer-logo" >
                <div class="sns-lists">

                    <div class="sns-item twitter list-inline-item">
                        <a target="_blank" href="https://mobile.twitter.com/8pilotis">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </div>

                    <div class="sns-item youtube list-inline-item">
                        <a target="_blank" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>

                    <div class="sns-item instagram list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/8pilotis">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
                <div class="link-list">
                <p>
            　　    <a href="terms">利用規約</a>
                   <a href="beginnersguide">初めての方へ</a>
                   <a href="http://127.0.0.1:8000/beginnersguide#beginners-organization">運営組織</a>
                   <a href="contentpolicy">コンテンツポリシー</a>
                   <a href="privacypolicy">プライバシーポリシー</a>
                   <a href="http://127.0.0.1:8000/beginnersguide#beginners-faq">よくある質問</a>
                   <a href="http://127.0.0.1:8000/beginnersguide#beginners-inquiry">お問い合わせ</a>
                </p>

            </div>
            </div>
            
        </div>

      

    </footer>
@endsection

 
<div>
@foreach($categories as $id => $name)
<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
@endforeach
</div>