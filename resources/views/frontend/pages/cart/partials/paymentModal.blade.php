<div class="modal fade" id="pm_modal_1" aria-hidden="true" aria-labelledby="pm_modal_1Label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="pm_modal_1Label">Confirm Your Order</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card border-0">
                    <div class="card-body text-center border-0">
                        <h4 class="mb-2 text-center">Dear <span class="client_name"></span>,</h4>
                        <h3 class="mb-2 text-center">You're just one small step away</h3>
                        <h4 class="mb-3 text-center">
                            দয়া করে ডেলিভারি চার্জ দিয়ে আপনার অর্ডার কনফার্ম করুন
                        </h4>
                        <p>
                            আপনি বিকাশ / নগদ / রকেট এর মাধ্যমে ডেলিভারি চার্জ পেমেন্ট করার পর, পেমেন্টের বিবরণ আমাদের
                            জানালে আমরা আপনার অর্ডারটি দ্রুত কনফার্ম ও প্রসেস করতে পারব।
                        </p> <br>
                        <p>
                            <strong>Select Your Payment Option <span class="text-danger">*</span></strong>
                        </p>
                        {{-- Radion button to select payment method (bkash/nagad/rocket) with their logo --}}
                        <div class="d-flex justify-content-center align-items-center">
                            @if (!empty($setting->bkash_no))
                                <div class="mx-3 text-center d-flex align-items-center">
                                    <input class="mr-2" type="radio" name="delivery_charge_payment_method"
                                        value="bkash" id="bkash_radio" checked style="width: 1.5rem; height: 1.5rem;">
                                    <label class="mt-0 form-check-label" for="bkash_radio">
                                        <img class="payment_logo" src="{{ asset('images/bkash.svg') }}" alt="Bkash"
                                            class="mb-2">
                                    </label>
                                </div>
                            @endif
                            @if (!empty($setting->nagad_no))
                                <div class="mx-3 text-center d-flex align-items-center">
                                    <input class="mr-2" type="radio" name="delivery_charge_payment_method"
                                        value="nagad" id="nagad_radio" style="width: 1.5rem; height: 1.5rem;">
                                    <label class="mt-0 form-check-label" for="nagad_radio">
                                        <img class="payment_logo" src="{{ asset('images/nagad.svg') }}" alt="Nagad"
                                            class="mb-2">
                                    </label>
                                </div>
                            @endif
                            @if (!empty($setting->rocket_no))
                                <div class="mx-3 text-center d-flex align-items-center">
                                    <input class="mr-2" type="radio" name="delivery_charge_payment_method"
                                        value="rocket" id="rocket_radio" style="width: 1.5rem; height: 1.5rem;">
                                    <label class="mt-0 form-check-label" for="rocket_radio">
                                        <img class="payment_logo" src="{{ asset('images/rocket.png') }}" alt="Rocket"
                                            class="mb-2">
                                    </label>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button class="btn btn-primary mr-2" data-target="#pm_modal_3" data-toggle="modal"
                        data-dismiss="modal">Ok
                        Proceed</button>
                    <button class="btn btn-outline-primary ml-2" data-target="#pm_modal_2" data-toggle="modal"
                        data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pm_modal_2" aria-hidden="true" aria-labelledby="pm_modal_2Label2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pm_modal_2Label2">Order Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="card border-0">
                    <div class="card-body text-center border-0">
                        <h4 class="mb-2 text-center">Dear <span class="client_name"></span>,</h4>
                        <h3 class="mb-2 text-center">আপনি এখনো অর্ডার কনফার্ম করেননি।</h3>
                        <h5 class="mb-3 text-center">
                            {{-- আমাদের টিম থেকে একজন প্রতিনিধি আপনাকে কল করে অর্ডারটি নিশ্চিত করার জন্য সহায়তা করবে। --}}
                            দয়া করে ডেলিভারি চার্জ দিয়ে আপনার অর্ডার কনফার্ম করুন।
                        </h5>
                        <p>
                            আপনি বিকাশ / নগদ / রকেট এর মাধ্যমে ডেলিভারি চার্জ পেমেন্ট করার পর, পেমেন্টের বিবরণ
                            আমাদের
                            জানালে আমরা
                            আপনার অর্ডারটি দ্রুত কনফার্ম ও প্রসেস করতে পারব।
                        </p> <br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-target="#pm_modal_1" data-toggle="modal" data-dismiss="modal">Go
                    Back & Confirm</button>
                <button type="button" class="btn btn-outline-primary ml-2" data-dismiss="modal"
                    aria-label="Close">Cancel</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pm_modal_3" tabindex="-1" aria-labelledby="pm_modal_3Label2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="pm_modal_3Label2">Payment Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Payment Options -->
                <div class="row justify-content-center mb-4">
                    @if (!empty($setting->bkash_no))
                        <div id="bkash_info" class="payment-info mx-3 text-center">
                            <img class="payment_logo mb-2" src="{{ asset('images/bkash.svg') }}" alt="Bkash">
                            <div class="payment-number">{{ $setting->bkash_no }}</div>
                        </div>
                    @endif
                    @if (!empty($setting->nagad_no))
                        <div id="nagad_info" class="payment-info mx-3 text-center d-none">
                            <img class="payment_logo mb-2" src="{{ asset('images/nagad.svg') }}" alt="Nagad">
                            <div class="payment-number">{{ $setting->nagad_no }}</div>
                        </div>
                    @endif
                    @if (!empty($setting->rocket_no))
                        <div id="rocket_info" class="payment-info mx-3 text-center d-none">
                            <img class="payment_logo mb-2" src="{{ asset('images/rocket.png') }}" alt="Rocket">
                            <div class="payment-number">{{ $setting->rocket_no }}</div>
                        </div>
                    @endif
                </div>


                <!-- Instruction -->
                <p class="text-center instruction-text">
                    দয়া করে আপনার ডেলিভারি চার্জ <span id="paymentDeliveryCharge">১৫০</span> টাকা 'Send Money'
                    অপশনে
                    গিয়ে পরিশোধ করে আপনার অর্ডারটি কনফার্ম
                    করুন।
                </p>

                <!-- Form Heading -->
                <div class="text-center mb-3">
                    <h3 class="font-weight-bold">Provide Your Payment Details</h3>
                    <h5 class="small font-weight-bold text-muted">(আপনার পেমেন্ট এর তথ্য নিচে ফর্ম দিন)</h5>
                </div>

                <!-- Form Fields -->
                <div class="payment_form border-0">
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Your Name</label>
                        <input type="text" class="form-control ps-input" name="client_payment_name"
                            placeholder="Your name here">
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label"><span id="paymentMethodNo">BKash</span> Account Number <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control ps-input" name="client_payment_number"
                            placeholder="017XXXXXXXX" required>
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label"><span id="paymentMethodTransID">BKash</span> Transaction ID
                            <span class="text-danger">*</span></label>
                        <input type="text" class="form-control ps-input" name="client_payment_transaction_id"
                            placeholder="Txn ID here" required>
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Amount Paid <span class="text-danger">*</span></label>
                        <input type="number" class="form-control ps-input" name="client_payment_amount" step="0.01"
                            placeholder="Write your paid amount here" required>
                    </div>

                </div>
                <!-- Buttons -->
                <div class="text-center mt-5 mb-3">
                    <button type="submit" class="btn btn-custom px-4">Submit Info and Confirm</button>
                    <button type="button" class="btn btn-outline-custom px-4 ml-2" data-dismiss="modal"
                        aria-label="Close">Cancel</button>
                </div>
            </div>

            <!-- Custom Styles -->
            <style>
                .payment-number {
                    background: #4a006d;
                    color: #fff;
                    padding: 6px 12px;
                    border-radius: 25px;
                    font-weight: 500;
                    font-size: 14px;
                }

                .payment_logo {
                    width: 80px;
                    height: 50px;
                    object-fit: contain;
                }

                .instruction-text {
                    font-size: 15px;
                    line-height: 1.6;
                    margin-bottom: 25px;
                }

                .btn-custom {
                    background-color: #4a006d;
                    color: #fff;
                    border-radius: 3px;
                    font-weight: 500;
                }

                .btn-custom:hover {
                    background-color: #370050;
                    color: #fff;
                }

                .btn-outline-custom {
                    border: 1px solid #4a006d;
                    color: #4a006d;
                    border-radius: 3px;
                    font-weight: 500;
                }

                .btn-outline-custom:hover {
                    background-color: #4a006d;
                    color: #fff;
                }

                @media only screen and (min-width: 767px) {
                    .payment_form {
                        padding: 20px 5rem;
                    }

                    .instruction-text {
                        padding: 0px 5rem;
                    }
                }
            </style>
        </div>
    </div>
</div>

{{-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}
