@section('content')
<div style="margin-top:50px;">
<h1>検索結果</h1>
@if(isset($users))
<table class="table">
  <tr>
    <th>ユーザー名</th><th>先生</th><th>学部</th>
  </tr>
  @foreach($users as $user)
    <tr>
      <div class="top-bbs-box">
								<div class="border-bottom top-bbs-item-frame">
										<div class="top-bbs-item "><p>{{ $user->time }}</p></div>
										<div class="top-bbs-item "><p>{{ $user->teacher }}</p></div>
								</div>
                <a href="{{ route('subjecttop.index', ['category_id'=>$user->id ]) }}" title="{{ $user->name }}">

								<div class="">
										<p class="bbs-name text-center" >{{ $user->name }}</p>
								</div>

							</a>
						</div>
    </tr>
  @endforeach
  
</table>
@endif
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>