@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<!--<link href="/css/bbs/style.css" rel="stylesheet">-->
@endsection

@section('content')
<div>
@foreach ($syllabi as $syllabus)
    {{ $syllabus->name }}
@endforeach
</div>

<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></span>
<span class="btn"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></span>
<span class="btn"><a href="{{ route('syllabus.index', ['category_id'=>$category_id]) }}" >シラバス</a></span>
<span class="btn"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></span>


</div>
 
<div class="mt-4 mb-4">
    @foreach($categories as $id => $name)
    <span class="btn"><a href="{{ route('syllabus.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
    @endforeach
</div>

@foreach ($syllabi as $syllabus)
<body>
    <table>
        <tr>
            <th>カテゴリID</th>
            <td>{{ $syllabus->category_id }}</td>
        </tr>
        <tr>
            <th>カテゴリ名</th>
            <td>{{ $syllabus->name }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $syllabus->content}}</td>
        </tr>
    </table>
</body>  
@endforeach
</div>
@endsection


 
