


<!-------------------------------------------------------評価投稿画面----------------------------------------------------->



<!-------------------------------------------------------タイトル挿入-->
@foreach($category2s as $category2)
<title>{{ $category2->name }}の評価投稿 - ∞pilotis</title>
@endforeach



@extends('layout.bbslayout')


<!-------------------------------------------------------ヘッダー挿入-->
@section('header')
 
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

    $average = round($goodss/$totalpost2s,2);

     //全体星表示用数値
     $stars = $average*20;
?>




<!-- トップのタイトル　掲示板と共通-->
    <div class="container general-top-title-frame pb-3 mt-5">

        @foreach ($category2s as $category2)
            <div  class="general-top-title">
                <div class="row subject-info-top-frame ">
                    <p class="col-md-1 subject-info-top"> {{ $category2->department }}</p>
                    <p class="col-md-1 subject-info-top"> {{ $category2->period }}</p>
                    <p class="col-md-1 subject-info-top"> {{ $category2->time }}</p>
                </div>

                <div class="general-top-title title-star row "> 
                    <div class="col-md-3 border-line-orange">
                        <tr>{{ $category2->name }}</tr>
                     </div>
                    <div class="col-md-4 star-average-box border-line-orange">
                       <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" ><p class="star-average">Rate:{{ $average }}</p></a>
                        <div class="star-ratings-sprite ">
                            <span style="width: {{ $stars }}%" class="star-ratings-sprite-rating"></span>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 comment-kensuu-box">
                        <a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >
                            <p class="comment-kennsuu ">{{$post2s->total()}}件の投稿</p>
                        </a>
                    </div> -->
                </div>
            </div>
        @endforeach
    </div>




<!-------------------------------------------------------遷移ボタン-->
    <div>
        <ul class="reset-ul row feature-title-box">
            <li class="feature-title-1 list-inline-item"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></li>
            <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></li>
            <li class="evaluationcolor feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></li>
        </ul>
    </div>


<!----------------------------------------------------投稿フォーム設定------------------------------------------------->
<div class="container mt-4">
            <!--------formフレーム-->
    <div class="p-4 comment-box-form">
            <!-----------------------投稿フォームタイトル開始-->
        <h2 class="h4 mb-4 font-weight-bold font-size">
            評価投稿の新規作成
        </h2>
                <!---------------------------------------POSTメソッド開始-->
        <form method="POST" action="{{ route('evaluation.store') }}">
            @csrf

            <fieldset class="mb-4">
                <div class="row">
                     <!------------------------------------------ニックネームインプット------------>
                    <div class="form-group col-sm-5">
                        <textarea
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') }}"
                            type="text"
                        >名無し</textarea>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <!-----------------------------------------カテゴリーIDインプット（隠されてます)------------->
                    <div class="form-group col-sm-1">
                    <input
                        id="category_id"
                        name="category_id"
                        value = "{{ $category_id }}"
                        class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                        text="text"
                        type="hidden"
                    >
                    </div>
                            <!-----------------------------------------学年インプット------------->
                    <div class="form-group col-sm-2">
                        <select id="year"
                                name="year"
                                class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
                                value="{{ old('year') }}"
                                type="number"
                                placeholder="学年"
                                size="1">
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
                        <!------------------------------------------------------------------------ 星インプット-->
　　　　　　　　　 <div class="row pb-3 star-difficult">
                    <div class="p-modal-bkm__fav-spinner col-sm-2 mb-5">
                        <label for="good">
                                いいね
                        </label>
　　　
                        <div class="range-group">
                            <input
                                        id="good"
                                        name="good"
                                        step="1" 
                                        type="range" 
                                        min="1" 
                                        max="5" 
                                        value="{{ old('good') }}"
                                        class="input-range  {{ $errors->has('good') ? 'is-invalid' : '' }} "

                                        >
                        </div>
                    </div>

                    @if ($errors->has('good'))
                            <div class="invalid-feedback">
                                {{ $errors->first('good') }}
                            </div>
                    @endif

                            <!----------------------------------------------------------------------- 難しさインプット-->
                    <div class="p-modal-bkm__fav-spinner col-sm-2 mb-3">
                        <label for="difficulty">
                                難しさ
                        </label>

                        <div class="range-group-d">

                            <input
                                        id="difficulty"
                                        name="difficulty"
                                        step="1" 
                                        type="range" 
                                        min="1" 
                                        max="5" 
                                        value="{{ old('difficulty') }}"
                                        class="input-range-d  {{ $errors->has('difficulty') ? 'is-invalid' : '' }} "

                            >

                        </div>
                    </div>
                </div>

                    <!---------------------------------------------------------------------- レポートインプット-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="report">
                            レポートについて
                        </label>

                        <textarea
                            id="report"
                            name="report"
                            class="form-control {{ $errors->has('report') ? 'is-invalid' : '' }}"
                            cols="20" rows="4"　 wrap="hard"
                        >{{ old('report') }}</textarea>
                        @if ($errors->has('report'))
                            <div class="invalid-feedback">
                                {{ $errors->first('report') }}
                            </div>
                        @endif
                    </div>


                        <!---------------------------------------------------------------------------------- テストインプット-->
                    <div class="form-group col-md-6">
                        <label for="test">
                            テストについて
                        </label>

                        <textarea
                            id="test"
                            name="test"
                            class="form-control {{ $errors->has('test') ? 'is-invalid' : '' }}"
                            cols="20" rows="4"　 wrap="hard"
                        >{{ old('test') }}</textarea>
                        @if ($errors->has('test'))
                            <div class="invalid-feedback">
                                {{ $errors->first('test') }}
                            </div>
                        @endif
                    </div>

                </div>
