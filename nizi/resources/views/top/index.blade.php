





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

			<h1	class="text-center p-5 mt-5" >DEPARTMENT</h1>

			<div class="container text-center fluid">
				<!-- 学科表示(スライダー) -->
				<div class="row your-class">

					<!-- 学科表示スライダーの中身-->
					@foreach($departmentcategories as $departmentcategorie)
					<div class=" img-sophia col-md-2" >
						<a href="{{ route('departmenttop.index', ['departmentcategory_id'=>$departmentcategorie->id]) }}" title="{{ $departmentcategorie->name}}"><h1 class="your-class">{{ $departmentcategorie->name }}</h1></a>
					</div>
					@endforeach
					


				</div>
			</div>

			<!-----------------------------------------------授業科目セレクトボックス--------------------------------------------------->
		<h3 class="text-center mt-5 pt-5" id="all-subject">学部名</h3>
		<div class="mt-4 mb-4 text-center underlist">
			<select size="1" class="form-control-top" name="select" onChange="location.href=value;">
				<option value="0"selected disabled>学部名</option>
				@foreach($departmentcategories as $departmentcategorie)
				<option value="{{ route('departmenttop.index', ['departmentcategory_id'=>$departmentcategorie->id]) }}" title="{{ $departmentcategorie->name}}"><h1 class="your-class">{{ $departmentcategorie->name }}</a>
				</option>
				@endforeach
			</select>
		</div>
</div>	
		</div>


		<!-- 掲示板一覧 -->

			<div class="container" id="all-bbs">


				<div class="row">


					<div class="col-md-8 text-center top-all-bbs-backgroundcolor">
						<!-- カテゴリーテーブルを変数宣言してます -->
						<h1	class="text-center m-2" >一般教養</h1>
						@foreach($category2s as $category2)
						@if($loop->iteration < 6)
						<div class="top-bbs-box">
								<div class="border-bottom top-bbs-item-frame">
										<div class="top-bbs-item "><p>{{ $category2->time }}</p></div>
										<div class="top-bbs-item "><p>{{ $category2->teacher }}</p></div>
								</div>
							<a href="{{ route('subjecttop.index', ['category_id'=>$category2->id ]) }}" title="{{ $category2->name }}">

								<div class="">
										<p class="bbs-name text-center" >{{ $category2->name }}</p>
								</div>

							</a>
						</div>
						@endif
						@endforeach

						<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=288&l=ur1&category=amazonstudent&banner=1QVPY5WT2THVZY40E382&f=ifr&linkID=a3950fadcf8940a4ec34f800f1964e9e&t=8pilotis-22&tracking_id=8pilotis-22" width="280" height="50" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
					</div>

					<div class="col-md-4  ">

							<div class=" img-sophia-chat mt-5 mb-5" >
								<a href="{{ url('/chat') }}" >
									<h1 class="your-class-chat text-center">Chat Room</h1>
								</a>
							</div>
							<div class="over-780ad">
								<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ur1&category=amazonstudent&banner=09028NTWEEQWX1H30B82&f=ifr&linkID=6499a59af2a79013c26dfaa2dba3ee1d&t=8pilotis-22&tracking_id=8pilotis-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" class="m-5"></iframe>
							</div>

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
 
