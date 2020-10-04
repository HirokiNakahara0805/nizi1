


<!-------------------------------------------------------評価投稿画面----------------------------------------------------->



<!-------------------------------------------------------タイトル挿入-->
@foreach($category2s as $category2)
<title>{{ $category2->name }} 評価投稿 - ∞pilotis</title>
@endforeach



@extends('layout.bbslayout')


<!-------------------------------------------------------ヘッダー挿入-->
@section('header')
 
    <header>
			
            <!--ヘッダの下の黒いとこー-->
            <div class="u2-global-navbar">
                <div class="u2-header__container-inner">
                    <a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
                </div>
                
                <ul class="reset-ul row v2-global-navbar__links">
                    @foreach($category2s as $category2)
                    <li class="u2-global-navbar__link"><a href="{{ route('departmenttop.index', ['departmentcategory_id'=>$category2->departmentcategory_id]) }}" >time table-back</a></li>
                    @endforeach
                    <li class="u2-global-navbar__link"><a href="serch">授業検索</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
                    <li class="u2-global-navbar__link"><a href="#all-bbs">sns</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
                    <li class="u2-global-navbar__link"><a href="#all-bbs">about </a><i class="fas fa-angle-double-down nav-arrows"></i></li>
		        </ul>
            </div>
    
        </header>
@endsection








@section('content')

@if (session('poststatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('poststatus') }}
    </div>
@endif



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
        $totalpostscounts=$post2s->total();
        // 投稿平均計算
        $average = round($goodss/$totalpost2s,2);

     //全体星表示用数値
     $stars = $average*20;
?>




<!-- トップのタイトル掲示板と共通-->
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
                        
                        <a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" ><h1 class="star-average">rate:{{ $average }}</h1></a>
                            <div class="star-ratings-sprite-title ">
                                <span style="width: {{ $stars }}%" class="star-ratings-sprite-rating-title"></span>
                            </div>
                            <div class="toukou-kensu">
                                <a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" ><p>{{$totalpostscounts}}件</p></a>
                            </div>
                    </div>
                    
                </div>

            </div>
        @endforeach
    </div>




<!-------------------------------------------------------遷移ボタン-->
    <div>
        <ul class="reset-ul row feature-title-box">
            <li class="feature-title-1 list-inline-item"><a href="{{ route('subjecttop.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >トップ</a></li>
            <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >掲示板</a></li>
            <li class="evaluationcolor feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >評価投稿画面</a></li>
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
                     <div class="form-group col-sm-4">
                            
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
                            <option value="0"selected>学年</option>
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
                    <div class="p-modal-bkm__fav-spinner col-sm-2 mb-3">
                        <label for="good">

                                オススメ度

                        </label>
　　　
                        <div class="range-group">
                            <input
                                        id="good"
                                        name="good"
                                        step="1" 
                                        type="number" 
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
                            <div　class="invalid-feedback">
                                <p class="non-star">オススメ度を入力してください</P>

                            </div>
                    @endif

                            <!----------------------------------------------------------------------- 難しさインプット-->
                    <div class="p-modal-bkm__fav-spinner col-sm-2 mb-3">
                        <label for="difficulty">
                                授業難易度
                        </label>

                        <div class="range-group-d">

                            <input
                                        id="difficulty"
                                        name="difficulty"
                                        step="1" 
                                        type="number" 
                                        min="1" 
                                        max="5" 
                                        value="{{ old('difficulty') }}"
                                        class="input-range-d  {{ $errors->has('difficulty') ? 'is-invalid' : '' }} "

                            >

                        </div>
                    </div>
                    @if ($errors->has('difficulty'))
                            <div class="invalid-feedback">
                                {{ $errors->first('difficulty') }}
                            </div>
                            <div　class="invalid-feedback">
                                <p class="non-star">授業難易度を入力してください</P>
                            </div>
                    @endif

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
        @if ($post2s->total()=== 0 )
            <p>初めての投稿をしてみましょう！</p>
        @else
        <p>{{ $post2s->total() }}件が見つかりました。</p>
        @endif
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
                            @if($post2->year==0)
                                {{$post2->year="?"}}年
                            @else
                            <div class="f-item float-right">{{ $post2->year }}年</div>
                            @endif
                            <div class="f-item float-right">{{ $post2->name }}さん</div>

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
<!-----------------------------------------------授業科目セレクトボックス--------------------------------------------------->
            @foreach($departmentcategories as $departmentcategorie)
        <h3 class="text-center">{{$departmentcategorie->name}} 授業科目</h3>
            @endforeach
    <div class="mt-4 mb-4 text-center underlist">
    <select size="1" class="form-control" name="select" onChange="location.href=value;">
        <option value="0"selected>授業科目一覧</option>
        @foreach($categorydepas as $categorydepa)
        <option value="{{ route('subjecttop.index', ['category_id'=>$categorydepa->id ,'departmentcategory_id'=>$categorydepa->departmentcategory_id]) }}" title="{{ $categorydepa->name }}"><a class="class-list" >{{ $categorydepa->name }}</a>
        </option>
        @endforeach
    </select>
    </div>
@endsection

@include("layout.bbsfooter")

