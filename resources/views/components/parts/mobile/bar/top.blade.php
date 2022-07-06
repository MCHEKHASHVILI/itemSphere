
<div class="col-12 d-block d-lg-none">
    <div class="header__mobile">
        <div class="row align-items-center justify-content-between">
            @if($page == 'blog')
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
                        <button class="header__mobile__btns--search">
                            <img src="'. asset(`assets/img/svg/header-btn/m-loop.svg`) .'" alt="">
                        </button>
                    </div>
                </div>
            @else
                <div class="col-6">
                    @if($page == 'market')
                        <button class="open-filter d-flex align-items-center justify-content-center regular">
                            <img src="{{ asset('assets/img/svg/filter-icon.svg') }}" alt="">
                            Filter
                        </button>
                    @endif
                    @if($page == 'home')
                        <div class="header__logo d-flex align-items-center">
                            <img src="{{ asset('assets/img/svg/header-logo.svg') }}" alt="" class="header__logo--img">
                        </div>
                    @endif
                </div>
                <div class="col-6 d-flex">
                    <button class="categories-btn d-flex align-items-center justify-content-center regular">
                        <img src="{{ asset('assets/img/svg/categories-icon.svg') }}" alt="">
                        Categories
                    </button>
                    <div class="header__mobile__btns d-flex justify-content-end">
                        <button class="header__mobile__btns--search">
                            <img src="{{ asset('assets/img/svg/header-btn/m-loop.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>