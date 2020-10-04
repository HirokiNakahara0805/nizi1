<!---------------------------GENERAL TOPのページ------------------------------>

<!------------ layout読み込み ----------------------------->
@extends('layout.bbslayout')

<!------------ header----------------------------->
@section('header')

    @foreach($category2s as $category2)
    <title>{{ $category2->name }} - ∞pilotis</title>
    @endforeach

   
<!--ヘッダー-->

        <header>
		    <div class="menu none"  id="menu">
                <div class="main-menu">
                    @foreach($category2s as $category2)
                    <a href="{{ route('departmenttop.index', ['departmentcategory_id'=>$category2->departmentcategory_id]) }}" class="menu-item">time table-back</a>
                    @endforeach
                    <a href="#class-sub" class="menu-item">学部<i class="fas fa-angle-double-down nav-arrows"></i></a>
                    <a href="#all-bbs" class="menu-item">掲示板<i class="fas fa-angle-double-down nav-arrows"></i></a>
                    <a href="serch" class="menu-item">授業検索<i class="fas fa-angle-double-down nav-arrows"></i></a>
                    <a href="#all-sns" class="menu-item">sns<i class="fas fa-angle-double-down nav-arrows"></i></a>
                    <a href="#all-about" class="menu-item">about <i class="fas fa-angle-double-down nav-arrows"></i></a>
                </div>
			<div>
		
			</div>
		</div>
		<!--ヘッダの下の黒いとこー-->
		<div class="u2-global-navbar">
			<div class="open-menu">
				<img src="{{ asset('assets/img/hum.png') }}" alt="">
			</div>

				<a href="/" class="u2-header__container-inner">∞pilotis</a>

		</div>

	</header>
@endsection

<!------------ content ----------------------------->
@section('content')

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
         $totalpostscounts=$post2s->total();

    $average = round($goodss/$totalpost2s,2);

     //全体星表示用数値
     $stars = $average*20;
?>

<!------------ 授業情報---------------------------->
    <div class="container general-top-title-frame">

        @foreach ($category2s as $category2)
            <div class="row subject-info-top-frame">
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

            <div>

                <div class="row mb-5">
                    <p class="col-md-2 subject-info-contents"> {{ $category2->department }}</p>
                    <p class="col-md-2 subject-info-contents"> {{ $category2->period }}</p>
                    <p class="col-md-2 subject-info-contents"> {{ $category2->time }}</p>
                    <p class="col-md-2 subject-info-contents"> {{ $category2->code }}</p>
                    <p class="col-md-2 subject-info-contents"> {{ $category2->teacher }}</p>
                </div>

                <p class="subject-info-contents"> {{ $category2->book1 }}</p>
                <p class="subject-info-contents"> {{ $category2->book2 }}</p>
                <p class="subject-info-contents"> {{ $category2->book3 }}</p>

                <div class="row mt-5">
                    <div class="col-md-2">
                        <div class="subject-info-contents">  <?= html_entity_decode($category2->link1 ); ?></div>
                    </div>

                    <div class="col-md-2">
                        <div class="subject-info-contents">  <?= html_entity_decode($category2->link2 ); ?></div>
                    </div>
                    <div class="col-md-2">
                        <div class="subject-info-contents">  <?= html_entity_decode($category2->link3 ); ?></div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

