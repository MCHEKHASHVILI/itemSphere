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