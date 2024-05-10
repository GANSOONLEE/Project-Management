
<style>

header {
    max-width: 100vw;
    max-height: 100vh;
}

img.header__logo {
    position: absolute;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
}

div.header__arrow {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 5rem;
    background: linear-gradient(transparent, #000);
    text-align: center;
}

div.header__arrow i {
    font-size: 2.4rem;
    color: #fff;
    cursor: pointer;
    transition: all .12s cubic-bezier(.24,1.32,.37,1.13);
    display: flex;
    flex-direction: column;
    row-gap: .4rem;
}

div.header__arrow i:hover {
    transform: translateY(-1rem)
}

div.header__arrow i:hover::after {
    content: "向上滑動";
    font-size: 1.2rem;
}

div.container {
    padding: 2rem;
}

</style>

@extends('layouts.app')

@section('app')

    <header>

        <img class="header__logo" src="https://improved-adventure-p5vv7w5qx6jc7pgp-80.app.github.dev/images/header.jpg">
        
        <div class="header__arrow">
            <i class="fa fa-angle-up"></i>
        </div>

    </header>

    <!-- 服務 -->
    <div class="light container">

        <h2>服務 Service</h2>

    </div>

@endsection