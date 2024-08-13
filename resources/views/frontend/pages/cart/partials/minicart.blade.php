@php
    $cartItems = Cart::instance('cart')->content();
    $subTotal = Cart::instance('cart')->subtotal();
@endphp
    <ul class="ps-cart__items miniCart">
        @foreach ($cartItems as $item)
            <li class="ps-cart__item">
                <div class="ps-product--mini-cart">
                    <a class="ps-product__thumbnail" href="{{ route('product.details', $item->model->slug) }}">
                        <img src="{{ asset('storage/' . $item->model->thumbnail) }}" alt="alt" />
                    </a>
                    <div class="ps-product__content">
                        <a class="ps-product__name" href="{{ route('product.details', $item->model->slug) }}">
                            {{ $item->model->name }}</a>
                        <p class="ps-product__meta">
                            <span class="ps-product__price">£{{ $item->price }}</span>
                        </p>
                    </div>
                    <a class="ps-product__remove" href="javascript: void(0)">
                        <i class="icon-cross"></i>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="ps-cart__total">
        <span>Subtotal </span>
        <span>£{{ $subTotal }}</span>
    </div>
    <div class="ps-cart__footer">
        <a class="ps-btn ps-btn--outline" href="{{ route('cart') }}">View Cart
        </a>
        <a class="ps-btn ps-btn--warning" href="{{ route('checkout') }}">Checkout</a>
    </div>

