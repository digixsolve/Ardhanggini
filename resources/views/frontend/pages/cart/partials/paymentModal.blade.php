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
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button class="btn btn-primary" data-target="#pm_modal_3" data-toggle="modal" data-dismiss="modal">Ok
                    Proceed</button>
                <button class="btn btn-primary" data-target="#pm_modal_2" data-toggle="modal"
                    data-dismiss="modal">Cancel</button>
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
                            আপনি বিকাশ / নগদ / রকেট এর মাধ্যমে ডেলিভারি চার্জ পেমেন্ট করার পর, পেমেন্টের বিবরণ আমাদের
                            জানালে আমরা
                            আপনার অর্ডারটি দ্রুত কনফার্ম ও প্রসেস করতে পারব।
                        </p> <br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-target="#pm_modal_1" data-toggle="modal" data-dismiss="modal">Back
                    to first</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pm_modal_3" aria-hidden="true" aria-labelledby="pm_modal_3Label2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="pm_modal_3Label2">Payment Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Payment Options -->
                <div class="text-center mb-4">
                    <div class="d-flex justify-content-center">

                        @if (!empty($setting->bkash_no))
                            <div class="mx-3 text-center">
                                <img class="payment_logo" src="{{ asset('images/bkash.svg') }}" alt="Bkash"
                                    class="mb-2">
                                <div class="payment-number">{{ $setting->bkash_no }}</div>
                            </div>
                        @endif
                        @if (!empty($setting->nagad_no))
                            <div class="mx-3 text-center">
                                <img class="payment_logo" src="{{ asset('images/nagad.svg') }}" alt="Nagad"
                                    class="mb-2">
                                <div class="payment-number">{{ $setting->nagad_no }}</div>
                            </div>
                        @endif
                        @if (!empty($setting->rocket_no))
                            <div class="mx-3 text-center">
                                <img class="payment_logo" src="{{ asset('images/rocket.png') }}" alt="Rocket"
                                    class="mb-2">
                                <div class="payment-number">{{ $setting->rocket_no }}</div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Instruction -->
                <p class="text-center instruction-text">
                    দয়া করে আপনার ডেলিভারি চার্জ <span id="paymentDeliveryCharge">১৫০</span> টাকা 'Send Money' অপশনে
                    গিয়ে পরিশোধ করে আপনার অর্ডারটি কনফার্ম
                    করুন।
                </p>

                <!-- Form Heading -->
                <div class="text-center mb-3">
                    <h5 class="font-weight-bold">Provide Your Payment Details</h5>
                    <p class="small font-weight-bold text-muted">(আপনার পেমেন্ট এর তথ্য নিচে ফর্ম দিন)</p>
                </div>

                <!-- Form Fields -->
                <form class="ps-checkout__form">
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Your Name</label>
                        <input type="text" class="form-control ps-input" name="client_payment_name"
                            placeholder="Your name here">
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Bkash/Rocket/Nagad Account Number <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control ps-input" name="client_payment_number"
                            placeholder="017XXXXXXXX" required>
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Transaction ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control ps-input" name="client_payment_transaction_id"
                            placeholder="Txn ID here" required>
                    </div>
                    <div class="form-group ps-checkout__group">
                        <label class="ps-checkout__label">Amount Paid <span class="text-danger">*</span></label>
                        <input type="number" class="form-control ps-input" name="client_payment_amount"
                            placeholder="Write your paid amount here" required>
                    </div>

                    <!-- Buttons -->
                    <div class="text-center mt-5 mb-3">
                        <button type="submit" class="btn btn-custom px-4">Submit Info and Confirm</button>
                        <button type="button" class="btn btn-outline-custom px-4 ml-2">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- Custom Styles -->
            <style>
                .payment-number {
                    background: #4a006d;
                    /* purple background like image */
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
                    border-radius: 8px;
                    font-weight: 500;
                }

                .btn-custom:hover {
                    background-color: #370050;
                    color: #fff;
                }

                .btn-outline-custom {
                    border: 1px solid #4a006d;
                    color: #4a006d;
                    border-radius: 8px;
                    font-weight: 500;
                }

                .btn-outline-custom:hover {
                    background-color: #4a006d;
                    color: #fff;
                }
            </style>


        </div>
    </div>
</div>
{{-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}
