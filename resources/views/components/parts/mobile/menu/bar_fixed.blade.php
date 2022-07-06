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