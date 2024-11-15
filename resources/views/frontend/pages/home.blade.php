<x-frontend-app-layout :title="'Home Page'">
    <section class="ps-section--banner">
        <div class="ps-section__overlay">
            <div class="ps-section__loading"></div>
        </div>
        <div class="owl-carousel-banner owl-carousel owl-loaded owl-drag" data-owl-auto="false" data-owl-loop="true"
            data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
            data-owl-duration="1000" data-owl-mousedrag="on">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    @foreach ($sliders as $slider)
                        <div class="owl-item">
                            <div class="ps-banner hero-banner"
                                style="
                            background-image: url('{{ asset('storage/' . $slider->bg_image) }}');
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center center;
                            height: 600px;
                            width: 100%;
                        ">
                                <div class="container container-initial">
                                    <div class="ps-banner__block">
                                        <div class="ps-banner__content">
                                            <h2 class="ps-banner__title text-white">{{ $slider->title }}</h2>
                                            <div class="ps-banner__desc text-white">{{ $slider->subtitle }}</div>
                                            <div class="ps-banner__btn-group">
                                                <div class="ps-banner__btn text-white">{{ $slider->badge }}</div>
                                            </div>
                                            @if (!empty($slider->button_link) || !empty($slider->button_name))
                                                <a class="bg-warning ps-banner__shop" href="{{ $slider->button_link }}">
                                                    {{ $slider->button_name }}
                                                </a>
                                            @endif
                                            {{-- <div class="ps-banner__persen bg-yellow ps-top"><small>only</small>$25</div> --}}
                                        </div>
                                        <div class="ps-banner__thumnail">
                                            {{-- <img class="ps-banner__round"
                                                src="{{ asset('storage/' . $slider->bg_image) }}" alt="alt"> --}}
                                            {{-- <img class="ps-banner__image" src="{{ asset('storage/' . $slider->image) }}"
                                                alt="alt"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="owl-nav">
                {{-- <button type="button" role="presentation" class="owl-prev">
                    <i class="fa fa-chevron-left text-white"></i>
                </button>
                <button type="button" role="presentation" class="owl-next">
                    <i class="fa fa-chevron-right text-white"></i>
                </button> --}}
            </div>
        </div>
    </section>


    <section class="ps-section--featured mt-5">
        <div class="container">
            <h3 class="ps-section__title">Featured products</h3>
            <div class="ps-section__content">
                <div class="row m-0">
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/054.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/057.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to compare"><a href="#"
                                                data-toggle="modal" data-target="#popupCompare"><i
                                                    class="fa fa-align-left"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Somersung Sonic X2000 Pro
                                            Black</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$299.99</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/028.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/045.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Digital Thermometer
                                            X30-Pro</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$60.39</span><span
                                            class="ps-product__del">$89.99</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/016.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/021.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Oxygen concentrator model
                                            KTS-5000</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$53.99</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected="selected">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/002.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/017.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Blue Hot Water Bottle, 2
                                            Quart Capacity</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$38.39</span><span
                                            class="ps-product__del">$14.52 - $15.52</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/003.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/008.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Automatic blood pressure
                                            monitor</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$90.65</span><span
                                            class="ps-product__del">$60.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/007.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/004.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Mild Binocular Compound
                                            Light Microscope</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$511.65</span><span
                                            class="ps-product__del">$135.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/015.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/040.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Lens Frame Professional
                                            Adjustable Multifunctional</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$89.65</span><span
                                            class="ps-product__del">$60.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add to
                                                cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/018.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/037.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Backrest Biotec Dental
                                            Equipment</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$497.65</span><span
                                            class="ps-product__del">$369.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add
                                                to cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/019.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/037.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Radio-fluoroscopy
                                            system</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$389.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add
                                                to cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                        <div class="ps-section__product">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/018.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/037.jpg"
                                                alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="#"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Quick view"><a href="#"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Add to cart"><a href="#"
                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">Bronze Blood Pressure
                                            Monitor</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$56.65 -
                                            $97.65</span>
                                    </div>
                                    <div class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating"
                                                data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><span class="ps-product__review">( Reviews)</span>
                                    </div>

                                    <div class="ps-product__actions ps-product__group-mobile">
                                        <div class="ps-product__quantity">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                href="#" data-toggle="modal" data-target="#popupAddcart">Add
                                                to cart</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to cart"><a
                                                href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a href="wishlist.html"><i
                                                    class="fa fa-heart-o"></i></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-shop__more"><a href="#">Show all</a></div>
            </div>
        </div>
    </section>

    <div class="ps-home ps-home--14">
        <div class="ps-home__content">
            <div class="container">
                <div class="ps-promo ps-promo--home pt-5 mt-5">
                    <div class="row">
                        @if ($home_slider_bottom_first)
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item">
                                    <img class="ps-promo__banner"
                                        src="{{ asset('storage/' . $home_slider_bottom_first->image) }}"
                                        alt="alt" />
                                    <div class="ps-promo__content">
                                        <span class="ps-promo__badge">{{ $home_slider_bottom_first->badge }}</span>
                                        <h4 class="text-dark ps-promo__name">
                                            {{ $home_slider_bottom_first->title }}
                                        </h4>
                                        <div class="ps-promo__image">
                                            <img src="{{ asset('storage/' . $home_slider_bottom_first->image) }}"
                                                alt="" />
                                        </div>
                                        <a class="btn-green ps-promo__btn"
                                            href="{{ $home_slider_bottom_first->button_link }}">{{ $home_slider_bottom_first->button_name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($home_slider_bottom_second)
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item"><img class="ps-promo__banner"
                                        src="{{ asset('storage/' . $home_slider_bottom_second->image) }}"
                                        alt="alt" />
                                    <div class="ps-promo__content">
                                        <h4 class="text-white ps-promo__name">
                                            {{ $home_slider_bottom_second->title }}ement
                                        </h4>
                                        <div class="ps-promo__sale text-white">
                                            {{ $home_slider_bottom_first->subtitle }}</div><a
                                            class="btn-green ps-promo__btn"
                                            href="{{ $home_slider_bottom_first->button_link }}">{{ $home_slider_bottom_first->button_name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($home_slider_bottom_third)
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item"><img class="ps-promo__banner"
                                        src="{{ asset('storage/' . $home_slider_bottom_third->image) }}"
                                        alt="alt" />
                                    <div class="ps-promo__content">
                                        <h4 class="text-white ps-promo__name">{{ $home_slider_bottom_third->title }}
                                        </h4>
                                        <div class="ps-promo__meta">
                                            <p class="ps-promo__price text-warning">
                                                {{ $home_slider_bottom_first->subtitle }}</p>
                                        </div><a class="btn-green ps-promo__btn"
                                            href="{{ $home_slider_bottom_first->button_link }}">{{ $home_slider_bottom_first->button_name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- <section class="ps-product--type">
                <div class="container">
                    <h3 class="ps-section__title" style="font-size: 30px;">Popular categories</h3>
                    <div class="ps-category__content">

                            <a class="ps-category__item" href="{{ route('category.products', $category->slug) }}">


                                <h6 class="ps-category__name"></h6>
                            </a>

                    </div>
                </div>
            </section> --}}
            <section>

            </section>
            @if ($categorys->count() > 0)
                <section class="ps-section--categories bg-white py-5">
                    <h3 class="ps-section__title" style="font-size: 30px;">Popular categories</h3>
                    <div class="container">
                        <div class="ps-section__content pt-5">
                            <div class="ps-categories__list row my-5">
                                @foreach ($categorys as $category)
                                    <div class="ps-categories__item"><a class="ps-categories__link"
                                            href="{{ route('category.products', $category->slug) }}">
                                            @php
                                                $logoPath = 'storage/' . $category->logo;
                                                $logoSrc = file_exists(public_path($logoPath))
                                                    ? asset($logoPath)
                                                    : asset('frontend/img/no-category.png');
                                            @endphp
                                            <img src="{{ $logoSrc }}" alt="{{ $category->name }}"></a>
                                        </a>
                                        <a class="ps-categories__name"
                                            href="{{ route('category.products', $category->slug) }}">{{ $category->name }}</a>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="text-center"> <a class="ps-categories__show" href="{{ route('allproducts') }}">Show
                                    all</a>
                            </div> --}}
                        </div>
                    </div>
                </section>
            @endif
            @if ($latest_products->count() > 0)
                <section class="ps-section--latest-horizontal mt-5">
                    <section class="container">
                        <h3 class="ps-section__title" style="font-size: 30px;">Latest products</h3>
                        <div class="ps-section__content">
                            <div class="row m-0">
                                @foreach ($latest_products as $latest_product)
                                    <div class="col-12 col-md-4 col-lg-3 dot4 p-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail">
                                                    <a class="ps-product__image"
                                                        href="{{ route('product.details', $latest_product->slug) }}">
                                                        <figure>
                                                            @if (!empty($latest_product->thumbnail))
                                                                @php
                                                                    $thumbnailPath =
                                                                        'storage/' . $latest_product->thumbnail;
                                                                    $thumbnailSrc = file_exists(
                                                                        public_path($thumbnailPath),
                                                                    )
                                                                        ? asset($thumbnailPath)
                                                                        : asset('frontend/img/no-product.jpg');
                                                                @endphp
                                                                <img src="{{ $thumbnailSrc }}"
                                                                    alt="{{ $latest_product->meta_title }}"
                                                                    width="210" height="210" />
                                                            @else
                                                                @foreach ($latest_product->multiImages->slice(0, 2) as $image)
                                                                    @php
                                                                        $imagePath = 'storage/' . $image->photo;
                                                                        $imageSrc = file_exists(public_path($imagePath))
                                                                            ? asset($imagePath)
                                                                            : // : asset('frontend/img/no-product.jpg');
                                                                            asset('frontend/img/no-product.jpg');
                                                                    @endphp
                                                                    <img src="{{ $imageSrc }}"
                                                                        alt="{{ $latest_product->meta_title }}"
                                                                        width="210" height="210" />
                                                                @endforeach
                                                            @endif
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title="Wishlist">
                                                            <a class="add_to_wishlist"
                                                                href="{{ route('wishlist.store', $latest_product->id) }}"><i
                                                                    class="fa fa-heart-o"></i></a>
                                                        </div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title="Quick view">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#popupQuickview{{ $latest_product->id }}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    @if (!empty($latest_product->box_discount_price))
                                                        <div class="ps-product__badge">
                                                            <div class="ps-badge ps-badge--sale">Offer</div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title">
                                                        <a
                                                            href="{{ route('product.details', $latest_product->slug) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $latest_product->name), 0, 8)) }}
                                                        </a>
                                                    </h5>
                                                    @if (Auth::check() && Auth::user()->status == 'active')
                                                        @if (!empty($latest_product->box_discount_price))
                                                            <div class="ps-product__meta">
                                                                <span
                                                                    class="ps-product__price sale">£{{ $latest_product->box_discount_price }}</span>
                                                                <span
                                                                    class="ps-product__del">£{{ $latest_product->unit_price }}
                                                                    Per Unit</span>
                                                            </div>
                                                        @else
                                                            <div class="ps-product__meta">
                                                                <span
                                                                    class="ps-product__price sale">£{{ $latest_product->unit_price }}
                                                                    Per Unit</span>
                                                            </div>
                                                        @endif
                                                        <a href="{{ route('cart.store', $latest_product->id) }}"
                                                            class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                            data-product_id="{{ $latest_product->id }}"
                                                            data-product_qty="1">
                                                            Add To Cart
                                                        </a>
                                                    @else
                                                        <div class="ps-product__meta">
                                                            <a href="{{ route('login') }}"
                                                                class="btn btn-info btn-block">Login
                                                                to view price</a>
                                                        </div>
                                                    @endauth
                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__quantity">
                                                            <div
                                                                class="def-number-input number-input safari_only">
                                                                <button class="minus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i>
                                                                </button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1"
                                                                    type="number" />
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title="Add to cart"><a
                                                                href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title="Wishlist"><a
                                                                class="add_to_wishlist"
                                                                href="{{ route('wishlist.store', $latest_product->id) }}"><i
                                                                    class="fa fa-heart-o"></i></a>
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </section>
        @endif

        @if ($categoryone && $categoryoneproducts->count() > 0)
            <div class="container">
                <div class="ps-home--block">
                    <h3 class="ps-section__title text-center pb-5" style="font-size: 30px;">
                        {{ optional($categoryone)->name }}</h3>
                    <div class="ps-section__content">
                        <div class="row m-0">
                            @foreach ($categoryoneproducts as $categoryoneproduct)
                                <div class="col-12 col-md-4 col-lg-3 dot4 p-0">
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.details', $categoryoneproduct->slug) }}">
                                                    <figure>
                                                        @if (!empty($categoryoneproduct->thumbnail))
                                                            @php
                                                                $thumbnailPath =
                                                                    'storage/' . $categoryoneproduct->thumbnail;
                                                                $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                    ? asset($thumbnailPath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $categoryoneproduct->meta_title }}"
                                                                width="210" height="210" />
                                                        @else
                                                            @foreach ($categoryoneproduct->multiImages->slice(0, 2) as $image)
                                                                @php
                                                                    $imagePath = 'storage/' . $image->photo;
                                                                    $imageSrc = file_exists(public_path($imagePath))
                                                                        ? asset($imagePath)
                                                                        : // : asset('frontend/img/no-product.jpg');
                                                                        asset('frontend/img/no-product.jpg');
                                                                @endphp
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $categoryoneproduct->meta_title }}"
                                                                    width="210" height="210" />
                                                            @endforeach
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $categoryoneproduct->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Quick view">
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#popupQuickview{{ $categoryoneproduct->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                @if (!empty($categoryoneproduct->box_discount_price))
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Offer</div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a
                                                        href="{{ route('product.details', $categoryoneproduct->slug) }}">
                                                        {{ implode(' ', array_slice(explode(' ', $categoryoneproduct->name), 0, 8)) }}
                                                    </a>
                                                </h5>
                                                @if (Auth::check() && Auth::user()->status == 'active')
                                                    @if (!empty($categoryoneproduct->box_discount_price))
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $categoryoneproduct->box_discount_price }}</span>
                                                            <span
                                                                class="ps-product__del">£{{ $categoryoneproduct->unit_price }}
                                                                Per Unit</span>
                                                        </div>
                                                    @else
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $categoryoneproduct->unit_price }}
                                                                Per Unit</span>
                                                        </div>
                                                    @endif
                                                    <a href="{{ route('cart.store', $categoryoneproduct->id) }}"
                                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                        data-product_id="{{ $categoryoneproduct->id }}"
                                                        data-product_qty="1">
                                                        Add To Cart
                                                    </a>
                                                @else
                                                    <div class="ps-product__meta">
                                                        <a href="{{ route('login') }}"
                                                            class="btn btn-info btn-block">Login
                                                            to view price</a>
                                                    </div>
                                                @endauth
                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div
                                                            class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                    class="icon-minus"></i>
                                                            </button>
                                                            <input class="quantity" min="0"
                                                                name="quantity" value="1"
                                                                type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                    class="icon-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        data-placement="left" title="Add to cart"><a
                                                            href="#"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist"><a
                                                            class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $categoryoneproduct->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="ps-delivery ps-delivery--info my-5"
            data-background="https://nouthemes.net/html/mymedi/img/promotion/banner-delivery-3.jpg"
            style="background-image: url(&quot;img/promotion/banner-delivery-3.jpg&quot;);">
            <div class="ps-delivery__content">
                <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100% Secure
                            delivery </strong>without contacting the courier</span></div><a
                    class="ps-delivery__more" href="#">More</a>
            </div>
        </div>
    </div>
    <section class="ps-section--latest">
        <div class="container">
            <h3 class="ps-section__title" style="font-size: 30px;">{{ optional($categorytwo)->name }}</h3>
            <div class="ps-section__carousel mb-0">
                <div class="takeway-slider owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2228px, 0px, 0px); transition: 1s; width: 4952px;">
                            @foreach ($categorytwoproducts as $categorytwoproduct)
                                <div class="owl-item" style="width: 247.6px;">
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.details', $categorytwoproduct->slug) }}">
                                                    <figure>
                                                        @if (!empty($categorytwoproduct->thumbnail))
                                                            @php
                                                                $thumbnailPath =
                                                                    'storage/' . $categorytwoproduct->thumbnail;
                                                                $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                    ? asset($thumbnailPath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $categorytwoproduct->meta_title }}"
                                                                width="210" height="210" />
                                                        @else
                                                            @foreach ($categorytwoproduct->multiImages->slice(0, 2) as $image)
                                                                @php
                                                                    $imagePath = 'storage/' . $image->photo;
                                                                    $imageSrc = file_exists(public_path($imagePath))
                                                                        ? asset($imagePath)
                                                                        : // : asset('frontend/img/no-product.jpg');
                                                                        asset('frontend/img/no-product.jpg');
                                                                @endphp
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $categorytwoproduct->meta_title }}"
                                                                    width="210" height="210" />
                                                            @endforeach
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $categorytwoproduct->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Quick view">
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#popupQuickview{{ $categorytwoproduct->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                @if (!empty($categorytwoproduct->box_discount_price))
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Offer</div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a
                                                        href="{{ route('product.details', $categorytwoproduct->slug) }}">
                                                        {{ implode(' ', array_slice(explode(' ', $categorytwoproduct->name), 0, 8)) }}
                                                    </a>
                                                </h5>
                                                @if (Auth::check() && Auth::user()->status == 'active')
                                                    @if (!empty($categorytwoproduct->box_discount_price))
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $categorytwoproduct->box_discount_price }}</span>
                                                            <span
                                                                class="ps-product__del">£{{ $categorytwoproduct->unit_price }}
                                                                Per Unit</span>
                                                        </div>
                                                    @else
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $categorytwoproduct->unit_price }}
                                                                Per Unit</span>
                                                        </div>
                                                    @endif
                                                    <a href="{{ route('cart.store', $categorytwoproduct->id) }}"
                                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                        data-product_id="{{ $categorytwoproduct->id }}"
                                                        data-product_qty="1">
                                                        Add To Cart
                                                    </a>
                                                @else
                                                    <div class="ps-product__meta">
                                                        <a href="{{ route('login') }}"
                                                            class="btn btn-info btn-block">Login
                                                            to view price</a>
                                                    </div>
                                                @endauth
                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div
                                                            class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                    class="icon-minus"></i>
                                                            </button>
                                                            <input class="quantity" min="0"
                                                                name="quantity" value="1"
                                                                type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                    class="icon-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__item cart"
                                                        data-toggle="tooltip" data-placement="left"
                                                        title="Add to cart"><a href="#"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist"><a
                                                            class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $categorytwoproduct->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($categorythree && $categorythreeproducts->count() > 0)
    <div class="container">
        <div class="ps-home--block">
            <h3 class="ps-section__title text-center pb-5" style="font-size: 30px;">
                {{ optional($categorythree)->name }}</h3>
            <div class="ps-section__content">
                <div class="row m-0">
                    @foreach ($categorythreeproducts as $categorythreeproduct)
                        <div class="col-12 col-md-4 col-lg-3 dot4 p-0">
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__image"
                                            href="{{ route('product.details', $categorythreeproduct->slug) }}">
                                            <figure>
                                                @if (!empty($categorythreeproduct->thumbnail))
                                                    @php
                                                        $thumbnailPath = 'storage/' . $categorythreeproduct->thumbnail;
                                                        $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                            ? asset($thumbnailPath)
                                                            : asset('frontend/img/no-product.jpg');
                                                    @endphp
                                                    <img src="{{ $thumbnailSrc }}"
                                                        alt="{{ $categorythreeproduct->meta_title }}"
                                                        width="210" height="210" />
                                                @else
                                                    @foreach ($categorythreeproduct->multiImages->slice(0, 2) as $image)
                                                        @php
                                                            $imagePath = 'storage/' . $image->photo;
                                                            $imageSrc = file_exists(public_path($imagePath))
                                                                ? asset($imagePath)
                                                                : // : asset('frontend/img/no-product.jpg');
                                                                asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <img src="{{ $imageSrc }}"
                                                            alt="{{ $categorythreeproduct->meta_title }}"
                                                            width="210" height="210" />
                                                    @endforeach
                                                @endif
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist">
                                                <a class="add_to_wishlist"
                                                    href="{{ route('wishlist.store', $categorythreeproduct->id) }}"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip"
                                                data-placement="left" title="Quick view">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview{{ $categorythreeproduct->id }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>

                                        </div>
                                        @if (!empty($categorythreeproduct->box_discount_price))
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--sale">Offer</div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title">
                                            <a
                                                href="{{ route('product.details', $categorythreeproduct->slug) }}">
                                                {{ implode(' ', array_slice(explode(' ', $categorythreeproduct->name), 0, 8)) }}
                                            </a>
                                        </h5>
                                        @if (Auth::check() && Auth::user()->status == 'active')
                                            @if (!empty($categorythreeproduct->box_discount_price))
                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">£{{ $categorythreeproduct->box_discount_price }}</span>
                                                    <span
                                                        class="ps-product__del">£{{ $categorythreeproduct->unit_price }}
                                                        Per Unit</span>
                                                </div>
                                            @else
                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">£{{ $categorythreeproduct->unit_price }}
                                                        Per Unit</span>
                                                </div>
                                            @endif
                                            <a href="{{ route('cart.store', $categorythreeproduct->id) }}"
                                                class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                data-product_id="{{ $categorythreeproduct->id }}"
                                                data-product_qty="1">
                                                Add To Cart
                                            </a>
                                        @else
                                            <div class="ps-product__meta">
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-info btn-block">Login
                                                    to view price</a>
                                            </div>
                                        @endauth
                                        <div class="ps-product__actions ps-product__group-mobile">
                                            <div class="ps-product__quantity">
                                                <div
                                                    class="def-number-input number-input safari_only">
                                                    <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                            class="icon-minus"></i>
                                                    </button>
                                                    <input class="quantity" min="0"
                                                        name="quantity" value="1"
                                                        type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a
                                                    href="#"><i
                                                        class="fa fa-shopping-basket"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><a
                                                    class="add_to_wishlist"
                                                    href="{{ route('wishlist.store', $categorythreeproduct->id) }}"><i
                                                        class="fa fa-heart-o"></i></a>
                                            </div>
                                            {{-- <div class="ps-product__item rotate" data-toggle="tooltip"
                                                        data-placement="left" title="Add to compare"><a
                                                            href="compare.html"><i
                                                                class="fa fa-align-left"></i></a>
                                                    </div> --}}
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
</div>



@if ($deals->count() > 0 || $deal_products->count() > 0)
<div class="container">
@if ($deals->count() > 0)
    <h3 class="ps-section__title text-center" style="font-size: 30px;">This week deals</h3>
    <div class="ps-promo ps-promo--home">
        <!-- First Row: First Three Deals -->
        <div class="row">
            @foreach ($deals->slice(0, 3) as $deal)
                <div class="col-12 col-md-4">
                    <div class="ps-promo__item">
                        <a href="{{ route('product.details', $deal->product->slug) }}">
                            @if ($deal->image)
                                <img class="ps-promo__banner"
                                    src="{{ asset('storage/' . $deal->image) }}" alt="alt" />
                            @endif
                            <div class="ps-promo__content">
                                @if ($deal->badge)
                                    <span
                                        class="ps-promo__badge">{{ $deal->badge ?? round(100 - ($deal->offer_price / $deal->price) * 100) . '%' }}</span>
                                @endif
                                <h4 class="text-white ps-promo__name">
                                    {{ $deal->title }}
                                </h4>
                                @if ($deal->subtitle)
                                    <p>{{ $deal->subtitle }}</p>
                                @endif
                                @if ($deal->offer_price && $deal->price)
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">
                                            £{{ $deal->offer_price }}
                                        </p>
                                        <p class="ps-promo__del text-white">£{{ $deal->price }}
                                        </p>
                                    </div>
                                @endif
                                @if (!empty($deal->button_link))
                                    <a class="btn-green ps-promo__btn"
                                        href="{{ $deal->button_link }}">{{ $deal->button_name }}</a>
                                @elseif (!empty($deal->product_id))
                                    <a class="btn-green ps-promo__btn"
                                        href="{{ route('product.details', $deal->product->slug) }}">Buy
                                        now</a>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Second Row: Next Four Deals -->
        <div class="row ps-promo--horizontal">
            @foreach ($deals->slice(3, 4) as $deal)
                <div class="col-12 col-md-3">
                    <div class="ps-promo__item">
                        @if ($deal->image)
                            <img class="ps-promo__banner"
                                src="{{ asset('storage/' . $deal->image) }}" alt="alt" />
                        @endif
                        <div class="ps-promo__content">
                            <h4 class="text-dark ps-promo__name">
                                {{ $deal->title }}
                            </h4>
                            @if ($deal->offer_price && $deal->price)
                                <div class="ps-promo__meta">
                                    <p class="ps-promo__price text-warning">
                                        £ {{ number_format($deal->offer_price, 2) }}</p>
                                    <p class="ps-promo__del text-dark">
                                        £ {{ number_format($deal->price, 2) }}</p>
                                </div>
                            @endif
                            @if (!empty($deal->button_link))
                                <a class="btn-green ps-promo__btn"
                                    href="{{ $deal->button_link }}">{{ $deal->button_name }}</a>
                            @elseif (!empty($deal->product_id))
                                <a class="btn-green ps-promo__btn"
                                    href="{{ route('product.details', $deal->product->slug) }}">Buy
                                    now</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if ($deal_products->count() > 0)
    <section class="ps-section--deals">
        <div class="ps-section__header">
            <h3 class="ps-section__title" style="font-size: 30px;">Best Deals of the week!</h3>
        </div>
        <div class="ps-section__carousel">
            <div class="dealCarousel owl-carousel">
                @foreach ($deal_products as $deal_product)
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail">
                                <a class="ps-product__image"
                                    href="{{ route('product.details', $deal_product->slug) }}">
                                    <figure>
                                        @if (!empty($deal_product->thumbnail))
                                            @php
                                                $thumbnailPath = 'storage/' . $deal_product->thumbnail;
                                                $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                    ? asset($thumbnailPath)
                                                    : asset('frontend/img/no-product.jpg');
                                            @endphp
                                            <img src="{{ $thumbnailSrc }}"
                                                alt="{{ $deal_product->meta_title }}"
                                                width="210" height="210" />
                                        @else
                                            @foreach ($deal_product->multiImages->slice(0, 2) as $image)
                                                @php
                                                    $imagePath = 'storage/' . $image->photo;
                                                    $imageSrc = file_exists(public_path($imagePath))
                                                        ? asset($imagePath)
                                                        : // : asset('frontend/img/no-product.jpg');
                                                        asset('frontend/img/no-product.jpg');
                                                @endphp
                                                <img src="{{ $imageSrc }}"
                                                    alt="{{ $deal_product->meta_title }}"
                                                    width="210" height="210" />
                                            @endforeach
                                        @endif
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip"
                                        data-placement="left" title="Wishlist">
                                        <a class="add_to_wishlist"
                                            href="{{ route('wishlist.store', $deal_product->id) }}">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="ps-product__item" data-toggle="tooltip"
                                        data-placement="left" title="Quick view"><a href="#"
                                            data-toggle="modal"
                                            data-target="#popupQuickview{{ $deal_product->id }}"><i
                                                class="fa fa-search"></i></a></div>

                                </div>
                                @if (!empty($deal_product->box_discount_price))
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">Offer</div>
                                    </div>
                                @endif
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title">
                                    <a href="{{ route('product.details', $deal_product->slug) }}">
                                        {{ implode(' ', array_slice(explode(' ', $deal_product->name), 0, 8)) }}
                                    </a>
                                </h5>
                                @if (Auth::check() && Auth::user()->status == 'active')
                                    @if (!empty($deal_product->box_discount_price))
                                        <div class="ps-product__meta">
                                            <span
                                                class="ps-product__price sale">£{{ $deal_product->box_discount_price }}</span>
                                            <span
                                                class="ps-product__del">£{{ $deal_product->unit_price }}
                                                Per Unit</span>
                                        </div>
                                    @else
                                        <div class="ps-product__meta">
                                            <span
                                                class="ps-product__price sale">£{{ $deal_product->unit_price }}
                                                Per Unit</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('cart.store', $deal_product->id) }}"
                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                        data-product_id="{{ $deal_product->id }}"
                                        data-product_qty="1">Add To
                                        Cart</a>
                                @else
                                    <div class="ps-product__meta">
                                        <a href="{{ route('login') }}"
                                            class="btn btn-info btn-block">Login
                                            to view price</a>
                                    </div>
                                @endif
                                <div class="ps-product__actions ps-product__group-mobile">

                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                        data-placement="left" title="Add to cart">
                                        <a class="add_to_cart"
                                            href="{{ route('cart.store', $deal_product->id) }}"
                                            data-product_id="{{ $deal_product->id }}"
                                            data-product_qty="1">
                                            <i class="fa fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                    <div class="ps-product__item" data-toggle="tooltip"
                                        data-placement="left" title="Wishlist">
                                        <a class="add_to_wishlist"
                                            href="{{ route('wishlist.store', $deal_product->id) }}">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                    {{-- <div class="ps-product__item rotate" data-toggle="tooltip"
                                                        data-placement="left" title="Add to compare"><a
                                                            href="compare.html"><i class="fa fa-align-left"></i></a>
                                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
</div>
@endif
@if ($blog_posts->count() > 0)
<section class="ps-section--blog container-fluid bg-white py-5 mt-4">
<div class="container">
    <div class="py-5">
        <h3 class="ps-section__title" style="font-size: 30px;">From the blog</h3>
    </div>
    <div class="ps-section__carousel">
        <div class="blog-slider owl-carousel">
            @foreach ($blog_posts as $blog_post)
                <div class="ps-section__item">
                    <div class="ps-blog--latset">
                        <div class="ps-blog__thumbnail">
                            <a href="{{ route('blog.details', $blog_post->slug) }}">
                                <img src="{{ $blog_post->image ? asset('storage/' . $blog_post->image) : asset('frontend/img/no-blogs.jpg') }}"
                                    alt="Blog Post Image"
                                    onerror="this.onerror=null; this.src='{{ asset('frontend/img/no-blogs.jpg') }}';">
                            </a>
                            @if ($blog_post->badge)
                                <div class="ps-blog__badge">
                                    <span class="ps-badge__item">{{ $blog_post->badge }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="ps-blog__content">
                            <div class="ps-blog__meta">
                                <span
                                    class="ps-blog__date">{{ $blog_post->created_at->format('M d Y') }}</span>
                                <a class="ps-blog__author"
                                    href="#">{{ $blog_post->author }}</a>
                            </div>
                            <a class="ps-blog__title" style="font-size: 18px;"
                                href="{{ route('blog.details', $blog_post->slug) }}">
                                {{ $blog_post->title }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"><i
                    class="fa fa-chevron-left"></i></button>
            <button type="button" role="presentation" class="owl-next"><i
                    class="fa fa-chevron-right"></i></button>
        </div>
        <div class="owl-dots">
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>
</div>
</section>
@endif
</div>
</div>
<section class="ps-section--also" data-background="https://nouthemes.net/html/mymedi/img/related-bg.jpg" style="background-image: url(&quot;img/related-bg.jpg&quot;);">
    <div class="container">
        <h3 class="ps-section__title">Top Selling Products</h3>
        <div class="ps-section__content">
            <div class="row m-0">
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine1.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine3.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                    <div class="ps-badge ps-badge--sale">Sale</div>
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">3-layer mask with an elastic band (1 piece)</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$36.24</span><span class="ps-product__del">$38.24</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine2.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine5.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">Extractor used to remove teeth</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price">$53.75</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected="selected">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">3</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine3.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine5.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                    <div class="ps-badge ps-badge--hot">Hot</div>
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">Oxygen concentrator model KTS-5000</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price">$13.91</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected="selected">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a><div class="br-current-rating">5</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine4.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine1.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">Protectiva Soft absorbent pads, 30 pcs.</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$38.24</span><span class="ps-product__del">$35.38</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine5.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine2.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                    <div class="ps-badge ps-badge--new">New</div>
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">A single blood collection container</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$17.24</span><span class="ps-product__del">$38.09</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine16.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine1.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">3-layer mask with an elastic band (1 piece)</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$38.24</span><span class="ps-product__del">$35.38</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine17.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine1.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">3-layer mask with an elastic band (1 piece)</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$38.24</span><span class="ps-product__del">$35.38</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 dot4 p-0">
                    <div class="ps-section__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                    <figure><img src="https://nouthemes.net/html/mymedi/img/products/medicine18.jpg" alt="alt"><img src="https://nouthemes.net/html/mymedi/img/products/medicine5.jpg" alt="alt">
                                    </figure>
                                </a>
                                <div class="ps-product__actions">
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick view"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <div class="ps-product__badge">
                                </div>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="product1.html">Protectiva Soft absorbent pads, 30 pcs.</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">$38.24</span><span class="ps-product__del">$35.38</span>
                                </div>
                                <div class="ps-product__rating">
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span class="ps-product__review">( Reviews)</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                                <div class="ps-product__actions ps-product__group-mobile">
                                    <div class="ps-product__quantity">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.HomeQuickViewModal')
@push('scripts')
<script>
    $(document).ready(function() {
        $('.dealCarousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<div class="dealCarousel-prev">←</div>',
                '<div class="dealCarousel-next">→</div>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".blog-slider").owlCarousel({
            loop: true, // Enable continuous loop mode
            margin: 10, // Space between items
            nav: true, // Show next/prev buttons
            items: 3,
            dots: true, // Show dots for navigation
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Delay for autoplay
            responsive: {
                0: {
                    items: 1, // 1 item at a time for small screens
                },
                600: {
                    items: 2, // 2 items at a time for medium screens
                },
                1000: {
                    items: 3, // 3 items at a time for large screens
                },
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".takeway-slider").owlCarousel({
            loop: true, // Enable continuous loop mode
            margin: 10, // Space between items
            nav: true, // Show next/prev buttons
            items: 4,
            dots: true, // Show dots for navigation
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Delay for autoplay
            responsive: {
                0: {
                    items: 1, // 1 item at a time for small screens
                },
                600: {
                    items: 2, // 2 items at a time for medium screens
                },
                1000: {
                    items: 4, // 3 items at a time for large screens
                },
            },
        });
    });
</script>
@endpush
</x-frontend-app-layout>
