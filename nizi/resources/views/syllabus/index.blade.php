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
            <th>カテゴリID</th>
            <th>カテゴリ名</th>
            <th>内容</th>
        </thead>
        <tbody id="tbl">
        @foreach ($syllabuses as $syllabus)
            <tr>
                <td>{{ $syllabus->category_id }}</td>
                <td>{{ $syllabus->name }}</td>
                <td>{{ $syllabus->content}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
 
