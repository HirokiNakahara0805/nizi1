<!DOCTYPE html>
<head>

@isset($title)
<title>{{ $title }} - Sophia</title>
@else
<title>Top Sophia</title>
@endisset

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>