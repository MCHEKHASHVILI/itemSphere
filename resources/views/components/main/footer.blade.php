    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="row flex-wrap-reverse flex-wrap">
                    <div class="col-lg-5">
                        @include('components.parts.other.content.footer.desktop.left')
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        @include('components.parts.menu.desktop.footer')
                                    </div>
                                    <div class="col-6 d-lg-none">
                                        @include('components.parts.menu.mobile.footer')
                                    </div>
                                </div>
                            </div>
                            <!-- payment method mobile -->
                            <div class="col-12 d-lg-none">
                                @include('components.parts.menu.payment.mobile.footer')
                            </div>
                            <!-- contact us desktop -->
                            <div class="col-lg-4">
                                @include('components.parts.other.contact.desktop.footer')
                            </div>
                            <!-- find us desktop -->
                            <div class="col-lg-4">
                                @include('components.parts.other.find.desktop.footer')
                                @include('components.parts.menu.payment.desktop.footer')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- POPUPS -->

    <!-- profile popup mobile -->
    @include('components.parts.popup.mobile.profile')
    <!-- login popup -->
    @include('components.parts.popup.desktop.login')
    <!-- card popup -->
    @include('components.parts.popup.desktop.card')
    <!-- wishlist popup -->
    @include('components.parts.popup.desktop.wishlist')

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
    <script src="{{ asset('js/frontJs/splide.js') }}"></script>
    <script src="{{ asset('js/frontJs/slider.js') }}"></script>
    <script src="{{ asset('js/frontJs/pagination.js') }}"></script>
    <script src="{{ asset('js/frontJs/function.js') }}"></script>
    <script>MainPageSliderFunction()</script>