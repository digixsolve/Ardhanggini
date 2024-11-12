<div class="ps-navigation--footer">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/default_logo.png') }}"
                style="width: 110px; padding: 10px;">
        </a>
    </div>
    <div class="d-flex align-items-center">
        <div class="ps-nav__item"><a href="{{ route('login') }}"><i class="icon-user"></i></a></div>
        <div class="ps-nav__item">
            <a href="{{ route('user.wishlist') }}">
                <i class="fa fa-heart-o"></i>
                @php
                    $wishlistCount = 0; // Default value in case user is not authenticated
                    if (Auth::check()) {
                        $userId = Auth::id();
                        $wishlistCount = App\Models\Wishlist::where('user_id', $userId)->count();
                    }
                @endphp
                <span class="badge wishlistCount">{{ $wishlistCount }}</span>
            </a>
        </div>
        <div class="ps-nav__item">
            <a href="{{ route('cart') }}">
                <i class="icon-cart-empty"></i>
                <span class="badge cartCount">{{ Cart::instance('cart')->count() }}</span>
            </a>
        </div>
        <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#"
                id="close-menu"><i class="icon-cross"></i></a></div>
    </div>
</div>
<div class="ps-menu--slidebar">
    <div class="ps-menu__content">
        <ul class="menu--mobile">

            @foreach ($categories as $category)
                <li class="has-mega-menu">
                    <a href="{{ route('category.products', $category->slug) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
            <li class="has-mega-menu">
                <a href="{{ route('allproducts') }}">
                    Shop
                </a>
            </li>
        </ul>
    </div>
    <div class="ps-menu__footer">
        <div class="ps-menu__item">
            <div class="ps-menu__contact">Need help? <strong>{{ optional($setting)->primary_phone }}</strong></div>
        </div>
    </div>
</div>
<button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
