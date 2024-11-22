@if ($cartItems->Count() > 0)
    <div class="col-12 col-md-7 col-lg-9">
        <ul class="ps-shopping__list">
            @foreach ($cartItems as $item)
                <li>
                    <div class="ps-product ps-product--wishlist">
                        <div class="ps-product__remove">
                            <a href="{{ route('cart.destroy', $item->rowId) }}" class="remove-from-cart delete">
                                <i class="icon-cross"></i>
                            </a>
                        </div>
                        <div class="ps-product__thumbnail">
                            <a class="ps-product__image" href="{{ route('product.details', $item->model->slug) }}">
                                <div>
                                    <img src="{{ asset('storage/' . $item->model->thumbnail) }}" alt
                                        onerror="this.onerror=null; this.src='{{ asset('images/no-preview.png') }}';" />
                                </div>
                            </a>
                        </div>
                        <div class="ps-product__content">
                            <h5 class="ps-product__title">
                                <a
                                    href="{{ route('product.details', $item->model->slug) }}">{{ $item->model->name }}</a>
                            </h5>
                            <div class="ps-product__row">
                                <div class="ps-product__label">Price:</div>
                                <div class="ps-product__value">
                                    <span class="ps-product__price">৳{{ $item->price }}</span>
                                </div>
                            </div>
                            <div class="ps-product__row ps-product__stock">

                                <div class="ps-product__label">Stock:</div>
                                @if (!empty($item->box_stock) && $item->box_stock > 0)
                                    <div class="ps-product__value">
                                        <span class="ps-product__in-stock">{{ $item->box_stock }} In Stock</span>
                                    </div>
                                @else
                                    <div class="ps-product__badge"><span class="ps-badge ps-badge--outstock">Out Of
                                            Stock</span></div>
                                @endif
                            </div>
                            <div class="ps-product__cart">
                                <button class="ps-btn">Add to cart</button>
                            </div>
                            {{-- <div class="ps-product__row ps-product__quantity">
                                <div class="ps-product__label">Quantity:</div>
                                <div class="ps-product__value">{{ $item->qty }}</div>
                            </div> --}}
                            <div class="ps-product__row ps-product__quantity d-flex justify-content-center">
                                <div class="ps-product__value">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="icon-minus"></i>
                                        </button>
                                        <input class="quantity" min="0" name="quantity"
                                            value="{{ $item->qty }}" type="number"
                                            data-row_id="{{ $item->rowId }}" />
                                        <button class="plus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="icon-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product__row ps-product__subtotal">
                                <div class="ps-product__label">Subtotal:</div>
                                <div class="ps-product__value">৳{{ $item->price * $item->qty }}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="ps-shopping__table">
            <table class="table ps-table ps-table--product">
                <thead>
                    <tr>
                        <th width="10%" class="ps-product__remove text-center">
                            <div>
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </th>
                        <th width="15%" class="ps-product__thumbnail">Image</th>
                        <th width="35%" class="ps-product__name">Product name</th>
                        <th width="20%" class="ps-product__meta">Unit price</th>
                        <th width="10%" class="ps-product__quantity">Quantity</th>
                        <th width="10%" class="ps-product__subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td class="ps-product__remove text-center">
                                <a href="{{ route('cart.destroy', $item->rowId) }}" class="remove-from-cart delete">
                                    <i class="icon-cross"></i>
                                </a>
                            </td>
                            <td class="ps-product__thumbnail">
                                <a class="ps-product__image" href="{{ route('product.details', $item->model->slug) }}">
                                    <div>
                                        <img src="{{ asset('storage/' . $item->model->thumbnail) }}" alt=""
                                            onerror="this.onerror=null; this.src='{{ asset('images/no-preview.png') }}';" />
                                        <!-- Fallback image -->
                                    </div>
                                </a>
                            </td>
                            <td class="ps-product__name">
                                <a
                                    href="{{ route('product.details', $item->model->slug) }}">{{ $item->model->name }}</a>
                            </td>
                            <td class="ps-product__meta">
                                <span class="ps-product__price">৳{{ $item->price }}</span>
                            </td>
                            <td class="ps-product__quantity">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="icon-minus"></i>
                                    </button>
                                    <input class="quantity" min="0" name="quantity" value="{{ $item->qty }}"
                                        type="number" data-row_id="{{ $item->rowId }}" />
                                    <button class="plus"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="ps-product__subtotal text-center">৳{{ $item->price * $item->qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="ps-shopping__footer justify-content-center">
            <div class="ps-shopping__button d-flex justify-content-center align-items-center">
                <a href="{{ route('cart.clear') }}" class="ps-btn ps-btn--primary delete">Clear All</a>
                <button class="ps-btn ps-btn--primary" type="button" id="update-cart">Update cart</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-lg-3">
        <div class="ps-shopping__label">
            <p class="">Cart totals</p>
        </div>
        {{-- Pricing Side --}}
        <div class="ps-shopping__box">
            <div class="ps-shopping__row">
                <div class="ps-shopping__label">Subtotal</div>
                <div class="ps-shopping__price">৳{{ Cart::subtotal() }}</div>
            </div>
            <div class="ps-shopping__row flex-column py-3">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="ps-shopping__label text-left">Delivery Charge</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="delivery-charge text-left">
                            <input type="checkbox" id="cbx-46" name="delivery_option" class="inp-cbx" name="" value="70"/>
                            <label for="cbx-46" class="cbx ps-shopping__label"><span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>Inside Dhaka-70 TK</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="delivery-charge text-left">
                            <input type="checkbox" id="cbx-47" name="delivery_option" class="inp-cbx" name="" value="150"/>
                            <label for="cbx-47" class="cbx ps-shopping__label"><span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>Outside Dhaka-150 TK</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="delivery-charge text-left">
                            <input type="checkbox" id="cbx-48" name="delivery_option" class="inp-cbx" name="" value="100"/>
                            <label for="cbx-48" class="cbx ps-shopping__label"><span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>Dhaka Sub-area-100 TK</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-shopping__row">
                <div class="ps-shopping__label">Total</div>
                <div class="ps-shopping__price">৳{{ Cart::subtotal() }}</div>
            </div>
            <div class="ps-shopping__checkout">
                <a class="ps-btn ps-btn--warning" href="{{ route('checkout') }}">Place Order</a>
                <a class="ps-shopping__link" href="{{ route('allproducts') }}">Continue To Shopping</a>
            </div>
        </div>
        {{-- Pricing Side End --}}
    </div>
@else
    <div class="col-md-12 text-center">
        <h2>Your cart is empty !</h2>
        <h5 class="mt-3">Add Items to it now.</h5>
        <a href="{{ route('allproducts') }}" class="btn btn-warning mt-5 mb-4">
            Shop Now
        </a>
    </div>
@endif

