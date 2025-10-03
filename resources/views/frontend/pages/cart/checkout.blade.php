<x-frontend-app-layout :title="'Checkout'">

    <style>
        ::placeholder {
            color: #7a7a7a !important;
        }
    </style>
    <div class="ps-checkout">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('home') }}">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    Checkout
                </li>
            </ul>
            <h3 class="ps-checkout__title">Checkout</h3>
            <div class="ps-checkout__content">
                {{-- <div class="ps-checkout__wapper">
                    <p class="ps-checkout__text">
                        Returning customer?
                        <a href="my-account.html">Click here to login</a>
                    </p>
                    <p class="ps-checkout__text">
                        Have a coupon?
                        <a href="shopping-cart.html">Click here to enter your code</a>
                    </p>
                </div> --}}
                <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="ps-checkout__form">
                                {{-- <h3 class="ps-checkout__heading">Billing details</h3> --}}
                                <div class="row">

                                    <div class="col-12">
                                        <h3 class="ps-checkout__heading">Shipping details</h3>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">First name <span
                                                            class="text-danger">*</span></label>
                                                    <input class="ps-input" type="text"
                                                        placeholder="Enter Your First Name."
                                                        value="{{ old('shipping_first_name', optional($user)->first_name) }}"
                                                        name="shipping_first_name" required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Last name </label>
                                                    <input class="ps-input" type="text"
                                                        placeholder="Enter Your Last Name."
                                                        value="{{ old('shipping_last_name', optional($user)->last_name) }}"
                                                        name="shipping_last_name" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Email address <span
                                                            class="text-danger">*</span></label>
                                                    <input class="ps-input" type="email" name="shipping_email"
                                                        placeholder="Enter Your Email Address."
                                                        value="{{ old('shipping_email', optional($user)->email) }}"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Phone <span
                                                            class="text-danger">*</span></label>
                                                    <input class="ps-input" type="text" name="shipping_phone"
                                                        placeholder="Enter Your Phone Number."
                                                        value="{{ old('shipping_phone', optional($user)->phone) }}"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">District <span
                                                            class="text-danger">*</span></label>
                                                    <input class="ps-input" type="text" name="shipping_state"
                                                        placeholder="Enter Your District." required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Upazila </label>
                                                    <input class="ps-input" type="text" name="shipping_postcode"
                                                        placeholder="Enter Your Upazila." />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Country (optional)</label>
                                                    <select name="shipping_country"
                                                        class="form-select ps-form__input select2-selection--single "
                                                        id="shipping_country">
                                                        <option selected>Bangladesh</option>
                                                        <option value="Bangladesh" selected>Bangladesh</option>
                                                        <option value="India">India</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Nepal">Nepal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Full Address <span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="ps-textarea" name="shipping_address" id="" rows="2"
                                                        placeholder="Enter Full Address (House, Road, Area, City)." required>{{ old('shipping_address', optional($user)->address_one) }}</textarea>
                                                    {{-- <input class="mb-3 ps-input" type="text" name="shipping_address"
                                                        placeholder="House number and street name" /> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Order notes (optional)</label>
                                            <textarea class="ps-textarea" name="order_note" rows="6" placeholder="Have any special note?"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="ps-checkout__order">
                                <h3 class="ps-checkout__heading">Your order</h3>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Product</div>
                                    <div class="ps-title">Subtotal</div>
                                </div>
                                @foreach ($cartItems as $cartItem)
                                    <div class="ps-checkout__row ps-product">
                                        <div class="ps-product__name">
                                            <a
                                                href="{{ route('product.details', $cartItem->model->slug) }}">{{ $cartItem->model->name }}</a>
                                            x <span>{{ $cartItem->qty }}</span>
                                        </div>
                                        <div class="ps-product__price">
                                            ৳{{ number_format($cartItem->price * $cartItem->qty, 2) }}</div>
                                    </div>
                                @endforeach
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Subtotal</div>
                                    <input type="hidden" name="sub_total" id="sub_total"
                                        value="{{ $subTotal }}">
                                    <div class="ps-product__price">৳{{ number_format($subTotal, 2) }}</div>
                                </div>
                                <div class="ps-checkout__row row">
                                    <div class="ps-title col-lg-12">Shipping <span class="text-danger">*</span></div>
                                    <div class="ps-checkout__checkbox col-lg-12">
                                        @if ($subTotal > 3999)
                                            <div class="form-check">
                                                <input class="form-check-input" name="shipping_id" type="radio"
                                                    id="shipping-0" data-shipping_price="0" value="0" checked />
                                                <label class="form-check-label" for="shipping-0">Free Delivery
                                                    <span>(৳ 0)</span></label>
                                            </div>
                                        @else
                                            @foreach ($shippingmethods as $index => $shippingmethod)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="shipping_id" type="radio"
                                                        id="shipping-{{ $shippingmethod->id }}"
                                                        data-shipping_price="{{ $shippingmethod->price }}"
                                                        value="{{ $shippingmethod->id }}" required
                                                        @checked($loop->first) />
                                                    <label class="form-check-label"
                                                        for="shipping-{{ $shippingmethod->id }}">{{ $shippingmethod->title }}
                                                        {{ $shippingmethod->duration }}
                                                        <span>(৳{{ number_format($shippingmethod->price, 2) }})</span></label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Total</div>
                                    <div class="ps-product__price" id="total-price-container">
                                        <input type="hidden" name="total_amount" id="total-input"
                                            value="{{ number_format($subTotal, 2) }}">
                                        ৳<span id="total-price"
                                            style="font-weight: 600;">{{ number_format($subTotal, 2) }}</span>
                                    </div>
                                </div>
                                {{-- <div class="ps-checkout__row">
                                    <div class="ps-title">Total</div>
                                    <div class="ps-product__price" id="total-price-container">

                                        <input type="hidden" name="total_amount" id="total-input"
                                            value="{{ number_format($subTotal, 2) }}">
                                        ৳<span id="total-price"
                                            style="font-weight: 600;">{{ number_format($subTotal, 2) }}</span>
                                    </div>
                                </div> --}}
                                <div class="ps-checkout__payment">
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">Payment Method</div>
                                        <div class="ps-checkout__checkbox">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="cod" value="cod" checked />
                                                <label class="form-check-label" for="cod">COD</label>
                                            </div> --}}
                                            <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="stripe" value="stripe" checked />
                                                <label class="mt-0 form-check-label" for="stripe">Cash On
                                                    Delivery</label>
                                            </div>
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="paypal" value="paypal" />
                                                <label class="form-check-label" for="paypal">PayPal</label>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="check-faq">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree-faq" checked
                                                required />
                                            <label class="form-check-label" for="agree-faq">
                                                I have read and agree to the website terms and conditions *</label>
                                        </div>
                                    </div>
                                    <button type="button" class="mt-4 btn btn-primary w-100 register-btns"
                                        data-toggle="modal" data-target="#pm_modal_1">
                                        Place Order
                                    </button>
                                    {{-- <button type="submit" class="mt-4 btn btn-primary w-100 register-btns">
                                        <i class="pr-2 fa-solid fa-clipboard-check"></i> Place order
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.pages.cart.partials.paymentModal')
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function ucFirst(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
            // Make showOnlySelectedPaymentInfo globally accessible
            function showOnlySelectedPaymentInfo(method) {
                // Hide all payment info
                $('.payment-info').addClass('d-none');
                // Show selected one
                $('#' + method + '_info').removeClass('d-none');
            }

            $(document).ready(function() {
                // Handle name sync and client_name update
                $('input[name="shipping_first_name"]').on('input', function() {
                    var firstName = $(this).val();
                    $('input[name="client_payment_name"]').val(firstName);
                    $('.client_name').text(firstName);
                });

                // Update text based on selected payment method
                $('input[name="delivery_charge_payment_method"]').on('change', function() {
                    var paymentMethodValue = $(this).val();
                    $('#paymentMethodNo').text(ucFirst(paymentMethodValue));
                    $('#paymentMethodTransID').text(ucFirst(paymentMethodValue));

                    // Show only relevant payment info
                    showOnlySelectedPaymentInfo(paymentMethodValue);
                });

                // Initial setup: show default selected method's info
                const defaultMethod = $('input[name="delivery_charge_payment_method"]:checked').val();
                showOnlySelectedPaymentInfo(defaultMethod);
            });
        </script>

        {{-- <script>

            $(document).ready(function() {
                $('input[name="shipping_first_name"]').on('input', function() {
                    var firstName = $(this).val();
                    $('input[name="client_payment_name"]').val(firstName);
                    $('.client_name').text(firstName);
                });
                $('input[name="delivery_charge_payment_method"]').on('change', function() {
                    var paymentMethodValue = $(this).val();
                    $('#paymentMethodNo').text(ucFirst(paymentMethodValue));
                    $('#paymentMethodTransID').text(ucFirst(paymentMethodValue));
                });
            });

            </script> --}}
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                const subtotal = parseFloat('{{ $subTotal }}');
                const totalInput = document.getElementById('total-input');
                const totalPriceSpan = document.getElementById('total-price');

                document.querySelectorAll('input[name="shipping_id"]').forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        const shippingPrice = parseFloat(this.getAttribute('data-shipping_price')) || 0;
                        const total = subtotal + shippingPrice;

                        console.log('Shipping Price:', shippingPrice);
                        console.log('Calculated Total:', total);

                        totalInput.value = total.toFixed(2);
                        totalPriceSpan.textContent = total.toFixed(2);
                    });
                });
            });
        </script> --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const subtotal = parseFloat('{{ $subTotal }}');
                const totalInput = document.getElementById('total-input');
                const totalPriceSpan = document.getElementById('total-price');

                document.querySelectorAll('input[name="shipping_id"]').forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        const shippingPrice = parseFloat(this.getAttribute('data-shipping_price')) || 0;
                        const total = subtotal + shippingPrice;

                        console.log('Shipping Price:', shippingPrice);
                        console.log('Calculated Total:', total);
                        const paymentDeliveryChargeSpan = document.getElementById(
                            'paymentDeliveryCharge');
                        if (paymentDeliveryChargeSpan) {
                            paymentDeliveryChargeSpan.textContent = shippingPrice.toFixed(2);
                        }
                        totalInput.value = total.toFixed(2); // Update hidden field value
                        totalPriceSpan.textContent = total.toFixed(2); // Update the visible total price
                    });
                });
                const defaultShippingRadio = document.querySelector('input[name="shipping_id"]:checked');
                if (defaultShippingRadio) {
                    defaultShippingRadio.dispatchEvent(new Event('change'));
                }

            });
        </script>
    @endpush
</x-frontend-app-layout>
