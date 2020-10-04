@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection
 
@include('layout.bbsheader')
 
@section('content')



@if (session('poststatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{ session('poststatus') }}
    </div>
@endif

<main class="container mt-4">
    <div class="border p-4">
        <h1 class="h4 mb-4 font-weight-bold">
            投稿の新規作成
        </h1>
 
        <form method="POST" action="{{ route('chattop.store') }}">
            @csrf
 
            <fieldset class="mb-4">
 
                <div class="form-group">
 
                <div class="form-group">
                    <label for="subject">
                        件名
                    </label>
                    <input
                        id="subject"
                        name="subject"
                        class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}"
                        value="{{ old('subject') }}"
                        type="text"
                    >
                    @if ($errors->has('subject'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="text">
                        メッセージ
                    </label>
 
                    <textarea
                        id="text"
                        name="text"
                        class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('text') }}</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                </div>
 
                    <button type="submit" class="btn btn-primary">
                        スレを作る
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</main>


    <p>{{ $chattops->count() }}件が見つかりました。</p>


<div class="mt-4 mb-4">
    @foreach($chattops as $chattop)
    <span class="btn"><a href="{{ route('chatpost.index', ['chattop_id'=>$chattop->id]) }}" title="{{ $chattop->name }}">{{ $chattop->name }}</a></span>
    @endforeach
</div>

<div class="table-responsive">
    <table class="table table-hover">
<thead>
        <tr>
            <th>ID</th>
            <th>作成日時</th>
            <th>件名</th>
            <th>テキスト</th>
        </tr>
        </thead>
        <tbody id="tbl">
        @foreach ($chattops as $chattop)
            <tr>
                <td>{{ $chattop->id }}</td>
                <td>{{ $chattop->created_at->format('Y.m.d') }}</td>
                <td>{{ $chattop->subject }}</td>
                <td>{{ $chattop->text }}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection