<x-frontend-app-layout :title="'All Products'">
    <div class="ps-categogy">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <ul class="ps-breadcrumb">
                        <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                        <li class="ps-breadcrumb__item"><a href="index.html">Shop</a></li>
                        <li class="ps-breadcrumb__item active" aria-current="page">Diagnosis</li>
                    </ul>
                    <h1 class="ps-categogy__name">Diagnosis<sup>(32)</sup></h1>
                </div>
                <div class="col-lg-9">
                    <div>
                        {{-- <img class="img-fluid" style="object-fit: cover;height: 125px;width: 100%;"
                            src="{{ asset('storage/' . $category->banner_image) }}" alt=""> --}}
                        <img class="img-fluid ps-categogy__banner" style="object-fit: cover;height: 200px;width: 100%;"
                            src="https://nouthemes.net/html/mymedi/img/promotion/bg-banner5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="ps-categogy__content">
                <div class="row row-reverse">
                    <div class="col-12 col-md-9">
                        <div class="ps-categogy__wrapper d-flex justify-content-center">
                            <div class="ps-categogy__sort w-100 text-left py-0">
                                <form><span>Sort by</span>
                                    <select class="form-select">
                                        <option selected="">Latest</option>
                                        <option value="Popularity">Popularity</option>
                                        <option value="Average rating">Average rating</option>
                                        <option value="Latest">Latest</option>
                                        <option value="Price: low to high">Price: low to high</option>
                                        <option value="Price: high to low">Price: high to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="ps-categogy__show w-100 text-right py-0">
                                <form><span>Show</span>
                                    <select class="form-select w-auto">
                                        <option selected="">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="48">48</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="ps-categogy--list">
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/053.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">MyMedi</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Somersung Sonic X500
                                                Basic</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$38.39</span><span
                                            class="ps-product__del">$53.99</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/054.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/057.jpg') }}" alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--hot">Hot</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">MyMedi</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Somersung Sonic X2000 Pro
                                                Black</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$299.99</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/055.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/056.jpg') }}" alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">MyMedi</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Somersung Sonic X2500 Pro
                                                White</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$39.99</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/028.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/045.jpg') }}" alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">Medicstore</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Digital Thermometer
                                                X30-Pro</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$60.39</span><span
                                            class="ps-product__del">$89.99</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/042.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">iHeart</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Extractor used to remove
                                                teeth</a></h5>

                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$53.64</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/016.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/021.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">WeTakeCare</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Oxygen concentrator model
                                                KTS-5000</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$53.99</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/009.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sold">Sold Out</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">iLovehealth</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Digital Thermometer
                                                X30-Pro</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$77.65</span><span
                                            class="ps-product__del">$80.65</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/003.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/008.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                            <div class="ps-badge ps-badge--hot">Hot</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">BestPharm</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Automatic blood pressure
                                                monitor</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$90.65</span><span
                                            class="ps-product__del">$60.65</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/009.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sold">Sold Out</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">Medicstore</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Digital Thermometer
                                                X30-Pro</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$77.65</span><span
                                            class="ps-product__del">$80.65</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/011.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">BestPharm</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Hill-Rom Affinity III
                                                Progressa iBed</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$488.23</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/012.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/013.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">HeartRate</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Hill-Rom Affinity III
                                                Progressa iBed</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$436.87</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--list">
                                <div class="ps-product__content">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                            <figure><img src="{{ asset('frontend/img/products/013.jpg') }}"
                                                    alt="alt"><img
                                                    src="{{ asset('frontend/img/products/012.jpg') }}"
                                                    alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="" data-original-title="Quick view"><a href="#"
                                                    data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__info"><a class="ps-product__branch"
                                            href="#">BestPharm</a>
                                        <h5 class="ps-product__title shop_product-title"><a>Hill-Rom VersaCare</a></h5>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Study history up to 30 days</li>
                                                <li>Up to 5 users simultaneously</li>
                                                <li>Has HEALTH certificate</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="ps-product__meta"><span class="ps-product__price">$136.87</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                    class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1"
                                                type="number">
                                            <button class="plus"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                    class="icon-plus"></i></button>
                                        </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                            data-target="#popupAddcart">Add to cart</a>
                                    </div>
                                    <div class="ps-product__variations"><a class="ps-product__link"
                                            href="wishlist.html">Add to wishlist</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-pagination">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-delivery" data-background="img/promotion/banner-delivery-2.jpg') }}"
                            style="background-image: url({{ asset('frontend/promotion/banner-delivery-2.jpg') }});">
                            <div class="ps-delivery__content">
                                <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100%
                                            Secure delivery </strong>without contacting the courier</span></div><a
                                    class="ps-delivery__more" href="#">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Categories</h4><a class="ps-block-control"
                                    href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile">
                                        <li><a href="#">Diagnosis</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Biopsy tools</a></li>
                                                <li><a href="#">Endoscopes</a></li>
                                                <li><a href="#">Monitoring</a></li>
                                                <li><a href="#">Otoscopes</a></li>
                                                <li><a href="#">Oxygen concentrators</a></li>
                                                <li><a href="#">Tables and assistants</a></li>
                                                <li><a href="#">Thermometer</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Equipment</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Blades</a></li>
                                                <li><a href="#">Education</a></li>
                                                <li><a href="#">Germicidal lamps</a></li>
                                                <li><a href="#">Heart Health</a></li>
                                                <li><a href="#">Infusion stands</a></li>
                                                <li><a href="#">Lighting</a></li>
                                                <li><a href="#">Machines</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Higiene</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Disposable products</a></li>
                                                <li><a href="#">Face masks</a></li>
                                                <li><a href="#">Gloves</a></li>
                                                <li><a href="#">Protective covers</a></li>
                                                <li><a href="#">Sterilization</a></li>
                                                <li><a href="#">Surgical foils</a></li>
                                                <li><a href="#">Uniforms</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Laboratory</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Devices</a></li>
                                                <li><a href="#">Diagnostic tests</a></li>
                                                <li><a href="#">Disinfectants</a></li>
                                                <li><a href="#">Dyes</a></li>
                                                <li><a href="#">Pipettes</a></li>
                                                <li><a href="#">Test-tubes</a></li>
                                                <li><a href="#">Tubes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tools</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Accessories Tools</a></li>
                                                <li><a href="#">Blood pressure</a></li>
                                                <li><a href="#">Capsules</a></li>
                                                <li><a href="#">Dental</a></li>
                                                <li><a href="#">Micrscope</a></li>
                                                <li><a href="#">Pressure</a></li>
                                                <li><a href="#">Sugar level</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Wound Care</a><span class="sub-toggle"><i
                                                    class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bandages</a></li>
                                                <li><a href="#">Gypsum foundations</a></li>
                                                <li><a href="#">Patches and tapes</a></li>
                                                <li><a href="#">Stomatology</a></li>
                                                <li><a href="#">Surgical sutures</a></li>
                                                <li><a href="#">Uniforms</a></li>
                                                <li><a href="#">Wound healing</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">By price</h4><a class="ps-block-control"
                                    href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__price">
                                        <div id="slide-price" class="noUi-target noUi-ltr noUi-horizontal">
                                            <div class="noUi-base">
                                                <div class="noUi-origin" style="left: 0%;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                        style="z-index: 5;">
                                                        <div class="noUi-handle-touch-area"></div>
                                                        <div class="noUi-tooltip"><span>1.00</span></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-connect" style="left: 0%; right: 18.018%;"></div>
                                                <div class="noUi-origin" style="left: 81.982%;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1"
                                                        style="z-index: 4;">
                                                        <div class="noUi-handle-touch-area"></div>
                                                        <div class="noUi-tooltip"><span>820.00</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-widget__input"><span class="ps-price"
                                            id="slide-price-min">$1.00</span><span class="bridge">-</span><span
                                            class="ps-price" id="slide-price-max">$820.00</span></div>
                                    <button class="ps-widget__filter">Filter</button>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Brands</h4><a class="ps-block-control" href="#"><i
                                        class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="BestPharm">
                                            <label class="custom-control-label" for="BestPharm">BestPharm</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="HeartRate">
                                            <label class="custom-control-label" for="HeartRate">HeartRate</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="HeartShield">
                                            <label class="custom-control-label" for="HeartShield">HeartShield</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="iHeart">
                                            <label class="custom-control-label" for="iHeart">iHeart</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="iLovehealth">
                                            <label class="custom-control-label" for="iLovehealth">iLovehealth</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="Medialarm">
                                            <label class="custom-control-label" for="Medialarm">Medialarm</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="Medicstore">
                                            <label class="custom-control-label" for="Medicstore">Medicstore</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="MyMedi">
                                            <label class="custom-control-label" for="MyMedi">MyMedi</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="Pharmy">
                                            <label class="custom-control-label" for="Pharmy">Pharmy</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="WeTakeCare">
                                            <label class="custom-control-label" for="WeTakeCare">WeTakeCare</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-widget__promo"><img src="{{ asset('frontend/img/banner-sidebar1.jpg') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
