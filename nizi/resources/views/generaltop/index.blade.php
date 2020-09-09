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
        <li class="u2-global-navbar__link"><a href="#class-sub">classc subject</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
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
<div class="container general-top-title-frame">
    <div  class="general-top-title">
    @foreach ($generaltops as $generaltop)
                <tr>
                    {{ $generaltop->name }}
                </tr>
    @endforeach
    </div>

    <div>
        <div class="row">
            <p class="col-md-2 subject-info-top">一般教養</p>
            <p class="col-md-2 subject-info-top">月曜</p>
            <p class="col-md-2 subject-info-top">1st period</p>
        </div>
        <div class="row subject-info-comment-frame">
            <p class="col-md-6 subject-info-comment-top">
                軽いコメントあああああああああああああああああ軽いコメントあああああああああああああああああ<br>
                あああああああああああああああああああああああ軽いコメントあああああああああああああああああ<br>
                あああああああああああああああああああああああ軽いコメントあああああああああああああああああ<br>
            </p>
        </div>
    </div>
</div>


<div>
    <ul class="reset-ul row feature-title-box">
        <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>



        <div class="container" id="all-bbs">

			<div class="row">

				<div class="col-md-8 text-center top-all-bbs-backgroundcolor">

                    <div>
                        <div class="common-btn list-inline-item text-left"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >授業評価</a></div>

                        <div class="newtopic-evaluation"><p>New post</p></div>
                    </div>


                    @foreach ($evaluations as $evaluation)
                    @if($loop->iteration < 6)


                    <div class="comment-box">

                        <div class="evaluation-text border-bottom mb-5 p-2">
                            @foreach ($generaltops as $generaltop)
                                <div>
                                    <p>{{ $generaltop->name }}</p>
                                </div>
                            @endforeach

                                <div> <p>いいね{{ $evaluation->good }}</p></div>

                        </div>


                        <div>
                            <div class="evaluation-message mb-5 p-2">
                                <p>コメント：{{ $evaluation->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">

                            <div class="f-item float-right">投稿日時　{{ $evaluation->created_at->format('Y.m.d .H:i') }}</div>
                            <div class="f-item float-right">学年{{ $evaluation->year }}</div>
                            <div class="f-item float-right">name{{ $evaluation->name }}</div>
                        </div>
                    </div>
                    @endif
                     @endforeach



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

                    <div>
                        <div class="common-btn list-inline-item text-left"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></div>

                        <div class="newtopic-evaluation"><p>New post</p></div>
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
                                <div class="f-item float-right ">{{ $bbs->subject }}学年</div>

                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


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
            </div>
            
        </div>

      

    </footer>
@endsection

 
<div>
@foreach($categories as $id => $name)
<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
@endforeach
</div>