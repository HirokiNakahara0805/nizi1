
@extends('layout.bbslayout')
 
@section('header')

@foreach($category2s as $category2)
<title>{{ $category2->name }}の掲示板 - ∞pilotis</title>
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
        <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
        <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
    </ul>
</div>

<!--いいね平均-->
<?php
    $goodss = 0;

    foreach ($goodpost2s as $goodpost2){
        $goodss +=$goodpost2->good;
        }

    $average = round($goodss/$post2s->total(),2);
?>
{{$average}}




<div class="all-index">


    <div class="container mt-4 ">
        <div class="  comment-box">

            <form method="POST" action="{{ route('bbs.store') }}" >
                @csrf

                <fieldset class="">
                    <div class="row text-center">
                        <div class="form-group col-sm-3">
                            
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
        
                    
                        <div class="form-group col-sm-3">
                            
                        <div class="form-group col-sm-2">
                          <select id="subject"
                                name="subject"
                                class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}"
                                value="{{ old('subject') }}"
                                type="text"
                                placeholder="学年">
                            <option value="0"selected disabled>学年</option>
　　　　　　　　　　　　　　　　　<option value="1">１</option>
　　　　　　　　　　　　　　　　　<option value="2">２</option>
　　　　　　　　　　　　　　　　　<option value="3">３</option>
　　　　　　　　　　　　　　　　　<option value="4">４</option>
　　　　　　　　　　　　　　　　</select>
                            @if ($errors->has('subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

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
                    
                    <div class="row text-center">

                        <div class="form-group col-sm-6">
                            <label for="message">
                                メイン内容
                            </label>
        
                            <textarea
                                id="message"
                                name="message"
                                class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                cols="20" rows="2"　 wrap="hard" 
                            >{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>

                        
        
        
                        <div class="post-position col-sm-3">
        
                            <button type="submit" class="post-botton" >
                                <i class="fas fa-paper-plane post-icon">POST</i>
                            </button>
                        </div>

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
                            <p><span class="comment-number">コメント：{{ $post->comments->count() }}件</span></p>
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