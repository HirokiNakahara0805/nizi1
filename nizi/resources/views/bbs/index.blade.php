
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

@section('title', '8pilotis BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<!-- <link href="/css/bbs/style.css" rel="stylesheet"> -->
@endsection

 
@section('content')
@if (session('poststatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('poststatus') }}
    </div>
@endif



<div>
    <ul class="reset-ul row feature-title-box">
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-2 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>




<div class="all-index">


    <div class="container mt-4 ">
        <div class="  comment-box">

            <form method="POST" action="{{ route('bbs.store') }}" >
                @csrf

                <fieldset class="">
                    <div class="row text-center">
                        <div class="form-group col-sm-6">
                            
                            <input
                                id="name"
                                name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ old('name') }}"
                                type="text"
                                placeholder="ニックネーム"
                            >
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                      </div>
        
                    
                        <div class="form-group col-sm-6">
                            
                            <input
                                id="subject"
                                name="subject"
                                class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}"
                                value="{{ old('subject') }}"
                                type="text"
                                placeholder="学年"
                            >
                            @if ($errors->has('subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

                    </div>
    
                    <div class="form-group">
                        <label for="message">
                            メイン内容
                        </label>
    
                        <textarea
                            id="message"
                            name="message"
                            class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                            cols="20" rows="2"
                        >{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
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
    
    
                    <div class="mt-2 text-right">
    
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="mt-4 mb-4 text-center">
        <p>{{ $posts->total() }}件が見つかりました。</p>
    </div>




    <div class="container">
        <div class="table table-hover">
            <!-- <thead>
                <tr>

                    <th>投稿時間</th>
                    <th>ニックネーム</th>
                    <th>学年</th>
                    <th>メイン内容</th>
                </tr>
            </thead> -->
            <div id="tbl">
            @foreach ($posts as $post)

                <div class="comment-box">
                    <div class="comment-text">{!! nl2br(e(Str::limit($post->message, 100))) !!}
                        @if ($post->comments->count() >= 1)
                            <p><span class="badge badge-primary">コメント：{{ $post->comments->count() }}件</span></p>
                        @endif
                    </div>
                    <div class="">
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">{{ $post->created_at->format('Y.m.d H:i') }}</div>
                            <div class="f-item float-right">{{ $post->name }}</div>
                            <div class="f-item float-right ">{{ $post->subject }}学年</div>
                            <div class="f-item float-right"><a href="{{ action('PostsController@show', $post->id) }}" class=""><i class="far fa-comment-dots reply-icon"> reply</i></a></div>

                            
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        {{ $posts->appends(['category_id' => $category_id])->links() }}
    </div>
    <h3 class="text-center">授業科目</h3>
    <div class="mt-4 mb-4 text-center underlist">
        @foreach($categories as $id => $name)
        <li class="btn"><a class="class-list" href="{{ route('bbs.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
        @endforeach
    </div>

</div>
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