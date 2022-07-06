 @include('components.parts.other.top')
 <header class="header">
    <!-- mobile menu bar -->
    @include('components.parts.mobile.menu.bar')
    @include('components.parts.mobile.categories')
    <div class="container">
        <div class="row">
            <!-- Top Bar Logo -->
            @include('components.parts.media.logo')
            <!-- Top Bar Content -->
            @include('components.parts.bar.top')
            <!-- Top Bar Mobile Version -->
            @include('components.parts.mobile.bar.top')
        </div>
    </div>
    <!-- search popup -->
    @include('components.parts.popup.search')
 </header>
 @include('components.parts.menu.navigation.top')
 @include('components.parts.mobile.menu.bar_fixed')