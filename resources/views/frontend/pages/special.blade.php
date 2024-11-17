<x-frontend-app-layout :title="'Special Offers'">
    <style>
        /* .special-banner-container {
            height: 250px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            overflow: hidden;
        }
*/
        .special-banner {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
    </style>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="special-banner-container">
                    <img class="special-banner" src="https://i.ibb.co.com/fMBG8xs/SPECIAL-OFFERS.png" alt="Special Banner">
                </div>
            </div>
        </div>
    </div>
    <div class="ps-categogy ps-categogy--separate">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Shop</li>
            </ul>
        </div>
        <div class="ps-categogy__main">
            <div class="container">
                <div class="ps-categogy__product">
                    <div class="row m-0">
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/053.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">MyMedi</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Somersung Sonic X500
                                            Basic</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$38.39</span><span
                                            class="ps-product__del">$53.99</span>
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
                                        </div><span class="ps-product__review">(7 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
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
                                        <div class="ps-badge ps-badge--hot">Hot</div>
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">MyMedi</a>
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
                                        </div><span class="ps-product__review">(8 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/055.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/056.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">MyMedi</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Somersung Sonic X2500 Pro
                                            White</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$39.99</span>
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

                                        </div><span class="ps-product__review">(9 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
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
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">Medicstore</a>
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

                                        </div><span class="ps-product__review">(4 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/042.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">iHeart</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Extractor used to remove
                                            teeth</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$53.64</span>
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

                                        </div><span class="ps-product__review">(5 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
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
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">WeTakeCare</a>
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
                                        </div><span class="ps-product__review">(2 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/001.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/009.jpg"
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
                                        <div class="ps-badge ps-badge--sold">Sold Out</div>
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">iLovehealth</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Digital Thermometer
                                            X30-Pro</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$77.65</span><span
                                            class="ps-product__del">$80.65</span>
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
                                        </div><span class="ps-product__review">(1 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
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
                                        <div class="ps-badge ps-badge--hot">Hot</div>
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">BestPharm</a>
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
                                        </div><span class="ps-product__review">(3 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                                            data-placement="left" title=""
                                            data-original-title="Add to cart"><a href="#"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a
                                                href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                        href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/001.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/009.jpg"
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
                                        <div class="ps-badge ps-badge--sold">Sold Out</div>
                                    </div>
                                </div>
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">Medicstore</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Digital Thermometer
                                            X30-Pro</a></h5>
                                    <div class="ps-product__meta"><span
                                            class="ps-product__price sale">$77.65</span><span
                                            class="ps-product__del">$80.65</span>
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

                                        </div><span class="ps-product__review">(6 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                                            data-placement="left" title=""
                                            data-original-title="Add to cart"><a href="#"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a
                                                href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                        href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/011.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">BestPharm</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Hill-Rom Affinity III
                                            Progressa iBed</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$488.23</span>
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

                                        </div><span class="ps-product__review">(5 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                                            data-placement="left" title=""
                                            data-original-title="Add to cart"><a href="#"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a
                                                href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                        href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/012.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/013.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">HeartRate</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Hill-Rom Affinity III
                                            Progressa iBed</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$436.87</span>
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

                                        </div><span class="ps-product__review">(3 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                                            data-placement="left" title=""
                                            data-original-title="Add to cart"><a href="#"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a
                                                href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-xl-3 p-0">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                        href="product1.html">
                                        <figure><img src="https://nouthemes.net/html/mymedi/img/products/013.jpg"
                                                alt="alt"><img
                                                src="https://nouthemes.net/html/mymedi/img/products/012.jpg"
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
                                <div class="ps-product__content"><a class="ps-product__branch text-light"
                                        href="#">BestPharm</a>
                                    <h5 class="ps-product__title"><a href="product1.html">Hill-Rom VersaCare</a>
                                    </h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">$136.87</span>
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

                                        </div><span class="ps-product__review">(8 Reviews)</span>
                                    </div>
                                    <a href="#" class="btn ps-btn--warning my-3 btn-block add_to_cart py-2"
                                        data-product_id="54" data-product_qty="1">
                                        Add To Cart
                                    </a>
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
                                            data-placement="left" title=""
                                            data-original-title="Add to cart"><a href="#"><i
                                                    class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="" data-original-title="Wishlist"><a
                                                href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                    </div>
                                </div>
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
                    <div class="ps-delivery ps-delivery--info my-5"
                        data-background="{{ asset('images/delivery_banner.jpg') }}"
                        style="background-image: url({{ asset('images/delivery_banner.jpg') }});">
                        <div class="ps-delivery__content">
                            <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100%
                                        Secure delivery </strong>without courier communication</span></div><a
                                class="ps-delivery__more" href="{{ route('allproducts') }}">Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
</x-frontend-app-layout>
