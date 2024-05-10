
<style>

header {
    max-width: 100vw;
    height: 100vh;
    position: relative;
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

div.header__arrow:hover i {
    transform: translateY(-1rem)
}

div.header__arrow:hover i::after {
    content: "向上滑動";
    font-size: 1.2rem;
}

div.c_container {
    padding: 2rem;
    width: 100%;
}

h2.c_container__title {
    font-size: 1.8rem;
    font-weight: bold;
    position: relative;
    width: max-content;
    padding: 0 2rem 0 0;
    margin-bottom: 1rem;
    cursor: pointer;
}

h2.c_container__title:hover::after {
    content: "🔗"
}

div.c_container__title__decorate {
    width: 1.6rem;
    height: 1.6rem;
    border-radius: 100%;
    bottom: 0;
    right: 0;
    transform: translateX(25%) translateY(15%);
    position: absolute;
    z-index: -1;
}

div.c_container__content {

}

</style>

@extends('layouts.app')

@section('app')

    <header id="home">

        <img class="header__logo" src="https://improved-adventure-p5vv7w5qx6jc7pgp-80.app.github.dev/images/header.jpg">
        
        <div class="header__arrow">
            <i class="fa fa-angle-up"></i>
        </div>

    </header>

    <!-- 服務 -->
    <div class="light c_container">

        <h2 class="c_container__title" id="service">
            服務 Service
            <div class="c_container__title__decorate"></div>
        </h2>

        <div class="c_container__content">
            @include('sections.service')
        </div>

    </div>

    <!-- 作品集 -->
    <div class="light c_container">

        <h2 class="c_container__title" id="portfolio">
            作品集 Portfolio
            <div class="c_container__title__decorate"></div>
        </h2>

        <div class="c_container__content">
            我
        </div>

    </div>
    
    <!-- 關於我 -->
    <div class="light c_container">

        <h2 class="c_container__title" id="about-me">
            關於我 About Me
            <div class="container__title__decorate"></div>
        </h2>

        <div class="c_container__content">
            我
        </div>

    </div>
@endsection