<!-------------------------------------------------------------------------------------- コメントインプット-->
                <div class="form-group">
                    <label for="message">
                        コメント
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                        cols="20" rows="4"　 wrap="hard"
                    >{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>

<!----------------------------------------------------------------------------POSTボタン設定-->
                <div class="text-right post-position mr-5">
                        
                    <button type="submit" class="post-botton" >
                       <i class="fas fa-paper-plane post-icon">POST</i>
                   </button>
                </div>

            </fieldset>
        </form>
    </div>
</div>


 
<!----------------------------------------------------------------投稿件数表示設定-->
<div class="mt-4 mb-4 text-center">
    <p>{{ $post2s->total() }}件が見つかりました。</p>
</div>
<!----------------------------------------------------------------ページネーション(投稿件数表示)設定-->
<div class="d-flex justify-content-center mb-5">
                   {{ $post2s->appends(['category_id' => $category_id])->links() }}
</div>

<!-----------------------------------------------------------------評価投稿表示デザイン------------->
        <div class="container">

            <div class="row">

                <div class="table table-hover col-md-8">
<!---------------------------post2sを$post2とする（変数)------------->
                @foreach ($post2s as $post2)


                    <div class="comment-box">

                        <div class="evaluation-text border-bottom mb-5 p-2">
<!---------------------------category2sを$categorys2とする（変数)------------->
                                @foreach ($category2s as $category2)
                                <div><p> {{ $category2->name }}</p></div>
                                @endforeach
<!--------------------------------星のカラーにwidthで色づけしてます   いいねの平均値を を*100/5して100パーセント表示にしています--->
                             

                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">
                            <div><p>オススメ度</p></div>

                            <p><div class="star-ratings-sprite"><span style="width: {{  $post2->good*20 }}%" class="star-ratings-sprite-rating"></span></div></p>
                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">
                            <div><p> 授業難易度</p></div>

                            <p><div class="dif-ratings-sprite"><span style="width:{{ $post2->difficulty*20 }}%" class="dif-ratings-sprite-rating"></span></div></p>
                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">

                                <div>

                  

                                    <div class="title text-center">レポート</div> <div class=""> <p>{{ $post2->report }}</p></div>
                                    <div class="title text-center">テスト</div> <div class=""><p>{{ $post2->test }}</p></div>


                                </div>

                        </div>

                        <div>

                            <div class="title text-center">コメント</div>
                            <div class="evaluation-message evaluation-text mb-5 p-2">

                                <p>{{ $post2->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">{{ $post2->created_at->format('Y.m.d .H:i') }}</div>
                            <div class="f-item float-right">{{ $post2->year }}年</div>
                            <div class="f-item float-right">{{ $post2->name }}</div>
                        </div>
                    </div>

                    @endforeach

                </div>

                    <!-----------------------------------------------投稿の横の空白部分--------------------------------------------------->
                <div class="col-md-4">

                </div>

            </div>

        </div>


<!-----------------------------------------------スクロール設定(jQuery)--------------------------------------------------->
<p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>


                <!-----------------------------------------------ページネーション設定--------------------------------------------------->
<div class="d-flex justify-content-center mb-5">
                   {{ $post2s->appends(['category_id' => $category_id])->links() }}
        </div>
        <!-- javascript  読み込み-->
  <script type="text/javascript" src="js/bbs_post.js"></script>
@endsection


@section('footer')
<footer>
        <!------------------------------------------------------------------------------------ SNS連携 -->
        <div class="footer-contents .align-middle" id="all-bbs">

            <a class="footer-logo" href="">∞pilotis</a>

               <!-- SNSリスト-->
            <div class="footer-sns justify-content-around footer-logo" >
                <div class="sns-lists">
                     <!-- TWITTER　(fontawesomeでアイコン読み込み)-->
                    <div class="sns-item twitter list-inline-item">
                        <a target="_blank" href="https://mobile.twitter.com/8pilotis">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </div>
                     <!-- youtube　(fontawesomeでアイコン読み込み)-->
                    <div class="sns-item youtube list-inline-item">
                        <a target="_blank" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                   <!-- facebook　(fontawesomeでアイコン読み込み)-->
                   <div class="sns-item instagram list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/8pilotis">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
                <div class="link-list">
                　　<div class="form-group col-sm-1"><a href="terms">利用規約</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide">初めての方へ</a></div>
                    <div class="form-group col-sm-1"><a href="beginnersguide#organization">運営組織</a></div>
                    <div class="form-group col-sm-2"><a href="contentpolicy">コンテンツポリシー</a></div>
                    <div class="form-group col-sm-2"><a href="privacypolicy">プライバシーポリシー</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide#faq">よくある質問</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide#inquiry">お問い合わせ</a></div>
            　　</div>
            </div>

        </div>

</footer>
@endsection

 
