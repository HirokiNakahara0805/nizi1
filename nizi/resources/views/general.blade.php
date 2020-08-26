


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
	<h1 class="text-center">一般教養</h1>
	<div class="text-center">

			<div class="et_pb_module list-inline-item">
				<a href="#mon" class='secList'>Mon</a>
			</div>

			<div class="et_pb_module list-inline-item">
				<a href="#tue" class='secList'>Tue</a>
			</div>

			<div class="et_pb_module list-inline-item">
				<a href="#wed" class='secList'>Wed</a>
			</div>

			<div class="et_pb_module list-inline-item">
				<a href="#thu" class='secList'>Thu</a>
			</div>

			<div class="et_pb_module list-inline-item">
				<a href="#fri" class='secList'>Fri</a>
			</div>


			<!-- Sections -->
			<div class="jugyou">
				<div id="mon" class="section ">
					<div>
						<a href="#mon1" class="periodList">1st period</h2>
						<P id="mon1" class="mon12345">1111ｍ</P>
					</div>
					<div>
						<a href="#mon2" class="periodList">2nd period</h2>
						<P id="mon2" class="mon12345">2222</P>
					</div>
					<div>
						<a href="#mon3" class="periodList">3rd period</h2>
						<P id="mon3" class="mon12345">333</P>
					</div>
					<div>
						<a href="#mon4" class="periodList">4th period</h2>
						 <p id="mon4" class="mon12345">4444</p>
					</div>
					<div>
						<a href="#mon5" class="periodList">5th period</h2>
						<p id="mon5" class="mon12345">5555</p>
					</div>
				</div>

				<div id="tue" class="section">
					<div>
						<a href="#tue1" class="periodList">1st period</h2>
						<P id="tue1" class="tue12345">1111ｔ</P>
					</div>
					<div>
						<a href="#tue2" class="periodList">2nd period</h2>
						<P id="tue2" class="tue12345">2222</P>
					</div>
					<div>
						<a href="#tue3" class="periodList">3rd period</h2>
						<P id="tue3" class="tue12345">333</P>
					</div>
					<div>
						<a href="#tue4" class="periodList">4th period</h2>
						 <p id="tue4" class="tue12345">4444</p>
					</div>
					<div>
						<a href="#tue5" class="periodList">5th period</h2>
						 <p id="tue5" class="tue12345">5555</p>
					</div>
				</div>

				<div id="wed" class="section">
					<div>
						<a href="#wed1" class="periodList">1st period</h2>
						<P id="wed1" class="wed12345">1111ｗ</P>
					</div>
					<div>
						<a href="#wed2" class="periodList">2nd period</h2>
						<P id="wed2" class="wed12345">2222</P>
					</div>
					<div>
						<a href="#wed3" class="periodList">3rd period</h2>
						<P id="wed3" class="wed12345">333</P>
					</div>
					<div>
						<a href="#wed4" class="periodList">4th period</h2>
						 <p id="wed4" class="wed12345">4444</p>
					</div>
					<div>
						<a href="#wed5" class="periodList">5th period</h2>
						<p id="wed5" class="wed12345">5555</p>
					</div>
				</div>

				<div id="thu" class="section">
					<div>
						<a href="#thu1" class="periodList">1st period</h2>
						<P id="thu1" class="thu12345">1111ｔ</P>
					</div>
					<div>
						<a href="#thu2" class="periodList">2nd period</h2>
						<P id="thu2" class="thu12345">2222</P>
					</div>
					<div>
						<a href="#thu3" class="periodList">3rd period</h2>
						<P id="thu3" class="thu12345">333</P>
					</div>
					<div>
						<a href="#thu4" class="periodList">4th period</h2>
						 <p id="thu4" class="thu12345">4444</p>
					</div>
					<div>
						<a href="#thu5" class="periodList">5th period</h2>
						<p id="thu5" class="thu12345">5555</p>
					</div>
				</div>

				<div id="fri" class="section">
					<div>
						<a href="#fri1" class="periodList">1st period</h2>
						<P id="fri1" class="fri12345">1111ｆ</P>
					</div>
					<div>
						<a href="#fri2" class="periodList">2nd period</h2>
						<P id="fri2" class="fri12345">2222</P>
					</div>
					<div>
						<a href="#fri3" class="periodList">3rd period</h2>
						<P id="fri3" class="fri12345">333</P>
					</div>
					<div>
						<a href="#fri4" class="periodList">4th period</h2>
						 <p id="fri4" class="fri12345">4444</p>
					</div>
					<div>
						<a href="#fri5" class="periodList">5th period</h2>
						<p id="fri5" class="fri12345">5555</p>
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



