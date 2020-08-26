


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
	<div class="img-sophia">
		<img src="{{ asset('img/sophia.jpg') }}" class="img-fluid h-75 w-100">
	</div>

	<!-- 科目一覧表示 -->
	<div>
		<h1	class="text-center">~授業情報~</h1>

		<div class="container text-center fluid">
		 	<!-- 学科表示(スライダー) -->
			<div class="row your-class">
				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>

				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>
				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>

				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>
				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>

				<div class="col-sm-3 img-sophia">
						<a href="{{ url('/general') }}" >
						<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						<h1>一般教養</h1>
						</a>
				</div>

			</div>
		</div>
	</div>



@include("parts.footer")
        <!--JS(slick用)読み込み-->
        
		<script type="text/javascript" src="js/top.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
</body>
</html>