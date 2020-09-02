


<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>


@include("parts.common", [ "title" => "一般教養" ])
@include("parts.header")

<!-- CSS読み込み -->
<link href="{{ asset('css/general.css') }}" rel="stylesheet">

		<!-- 画像挿入-->
	<div class='header-img-frame'>
		<div class='header-img-in'>
			<img src="{{ asset('img/sophia.jpg') }}" class="img-fluid h-100 w-100" >
		</div>
	</div>
<main>


	<h1 class="text-center title-class">一般教養</h1>
	<div class="text-center container">
		<div class="row1 mx-auto">

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
								<a><p class="subjectname">1111ｍ</p></a>
								<a><p class="subjectname">1111ｍ</p></a>
							</div>
							<div id="mon2" class="mon12345">
								<a><p class="subjectname">1111ｍ</p></a>
								<a><p class="subjectname">1111ｍ</p></a>
							</div>
							<div id="mon3" class="mon12345">
								<a><p class="subjectname">1111ｍ</p></a>
								<a><p class="subjectname">1111ｍ</p></a>
							</div>
							<div id="mon4" class="mon12345">
								<a><p class="subjectname">1111ｍ</p></a>
								<a><p class="subjectname">1111ｍ</p></a>
							</div>
							<div id="mon5" class="mon12345">
								<a><p class="subjectname">1111ｍ</p></a>
								<a><p class="subjectname">1111ｍ</p></a>
							</div>
						</div>
					</div>
						<!-- 火曜日時間割出力 -->
					<div id="tue" class="section  row">

						<div  class="col-md-4">
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
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111tue</p></a>
							</div>
							<div id="tue2" class="tue12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111tue</p></a>
							</div>
							<div id="tue3" class="tue12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111tue</p></a>
							</div>
							<div id="tue4" class="tue12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111tue</p></a>
							</div>
							<div id="tue5" class="tue12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111tue</p></a>
							</div>
						</div>
					</div>
					<!--水曜日時間割出力-->
					<div id="wed" class="section  row">
						<div class="col-md-4">
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
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">111wednesday1tue</p></a>
							</div>
							<div id="wed2" class="wed12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111wednesdaytue</p></a>
							</div>
							<div id="wed3" class="wed12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111wednesdaytue</p></a>
							</div>
							<div id="wed4" class="wed12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">111wednesday1tue</p></a>
							</div>
							<div id="wed5" class="wed12345">
								<a><p class="subjectname">1111tue</p></a>
								<a><p class="subjectname">1111wednesday</p></a>
							</div>
						</div>
					</div>
						<!--木曜日時間割出力-->
					<div id="thu" class="section  row">
						<div class="col-md-4">
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
									<a><p class="subjectname">111thursday1tue</p></a>
									<a><p class="subjectname">111thursday1tue</p></a>
								</div>
								<div id="thu2" class="thu12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">1111thursdaytue</p></a>
								</div>
								<div id="thu3" class="thu12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">111thursday1tue</p></a>
								</div>
								<div id="thu4" class="thu12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">111thursday1tue</p></a>
								</div>
								<div id="thu5" class="thu12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">1111thursday</p></a>
								</div>
							</div>
						</div>
					<!--金曜日時間割出力-->
						<div id="fri" class="section  row">
							<div class="col-md-4">
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
							</div>

							<div class="classboard col-md-8">
								<div id="fri1" class="fri12345">
									<a><p class="subjectname">111friday1tue</p></a>
									<a><p class="subjectname">1111tue</p></a>
								</div>
								<div id="fri2" class="fri12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">1111fridaytue</p></a>
								</div>
								<div id="fri3" class="fri12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">1fridaytue</p></a>
								</div>
								<div id="fri4" class="fri12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">1fridaytue</p></a>
								</div>
								<div id="fri5" class="fri12345">
									<a><p class="subjectname">1111tue</p></a>
									<a><p class="subjectname">friday</p></a>
								</div>
							</div>
						</div>

				</div>

			</div>
	</div>
</main>
@include("parts.footer")
        <!-- javascript (general) 読み込み-->
		<script type="text/javascript" src="js/general.js"></script>
		
</body>
</html>



