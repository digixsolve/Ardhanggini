<x-frontend-app-layout :title="'Product Details'" :product="$product">
    @push('heads')
        @php
            $isProductPage = true; // Flag to indicate this is a product details page
            $metaTitle = $product->meta_title ?? $product->name;
            $metaDescription = $product->meta_description ?? substr($product->description, 0, 150);
            $metaImage = $product->thumbnail ?? ''; // Default image
        @endphp
    @endpush
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .magnifier-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Adjust width as needed */
            height: 100%;
            /* Adjust height as needed */
            cursor: crosshair;
        }

        .magnifier-container img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            /* Smooth zoom */
        }

        .magnifier-container:hover img {
            transform: scale(1.5);
            /* Adjust zoom level */
            transition: transform 0.3s ease;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        } */

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide,
        .mySwiperDesktop .swiper-slide {
            width: 100%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active,
        .mySwiperDesktop .swiper-slide-thumb-active {
            opacity: 1;
        }

        .mySwiperDesktop {
            margin-bottom: 10px;
        }

        /* .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        } */

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff !important;
        }



        .thumb-img img {
            height: 120px !important;
            object-fit: cover;
            width: 100% !important;
        }

        .main-img img {
            height: 100% !important;
            object-fit: fill;
            width: 100%;
        }

        @media (min-width: 768px) {
            .mySwiper {
                display: none;
            }

            .kovi-product-slider-wrapper {
                display: flex;
                flex-direction: row;
            }

            .mySwiper2 {
                height: 100%;
            }

            .swiper {
                width: 100%;
                height: 520px;
            }

            .mySwiperDesktop .swiper-slide {
                width: 100%;
            }

            .mySwiperDesktop {
                width: calc(22% - 20px);
            }

            .mySwiper2 {
                width: 81%;
            }
        }

        @media (max-width: 767px) {
            .kovi-product-slider-wrapper {
                display: flex;
                flex-direction: column;
            }

            .mySwiperDesktop {
                display: none;
            }

            .mySwiperDesktop {
                height: 250px;
            }

            .main-img img {
                height: 100% !important;
                object-fit: contain;
                width: 100%;
                margin-right: 25px;
            }
        }

        .cst-product {
            height: 485px;
            overflow-y: scroll;
            background: #f2f2f0;
        }

        .cst-product::-webkit-scrollbar {
            width: 0.3em;
        }

        .cst-product::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .cst-product::-webkit-scrollbar-thumb {
            background-color: var(--site-green);
            outline: 0px solid slategrey;
        }

        .ps-badge {
            left: 0%;
        }
    </style>
    <div class="ps-page--product3">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('home') }}">Home</a></li>
                <li class="ps-breadcrumb__item"><a href="{{ route('allproducts') }}">All Products</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">{{ $product->name }}</li>
            </ul>
            <div class="ps-page__content">
                <div class="ps-product--detail">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="row">
                                <div class="pr-0 col-12 col-xl-7">
                                    <div class="kovi-product-slider-wrapper">
                                        <!-- Thumbs Slider for the gallery -->
                                        <div thumbsSlider="" class="swiper mySwiperDesktop">
                                            <div class="swiper-wrapper">
                                                @if (count($product->multiImages) > 0)
                                                    @foreach ($product->multiImages as $image)
                                                        <div class="swiper-slide thumb-img">
                                                            <img src="{{ asset('storage/' . $image->photo) }}" />
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="swiper-slide thumb-img">
                                                        <img src="{{ asset('storage/' . $product->thumbnail) }}" />
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Main image slider (with magnifier) -->
                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                @if (count($product->multiImages) > 0)
                                                    @foreach ($product->multiImages as $image)
                                                        <div class="swiper-slide main-img magnifier-container">
                                                            <img class="img-fluid"
                                                                src="{{ asset('storage/' . $image->photo) }}" />
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="swiper-slide main-img magnifier-container">
                                                        <img class="img-fluid"
                                                            src="{{ asset('storage/' . $product->thumbnail) }}" />
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="swiper-button-next d-none"></div>
                                            <div class="swiper-button-prev d-none"></div>
                                        </div>
                                        <div thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                @foreach ($product->multiImages as $image)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/' . $image->photo) }}" />
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-xl-5">
                                    <div class="ps-product__info">
                                        <div class="text-22 text-dark" style="height: auto;">
                                            {{ $product->name }}
                                        </div>
                                        <table class="table m-0 ps-table ps-table--oriented">
                                            <tbody>
                                                @if (!empty($product->sku_code))
                                                    <tr>
                                                        <th class="ps-table__th">CODE</th>
                                                        <td>{{ $product->sku_code }}</td>
                                                    </tr>
                                                @endif
                                                @if (!empty(optional($product->brand)->name))
                                                    <tr>
                                                        <th class="ps-table__th">BRAND </th>
                                                        <td>{{ optional($product->brand)->name }}</td>
                                                    </tr>
                                                @endif
                                                @if (!empty($product->stock) && !empty($product->contains))
                                                    <tr>
                                                        <th class="ps-table__th">PALLET QUANTITY </th>
                                                        <td>{{ $product->stock * $product->contains }}</td>
                                                    </tr>
                                                @endif
                                                @if (!empty($product->width))
                                                    <tr>
                                                        <th class="ps-table__th">Width </th>
                                                        <td>{{ $product->width }} cm</td>
                                                    </tr>
                                                @endif
                                                @if (!empty($product->height))
                                                    <tr>
                                                        <th class="ps-table__th">Height </th>
                                                        <td>{{ $product->height }} cm</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                        <div class="mt-20 ps-product__group">
                                            <div>
                                                <p>{!! \Illuminate\Support\Str::words($product->overview, 30) !!}</p>
                                            </div>

                                            <div class="pt-4">
                                                <p class="fw-bold text-black">Color Variation</p>
                                                <div class="color-one">
                                                    @php
                                                        $colors = is_string($product->color)
                                                            ? json_decode($product->color, true)
                                                            : $product->color;
                                                    @endphp

                                                    @if (is_array($colors) && !empty($colors))
                                                        <div class="color-options">
                                                            <!-- Multi-select dropdown -->
                                                            <select name="color" id="color-select"
                                                                class="form-control select">
                                                                @foreach ($colors as $color)
                                                                    <option value="{{ strtolower($color['value']) }}">
                                                                        {{ ucfirst($color['value']) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @else
                                                        <p class="site-color">No colors available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-product__feature">
                                @if (!empty($product->stock) && $product->stock > 0)
                                    <div class="mb-0"><span class="ps-badge bg-success">{{ $product->stock }} In
                                            Stock</span></div>
                                @else
                                    <div class="mb-0"><span class="ps-badge ps-badge--outstock">Out Of
                                            Stock</span></div>
                                @endif
                                @if (!empty($product->unit_discount_price))
                                    <div class="py-3 mt-3 ps-product__meta pr-details-price">
                                        <span
                                            class="ps-product__price sale">৳{{ $product->unit_discount_price }}</span>
                                        <span class="ps-product__del">৳{{ $product->unit_price }}</span>
                                    </div>
                                @else
                                    <div class="py-3 mt-3 ps-product__meta pr-details-price">
                                        <span class="ps-product__price sale">৳{{ $product->unit_price }}</span>
                                    </div>
                                @endif

                                <div class="ps-product__quantity">
                                    <h6>Quantity</h6>
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                class="icon-minus"></i></button>
                                        <input class="quantity" min="1" name="quantity" value="1"
                                            type="number" data-product_id="{{ $product->id }}" />
                                        <button class="plus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                class="icon-plus"></i></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a class="mr-1 btn btn-primary mr-lg-3"
                                        href="{{ route('buy.now', $product->id) }}">Buy Now</a>
                                    <a class="btn btn-outline-primary add_to_cart_btn_product_single"
                                        data-product_id="{{ $product->id }}" href="#">Add to cart</a>
                                </div>
                                <ul class="ps-product__bundle">
                                    <li><i class="icon-bag2"></i>Full cash on delivery</li>
                                    @foreach ($shippingmethods as $shippingmethod)
                                        <li><i class="icon-truck"></i>{{ $shippingmethod->title }} - {{ $shippingmethod->price }} TK ({{ $shippingmethod->duration }})</li>
                                    @endforeach
                                    {{-- <li><i class="fa-solid fa-location-dot"></i>
                                        Sub-areas: <br>
                                        <span class="pt-2"
                                            style="position: relative;left: 32px;width: 94%;display: inline-block;">Keraniganj,
                                            Tangi, Savar, Gazipur, Narayanganj, Asulia (2-4 Days)</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center">
                        @if (!empty($product->video_link))
                            <div class="col-lg-5">
                                <div class="border-0 card rounded-0">
                                    <div class="border-0 card-body rounded-0">
                                        <iframe width="100%" height="440" src="{{ $product->video_link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-0 col-lg-7">
                            @else
                                <div class="pl-0 col-lg-12">
                        @endif
                        <div class="p-0 ps-product__content cst-product">
                            <ul class="p-2 bg-white p-lg-3 nav nav-tabs ps-tab-list" id="productContentTabs"
                                role="tablist">
                                <li class="ml-3 nav-item pr-info-tabs" role="presentation">
                                    <a class="nav-link show active" id="information-tab" data-toggle="tab"
                                        href="#information-content" role="tab"
                                        aria-controls="information-content" aria-selected="false">
                                        Description
                                    </a>
                                </li>
                                <li class="ml-3 nav-item pr-info-tabs" role="presentation">
                                    <a class="nav-link" id="description-tab" data-toggle="tab"
                                        href="#description-content" role="tab"
                                        aria-controls="description-content" aria-selected="true">
                                        Key Features
                                    </a>
                                </li>
                                <li class="ml-3 nav-item pr-inf-tabs" role="presentation">
                                    <a class="nav-link" id="specification-tab" data-toggle="tab"
                                        href="#specification-content" role="tab"
                                        aria-controls="specification-content" aria-selected="false">
                                        Specification
                                    </a>
                                </li>
                                <li class="ml-3 nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews-content"
                                        role="tab" aria-controls="reviews-content" aria-selected="false">
                                        Reviews ({{ count($product->reviews) }})
                                    </a>
                                </li>
                            </ul>
                            <div class="p-5 bg-white tab-content" id="productContent">
                                <div class="tab-pane fade show active" id="information-content" role="tabpanel"
                                    aria-labelledby="information-tab">
                                    <div class="ps-document">
                                        <div class="row row-reverse">
                                            <div class="col-12">
                                                {!! $product->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="description-content" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="ps-document">
                                        <div class="row row-reverse">
                                            <div class="col-12">
                                                {!! $product->overview !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="specification-content" role="tabpanel"
                                    aria-labelledby="specification-tab">
                                    <div class="ps-document">
                                        <div class="row row-reverse">
                                            <div class="col-12">
                                                {!! $product->specification !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews-content" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="ps-product__tabreview">
                                        <div class="ps-review--product">
                                            {{-- Check if $reviews is not empty --}}
                                            @if (!empty($product->reviews) && count($product->reviews) > 0)
                                                @foreach ($product->reviews as $review)
                                                    <div class="ps-review__row">
                                                        <div class="ps-review__avatar">
                                                            <img src="{{ !empty($review['image']) ? asset('storage/' . $review['image']) : asset('images/testimonial.png') }}"
                                                                alt="{{ $review['name'] }}" />
                                                        </div>
                                                        <div class="ps-review__info">
                                                            <div class="ps-review__name">{{ $review['name'] }}</div>
                                                            <div class="ps-review__date">
                                                                {{ \Carbon\Carbon::parse($review['date'])->format('M d, Y') }}
                                                            </div>
                                                        </div>
                                                        <div class="ps-review__rating">
                                                            @if ($review['rating'] > 0)
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="ps-rating" data-read-only="true"
                                                                        style="display: none;">
                                                                        @php
                                                                            $maxRating = min(
                                                                                5,
                                                                                max(1, floor($review['rating'])),
                                                                            ); // Get the highest full rating value
                                                                        @endphp
                                                                        @for ($i = 1; $i <= $maxRating; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="ps-review__desc">
                                                            <p>{!! $review['message'] !!}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No reviews available.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-section--also" data-background="img/related-bg.jpg">
                    <div class="container px-0">
                        <h3 class="ps-section__title">Customer also bought</h3>
                        <div class="owl-carousel">
                            @foreach ($related_products as $related_product)
                                <div class="ps-section__product">
                                    <div class="ps-product takeway-products ps-product--standard cst-bought-pr">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image takeway-slider-img"
                                                href="{{ route('product.details', $related_product->slug) }}">
                                                <figure>
                                                    @if (!empty($related_product->thumbnail))
                                                        @php
                                                            $thumbnailPath = 'storage/' . $related_product->thumbnail;
                                                            $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                ? asset($thumbnailPath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <img src="{{ $thumbnailSrc }}"
                                                            alt="{{ $related_product->meta_title }}" width="210"
                                                            height="210" />
                                                    @else
                                                        @foreach ($related_product->multiImages->slice(0, 2) as $image)
                                                            @php
                                                                $imagePath = 'storage/' . $image->photo;
                                                                $imageSrc = file_exists(public_path($imagePath))
                                                                    ? asset($imagePath)
                                                                    : // : asset('frontend/img/no-product.jpg');
                                                                    asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $imageSrc }}"
                                                                alt="{{ $related_product->meta_title }}"
                                                                width="210" height="210" />
                                                        @endforeach
                                                    @endif
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a class="add_to_wishlist"
                                                        href="{{ route('wishlist.store', $related_product->id) }}">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Quick view"><a href="#"
                                                        data-toggle="modal"
                                                        data-target="#popupQuickview{{ $related_product->id }}"><i
                                                            class="fa fa-eye"></i></a></div>

                                            </div>
                                            @if (!empty($related_product->unit_discount_price))
                                                <div class="ps-product__badge">
                                                    <div class="ps-badge ps-badge--sale">
                                                        -
                                                        {{ !empty($related_product->unit_discount_price) && $related_product->unit_discount_price > 0 ? number_format((($related_product->unit_price - $related_product->unit_discount_price) / $related_product->unit_price) * 100, 1) : 0 }}
                                                        % Off
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ps-product__content">
                                            <div>
                                                <h4 class="" style="height: 50px !important;">
                                                    <a href="{{ route('product.details', $related_product->slug) }}"
                                                        style="text-transform: capitalize;">
                                                        {{ implode(' ', array_slice(explode(' ', $related_product->name), 0, 5)) }}
                                                    </a>
                                                </h4>
                                            </div>
                                            @php
                                                $review =
                                                    count($related_product->reviews) > 0
                                                        ? optional($related_product->reviews)->sum('rating') /
                                                            count($related_product->reviews)
                                                        : 0;
                                                // dd($related_product->name, $review);
                                            @endphp
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="ps-product__rating">
                                                    @if ($review > 0)
                                                        <div class="br-wrapper br-theme-fontawesome-stars">
                                                            <select class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                @php
                                                                    $maxRating = min(5, max(1, floor($review))); // Get the highest full rating value
                                                                @endphp
                                                                @for ($i = 1; $i <= $maxRating; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div>
                                                    @if (count($related_product->reviews) > 0)
                                                        Reviews ({{ count($related_product->reviews) }})
                                                    @else
                                                        <p class="pb-0 mb-1 no-found">N/A</p>
                                                    @endif
                                                </div>
                                            </div>
                                            @if (!empty($related_product->unit_discount_price))
                                                <div class="pb-3 ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">৳{{ $related_product->unit_discount_price }}</span>
                                                    <span
                                                        class="ps-product__del">৳{{ $related_product->unit_price }}</span>
                                                </div>
                                            @else
                                                <div class="pb-3 ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">৳{{ $related_product->unit_price }}</span>
                                                </div>
                                            @endif
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('buy.now', $related_product->id) }}"
                                                    class="mr-1 btn btn-primary mr-lg-3">
                                                    Buy Now
                                                </a>
                                                <a href="{{ route('cart.store', $related_product->id) }}"
                                                    class="btn btn-outline-primary add_to_cart"
                                                    data-product_id="{{ $related_product->id }}"
                                                    data-product_qty="1">
                                                    Add To Cart
                                                </a>
                                            </div>
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__quantity">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity"
                                                            value="1" type="number" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                class="icon-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart"><a href="#"><i
                                                            class="fa fa-shopping-basket"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a class="add_to_wishlist"
                                                        href="{{ route('wishlist.store', $related_product->id) }}">
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
            </div>
        </div>
        <div class="my-5 ps-delivery ps-delivery--info" data-background="{{ asset('images/delivery_banner.jpg') }}"
            style="background-image: url({{ asset('images/delivery_banner.jpg') }});">
            <div class="ps-delivery__content">
                <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100%
                            Secure delivery </strong>without courier communication</span></div><a
                    class="ps-delivery__more" href="{{ route('allproducts') }}">Shop</a>
            </div>
        </div>
    </div>
    </div>
    @foreach ($related_products as $related_product)
        <div class="modal fade" id="popupQuickview{{ $related_product->id }}" data-backdrop="static"
            data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered ps-quickview">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wrap-modal-slider container-fluid ps-quickview__body">
                            <button class="close ps-quickview__close" type="button" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="ps-product--detail">
                                <div class="row">
                                    <div class="pl-0 col-12 col-xl-6">
                                        <div class="ps-product--gallery">
                                            <div class="ps-product__thumbnail">
                                                @if ($related_product->multiImages->isNotEmpty())
                                                    @foreach ($related_product->multiImages->slice(0, 5) as $image)
                                                        @php
                                                            $imagePath = 'storage/' . $image->photo;
                                                            $imageSrc = file_exists(public_path($imagePath))
                                                                ? asset($imagePath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <div class="slide">
                                                            <img src="{{ $imageSrc }}"
                                                                alt="{{ $related_product->name }}" />
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @php
                                                        $thumbnailPath = 'storage/' . $related_product->thumbnail;
                                                        $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                            ? asset($thumbnailPath)
                                                            : asset('frontend/img/no-product.jpg');
                                                    @endphp
                                                    <div class="slide">
                                                        <img src="{{ $thumbnailSrc }}"
                                                            alt="{{ $related_product->name }}" />
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ps-gallery--image">
                                                @if ($related_product->multiImages->isNotEmpty())
                                                    @foreach ($related_product->multiImages->slice(0, 5) as $image)
                                                        @php
                                                            $imagePath = 'storage/' . $image->photo;
                                                            $imageSrc = file_exists(public_path($imagePath))
                                                                ? asset($imagePath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <div class="slide">
                                                            <div class="ps-gallery__item">
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $related_product->name }}" />
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @php
                                                        $thumbnailPath = 'storage/' . $related_product->thumbnail;
                                                        $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                            ? asset($thumbnailPath)
                                                            : asset('frontend/img/no-product.jpg');
                                                    @endphp
                                                    <div class="slide">
                                                        <div class="ps-gallery__item">
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $related_product->name }}" />
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pr-0 col-12 col-xl-6">
                                        <div class="mb-0 ps-product__info">
                                            <div class="ps-product__badges">
                                                <span
                                                    class="ps-badge ps-badge--instock">{{ $related_product->box_stock > 0 ? 'IN STOCK' : 'OUT OF STOCK' }}</span>
                                            </div>
                                            <div class="pt-2 ps-product__branch">
                                                <a href="#"
                                                    style="text-transform: uppercase;">{{ optional($related_product->brand)->name }}</a>
                                            </div>
                                            <h5 class="ps-product__title">
                                                <a href="{{ route('product.details', $related_product->slug) }}">
                                                    {{ $related_product->name }}
                                                </a>
                                            </h5>
                                            <div class="ps-product__desc">
                                                <p>{!! $related_product->short_description !!}</p>
                                            </div>

                                            <div class="ps-product__feature">
                                                @if (!empty($related_product->unit_discount_price))
                                                    <div class="py-3 mt-3 ps-product__meta pr-details-price">
                                                        <span
                                                            class="ps-product__price sale">৳{{ $related_product->unit_discount_price }}</span>
                                                        <span
                                                            class="ps-product__del">৳{{ $related_product->unit_price }}</span>
                                                    </div>
                                                @else
                                                    <div class="py-3 mt-3 ps-product__meta pr-details-price">
                                                        <span
                                                            class="ps-product__price sale">৳{{ $related_product->unit_price }}</span>
                                                    </div>
                                                @endif

                                                <div class="ps-product__quantity">
                                                    <h6>Quantity</h6>
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                class="icon-minus"></i></button>
                                                        <input class="quantity" min="1" name="quantity"
                                                            value="1" type="number"
                                                            data-product_id="{{ $related_product->id }}" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                class="icon-plus"></i></button>
                                                    </div>
                                                </div>

                                                <a class="ps-btn ps-btn--warning add_to_cart_btn_product_single"
                                                    data-product_id="{{ $related_product->id }}" href="#">Add
                                                    to cart</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.querySelectorAll('.magnifier-container').forEach(container => {
                const img = container.querySelector('img');

                container.addEventListener('mousemove', (e) => {
                    const rect = container.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const xPercent = (x / rect.width) * 100;
                    const yPercent = (y / rect.height) * 100;

                    img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
                    img.style.transform = "scale(2)"; // Zoom level
                });

                container.addEventListener('mouseleave', () => {
                    img.style.transform = "scale(1)";
                    img.style.transformOrigin = "center center";
                });
            });
        </script>
        <script>
            $(function() {
                var galleryTop, galleryThumbs;

                function initSwiper() {
                    // Destroy existing Swiper instances if they exist
                    if (galleryTop) {
                        galleryTop.destroy(true, true);
                    }
                    if (galleryThumbs) {
                        galleryThumbs.destroy(true, true);
                    }

                    if ($(window).width() > 768) {
                        // Initialize Swiper for mobile
                        galleryTop = new Swiper(".mySwiperDesktop", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            direction: 'vertical', // Default slides per view for mobile
                            freeMode: false,
                            watchSlidesProgress: true,
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                },
                                530: {
                                    slidesPerView: 3,
                                },
                                300: {
                                    slidesPerView: 2,
                                },
                            }
                        });
                        galleryThumbs = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            a11y: {
                                prevSlideMessage: "Previous slide",
                                nextSlideMessage: "Next slide",
                            },
                            thumbs: {
                                swiper: galleryTop,
                            },
                        });
                    } else {
                        // Initialize Swiper for desktop
                        galleryTop = new Swiper(".mySwiper", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            freeMode: false,
                            watchSlidesProgress: true,
                        });
                        galleryThumbs = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            a11y: {
                                prevSlideMessage: "Previous slide",
                                nextSlideMessage: "Next slide",
                            },
                            thumbs: {
                                swiper: galleryTop,
                            },
                        });
                    }

                    // Sync the slide change between galleryTop and galleryThumbs
                    galleryTop.on("slideChangeTransitionStart", function() {
                        galleryThumbs.slideTo(galleryTop.activeIndex);
                    });
                    galleryThumbs.on("transitionStart", function() {
                        galleryTop.slideTo(galleryThumbs.activeIndex);
                    });
                }

                initSwiper();

                // Reinitialize Swiper on window resize
                $(window).resize(function() {
                    initSwiper();
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 4, // Change this to 4
                    loop: true,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4 // Change this to 4 as well
                        }
                    }
                });
            });
        </script>
        <script>
            // Get all input elements
            const colorInputs = document.querySelectorAll('.color-one .round input[type="checkbox"]');

            // Loop through each input and set the label background color
            colorInputs.forEach(input => {
                const label = document.querySelector(`label[for="${input.id}"]`);
                if (label) {
                    label.style.backgroundColor = input.value; // Set background color from input value
                }

                // Add event listener to allow only one checkbox to be checked at a time
                input.addEventListener('change', () => {
                    if (input.checked) {
                        // Uncheck all other checkboxes
                        colorInputs.forEach(otherInput => {
                            if (otherInput !== input) {
                                otherInput.checked = false;
                            }
                        });
                    }
                });
            });
        </script>
    @endpush


</x-frontend-app-layout>
