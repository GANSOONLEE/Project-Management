
<style>
    nav.navbar {
        width: 100%;
        height: max-content;
        background-color: transparent;
        display: flex;
        justify-content: flex-end;
        padding: 1rem 2rem;
        position: fixed;
        top: 0;
        z-index: 999;
    }

    button.open__menu {
        position: absolute;
        left: 2rem;
        display: none;
    }

    button.close__menu {
        display: none;
    }

    div.menu {
        display: flex;
        align-items: center;
        column-gap: 1.6rem;
    }

    a.menu__link {
        cursor: pointer;
        font-weight: bold;
        color: #fff;
    }

    a.menu__link:hover {
        color: #cecece;
    }

    a.menu__link.link__login {
        background: rgb(45, 3, 100);
        padding: .4rem .8rem;
        border-radius: 4px;
    }

    a.menu__link.link__login:hover {
        background: rgb(32, 2, 71);
    }

    @media (max-width: 720px) {

        button.open__menu, button.close__menu {
            display: block;
        }

    }

</style>

<nav class="navbar">
    
    <button class="open__menu">Open</button>

    <div class="menu">
        <a class="menu__link" href="#">首頁</a>
        <a class="menu__link" href="#">服務</a>
        <a class="menu__link" href="#">作品集</a>
        <a class="menu__link" href="#">關於我</a>

        @guest
        <a class="menu__link link__login" href="#">登入</a>
        @endguest

        @auth
        <a class="menu__link" href="#">注銷</a>
        @endauth

        <button class="close__menu">Close</button>
    </div>

</nav>