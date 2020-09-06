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

@endsection
 
 
@section('content')

<div>
@foreach ($generaltops as $generaltop)
            <tr>
                {{ $generaltop->name }}
            </tr>
@endforeach
</div>



<span class="btn"></span>


<div>
    <ul class="reset-ul row feature-title-box">
        <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>
<div>
@foreach($categories as $id => $name)
<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
@endforeach
</div>


<div class="container" id="all-bbs">

			<div class="row">

				<div class="col-md-8 text-center top-all-bbs-backgroundcolor">

                    <div>
                        <div class="text-left">
                            <li class="feature-title-2 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿</a></li>
                        </div>

                        <div class="newtopic-evaluation"><p>新着投稿</p></div>
                    </div>


                        <div class="comment-box"> <!--ここにURLはる-->

                            <div class="evaluation-text">

                                    <div><p> 学年</p></div>
                                    <div><p> < 授業名 > </p></div>
                                    <div> <p>いいね</p></div>

                            </div>

                            <div class="evaluation-container  border-top border-bottom">
                                <div class="evaluation-item ">難しさ</div>
                                <div class="evaluation-item ">雰囲気</div>
                                <div class="evaluation-item ">忙しさ</div>


                            </div>

                            <div>
                                <div class="evaluation-message">
                                    <p>コメント：</p>
                                </div>

                            </div>
                            <div class="f-container comment-info border-top">
                                <div class="f-item float-right">投稿日時</div>
                                <div class="f-item float-right">name</div>
                            </div>
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
        
<div class="container" id="all-bbs">

			<div class="row top-all-bbs-backgroundcolor2-bottom">

				<div class="col-md-8 text-center top-all-bbs-backgroundcolor2">

                <div class="text-left">
                     <li class="feature-title-2 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
                </div>
                    <div class="newtopic-evaluation"><p>新着投稿</p></div>
                

                <div class="comment-box">
                    <div class="comment-text"><!--ここにURLはる-->
                    </div>
                    <div class="">
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">投稿年月</div>
                            <div class="f-item float-right">なまえ</div>
                            <div class="f-item float-right ">学年</div>

                        </div>
                    </div>
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

        <!--CSS読み込み-->
        <link href="{{ asset('css/generaltop.css') }}" rel="stylesheet">
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

 
