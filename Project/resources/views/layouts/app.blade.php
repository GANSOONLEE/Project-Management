<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Frankgan 阿循">
    <meta name="description" content="專案管理">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{ config('app.name') }} | 首頁</title>

    <link rel="stylesheet" href="https://improved-adventure-p5vv7w5qx6jc7pgp-5174.app.github.dev/resources/css/app.css">

    {{-- @vite("resources/js/app.js") --}}
    {{-- <script defer type="module" src=""></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="app">

    @include('includes.navbar')
    
    @yield('app')

</body>
</html>