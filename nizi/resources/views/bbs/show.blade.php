@extends('layout.bbslayout')
 
@section('title', '8pilotis BBS 投稿の詳細ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿詳細ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <!-- ニックネーム -->
        <h1 class="h4 mb-4">
            {{ $post->name }}
        </h1>
 
        <!-- 投稿情報 -->
        <div class="summary">
            <p><span>{{ $post->subject }}</span> / <time>{{ $post->updated_at->format('Y.m.d H:i') }}</time> / </p>
        </div>
 
        <!-- 本文 -->
        <p class="mb-5">
            {!! nl2br(e($post->message)) !!}
        </p>
 
        <section>
            
            <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
    @csrf
 
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
     本文
     </label>
 
        <textarea
            id="comment"
            name="comment"
            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
            rows="4"
        >{{ old('comment') }}</textarea>
        @if ($errors->has('comment'))
         <div class="invalid-feedback">
         {{ $errors->first('comment') }}
         </div>
        @endif
    </div>
 
    <div class="mt-4">
     <button type="submit" class="btn btn-primary">
     コメントする
     </button>
    </div>
</form>

<h2 class="h5 mb-4">
                コメント
            </h2>
 
@if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
     {{ session('commentstatus') }}
    </div>
@endif
 
            @forelse($post->comments as $comment)
                <div class="border-top p-4">
                    <time class="text-secondary">
                        {{ $comment->name }} / 
                        {{ $comment->created_at->format('Y.m.d H:i') }} 
                        <!-- コメントid消した -->
                    </time>
                    <p class="mt-2">
                        {!! nl2br(e($comment->comment)) !!}
                    </p>
                </div>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse
        </section>
    </div>
</div>


<div class="mt-4 mb-4">
    <a href="{{ route('bbs.index') }}" class="btn btn-info">
        一覧に戻る
    </a>
</div>

@endsection