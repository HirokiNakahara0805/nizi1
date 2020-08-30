


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

<main>
	<!-- 画像挿入-->
	<div class="">
		<img src="{{ asset('img/sophia.jpg') }}" class="img-fluid h-75 w-100">
	</div>

	<!-- 科目一覧表示 -->
	<div class="to-class">
		<h1	class="text-center p-3 m-3">Class subject</h1>

		<div class="container text-center fluid">
		 	<!-- 学科表示(スライダー) -->
			<div class="row your-class">
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
	<div class="all-class-info text-center">
			
				<a><p>経営学入門掲示板</p></a>
				<a><p>経営学入門掲示板</p></a>
				<a><p>経営学入門掲示板</p></a>
				<a><p>経営学入門掲示板</p></a>
				<a><p>経営学入門掲示板</p></a>
				<a><p>経営学入門掲示板</p></a>
			</ul>
	</div>

	<p id="page-top" ><a href="#"><i class="fas fa-arrow-up"></i></a></p>
</main>
@include("parts.footer")
        <!--JS(slick用)読み込み-->
        
		<script type="text/javascript" src="js/top.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>


</body>
</html>