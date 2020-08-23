


<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

@include("parts.common")
@include("parts.header")

<main>
	<!-- 画像挿入-->
	<div class="img-sophia">
		<img src="{{ asset('img/sophia.jpg') }}" class="img-fluid">
	</div>

	<!-- 科目一覧表示 -->
	<div>
		<h1	class="text-center">
			~授業情報~
		</h1>
		<div class="container text-center">
			<div class="row">
				<div class="col" href="{{ url('/general') }}">
					
					<a href="{{ url('/general') }}" >

						<div>
							<img src="{{ asset('img/pankyo.jpg') }}" class="img-fluid center">
						</div>
						<h1>一般教養</h1>
					</a>
					
				</div>
			</div>
		</div>
	</div>
</main>

@include("parts.footer")

</body>
</html>