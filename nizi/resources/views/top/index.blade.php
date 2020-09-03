


<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <!--CSS (slick用読み込)-->
		<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
		<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">


</head>

@include("parts.common")
@include("parts.header")

<body id="vw vh">

<main>

	<!-- 画像挿入-->
	<div class='header-img-frame'>
		<div class='header-img-in'>
			<img src="{{ asset('img/sophia.jpg') }}" class="img-fluid h-100 w-100" >
		</div>
	</div>

	<!-- 科目一覧表示 -->
	<div class="to-class" id="class-sub">
		<h1	class="text-center p-3 m-3" >Class subject</h1>

		<div class="container text-center fluid">
		 	<!-- 学科表示(スライダー) -->
			<div class="row your-class">
				<div class=" img-sophia border border-secondary  m-2 rounded" >
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>

				<div class=" img-sophia border border-secondary  m-2 rounded">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>
				<div class=" img-sophia border border-secondary  m-2 rounded">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>

				<div class=" img-sophia border border-secondary  m-2 rounded">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>
				<div class=" img-sophia border border-secondary  m-2 rounded">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>

				<div class=" img-sophia border border-secondary  m-2 rounded">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center img-sophia-in img-sophia">
						<h1 class="your-class">General education</h1>
						</a>
				</div>

			</div>
		</div>
	</div>

	<!-- 掲示板一覧 -->
	<div class="container" id="all-bbs">

		<div class="row">

			<div class="col-md-8 text-center top-all-bbs-backgroundcolor">
				<div class="comment-box-border">
					<a>
					<div class="comment-box">
						<div class="comment-text">
								<p　class="badge badge-primary">掲示板のタイトル</p>
						</div>
						<div class="">
							<div class="f-container comment-info border-top">
								<div class="top-bbs-item float-right">コメント数</div>
								<div class="top-bbs-item float-right ">2019:3:29</div>
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class="comment-box-border">
					<a>
					<div class="comment-box">
						<div class="comment-text">
								<p　class="badge badge-primary">掲示板のタイトル</p>
						</div>
						<div class="">
							<div class="f-container comment-info border-top">
								<div class="top-bbs-item float-right">コメント数</div>
								<div class="top-bbs-item float-right ">2019:3:29</div>
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class="comment-box-border">
					<a>
					<div class="comment-box">
						<div class="comment-text">
								<p　class="badge badge-primary">掲示板のタイトル</p>
						</div>
						<div class="">
							<div class="f-container comment-info border-top">
								<div class="top-bbs-item float-right">コメント数</div>
								<div class="top-bbs-item float-right ">2019:3:29</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				
				<div class="comment-box-border">
					<a>
					<div class="comment-box">
						<div class="comment-text">
								<p　class="badge badge-primary">掲示板のタイトル</p>
						</div>
						<div class="">
							<div class="f-container comment-info border-top">
								<div class="top-bbs-item float-right">コメント数</div>
								<div class="top-bbs-item float-right ">2019:3:29</div>
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class="comment-box-border">
					<a>
					<div class="comment-box">
						<div class="comment-text">
								<p　class="badge badge-primary">掲示板のタイトル</p>
						</div>
						<div class="">
							<div class="f-container comment-info border-top">
								<div class="top-bbs-item float-right">コメント数</div>
								<div class="top-bbs-item float-right ">2019:3:29</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				
			</div>

			<div class="col-md-4 ">
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
				<a><p class="koukoku-box">広告</p></a>
			</div>


			</div>

		</div>

	</div>

	<p id="page-top" ><a href="#"><i class="fas fa-arrow-up"></i></a></p>
</main>
@include("parts.footer")
        <!--JS(slick用)読み込み-->
        
		<script type="text/javascript" src="js/top.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>


</body>
</html>