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
   
		
		<!--ヘッダー-->
<header>
		<div class="menu none"  id="menu">
			<div class="main-menu">
				<a href="#chatbbs" class="menu-item">掲示板<i class="fas fa-angle-double-down nav-arrows"></i></a>
				<a href="serch" class="menu-item">授業検索<i class="fas fa-angle-double-down nav-arrows"></i></a>
				<a href="#all-sns" class="menu-item">sns<i class="fas fa-angle-double-down nav-arrows"></i></a>
				<a href="#all-about" class="menu-item">about <i class="fas fa-angle-double-down nav-arrows"></i></a>
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

			<!--main開始-------------------------------------------->
		<main class="container">
			


			<div class="container dep-title-frame">
				<div class="dep-title-frame-top border-bottom">
				@foreach($departmentcategorie3s as $departmentcategorie3)
					<h1 class="department-bbs-title pl-5"><a name="timetable">{{ $departmentcategorie3->name }} 時間割</a></h1>
				@endforeach
				</div>
            </div>
            
			<!------------ 時間割・掲示板・ボタン---------------------------->
			<div>
				<ul class="reset-ul row feature-title-box">
					<li class=" topcolor feature-title-1 list-inline-item"><a href="" >時間割</a></li>
					<li class="feature-title-1 list-inline-item"><a href="" >掲示板</a></li>
				</ul>


<!---------------------------------------------------掲示板タイトル ----------------------------------------------------->
		<div class="all-index-dep">

			<div class="container dep-title-frame ">
				<div class="dep-title-frame-top border-bottom">
					@foreach($departmentcategorie3s as $departmentcategorie3)
					<p class="department-bbs-title pl-5"><a name="bbs">{{$departmentcategorie3->name}} 掲示板</a></p>
					@endforeach
				</div>
			</div>


<div class="container mt-4 ">
	<!---------------------------------------------------投稿完了メッセージ ----------------------------------------------------->
	@if (session('poststatus'))
				<div class="alert alert-success mt-4 mb-4">
					{{ session('poststatus') }}
				</div>
		@endif
	<div class="comment-box-form">


		<form method="POST" action="{{ route('departmenttop.store') }}" >
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

				</div>
				<div class="form-group">
				
				<input
					id="departmentcategory_id"
					name="departmentcategory_id"
					value = "{{$departmentcategory_id}}"
					class="form-control {{ $errors->has('departmentcategory_id') ? 'is-invalid' : '' }}"
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


<!---------------------------------------投稿件数表示（もし０件だったら初めての投稿をしよう！） -->
	<div class="mt-4 mb-4 text-center">
        @if ($departmentposts->total()=== 0 )
            <p>初めての投稿をしてみましょう！</p>
        @else
        <p>{{ $departmentposts->total() }}件が見つかりました。</p>
        @endif
    </div>

<div class="d-flex justify-content-center mb-5" >
	{{ $departmentposts->appends(['departmentcategory_id' => $departmentcategory_id])->links() }}
</div>


<div class="container">
	<div class="row">
		<div class="col-md-8">
		@foreach ($departmentposts as $departmentpost)

			<div class="comment-box">
				<div class="comment-text">{{$departmentpost->message}}

				</div>
				<div class="">
					<div class="f-container comment-info border-top">
						<div class="f-item float-right">{{ $departmentpost->created_at->format('Y.m.d H:i') }}</div>
						<div class="f-item float-right">{{ $departmentpost->name }}さん</div>
					</div>
				</div>
			</div>

		@endforeach
		</div>
		<!--投稿の横の空白部分-->
		<div class="col-md-4">

		</div>

	</div>

	<div class="d-flex justify-content-center mb-5">
		{{ $departmentposts->appends(['departmentcategory_id' => $departmentcategory_id])->links() }}
	</div>
	<!-----------------------------------------------授業科目セレクトボックス--------------------------------------------------->
	<h3 class="text-center" id="all-subject">学部名</h3>
	<div class="mt-4 mb-4 text-center underlist">
		<select size="1" class="form-control" name="select" onChange="location.href=value;">
			<option value="0"selected>学部名</option>
			@foreach($departmentcategorie2s as $departmentcategorie2)
			<option value="{{ route('departmenttop.index', ['departmentcategory_id'=>$departmentcategorie2->id]) }}" title="{{ $departmentcategorie2->name}}"><a class="class-list" >{{ $departmentcategorie2->name }}</a>
			</option>
			@endforeach
		</select>
	</div>	
</div>




		<!--フッター読み込み-->
		@include("parts.footer")

        <!-- javascript (general) 読み込み-->
		<script type="text/javascript" src="assets/js/general.js"></script>

</body>

</html>



