@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection
 

 
@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ニックネーム</th>
            <th>年度</th>
            <th>作成日時</th>
            <th>いいね</th>
            <th>単位取得難易度</th>
            <th>忙しさ</th>
            <th>授業の雰囲気</th>
            <th>フリーコメント</th>
        </tr>
        </thead>
        <tbody id="tbl">
        @foreach ($post2s as $post2)
            <tr>
                <td>{{ $post2->name }}</td>
                <td>{{ $post2->year }}</td>
                <td>{{ $post2->created_at->format('Y.m.d .H:i') }}</td>
                <td>{{ $post2->good }}</td>
                <td>{{ $post2->difficulty }}</td>
                <td>{{ $post2->busyness }}</td>
                <td>{{ $post2->atmosphere }}</td>
                <td>{{ $post2->message }}</td>  
               
             
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mb-5">
    {{ $post2s->links() }}
</div>

@endsection
 
