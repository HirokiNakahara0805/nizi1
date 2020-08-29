

@extends('layout.bbslayout')
 
@section('title', '8pilotis BBS 投稿の詳細ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿詳細ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection

<!-- header追加 -->
@section('header')

<link rel="stylesheet" href="{{ asset('/css/top.css') }}">

<header>
	<div class="header-color">
		<nav class="a">
			<li><a href="/">Sophia univ.</a></li>
		</nav>
	</div>
</header>
@endsection

@section('content')
<div class="container mt-4">
    <div class="border p-4">

        <div class="comment-box">
            <!-- 本文 -->
            <p class="mb-5">
                {!! nl2br(e($post->message)) !!}
            </p>

            <div class="f-container comment-info">
                    <div class="f-item float-right">{{ $post->created_at->format('Y.m.d H:i') }}</div>
                    <div class="f-item float-right">{{ $post->name }}</div>
                    <div class="f-item float-right ">{{ $post->subject }}学年</div>
             </div>
        </div>
 
        
 
        <section>
            
            <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
    @csrf
    <div class="reply-form-box">
        <input
            name="post_id"
            type="hidden"
            value="{{ $post->id }}"
        >
    
        <div class="form-group">
            <label for="subject">
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
        <label for="body">
        reply
        </label>
    </div>
        <textarea
            id="comment"
            name="comment"
            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
            rows="2"
        >{{ old('comment') }}</textarea>
        @if ($errors->has('comment'))
         <div class="invalid-feedback">
         {{ $errors->first('comment') }}
         </div>
        @endif
    </div>
 
    <div class="mt-4">
        <button type="submit" class="btn btn-primary float-right">
        コメントする
        </button>
    </div>
</form>
       
 
@if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
     {{ session('commentstatus') }}
    </div>
@endif
 
            @forelse($post->comments as $comment)
                <div class="border-top p-4">
                    <time class="text-secondary">
                        {{ $comment->name }} さん　/　
                        {{ $comment->created_at->format('Y.m.d H:i') }} 
                        <!-- コメントid消した -->
                    </time>
                    <p class="mt-2 comment-text">
                        {!! nl2br(e($comment->comment)) !!}
                    </p>
                </div>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
        </section>
    </div>
</div>


<div class="mt-4 mb-4 text-center">
    <a href="{{ route('bbs.index') }}" class="btn btn-info">
        一覧に戻る
    </a>
</div>


@endsection


@section('footer')
<footer>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
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
