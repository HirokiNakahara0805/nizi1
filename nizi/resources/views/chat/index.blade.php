@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection
 
@include('layout.bbsheader')
 
@section('content')



<div class="all-index">


    <div class="container mt-4 ">
        <div class="comment-box-form">

            <form method="POST" action="{{ route('chat.store') }}" >
                @csrf

                <fieldset class="">
                    <div class="row">
                        <div class="form-group col-sm-2">
                            
                            <textarea
                                id="name"
                                name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ old('name') }}"
                                type="text"
                                rows="1"
                            >ニックネーム</textarea>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                      </div>
        
                    
            
                            
                        <div class="form-group col-sm-2">
                            <select id="year"
                                name="year"
                                class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
                                value="{{ old('year') }}"
                                type="number"
                                placeholder="学年"
                                size="1"
                                >
                            <option value="0"selected disabled>学年</option>
　　　　　　　　　　　　　　　　　<option value="1">１</option>
　　　　　　　　　　　　　　　　　<option value="2">２</option>
　　　　　　　　　　　　　　　　　<option value="3">３</option>
　　　　　　　　　　　　　　　　　<option value="4">４</option>
　　　　　　　　　　　　　　　　</select>
                            @if ($errors->has('year'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('year') }}
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="form-group">
                    
               
                    </div>
                    
                    <div class="row text-center">

                        <div class="form-group col-sm-6">
                            <label for="message">
                                メイン内容
                            </label>
        
                            <textarea
                                id="message"
                                name="message"
                                class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                cols="20" rows="2"　 wrap="hard" 　
                            >{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>

                        
        
        
                        <div class="post-position col-sm-3">
        
                            <button type="submit" class="post-botton" >
                                <i class="fas fa-paper-plane post-icon">POST</i>
                            </button>
                        </div>

                    </div>
                </fieldset>
            </form>
        </div>
    </div>

   



    <div class="container">
        <div class="row">
            <!-- <thead>
                <tr>

                    <th>投稿時間</th>
                    <th>ニックネーム</th>
                    <th>学年</th>
                    <th>メイン内容</th>
                </tr>
            </thead> -->
            <div class="col-md-8">
            @foreach ($chats as $chat)

                <div class="comment-box">
                    <div class="comment-text">{{$chat->message}}

                    </div>
                    <div class="">
                        <div class="f-container comment-info border-top">
                            <div class="f-item float-right">{{ $chat->created_at->format('Y.m.d H:i') }}</div>
                            <div class="f-item float-right">{{ $chat->name }}</div>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
            <!--投稿の横の空白部分-->
            <div class="col-md-4">

            </div>

        </div>
    </div>


</div>

@endsection
 
@include('layout.bbsfooter')