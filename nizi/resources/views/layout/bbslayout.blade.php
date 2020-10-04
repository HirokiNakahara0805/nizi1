<DOCTYPE HTML>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
       <!-- <title>@yield('title')｜magicmissile.info</title> -->
        <meta name="description" itemprop="description" content="上智大生向けの履修支援サイトです。このサイトでは授業のオススメ度や授業毎の掲示板機能などの有益な情報を得られるサイトになっております。">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/bbs/sticky-footer.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- CSS(Bootstrap)読み込み -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <!--CSS読み込み-->
        <link href="{{ asset('assets/css/bbslayout.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet">
        <!-- fontawesome 読み込み -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!--  <link rel="stylesheet" href="{{  asset('css/style.css') }}" /> -->
        <!-- jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <!-- jquery slick -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- view point 読み込み-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- javascript  読み込み-->
		<script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
        <!--　font awesome　CSS指定よう-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
          <!-- javascript  読み込み-->
      <script type="text/javascript" src="{{ asset('assets/js/bbs_post.js') }}"></script>
        <!-- googleアナリティクス本番だけ反応-->
        @if(env('APP_ENV') == 'production')
        @include('google.analytics')
        @endif

    </head>


    <body>

    @yield('header')

    <div class="container">
        @yield('content')
    </div>

    @yield('layout.bbsfooter')

    </body>
</html>