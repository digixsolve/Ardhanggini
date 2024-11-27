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
                        @if ($special_products)
                            @foreach ($special_products as $special_product)
                                <div class="col-6 col-lg-4 col-xl-3 p-0">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image"
                                                href="{{ route('product.details', $special_product->slug) }}">
                                                <div>
                                                    @if (!empty($special_product->thumbnail))
                                                        @php
                                                            $thumbnailPath = 'storage/' . $special_product->thumbnail;
                                                            $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                ? asset($thumbnailPath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <img src="{{ $thumbnailSrc }}"
                                                            alt="{{ $special_product->meta_title }}"
                                                            class="img-fluid category_product_img" />
                                                    @else
                                                        @foreach ($special_product->multiImages->slice(0, 2) as $image)
                                                            @php
                                                                $imagePath = 'storage/' . $image->photo;
                                                                $imageSrc = file_exists(public_path($imagePath))
                                                                    ? asset($imagePath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $imageSrc }}" class="category_product_img"
                                                                alt="{{ $special_product->meta_title }}" width="210"
                                                                height="210" />
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist">
                                                    <a class="add_to_wishlist"
                                                        href="{{ route('wishlist.store', $special_product->id) }}"><i
                                                            class="fa fa-heart-o"></i></a>
                                                </div>
                                                {{-- <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title=""
                                                    data-original-title="Quick view"><a href="#"
                                                        data-toggle="modal" data-target="#popupQuickview"><i
                                                            class="fa fa-search"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title=""
                                                    data-original-title="Add to cart"><a href="#"
                                                        data-toggle="modal" data-target="#popupAddcart"><i
                                                            class="fa fa-shopping-basket"></i></a></div> --}}
                                                {{-- <a class="add_to_wishlist"
                                                    href="{{ route('wishlist.store', $special_product->id) }}">
                                                    <i class="fa fa-heart-o"></i>
                                                </a> --}}
                                            </div>
                                            @if (!empty($special_product->unit_discount_price))
                                                <div class="ps-product__badge">
                                                    <div class="ps-badge ps-badge--sale">
                                                        {{ $special_product->unit_price > 0 ? number_format((($special_product->unit_price - $special_product->unit_discount_price) / $special_product->unit_price) * 100, 1) : 0 }}
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">
                                                <a href="{{ route('product.details', $special_product->slug) }}">
                                                    {{ implode(' ', array_slice(explode(' ', $special_product->name), 0, 8)) }}
                                                </a>
                                            </h5>
                                            @if (!empty($special_product->unit_discount_price))
                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">৳{{ $special_product->unit_discount_price }}</span>
                                                    <span class="ps-product__del">৳{{ $special_product->unit_price }}
                                                    </span>
                                                </div>
                                            @else
                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">৳{{ $special_product->unit_price }}</span>
                                                </div>
                                            @endif
                                            <a href="{{ route('cart.store', $special_product->id) }}"
                                                class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                data-product_id="{{ $special_product->id }}" data-product_qty="1">Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center bg-white if-show-img">
                                <img class="" style="width: 320px;"
                                    src="{{ asset('frontend/img/no-products-category.jpg') }}" alt="">
                            </div>
                        @endif
                    </div>
                    <div class="ps-pagination">
                        {{-- <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul> --}}
                        {{ $special_product->links() }}
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
