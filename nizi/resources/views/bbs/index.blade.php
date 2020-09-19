<!-- +++++++++++++++++++++++++++++++++++++++++++++掲示板だけの画面-->
@extends('layout.bbslayout')
 
@section('header')

@foreach($category2s as $category2)
<title>{{ $category2->name }}の掲示板 - ∞pilotis</title>
@endforeach

<!--いいね平均-->
<!--いいね平均-->
<?php
    $goodss = 0;

    foreach ($goodpost2s as $goodpost2){
        $goodss +=$goodpost2->good;
        }

        $totalpost2s=$post2s->total();
        if($totalpost2s==0){
            $totalpost2s=1;
        }
    // 投稿件数計算
    $totalpostscounts = ($totalpost2s-1);

    $average = round($goodss/$totalpost2s,2);

     //全体星表示用数値
     $stars = $average*20;
?>
 

    <header class="u2-header">
		<div class="u2-header__container-inner">
			<a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
		</div>
	</header>

	<div class="u2-global-navbar">
		<ul class="reset-ul row v2-global-navbar__links">
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

    <!-- トップのタイトル　掲示板と共通-->
    <div class="container general-top-title-frame pb-3 mt-5">
        
        @foreach ($category2s as $category2)
        <div  class="general-top-title">
            <div class="row subject-info-top-frame ">
                <p class="col-md-1 subject-info-top"> {{ $category2->department }}</p>
                <p class="col-md-1 subject-info-top"> {{ $category2->period }}</p>
                <p class="col-md-1 subject-info-top"> {{ $category2->time }}</p>
            </div>

            <div class="row">
                    <div class="subject-title-sets col-md-12 mt-5">
                            <h1 class="border-line-orange">{{ $category2->name }}</h1>
                    </div>
                </div>
                <div class="general-top-title title-star row mt-5"> 
                    
                    <div class="star-average-box border-line-orange col-md-4">
                        
                        <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" ><h1 class="star-average">rate:{{ $average }}</h1></a>
                            <div class="star-ratings-sprite-title ">
                                <span style="width: {{ $stars }}%" class="star-ratings-sprite-rating-title"></span>
                            </div>
                            <div class="toukou-kensu">
                                <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" ><p>{{$totalpostscounts}}件</p></a>
                            </div>
                    </div>
                    
                </div>
        </div>
        @endforeach
    </div>


      <!-- -->
    <div>
        <ul class="reset-ul row feature-title-box">
            <li class="feature-title-1 list-inline-item"><a href="{{ route('subjecttop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
            <li class="bbscolor feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
            <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
        </ul>
    </div>






<div class="all-index">


    <div class="container mt-4 ">
        <div class="comment-box-form">

            <form method="POST" action="{{ route('bbs.store') }}" >
                @csrf

                <fieldset class="">
                    <div class="row">
                        <div class="form-group col-sm-2">
                            
                            <textarea
                                id="name"
                                name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ old('name') }}"
                                type="text"
                                rows="1"
                            >名無し</textarea>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                      </div>
        
                    
            
                            
                        <div class="form-group col-sm-2">
                            <select id="year"
                                name="year"
                                class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
                                value="{{ old('year') }}"
                                type="number"
                                placeholder="学年"
                                size="1"
                                >
                            <option value="0"selected disabled>学年</option>
　　　　　　　　　　　　　　　　　<option value="1">１</option>
　　　　　　　　　　　　　　　　　<option value="2">２</option>
　　　　　　　　　　　　　　　　　<option value="3">３</option>
　　　　　　　　　　　　　　　　　<option value="4">４</option>
　　　　　　　　　　　　　　　　</select>
                            @if ($errors->has('year'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('year') }}
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
        @if ($posts->total()=== 0 )
            <p>初めての投稿をしてみましょう！</p>
        @else
        <p>{{ $posts->total() }}件が見つかりました。</p>
        @endif
    </div>




    <div class="container">
        <div class="row">
            <!-- <thead>
                <tr>

                    <th>投稿時間</th>
                    <th>ニックネーム</th>
                    <th>学年</th>
                    <th>メイン内容</th>
                </tr>
            </thead> -->
            <div class="col-md-8">
            @foreach ($posts as $post)

                <div class="comment-box">
                    <div class="comment-text">{{$post->message}}
                        @if ($post->comments->count() >= 1)
                            <p><span class="comment-number">{{ $post->comments->count() }}件</span></p>
                        @endif
                    </div>
                    <div class="">
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">{{ $post->created_at->format('Y.m.d H:i') }}</div>
                            <div class="f-item float-right ">{{ $post->year }}年</div>
                            <div class="f-item float-right">{{ $post->name }}さん</div>
                            <div class="f-item float-right"><a href="{{ action('PostsController@show', $post->id) }}" class=""><i class="far fa-comment-dots reply-icon"> reply</i></a></div>

                        </div>
                    </div>
                </div>

            @endforeach
            </div>
            <!--投稿の横の空白部分-->
            <div class="col-md-4">

            </div>

        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        {{ $posts->appends(['category_id' => $category_id])->links() }}
    </div>
<!-----------------------------------------------授業科目セレクトボックス--------------------------------------------------->
    <h3 class="text-center">授業科目</h3>
    <div class="mt-4 mb-4 text-center underlist">
    <select name="select" onChange="location.href=value;">
        <option value="0"selected disabled>授業科目</option>
            @foreach($categories as $id => $name)
        <option value="{{ route('bbs.index', ['category_id'=>$id]) }}" title="{{ $name }}"><a class="class-list" >{{ $name }}</a>
        </option>
        @endforeach
    </select>
    </div>

</div>
<p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>

      <!-- javascript  読み込み-->
      <script type="text/javascript" src="js/bbs_post.js"></script>
@endsection

@include("layout.bbsfooter")