<!------------ トップ・掲示板・評価投稿ボタン---------------------------->
    <div>
        <ul class="reset-ul row feature-title-box">


            <li class=" topcolor feature-title-1 list-inline-item"><a href="{{ route('subjecttop.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >トップ</a></li>

            <li class="feature-title-1 list-inline-item"><a href="{{ route('bbs.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >掲示板</a></li>
            <li class="feature-title-1 list-inline-item"><a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" >評価投稿画面</a></li>
        </ul>
    </div>



        <div class="container">

			<div class="row">

				<div class="col-md-8  top-all-bbs-backgroundcolor"  id="evaluation">

                    <div class="row">
                        <div class="text-center col-md-4"><a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" class="common-btn list-inline-item">評価投稿</a></div>

                        <div class="newtopic-evaluation col-md-6"><p class="text-center">New post</p></div>
                    </div>


                    @foreach ($evaluations as $evaluation)
                    @if($loop->iteration < 4)


                    <div class="comment-box">

                        <div class="evaluation-text border-bottom mb-5 p-2">

                        @foreach ($subjecttops as $subjecttop)
                                <div><p> {{ $subjecttop->name }}</p></div>


                        @endforeach

                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">
                            <div><p>オススメ度</p></div>
                            <p><div class="star-ratings-sprite"><span style="width: {{  $evaluation->good*20 }}%" class="star-ratings-sprite-rating"></span></div></p>
                        </div>

                        <div class="evaluation-text border-bottom mb-5 p-2">
                            <div><p> 授業難易度</p></div>
                            <p><div class="dif-ratings-sprite"><span style="width:{{ $evaluation->difficulty*20 }}%" class="dif-ratings-sprite-rating"></span></div></p>
                        </div>


                        <div class="evaluation-text border-bottom mb-5 p-2">

                                <div>

                                    <div class="title text-center">レポート</div> <div class=""> <p>{{ $evaluation->report }}</p></div>
                                    <div class="title text-center">テスト</div> <div class=""><p>{{ $evaluation->test }}</p></div>

                                </div>

                        </div>

                        <div>

                            <div class="title text-center">コメント</div>
                            <div class="evaluation-message evaluation-text mb-5 p-2">
                                <p>{{ $evaluation->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">
                                <div class="f-item float-right">{{ $evaluation->created_at->format('Y.m.d .H:i') }}</div>
                                @if($evaluation->year==0)
                                    {{$evaluation->year="?"}}年
                                @else
                                <div class="f-item float-right">{{ $evaluation->year }}年</div>
                                @endif
                                <div class="f-item float-right">{{ $evaluation->name }}さん</div>

                        </div>
                                </div>
                    @endif
                    @endforeach


                     <div class="text-center common-btn-ikkoue ">
                         <a href="{{ route('evaluation.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" class="common-btn">

                                All post
                          </a>
                    </div>



				</div>

				<div class="col-md-4 over-780ad mt-5 mb-5">
                    <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=0c234c1bfa2f60e04c50c7fa12d2ef59&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
                    <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=0c234c1bfa2f60e04c50c7fa12d2ef59&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				</div>

			</div>

        </div>

<div class="container" >

			<div class="row top-all-bbs-backgroundcolor2-bottom">

				<div class="col-md-8 top-all-bbs-backgroundcolor2" id="all-bbs">

                    <div class="row mx-auto" >
                        <div class="text-center col-md-4"><a href="{{ route('bbs.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}"  class=" common-btn list-inline-item">掲示板</a></div>

                        <div class="newtopic-evaluation col-md-6"><p class="text-center">New post</p></div>
                    </div>
                    
                    @foreach ($bbss as $bbs)
                    @if($loop->iteration < 6) 
                    <div class="comment-box">
                        <div class="comment-text">{!! nl2br(e(Str::limit($bbs->message, 100))) !!}
                        </div>
                        <div class="">
                            <div class="f-container comment-info border-top">
                                <div class="f-item float-right">{{ $bbs->created_at->format('Y.m.d H:i') }}</div>

                                @if($bbs->year==0)
                                {{$bbs->year="?"}}年
                                @else
                                <div class="f-item float-right ">{{ $bbs->year }}年</div>
                                @endif
                                <div class="f-item float-right">{{ $bbs->name }}さん</div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                    <div class="text-center common-btn-ikkoue ">
                         <a href="{{ route('bbs.index', ['category_id'=>$category_id,'departmentcategory_id'=>$departmentcategory_id]) }}" class="common-btn">

                                All post
                          </a>
                    </div>


				</div>

                <div class="col-md-4 under-780ad mt-5 mb-5">
                    <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=288&l=ur1&category=amazonstudent&banner=1QVPY5WT2THVZY40E382&f=ifr&linkID=e6d5f51ee1373ddd7fbd7ff1b13c3590&t=8pilotis-22&tracking_id=8pilotis-22" width="320" height="50" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
                </div>

			</div>

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


        <!--右下の画面スクロールボタン-->
        <p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>

        <!--CSS読み込み-->
        <link href="{{ asset('assets/css/generaltop.css') }}" rel="stylesheet">
@endsection



 <!--------------------------------------------フッター読み込み------------------------------------------>
@include("layout.bbsfooter")
