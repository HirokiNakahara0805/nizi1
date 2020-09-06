@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection
 
 
@section('content')

<div>
@foreach ($generaltops as $generaltop)
            <tr>
                {{ $generaltop->name }}
            </tr>
@endforeach
</div>



<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$category_id]) }}" >トップ</a></span>
<span class="btn"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></span>
<span class="btn"><a href="{{ route('syllabus.index', ['category_id'=>$category_id]) }}" >シラバス</a></span>
<span class="btn"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></span>

<div>
@foreach($categories as $id => $name)
<span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
@endforeach
</div>

        <div class="container">
            <div class="table table-hover">

                <div>

                @foreach ($evaluations as $evaluation)
                    @if($loop->iteration < 6) 


                    <div class="comment-box">

                        <div class="evaluation-text">

                                <div><p> 学年{{ $evaluation->year }}</p></div>
                                <div><p> < 授業名 > </p></div>
                                <div> <p>いいね{{ $evaluation->good }}</p></div>

                        </div>

                        
                        
                        <div>
                            <div class="evaluation-message">
                                <p>コメント：{{ $evaluation->message }}</p>
                            </div>

                        </div>
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">投稿日時　{{ $evaluation->created_at->format('Y.m.d .H:i') }}</div>
                            <div class="f-item float-right">name{{ $evaluation->name }}</div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>




        <div class="container">
        <div class="table table-hover">
            <!-- <thead>
                <tr>

                    <th>投稿時間</th>
                    <th>ニックネーム</th>
                    <th>学年</th>
                    <th>メイン内容</th>
                </tr>
            </thead> -->
            <div id="tbl">
            @foreach ($bbss as $bbs)
                @if($loop->iteration < 6) 
                <div class="comment-box">
                    <div class="comment-text">{!! nl2br(e(Str::limit($bbs->message, 100))) !!}
                    </div>
                    <div class="">
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">{{ $bbs->created_at->format('Y.m.d H:i') }}</div>
                            <div class="f-item float-right">{{ $bbs->name }}</div>
                            <div class="f-item float-right ">{{ $bbs->subject }}学年</div>

                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>


@endsection