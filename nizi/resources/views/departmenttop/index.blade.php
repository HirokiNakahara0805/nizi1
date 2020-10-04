<!DOCTYPE html>

<html lang="ja">

@foreach($departmentcategorie3s as $departmentcategorie3)
<title>{{ $departmentcategorie3->name }} - ∞pilotis</title>
@endforeach

<head>
			<meta charset="UTF-8">
			<meta name="description" content=“上智大生向けの履修支援サイトです。このサイトでは授業のオススメ度や授業毎の掲示板機能などの有益な情報を得られるサイトになっております。”>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
		

			<!-- Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
			<!-- CSS(Bootstrap用)読み込み -->
			<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
			<!-- CSS(common用)読み込み -->
			<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet">
			<!-- CSS読み込み -->
			<link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
			  <!--CSS読み込み-->
			  <link href="{{ asset('assets/css/bbslayout.css') }}" rel="stylesheet">
			<!--CSS (slick用)読み込み-->
			<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
			<link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
			<!-- fontawesome 読み込み -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
			<link rel="stylesheet" href="{{  asset('assets/css/style.css') }}" />
			<!-- jQuery読み込み-->
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<!-- jquery slick -->
			<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
			<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
			<!-- view point 読み込み-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- javascript  読み込み-->
			<script type="text/javascript" src="{{  asset('assets/js/common.js') }}"></script>
			  <!-- javascript  読み込み-->
			  <script type="text/javascript" src="assets/js/bbs_post.js"></script>
			   <!-- googleアナリティクス本番だけ反応-->
				@if(env('APP_ENV') == 'production')
					@include('google.analytics')
				@endif

</head>


<body>
	
		<header>
			
			<!--ヘッダの下の黒いとこー-->
			<div class="u2-global-navbar">
				<div class="u2-header__container-inner">
					<a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
				</div>
				
				<ul class="reset-ul row v2-global-navbar__links">
					<li class="u2-global-navbar__link"><a href="#class-sub">学部</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
					<li class="u2-global-navbar__link"><a href="#all-bbs">掲示板</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
					<li class="u2-global-navbar__link"><a href="serch">授業検索</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
					<li class="u2-global-navbar__link"><a href="#all-sns">sns</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
					<li class="u2-global-navbar__link"><a href="#all-about">about </a><i class="fas fa-angle-double-down nav-arrows"></i></li>
				</ul>
			</div>
	
		</header>

			<!--main開始-------------------------------------------->
		<main class="container">
			


			<div class="container dep-title-frame">
				<div class="dep-title-frame-top border-bottom">
				@foreach($departmentcategorie3s as $departmentcategorie3)
					<h1 class="department-bbs-title pl-5"><a name="timetable">{{ $departmentcategorie3->name }}</a></h1>
				@endforeach
				</div>
			</div>
			
			<!------------ 時間割・掲示板・ボタン---------------------------->
			<div>
				<ul class="reset-ul row feature-title-box">
					<li class=" topcolor feature-title-1 list-inline-item"><a href="" >時間割</a></li>
					<li class="feature-title-1 list-inline-item"><a href="" >掲示板</a></li>
				</ul>
    		</div>
			<div class="text-center container">
				<div class="mx-auto mb-5">

					<div class="et_pb_module list-inline-item day col-md-2">
						<a href="#mon" class='secList'>Mon</a>
					</div>

					<div class="et_pb_module list-inline-item day col-md-2" >
						<a href="#tue" class='secList'>Tue</a>
					</div>

					<div class="et_pb_module list-inline-item day col-md-2">
						<a href="#wed" class='secList'>Wed</a>
					</div>

					<div class="et_pb_module list-inline-item day col-md-2">
						<a href="#thu" class='secList'>Thu</a>
					</div>

					<div class="et_pb_module list-inline-item day col-md-2">
						<a href="#fri" class='secList'>Fri</a>
					</div>
				</div>


					<!-- Sections -->
					<div class="jugyou container">
							<div id="mon" class="section  row">
								<!-- 月曜日時間割出力 -->
								<div  class="col-md-4">
									<div class="period-frame-youbi">
											<a class="periodList">Monday</a>
									</div>
									<div class="period-frame">
										<a href="#mon1" class="periodList">1st period</a>
									</div>
									<div class="period-frame">
										<a href="#mon2" class="periodList">2nd period</a>
									</div>
									<div class="period-frame">
										<a href="#mon3" class="periodList">3rd period</a>
									</div>
									<div class="period-frame">
										<a href="#mon4" class="periodList">4th period</a>
									</div>
									<div class="period-frame">
										<a href="#mon5" class="periodList">5th period</a>
									</div>
								</div>

								<div class="classboard col-md-8">
									
										

										<div id="mon1" class="mon12345">
											<a><p class="subject-name-top-period">1st period</p></a>
											<!--月曜日1限だけ出力-->
											@foreach($categorymo1s as $categorymo1)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categorymo1->id,'departmentcategory_id'=>$categorymo1->departmentcategory_id]) }}" title="{{ $categorymo1->name }}"><p class="subjectname">{{ $categorymo1->name }}</p></a>
											@endforeach
										</div>
										
									
									<div id="mon2" class="mon12345">
										<a><p class="subject-name-top-period">2nd period</p></a>
										<!--月曜日2限だけ出力-->
										@foreach($categorymo2s as $categorymo2)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categorymo2->id,'departmentcategory_id'=>$categorymo2->departmentcategory_id]) }}" title="{{ $categorymo2->name }}"><p class="subjectname">{{ $categorymo2->name }}</p></a>
										@endforeach
									</div>
									<div id="mon3" class="mon12345">
										<a><p class="subject-name-top-period">3rd period</p></a>
										@foreach($categorymo3s as $categorymo3)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categorymo3->id,'departmentcategory_id'=>$categorymo3->departmentcategory_id]) }}" title="{{ $categorymo3->name }}"><p class="subjectname">{{ $categorymo3->name }}</p></a>
										@endforeach
									</div>
									<div id="mon4" class="mon12345">
										<a><p class="subject-name-top-period">4th period</p></a>
										<!--月曜日4限だけ出力-->
										@foreach($categorymo4s as $categorymo4)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categorymo4->id,'departmentcategory_id'=>$categorymo4->departmentcategory_id]) }}" title="{{ $categorymo4->name }}"><p class="subjectname">{{ $categorymo4->name }}</p></a>
										@endforeach
									</div>
									<div id="mon5" class="mon12345">
										<a><p class="subject-name-top-period">5th period</p></a>
										<!--月曜日5限だけ出力-->
										@foreach($categorymo5s as $categorymo5)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categorymo5->id,'departmentcategory_id'=>$categorymo5->departmentcategory_id]) }}" title="{{ $categorymo5->name }}"><p class="subjectname">{{ $categorymo5->name }}</p></a>
										@endforeach
									</div>
								</div>
							</div>
								<!-- 火曜日時間割出力 -->
							<div id="tue" class="section  row">

								<div  class="col-md-4">
									<div class="period-frame-youbi">
											<a class="periodList">Tuesday</a>
										</div>
									<div class="period-frame">
										<a href="#tue1" class="periodList">1st period</a>
									</div>
									<div class="period-frame">
										<a href="#tue2" class="periodList">2nd period</a>
									</div>
									<div class="period-frame">
										<a href="#tue3" class="periodList">3rd period</a>
									</div>
									<div class="period-frame">
										<a href="#tue4" class="periodList">4th period</a>
									</div>
									<div class="period-frame">
										<a href="#tue5" class="periodList">5th period</a>
									</div>
								</div>

								<div class="classboard col-md-8">
									<div id="tue1" class="tue12345">
										<a><p class="subject-name-top-period">1st period</p></a>
										@foreach($categorytu1s as $categorytu1)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorytu1->id,'departmentcategory_id'=>$categorytu1->departmentcategory_id]) }}" title="{{ $categorytu1->name }}"><p class="subjectname">{{ $categorytu1->name }}</p></a>
										@endforeach
									</div>
									<div id="tue2" class="tue12345">
										<a><p class="subject-name-top-period">2nd period</p></a>
											<!--火曜日2限だけ出力-->
										@foreach($categorytu2s as $categorytu2)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorytu2->id,'departmentcategory_id'=>$categorytu2->departmentcategory_id]) }}" title="{{ $categorytu2->name }}"><p class="subjectname">{{ $categorytu2->name }}</p></a>
										@endforeach
									</div>


									<div id="tue3" class="tue12345">
										<a><p class="subject-name-top-period">3rd period</p></a>
										<!--火曜日3限だけ出力-->
										@foreach($categorytu3s as $categorytu3)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorytu3->id,'departmentcategory_id'=>$categorytu3->departmentcategory_id]) }}" title="{{ $categorytu3->name }}"><p class="subjectname">{{ $categorytu3->name }}</p></a>
										@endforeach
									</div>
									<div id="tue4" class="tue12345">
										<a><p class="subject-name-top-period">4th period</p></a>
										<!--火曜日4限だけ出力-->
										@foreach($categorytu4s as $categorytu4)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorytu4->id,'departmentcategory_id'=>$categorytu4->departmentcategory_id]) }}" title="{{ $categorytu4->name }}"><p class="subjectname">{{ $categorytu4->name }}</p></a>
										@endforeach
									</div>
									<div id="tue5" class="tue12345">
										<a><p class="subject-name-top-period">5th period</p></a>
										<!--火曜日5限だけ出力-->
										@foreach($categorytu5s as $categorytu5)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorytu5->id,'departmentcategory_id'=>$categorytu5->departmentcategory_id]) }}" title="{{ $categorytu5->name }}"><p class="subjectname">{{ $categorytu5->name }}</p></a>
										@endforeach
									</div>
								</div>
							</div>
							<!--水曜日時間割出力-->
							<div id="wed" class="section  row">
								<div class="col-md-4">
									<div class="period-frame-youbi">
											<a class="periodList">Wednesday</a>
										</div>
									<div class="period-frame">
										<a href="#wed1" class="periodList">1st period</a>
									</div>
									<div class="period-frame">
										<a href="#wed2" class="periodList">2nd period</a>
									</div>
									<div class="period-frame">
										<a href="#wed3" class="periodList">3rd period</a>
									</div>
									<div class="period-frame">
										<a href="#wed4" class="periodList">4th period</a>
									</div>
									<div class="period-frame">
										<a href="#wed5" class="periodList">5th period</a>
									</div>
								</div>

								<div class="classboard col-md-8">
									<div id="wed1" class="wed12345">
										<a><p class="subject-name-top-period">1st period</p></a>
										<!--水曜日1限だけ出力-->
										@foreach($categorywe1s as $categorywe1)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorywe1->id,'departmentcategory_id'=>$categorywe1->departmentcategory_id]) }}" title="{{ $categorywe1->name }}"><p class="subjectname">{{ $categorywe1->name }}</p></a>
										@endforeach
									</div>
									<div id="wed2" class="wed12345">
										<a><p class="subject-name-top-period">2nd period</p></a>
										<!--水曜日2限だけ出力-->
										@foreach($categorywe2s as $categorywe2)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorywe2->id,'departmentcategory_id'=>$categorywe1->departmentcategory_id]) }}" title="{{ $categorywe2->name }}"><p class="subjectname">{{ $categorywe2->name }}</p></a>
										@endforeach
									</div>
									<div id="wed3" class="wed12345">
										<a><p class="subject-name-top-period">3rd period</p></a>
										<!--水曜日3限だけ出力-->
										@foreach($categorywe3s as $categorywe3)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorywe3->id,'departmentcategory_id'=>$categorywe3->departmentcategory_id]) }}" title="{{ $categorywe3->name }}"><p class="subjectname">{{ $categorywe3->name }}</p></a>
										@endforeach
									</div>
									<div id="wed4" class="wed12345">
										<a><p class="subject-name-top-period">4th period</p></a>
										<!--水曜日4限だけ出力-->
										@foreach($categorywe4s as $categorywe4)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorywe4->id,'departmentcategory_id'=>$categorywe4->departmentcategory_id]) }}" title="{{ $categorywe4->name }}"><p class="subjectname">{{ $categorywe4 ->name }}</p></a>
										@endforeach
									</div>
									<div id="wed5" class="wed12345">
										<a><p class="subject-name-top-period">5th period</p></a>
										<!--水曜日5限だけ出力-->
										@foreach($categorywe5s as $categorywe5)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categorywe5->id,'departmentcategory_id'=>$categorywe5->departmentcategory_id]) }}" title="{{ $categorywe5->name }}"><p class="subjectname">{{ $categorywe5->name }}</p></a>
										@endforeach
									</div>
								</div>
							</div>
								<!--木曜日時間割出力-->
							<div id="thu" class="section  row">
								<div class="col-md-4">
									<div class="period-frame-youbi">
											<a class="periodList">Thursday</a>
										</div>
									<div class="period-frame">
										<a href="#thu1" class="periodList">1st period</a>
									</div>
									<div class="period-frame">
										<a href="#thu2" class="periodList">2nd period</a>
									</div>
									<div class="period-frame">
										<a href="#thu3" class="periodList">3rd period</a>
									</div>
									<div class="period-frame">
										<a href="#thu4" class="periodList">4th period</a>
									</div>
									<div class="period-frame">
										<a href="#thu5" class="periodList">5th period</a>
									</div>
								</div>
									<div class="classboard col-md-8">
										<div id="thu1" class="thu12345">
											<a><p class="subject-name-top-period">1st period</p></a>
											<!--木曜日1限だけ出力-->
										@foreach($categoryth1s as $categoryth1)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categoryth1->id,'departmentcategory_id'=>$categoryth1->departmentcategory_id]) }}" title="{{ $categoryth1->name }}"><p class="subjectname">{{ $categoryth1->name }}</p></a>
										@endforeach
										</div>
										<div id="thu2" class="thu12345">
											<a><p class="subject-name-top-period">2nd period</p></a>
											<!--木曜日2限だけ出力-->
										@foreach($categoryth2s as $categoryth2)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categoryth2->id,'departmentcategory_id'=>$categoryth2->departmentcategory_id]) }}" title="{{ $categoryth2->name }}"><p class="subjectname">{{ $categoryth2->name }}</p></a>
										@endforeach
										</div>
										<div id="thu3" class="thu12345">
											<a><p class="subject-name-top-period">3rd period</p></a>
											<!--木曜日3限だけ出力-->
										@foreach($categoryth3s as $categoryth3)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categoryth3->id,'departmentcategory_id'=>$categoryth3->departmentcategory_id]) }}" title="{{ $categoryth3->name }}"><p class="subjectname">{{ $categoryth3->name }}</p></a>
										@endforeach
										</div>
										<div id="thu4" class="thu12345">
											<a><p class="subject-name-top-period">4th period</p></a>
											<!--木曜日4限だけ出力-->
										@foreach($categoryth4s as $categoryth4)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categoryth4->id,'departmentcategory_id'=>$categoryth4->departmentcategory_id]) }}" title="{{ $categoryth4->name }}"><p class="subjectname">{{ $categoryth4->name }}</p></a>
										@endforeach
										</div>
										<div id="thu5" class="thu12345">
											<a><p class="subject-name-top-period">5th period</p></a>
											<!--木曜日5限だけ出力-->
										@foreach($categoryth5s as $categoryth5)
										<a href="{{ route('subjecttop.index', ['category_id'=>$categoryth5->id,'departmentcategory_id'=>$categoryth5->departmentcategory_id]) }}" title="{{ $categoryth5->name }}"><p class="subjectname">{{ $categoryth5->name }}</p></a>
										@endforeach
										</div>
									</div>
								</div>
							<!--金曜日時間割出力-->
								<div id="fri" class="section  row">
									<div class="col-md-4">
										<div class="period-frame-youbi">
											<a class="periodList">Friday</a>
										</div>
										<div class="period-frame">
											<a href="#fri1" class="periodList">1st period</a>
										</div>
										<div class="period-frame">
											<a href="#fri2" class="periodList">2nd period</a>
										</div>
										<div class="period-frame">
											<a href="#fri3" class="periodList">3rd period</a>
										</div>
										<div class="period-frame">
											<a href="#fri4" class="periodList">4th period</a>
										</div>
										<div class="period-frame">
											<a href="#fri5" class="periodList">5th period</a>
										</div>
										<div class="period-frame">
											<a href="#fri6" class="periodList">6th period</a>
										</div>
									</div>

									<div class="classboard col-md-8">
										<div id="fri1" class="fri12345">
											<a><p class="subject-name-top-period">1st period</p></a>
											<!--金曜日1限だけ出力-->
											@foreach($categoryfr1s as $categoryfr1)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr1->id,'departmentcategory_id'=>$categoryfr1->departmentcategory_id]) }}" title="{{ $categoryfr1->name }}"><p class="subjectname">{{ $categoryfr1->name }}</p></a>
											@endforeach
										</div>
										<div id="fri2" class="fri12345">
											<a><p class="subject-name-top-period">2nd period</p></a>
											<!--金曜日2限だけ出力-->
											@foreach($categoryfr2s as $categoryfr2)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr2->id,'departmentcategory_id'=>$categoryfr2->departmentcategory_id]) }}" title="{{ $categoryfr2->name }}"><p class="subjectname">{{ $categoryfr2->name }}</p></a>
											@endforeach
										</div>
										<div id="fri3" class="fri12345">
											<a><p class="subject-name-top-period">3rd period</p></a>
											<!--金曜日3限だけ出力-->
											@foreach($categoryfr3s as $categoryfr3)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr3->id,'departmentcategory_id'=>$categoryfr3->departmentcategory_id]) }}" title="{{ $categoryfr3->name }}"><p class="subjectname">{{ $categoryfr3->name }}</p></a>
											@endforeach
										</div>
										<div id="fri4" class="fri12345">
											<a><p class="subject-name-top-period">4th period</p></a>
											<!--金曜日4限だけ出力-->
											@foreach($categoryfr4s as $categoryfr4)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr4->id,'departmentcategory_id'=>$categoryfr4->departmentcategory_id]) }}" title="{{ $categoryfr4->name }}"><p class="subjectname">{{ $categoryfr4->name }}</p></a>
											@endforeach
										</div>
										<div id="fri5" class="fri12345">
											<a><p class="subject-name-top-period">5th period</p></a>
											<!--金曜日5限だけ出力-->
											@foreach($categoryfr5s as $categoryfr5)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr5->id,'departmentcategory_id'=>$categoryfr5->departmentcategory_id]) }}" title="{{ $categoryfr5->name }}"><p class="subjectname">{{ $categoryfr5->name }}</p></a>
											@endforeach
										</div>
										<div id="fri6" class="fri12345">
											<a><p class="subject-name-top-period">6th period</p></a>
											<!--金曜日6限だけ出力-->
											@foreach($categoryfr6s as $categoryfr6)
											<a href="{{ route('subjecttop.index', ['category_id'=>$categoryfr6->id,'departmentcategory_id'=>$categoryfr6->departmentcategory_id]) }}" title="{{ $categoryfr6->name }}"><p class="subjectname">{{ $categoryfr6->name }}</p></a>
											@endforeach
										</div>
									</div>
								</div>

						</div>

					</div>
			</div>
			<p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>
		</main>





		<!--フッター読み込み-->
		@include("parts.footer")

        <!-- javascript (general) 読み込み-->
		<script type="text/javascript" src="assets/js/general.js"></script>

</body>

</html>



