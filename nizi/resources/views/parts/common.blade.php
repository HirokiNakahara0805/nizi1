<!DOCTYPE html>
<html lang="ja">

<head>

                <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta name="description" content=“上智大生向けの履修支援サイトです。このサイトでは授業のオススメ度や授業毎の掲示板機能などの有益な情報を得られるサイトになっております。”>
        <title>∞pilotis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- CSS(Bootstrap用)読み込み -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <!-- CSS(common用)読み込み -->
        <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet">
         <!--CSS (slick用)読み込み-->
	 <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
        <!-- fontawesome 読み込み -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="{{  asset('assets/css/style.css') }}" />
        <!-- jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <!-- jquery slick -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- view point 読み込み-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- javascript  読み込み-->
	<script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
         <!-- googleアドセンス審査のやつ（多分）読み込み-->
        <script data-ad-client="ca-pub-3635512525147486" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- googleアナリティクス本番だけ反応-->
        @if(env('APP_ENV') == 'production')
        @include('google.analytics')
        @endif
</head>