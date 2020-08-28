<!DOCTYPE html>
<html lang="ja">
<head>

@isset($title)
<title>{{ $title }} - Sophia</title>
@else
<title>Top Sophia</title>
@endisset

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- CSS(Bootstrap)読み込み -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- fontawesome 読み込み -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
        <!-- jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


        
         <!-- jquery slick -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</head>