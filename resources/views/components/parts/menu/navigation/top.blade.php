<!-- head menu -->   
<div class="head-menu--fix d-none d-lg-block">
    <div class="container">
        <div class="head-menu d-flex justify-content-between align-items-center">
            <ul class="head-menu__categories d-flex">
                <li class="head-menu__categories--item">
                    <a href="{{ route('index') }}" class="head-menu__categories--link regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/home.svg') }}" alt="" class="head-menu__categories--icon convert-svg">
                        Home
                    </a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.market') }}" class="head-menu__categories--link active regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/market.svg') }}" alt="" class="head-menu__categories--icon convert-svg">
                    Market
                </a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.shop') }}" class="head-menu__categories--link regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/shop.svg') }}" alt="" class="head-menu__categories--icon convert-svg">
                        Shop
                    </a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.charities') }}" class="head-menu__categories--link regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/charitys.svg') }}" alt="" class="head-menu__categories--icon convert-svg">
                        Charitys And Other NPOs
                    </a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.social') }}" class="head-menu__categories--link regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/social.svg') }}" alt="" class="head-menu__categories--icon convert-svg">
                        Social Programs
                    </a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.news') }}" class="head-menu__categories--link regular  d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/menu/news.svg') }}" alt="" class="head-menu__categories--icon convert-svg convert-svg">
                        News
                    </a>
                </li>
            </ul>
            <ul class="head-menu__categories d-flex">
                <li class="head-menu__categories--item">
                    <a href="{{ route('pages.about') }}" class="head-menu__categories--link regular">About us</a>
                </li>
                <li class="head-menu__categories--item">
                    <a href="?act=contact" class="head-menu__categories--link regular">Help&Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>