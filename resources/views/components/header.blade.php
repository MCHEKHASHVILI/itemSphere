	
	<div class="header__head">
        <div class="container header__head--container d-flex align-items-center">
            <h3 class="header__head--text regular">
                <p>Manage Your Property and Contribute to  Sustainable Dvelopment </p>
            </h3>
            <div class="header__head--lang">
                <div class="header__head--lang-btn d-none d-lg-flex align-items-center">
                    <div class="header__head--lang-active d-flex align-items-center regular">
                        <img src="{{ asset('assets/img/svg/georgia.svg') }}" alt="">
                        Geo
                    </div>
                    <img src="{{ asset('assets/img/svg/lang-arrow-down.svg') }}" alt="">
                </div>
                <div class="header__head--lang-list">
                    <div class="header__head--lang-item d-flex align-items-center regular">
                        <img src="{{ asset('assets/img/svg/georgia.svg') }}" alt="">
                        Geo
                    </div>
                    <div class="header__head--lang-item d-flex align-items-center regular">
                        <img src="{{ asset('assets/img/svg/england.svg') }}" alt="">
                        En
                    </div>
                </div>
                <button class="header__head--close btn d-block d-lg-none">
                    <img src="{{ asset('assets/img/svg/close-head-green.svg') }}" alt="">
                </button>
            </div>
        </div>
    </div>
    <header class="header">
        <!-- mobile menu bar -->
        <div class="m-header d-block d-lg-none">
            <div class="container">
                <ul class="m-header__menu d-flex justify-content-between">
                    <li class="m-header__menu--li">
                        <a href="{{ route('index') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/home1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="m-header__menu--li">
                        <a href="{{ route('pages.market') }}" class="m-header__menu--a active regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/market1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>
                                Market
                            </p>
                        </a>
                    </li>
                    <li class="m-header__menu--li">
                        <a href="{{ route('pages.shop') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/shop1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>
                                Shop
                            </p>
                        </a>
                    </li>
                    <li class="m-header__menu--li">
                        <a href="{{ route('pages.social') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/social1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>
                                Social Programs
                            </p>
                        </a>
                    </li>
                    <li class="m-header__menu--li">
                        <a href="{{ route('pages.charities') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/charitys1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>
                                Charities 
                            </p>
                        </a>
                    </li>
                    <li class="m-header__menu--li">
                        <a href="/charities-touch.html" class="m-header__menu--a regular d-flex flex-column align-items-center">
                            <figure class="m-header__menu--figure d-flex justify-content-center">
                                <div class="m-header__menu--icon">
                                    <img src="{{ asset('assets/img/svg/menu/news1.svg') }}" class="convert-svg" alt="">
                                </div>
                            </figure>
                            <p>
                                News 
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-categories">
            <div class="mobile-categories__head">
                <button class="mobile-categories__head--close">
                    <img src="{{ asset('assets/img/svg/clear-bold.svg') }}" alt="">
                </button>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/svg/popup-logo.svg') }}" alt="">
                </div>
                <div class="mobile-categories__head--list">
                    <a href="" class="mobile-categories__head--item active show">All Categories</a>
                    <a href="" class="mobile-categories__head--item hide">მეორე</a>
                    <a href="" class="mobile-categories__head--item hide">მესამე</a>
                </div>
            </div>
            <div>
                <ul class="mobile-categories__list mobile-categories__first">
                    <li class="categories__list--item mobile-categories__first--item" data-id="0">
                        <a href="/about.html" class="categories__list--link regular">პირველი</a>
                    </li>
                    <li class="categories__list--item mobile-categories__first--item" data-id="1">
                        <a href="" class="categories__list--link regular">Auto & Transportation</a>
                    </li>
                    <li class="categories__list--item mobile-categories__first--item" data-id="2">
                        <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                    </li>
                    <li class="categories__list--item mobile-categories__first--item" data-id="3">
                        <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                    </li>
                    <li class="categories__list--item mobile-categories__first--item" data-id="4">
                        <a href="" class="categories__list--link regular">Agriculture & Food</a>
                    </li>
                </ul>
    
                <div>
                    <ul class="mobile-categories__list mobile-categories__second" data-id="0">
                        <li class="categories__list--item mobile-categories__second--item" data-id="0">
                            <a href="/about.html" class="categories__list--link regular">მეორეს ერთი</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="1">
                            <a href="" class="categories__list--link regular">Auto & Transportation</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="2">
                            <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="3">
                            <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="4">
                            <a href="" class="categories__list--link regular">Agriculture & Food</a>
                        </li>
                    </ul>
                    <ul class="mobile-categories__list mobile-categories__second" data-id="1">
                        <li class="categories__list--item mobile-categories__second--item" data-id="0">
                            <a href="/about.html" class="categories__list--link regular">მეორეს ორი</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="1">
                            <a href="" class="categories__list--link regular">Auto & Transportation</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="2">
                            <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="3">
                            <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                        </li>
                        <li class="categories__list--item mobile-categories__second--item" data-id="4">
                            <a href="" class="categories__list--link regular">Agriculture & Food</a>
                        </li>
                    </ul>
                </div>
    
                <div>
                    <ul class="mobile-categories__list mobile-categories__three" data-id="0">
                        <li class="categories__list--item mobile-categories__three--item" data-id="0">
                            <a href="/about.html" class="categories__list--link regular">მესამეს პირველი</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="1">
                            <a href="" class="categories__list--link regular">Auto & Transportation</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="2">
                            <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="3">
                            <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="4">
                            <a href="" class="categories__list--link regular">Agriculture & Food</a>
                        </li>
                    </ul>
                    <ul class="mobile-categories__list mobile-categories__three" data-id="1">
                        <li class="categories__list--item mobile-categories__three--item" data-id="0">
                            <a href="/about.html" class="categories__list--link regular">მესამეს მეორე</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="1">
                            <a href="" class="categories__list--link regular">Auto & Transportation</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="2">
                            <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="3">
                            <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                        </li>
                        <li class="categories__list--item mobile-categories__three--item" data-id="4">
                            <a href="" class="categories__list--link regular">Agriculture & Food</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2 d-none d-lg-block">
                    <div class="header__logo d-flex align-items-center">
                        <img src="{{ asset('assets/img/svg/header-logo.svg') }}" alt="" class="header__logo--img">
                    </div>
                </div>
                <div class="col-10 d-none d-lg-flex justify-content-between align-items-center">
                    <form class="header__search d-flex align-items-center justify-content-between">
                        <input type="text" placeholder="search" class="header__search--input regular">
                        <button class="header__search--btn">
                            <img src="{{ asset('assets/img/svg/loop.svg') }}" alt="">
                        </button>
                    </form>
                    <ul class="header__btns d-flex align-items-center justify-content-end">
                        
                        <!-- is not log in -->
                        <div class="header__account click-open d-flex align-items-center justify-content-between" data-active="login-popup">
                            <div class="d-flex">
                                <div class="header__account--avatar d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/img/svg/header-btn/avatar.svg') }}" alt="">
                                </div>
                                <div class="header__account--text regular">
                                    <p>Hello</p>
                                    <p class="header__account--text--green">Davit</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center" style="position: relative;">
                                <img src="{{ asset('assets/img/svg/header-btn/arrow.svg') }}" alt="" class="header__account--icon">
                            </div>
                        </div> 
                        
                        <li class="header__btns--item click-open" data-active="wishlist-popup">
                            <a href="" class="header__btns--link d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/svg/header-btn/heart.svg') }}" alt="">
                            </a>
                        </li>
                        <li class="header__btns--item click-open" data-active="cart-popup">
                            <div class="header__btns--item--count d-flex justify-content-center align-items-center regular">
                                1
                            </div>
                            <a href="" class="header__btns--link d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/svg/header-btn/shop.svg') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- mobile logo -->
                <div class="col-12 d-block d-lg-none">
                    <div class="header__mobile">
                        <div class="row align-items-center justify-content-between">
                            <?php
                                $page_name	= !empty($_GET['act']) ? $_GET['act'] : 'home';
                                if($page_name == 'blog') {
                                    echo '
                                        <div class="col-12 d-flex">
                                            <div class="product-filter blog-menu">
                                                <ul class="head-menu__categories d-flex">
                                                    <li class="head-menu__categories--item">
                                                        <a href="" class="head-menu__categories--link regular">Market</a>
                                                    </li>
                                                    <li class="head-menu__categories--item">
                                                        <a href="" class="head-menu__categories--link regular">Shop</a>
                                                    </li>
                                                    <li class="head-menu__categories--item">
                                                        <a href="" class="head-menu__categories--link regular">Charitys And Other NPOs</a>
                                                    </li>
                                                    <li class="head-menu__categories--item">
                                                        <a href="" class="head-menu__categories--link regular">Social Programs</a>
                                                    </li>
                                                    <li class="head-menu__categories--item">
                                                        <a href="" class="head-menu__categories--link regular">News</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="header__mobile__btns d-flex justify-content-end">
                                                <button class="header__mobile__btns--search"><img src="'. asset(`assets/img/svg/header-btn/m-loop.svg`) .'" alt=""></button>
                                                <!-- <button class="header__mobile__btns--btn"><img src="'. asset(`assets/img/svg/header-btn/m-sms.svg`) .'" alt=""></button> -->
                                                <!-- <button class="header__mobile__btns--btn"><img src="'. asset(`assets/img/svg/header-btn/m-notification.svg`) .'" alt=""></button> -->
                                            </div>
                                        </div>
                                    ' ;
                                }else {
                                ?>
                                    <div class="col-6">
                                        <?php
                                            if($page_name == 'market') {
                                                echo '
                                                    <button class="open-filter d-flex align-items-center justify-content-center regular">
                                                        <img src="'. asset(`assets/img/svg/filter-icon.svg`) .'" alt="">
                                                        Filter
                                                    </button>
                                                ' ;
                                            }
                                            if($page_name == 'home') {
                                                echo '
                                                <div class="header__logo d-flex align-items-center">
                                                    <img src="'. asset(`assets/img/svg/header-logo.svg`) .'" alt="" class="header__logo--img">
                                                </div>
                                                ' ;
                                            }
                                        ?>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <button class="categories-btn d-flex align-items-center justify-content-center regular">
                                            <img src="{{ asset('assets/img/svg/categories-icon.svg') }}" alt="">
                                            Categories
                                        </button>
                                        <div class="header__mobile__btns d-flex justify-content-end">
                                            <button class="header__mobile__btns--search"><img src="{{ asset('assets/img/svg/header-btn/m-loop.svg') }}" alt=""></button>
                                            <!-- <button class="header__mobile__btns--btn"><img src="asset('assets/img/svg/header-btn/m-sms.svg')" alt=""></button> -->
                                            <!-- <button class="header__mobile__btns--btn"><img src="asset('assets/img/svg/header-btn/m-notification.svg')" alt=""></button> -->
                                        </div>
                                    </div>
                                <?php  
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search popup -->
        <div class="header__search__bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-lg-none">
                        <form class="m-header__search d-flex align-items-center justify-content-end">
                            <input type="text" placeholder="I want to buy…" class="m-header__search--input regular">
                            <div class="m-search-cancel"><img src="{{ asset('assets/img/svg/header-btn/m-search-cancel.svg') }}" alt=""></div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="header__search__bar--left d-flex flex-column align-items-end regular">
                                    Products (234)
                                    <a href="">View all</a>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <ul class="header__search__bar__list">
                                    <li class="header__search__bar__list--li">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <figure class="header__search__bar__list--img">
                                                <img src="{{ asset('assets/img/headphone.png') }}" alt="">
                                            </figure>
                                            <h1 class="header__search__bar__list--title regular">iPhone5 40 Inch 1080p  Smart LED Roku TV</h1>
                                        </a>
                                    </li>
                                    <li class="header__search__bar__list--li">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <figure class="header__search__bar__list--img">
                                                <img src="{{ asset('assets/img/headphone.png') }}" alt="">
                                            </figure>
                                            <h1 class="header__search__bar__list--title regular">iPhone5 40 Inch 1080p  Smart LED Roku TV</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="header__search__bar--left d-flex flex-column align-items-end regular">
                                    Charities (56)
                                    <a href="">View all</a>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <ul class="header__search__bar__list">
                                    <li class="header__search__bar__list--li">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <figure class="header__search__bar__list--img">
                                                <img src="{{ asset('assets/img/headphone.png') }}" alt="">
                                            </figure>
                                            <h1 class="header__search__bar__list--title regular">iPhone5 40 Inch 1080p  Smart LED Roku TV</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="header__search__bar--left d-flex flex-column align-items-end regular">
                                    News (2)
                                    <a href="">View all</a>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <ul class="header__search__bar__list">
                                    <li class="header__search__bar__list--li">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <h1 class="header__search__bar__list--title regular">iPhone5 40 Inch 1080p  Smart LED Roku TV</h1>
                                        </a>
                                    </li>
                                    <li class="header__search__bar__list--li">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <h1 class="header__search__bar__list--title regular">iPhone5 40 Inch 1080p  Smart LED Roku TV</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end -->
                </div>
            </div>
        </div><!-- search popup end -->
    </header>
	
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

    <!-- fix menu bar mobile -->
    <div class="fix-bar d-block d-lg-none">
        <div class="container">
            <ul class="fix-bar__lists d-flex justify-content-between align-items-start">
                <li class="fix-bar__lists--li">
                    <a href="" data-active="cart-popup" class="fix-bar__lists--link regular d-flex align-items-center flex-column click-open">
                        <figure class="fix-bar__lists--icon">
                            <img src="{{ asset('assets/img/svg/header-btn/bar-cart.svg') }}" alt="">
                        </figure>
                        Cart
                    </a>
                </li>
                <li class="fix-bar__lists--li">
                    <a href="" class="fix-bar__lists--link regular d-flex align-items-center flex-column">
                        <figure class="fix-bar__lists--icon">
                            <img src="{{ asset('assets/img/svg/notifications.svg') }}" alt="">
                        </figure>
                        Notifications
                    </a>
                </li>
                <li class="fix-bar__lists--btn">
                    <a href="" class="d-flex align-items-center flex-column">
                        <img src="{{ asset('assets/img/svg/header-btn/bar-add.svg') }}" alt="">
                    </a>
                </li>
                <li class="fix-bar__lists--li">
                    <a href="" class="fix-bar__lists--link regular d-flex align-items-center flex-column">
                        <figure class="fix-bar__lists--icon">
                            <img src="{{ asset('assets/img/svg/messages.svg') }}" alt="">
                        </figure>
                        Messages
                    </a>
                </li>
                <li class="fix-bar__lists--li">
                    <!-- loged in window / profile menu  -->
                    <!-- log in window  -->
                    <a href="" data-active="login-popup" class="fix-bar__lists--link click-open regular d-flex align-items-center flex-column">
                        <figure class="fix-bar__lists--icon">
                            <img src="{{ asset('assets/img/svg/header-btn/bar-profile.svg') }}" alt="">
                        </figure>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </div>