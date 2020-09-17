





	<!-- -------------------COMMONPARTS読み込み-->
@include("parts.common")
<!-- -------------------HEADER読み込み-->
@include("parts.header")

<body id="vw vh">

	<!-- トップページ最初に開いた時のアニメーション-->
	 <div class="start"><img src="{{ asset('img/8pilotis.1.jpg') }}" alt=""></div>

	<main>

		<!-- 画像挿入-->
		<div class='header-img-frame'>
			<div class='header-img-in'>
				<img src="{{ asset('img/IMG_9584.JPG') }}" class="" >
			</div>
		</div>
	
		<!-- 科目一覧表示 -->
		<div class="to-class" id="class-sub">

			<h1	class="text-center p-3 m-3" >Class subject</h1>

			<div class="container text-center fluid">
				<!-- 学科表示(スライダー) -->
				<div class="row your-class">

					<!-- 学科表示スライダーの中身-->
					<div class=" img-sophia col-md-2" >
							<a href="{{ url('/departmenttop') }}" >
								<h1 class="your-class">General education</h1>
							</a>
					</div>

					<div class=" img-sophia col-md-2" >
							<a href="{{ url('/chat') }}" >
								<h1 class="your-class">Chat Room</h1>
							</a>
					</div>
					<div class=" img-sophia col-md-2" >
							<a href="/" >
								<h1 class="your-class">COMING SOOM</h1>
							</a>
					</div>
					<div class=" img-sophia col-md-2" >
							<a href="/" >
								<h1 class="your-class">COMING SOOM</h1>
							</a>
					</div>
					<div class=" img-sophia col-md-2" >
							<a href="/" >
								<h1 class="your-class">COMING SOOM</h1>
							</a>
					</div>


				</div>
			</div>
		</div>
		
		<div class=" img-sophia col-md-2" >
							<a href="{{ url('/chat') }}" >
								<h1 class="your-class">Chat Room</h1>
							</a>
					</div>

		<!-- 掲示板一覧 -->

			<div class="container" id="all-bbs">

			
				<div class="row">
					

					<div class="col-md-8 text-center top-all-bbs-backgroundcolor">
						<!-- カテゴリーテーブルを変数宣言してます -->
						<h1	class="text-center m-2" >BBS title</h1>
						@foreach($category2s as $category2)
						<div class="top-bbs-box">
								<div class="border-bottom top-bbs-item-frame">
										<div class="top-bbs-item "><p>{{ $category2->time }}</p></div>
										<div class="top-bbs-item "><p>{{ $category2->teacher }}</p></div>
								</div>
							<a href="{{ route('generaltop.index', ['category_id'=>$category2->id ]) }}" title="{{ $category2->name }}">

								<div class="">
										<p class="bbs-name text-center" >{{ $category2->name }}</p>
								</div>

							</a>
						</div>
						@endforeach
						<div class="d-flex justify-content-center mb-5">
    							{{ $category2s->links() }}
						</div>
					</div>

					<div class="col-md-4">
							<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>
							<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>
							<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>
							<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>
							<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>

					</div>

				</div>

			</div>




	<!--------------------------------上にスクロール設定-->
		<p id="page-top" ><a href="rolling"><i class="fas fa-arrow-up"></i></a></p>
	</main>


<!--------------------------------フッター読み込み-->
@include("parts.footer")

		 <!--CSS (top用読み込)-->
		<link rel="stylesheet" href="{{ asset('/css/top.css') }}">
        <!--JS(slick用)読み込み-->
		<script type="text/javascript" src="js/top.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>



</body>

</html>
 
