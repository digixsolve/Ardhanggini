<style>
    .dropdown-item {
        font-size: 16px !important;
    }

    ::placeholder {
        color: #000 !important;
        opacity: 1;
        /* Firefox */
    }

    .menu-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin: 0 auto;
    }

    .menu {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        justify-content: center;
        flex-grow: 1;
        gap: 10px;
    }

    .menu-item {
        display: none;
        /* Default display for JS-managed visibility */
    }

    button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    .special-offers-btn {
        position: relative;
        /* Position for pseudo-element layering */
        background-color: white;
        border: 2px solid transparent;
        /* Transparent border for border-image */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        overflow: hidden;
        /* Hide overflow of the animated layer */

        /* Text Gradient */
        background-image: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;

        /* Gradient Border */
        border-image: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        border-image-slice: 1;
        /* Ensures the gradient fills the border */
    }

    /* The animated gradient layer */
    .special-offers-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        /* Start from the left side, outside of the button */
        width: 200%;
        /* Cover enough width for a smooth transition */
        height: 100%;
        background-image: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        z-index: -1;
        /* Place behind the text */

        /* Repeating animation every 3 seconds */
        animation: slideGradient 3s linear infinite;
    }

    /* Keyframes for sliding animation */
    @keyframes slideGradient {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    /* Hover styles for text */
    .special-offers-btn:hover {
        color: transparent;
        background-image: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        -webkit-background-clip: text;
        background-clip: text;

        /* Gradient Border on Hover */
        background-image: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        border-image-slice: 1;
    }

    .ps-navigation__left {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<header class="ps-header ps-header--2">
    @if (!empty(optional($setting)->website_name) || !empty(optional($setting)->site_motto))
        <div class="ps-noti">
            <div class="container-fluid">
                {{-- <p class="m-0">Welcome to {{ optional($setting)->website_name }}, {{ optional($setting)->site_motto }}
                </p> --}}
                <div class="scrolling-text">
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                    <a href="#" class="mb-0 py-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        11:11 Special sale offer
                    </a>
                </div>
            </div>
            {{-- <a class="ps-noti__close">
                <i class="icon-cross"></i>
            </a> --}}
        </div>
    @endif
    <div class="ps-header__top">
        <div class="container">
            <div class="ps-header__text"> {{ optional($setting)->site_motto }} </div>
            <div class="ps-top__right">
                <div class="ps-top__social">
                    <ul class="ps-social">
                        @if (optional($setting)->facebook_url)
                            <li><a class="ps-social__link facebook" href="{{ optional($setting)->facebook_url }}">
                                    <i class="fa fa-facebook" style="color: #3D6AD6;"> </i>
                                    <span class="ps-tooltip">Facebook</span>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->instagram_url)
                            <li>
                                <a class="ps-social__link instagram" href="{{ optional($setting)->instagram_url }}">
                                    <i class="fa fa-instagram"
                                        style="
                                        background: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
                                        -webkit-background-clip: text;
                                        color: transparent;"></i>
                                    <span class="ps-tooltip">Instagram </span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <ul class="menu-top">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">My Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('user.order.history') }}">My Order
                                History</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <li class="nav-item"><a class="nav-link" href="{{ route('allBlog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('allproducts') }}">Shop</a></li>

                </ul>
                @if (!empty(optional($setting)->primary_phone))
                    <div class="ps-header__text">Need help? <strong>{{ optional($setting)->primary_phone }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt="" onerror="this.onerror=null; this.src='/images/default_logo.png';">
                    <img class="sticky-logo"
                        src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt="" onerror="this.onerror=null; this.src='/images/default_logo.png';">
                </a>
            </div>
            <a class="ps-menu--sticky" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <div class="ps-header__right">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="ps-header__icons">
                            <li>
                                {{-- Log Out --}}
                                <a class="ps-header__item" href="javascript:void(0)" id="login-modal">
                                    <img src="images/Profile.svg" class="header-icons" alt="">
                                </a>
                                @auth
                                    <div class="ps-login--modal">
                                        <!-- If the user is authenticated, show these options -->
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                        <!-- Hidden logout form -->
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                @else
                                    <div class="ps-login--modal">
                                        {{-- <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <x-input-label class="form-label form__label" for="email" :value="__('Email')" />
                                                <input class="form-control" type="email" name="email" :value="old('email')"
                                                    required autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="form-group">
                                                <x-input-label class="ps-form__label form-label" for="password" :value="__('Password')" />
                                                <div class="input-group">
                                                    <x-text-input class="form-control form-control-solid ps-form__input"
                                                        type="password" id="password" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    <div
                                                        class="input-group-append bg-light text-center d-flex align-items-center p-3 rounded-3 border">
                                                        <a class="fa fa-eye-slash toogle-password" href="javascript:void(0);"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                                <label class="form-check-label" for="remember_me">Remember me</label>
                                            </div>
                                            <x-primary-button class="ps-btn ps-btn--warning" type="submit">
                                                {{ __('Log in') }}
                                            </x-primary-button>
                                            <div class="pt-3">
                                                @if (Route::has('password.request'))
                                                    <span>Lost your</span><a class="ps-account__link site_text_color_links"
                                                        href="{{ route('password.request') }}"> password?</a> <br>
                                                    <span class="ps-5">Account? <a
                                                            class="ps-account__link site_text_color_links"
                                                            href="{{ route('register') }}">Create New Accounts</a></span>
                                                @endif
                                            </div>
                                        </form> --}}
                                        {{-- If Not Logged In --}}
                                        @guest
                                            <div>
                                                <p>Already Have An Account?</p>
                                                <a class="ps-btn ps-btn--warning" href="{{ route('login') }}">
                                                    Log in
                                                </a>
                                            </div>
                                            <div>
                                                <p>Don't Have An Account?</p>
                                                <a class="ps-btn ps-btn--warning" href="{{ route('register') }}">
                                                    Register
                                                </a>
                                            </div>
                                        @endguest

                                        {{-- If Logged In --}}
                                        @auth
                                            <div>
                                                <p>Manage Your Dashboard?</p>
                                                <a class="ps-btn ps-btn--warning" href="{{ route('dashboard') }}">
                                                    Dashboard
                                                </a>
                                            </div>
                                            <div>
                                                <p>Want to Log Out?</p>
                                                <a class="ps-btn ps-btn--warning" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Log Out
                                                </a>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        @endauth
                                    </div>
                                @endauth
                            </li>
                            <li>
                                <a class="ps-header__item" href="{{ route('user.wishlist') }}">
                                    {{-- <i class="fa fa-heart-o"></i> --}}
                                    <img src="images/Heart.svg" class="header-icons" alt="">
                                    @php
                                        $wishlistCount = 0; // Default value in case user is not authenticated
                                        if (Auth::check()) {
                                            $userId = Auth::id();
                                            $wishlistCount = App\Models\Wishlist::where('user_id', $userId)->count();
                                        }
                                    @endphp
                                    <span class="badge wishlistCount">{{ $wishlistCount }}</span>

                                </a>
                            </li>
                            <li>
                                <a class="ps-header__item" href="#" id="cart-mini">
                                    {{-- <i class="icon-cart-empty"></i> --}}
                                    <img src="images/Cart.svg" class="header-icons" alt="">
                                    <span class="badge cartCount">{{ Cart::instance('cart')->count() }}</span></a>
                                <div class="ps-cart--mini miniCart">
                                    @include('frontend.pages.cart.partials.minicart')
                                </div>
                            </li>
                        </ul>
                        <div class="ps-header__search">
                            <form action="{{ route('allproducts') }}">
                                <div class="ps-search-table">
                                    <div class="input-group rounded-pill">
                                        <input id="search_text" class="form-control ps-input search_text"
                                            type="text" placeholder="Search for products">
                                        <div class="input-group-append">
                                            {{-- <a href="#"><i class="fa fa-search"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="search_container" class="ps-search--result search_container d-none"
                                style="height: 44vh;overflow-y: auto;">
                                <!-- Search results will be injected here -->
                            </div>
                        </div>
                        {{-- @if (!empty(optional($setting)->primary_phone))
                            <div class="ps-middle__text">Need help? <strong>{{ optional($setting)->primary_phone }}</strong>
                            </div>
                        @endif --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 pr-0">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <div class="ps-navigation__left">
                                <nav class="ps-main-menu">
                                    <div class="menu-container">
                                        <!-- Previous Button -->
                                        <button id="prevButton" onclick="showPrevious()" style="display: none;">
                                            <i class="fa fa-chevron-left text-white"></i>
                                        </button>
                                        <!-- Menu Items -->
                                        <ul class="menu">
                                            @foreach ($categories->slice(0, 6) as $index => $category)
                                                <li class="menu-item menus-items-head"
                                                    data-index="{{ $index }}"
                                                    style="display: {{ $index < 5 ? 'block' : 'none' }};">
                                                    <a
                                                        href="{{ route('category.products', $category->slug) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <!-- Next Button -->
                                        <button id="nextButton" onclick="showNext()">
                                            <i class="fa fa-chevron-right text-white"></i>
                                        </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="text-right pt-3">
                            <a href="#" class="btn btn-primary special-offers-btn">11:11 Sale</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="ps-navigation">
        <div class="container-fluid text-center" style="border-bottom: 1px solid #f0f2f5;">
            <div class="container">

            </div>
        </div>
    </div> --}}
</header>
<header class="ps-header ps-header--13 ps-header--mobile">
    <div class="ps-noti">
        <div class="container">
            <p class="m-0">{{ optional($setting)->website_name }}, {{ optional($setting)->site_motto }}</p>
        </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-header__left">
                <ul class="ps-header__icons">
                    <li>
                        <a class="ps-header__item open-search" href="#">
                            <i class="fa fa-search" aria-hidden="true" style="font-family: 'FontAwesome';">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ps-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt="">
                </a>
            </div>
            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li>
                        <a class="ps-header__item" href="{{ asset('mycart') }}">
                            <i class="icon-cart-empty"></i>
                            <span class="badge cartCount">{{ Cart::instance('cart')->count() }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="ps-header__item" href="#">
                            <i class="icon-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>
<div class="ps-search">
    <div class="ps-search__content ps-search--mobile"><a class="ps-search__close" href="#"
            id="close-search"><i class="icon-cross"></i></a>
        <h3>Search</h3>
        <form action="{{ route('allproducts') }}">
            <div class="ps-search-table">
                <div class="input-group">
                    <input id="search_text" class="form-control form-control search_text" type="text"
                        placeholder="Search for products">
                    <div class="input-group-append"><a href="#"><i class="fa fa-search"></i></a></div>
                </div>
            </div>
        </form>
        <div id="search_container" class="ps-search--result search_container d-none"
            style="height: 60vh;overflow-y: auto;">
            <!-- Search results will be injected here -->
        </div>
    </div>
</div>
<script>
    function handleLogout() {
        fetch('{{ route('logout') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    _method: 'POST'
                })
            })
            .then(response => {
                if (response.ok) {
                    window.location.href = '{{ url('/') }}'; // Redirect after logout
                } else {
                    console.error('Logout failed.');
                }
            })
            .catch(error => console.error('Logout error:', error));
    }
</script>

<script>
    let currentIndex = 0;
    const itemsPerPage = 5;
    const items = document.querySelectorAll('.menu-item');
    const totalItems = items.length;

    function updateVisibility() {
        items.forEach((item, index) => {
            item.style.display = (index >= currentIndex && index < currentIndex + itemsPerPage) ? 'block' :
                'none';
        });

        // Show/hide buttons based on current index
        document.getElementById('prevButton').style.display = currentIndex === 0 ? 'none' : 'inline';
        document.getElementById('nextButton').style.display = currentIndex + itemsPerPage >= totalItems ? 'none' :
            'inline';
    }

    function showNext() {
        if (currentIndex + itemsPerPage < totalItems) {
            currentIndex += 1; // Move one item at a time
            updateVisibility();
        }
    }

    function showPrevious() {
        if (currentIndex > 0) {
            currentIndex -= 1; // Move one item back at a time
            updateVisibility();
        }
    }

    // Initial setup
    updateVisibility();
</script>
