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

</head>