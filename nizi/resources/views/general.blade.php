


<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>


@include("parts.common", [ "title" => "一般教養" ])
@include("parts.header")

<!-- CSS読み込み -->
<link href="{{ asset('css/general.css') }}" rel="stylesheet">
<main>
	<h1 class="text-center title-class">一般教養</h1>
	<div class="text-center container">
		<div class="row">

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
				<div class="row">
						<!-- 月曜日時間割出力 -->
					<div id="mon" class="section">
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
						<div>
							<div id="mon1" class="mon12345">
								<a><p>1111ｍ</p></a>
								<a>1111ｍ</a>
							</div>
							<div id="mon2" class="mon12345">
								<P>2222ｍ</P>
								<P>2222ｍ</P>
							</div>
							<div id="mon3" class="mon12345">
								<P>3333ｍ</P>
								<P>3333ｍ</P>
							</div>
							<div id="mon4" class="mon12345">
								<P>4444ｍ</P>
								<P>4444ｍ</P>
							</div>
							<div id="mon5" class="mon12345">
								<P>5555ｍ</P>
								<P>5555ｍ</P>
							</div>
						</div>
						<!-- 火曜日時間割出力 -->
					<div id="tue" class="section">
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
						<div>
							<div id="tue1" class="tue12345">
								<a>1111tue</a>
								<a>1111tue</a>
							</div>
							<div id="tue2" class="tue12345">
								<P>2222ｍ</P>
								<P>2222ｍ</P>
							</div>
							<div id="tue3" class="tue12345">
								<P>3333ｍ</P>
								<P>3333ｍ</P>
							</div>
							<div id="tue4" class="tue12345">
								<P>4444ｍ</P>
								<P>4444ｍ</P>
							</div>
							<div id="tue5" class="tue12345">
								<P>5555ｍ</P>
								<P>5555ｍ</P>
							</div>
						</div>
					<!--水曜日時間割出力-->
					<div id="wed" class="section">
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
						<div>
							<div id="wed1" class="wed12345">
								<div>
									<P>1111wer</P>
									<P>1111we</P>
								</div>
							</div>
							<div id="wed2" class="wed12345">
								<P>2222we</P>
								<P>2222we</P>
							</div>
							<div id="wed3" class="wed12345">
								<P>3333ｍ</P>
								<P>3333we</P>
							</div>
							<div id="wed4" class="wed12345">
								<P>4444we</P>
								<P>4444we</P>
							</div>
							<div id="wed5" class="wed12345">
								<P>5555we</P>
								<P>5555we</P>
							</div>
						</div>

						<div id="thu" class="section">
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
							<div>
								<div id="thu1" class="thu12345">
									<P>1111thu</P>
									<P>1111we</P>
								</div>
								<div id="thu2" class="thu12345">
									<P>2222th</P>
									<P>2222we</P>
								</div>
								<div id="thu3" class="thu12345">
									<P>3333thi</P>
									<P>3333we</P>
								</div>
								<div id="thu4" class="thu12345">
									<P>4444thi</P>
									<P>4444we</P>
								</div>
								<div id="thu5" class="thu12345">
									<P>555thi</P>
									<P>5555we</P>
								</div>
							</div>

					<div id="fri" class="section">
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

							<div>
								<div id="fri1" class="fri12345">
									<P>1111fri</P>
									<P>1111fri</P>
								</div>
								<div id="fri2" class="fri12345">
									<P>2222fri</P>
									<P>2222we</P>
								</div>
								<div id="fri3" class="fri12345">
									<P>33frihi</P>
									<P>3333we</P>
								</div>
								<div id="fri4" class="fri12345">
									<P>fri</P>
									<P>4444we</P>
								</div>
								<div id="fri5" class="fri12345">
									<P>fri</P>
									<P>5555we</P>
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



