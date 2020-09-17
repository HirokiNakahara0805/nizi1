

@extends('layout.bbslayout')
@section('title', '8pilotis BBS 投稿の詳細ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿詳細ページの説明文')
@section('pageCss')
<!-- <link href="/css/bbs/style.css" rel="stylesheet"> -->
@endsection

<!-- header追加 -->
@section('header')



    <header class="u2-header">
		<div class="u2-header__container-inner">
			<a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
		</div>
	</header>

	<div class="u2-global-navbar">
		<ul class="reset-ul row v2-global-navbar__links">
		<!--<li class="u2-global-navbar__link"><a href="#class-sub">classc subject</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
			<li class="u2-global-navbar__link"><a href="#all-bbs">bbs</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
			<li class="u2-global-navbar__link"><a href="#all-bbs">sns</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
			<li class="u2-global-navbar__link"><a href="#all-bbs">about </a><i class="fas fa-angle-double-down nav-arrows"></i></li> -->
		</ul>
	</div>
@endsection

@section('content')



<div class="container mt-4">
    <div class="border p-4 mb-4">

        <div class="comment-box">
            <!-- 本文 -->
            <p class="m-5 ">
                {!! nl2br(e($post->message)) !!}
            </p>

            <div class="f-container comment-info border-top">
                    <div class="f-item float-right">{{ $post->created_at->format('Y.m.d H:i') }}</div>
                    <div class="f-item float-right">{{ $post->name }}</div>
                    <div class="f-item float-right ">{{ $post->subject }}学年</div>
             </div>
        </div>
                    
        <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
            @csrf
            <div class="reply-box-form">
                <input
                    name="post_id"
                    type="hidden"
                    value="{{ $post->id }}"
                >
            
                <div class="form-group">
                    <label for="subject">
                    ニックネーム
                    </label>
            
                    <textarea
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        type="text"
                        rows="1"
                    >匿名そふぃあ</textarea>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
            
                <div class="form-group">
                <label for="body">
                reply
                </label>
            </div>
                <textarea
                    id="comment"
                    name="comment"
                    class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
                    rows="4"
                >{{ old('comment') }}>>{!! nl2br(e($post->message)) !!}</textarea>
                @if ($errors->has('comment'))
                <div class="invalid-feedback">
                {{ $errors->first('comment') }}
                </div>
                @endif
                
                    <button type="submit" class="btn  float-right">
                            <i class="fas fa-paper-plane comment-icon">COMMENT</i>
                     </button>
               
        
            
            </div>
        </form>
       
 
 
        
        </div>
        <div class="border p-4 mt-4">
<section>

@if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
     {{ session('commentstatus') }}
    </div>
@endif


 
            @forelse($post->comments as $comment)
                <div class="reply-box">
                    <time class="text-secondary">
                        {{ $comment->name }} さん　/　
                        {{ $comment->created_at->format('Y.m.d H:i') }} 
                        <!-- コメントid消した -->
                    </time>
                    <p class="mt-2 comment-text-show">
                        {!! nl2br(e($comment->comment)) !!}
                    </p>
                </div>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
        </section>
    </div>

</div>

<div class="text-center common-btn-ikkoue ">
    <a href="{{ route('bbs.index', ['category_id'=>$post->category_id]) }}" class="common-btn">

        一覧に戻る
    </a>
</div>

<p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>
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
