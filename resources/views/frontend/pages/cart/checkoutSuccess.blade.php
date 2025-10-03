<x-frontend-app-layout :title="'Checkout Success'">
    <style>
        .table thead th {
            vertical-align: middle;
            border: 1px solid #dee2e6a1;
        }

        .invoice_table td {
            vertical-align: middle !important;
        }

        .invoice_table {
            background-color: #e1ecff89;
            border-bottom: 0px;
        }

        .invoice_table td {
            border-bottom: 0px;
            border: 1px solid #dee2e6c4;
        }

        @media print {

            .card-header,
            .btn {
                display: none;
            }

            .table th,
            .table td {
                border: 1px solid #dee2e6;
            }
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="p-0 p-lg-5 pt-lg-0">
                        <div class="text-center card">
                            <div class="card-body p-lg-5 p-3">
                                <h1>Thank You for Your Order!</h1>
                                <p>আপনার অর্ডার সফলভাবে রেকর্ড করা হয়েছে, আমাদের টিম থেকে একজন প্রতিনিধি আপনাকে কল করে
                                    অর্ডারটি নিশ্চিত করার জন্য সহায়তা করবে। যেকোনো সময় সাহায্যের জন্য আমাদের সাথে
                                    যোগাযোগ
                                    করুন <a href="mailto:info.ardhanggini@gmail.com"
                                        class="text-info">info.ardhanggini@gmail.com</a> ।</p>
                            </div>
                            {{-- <p>Your order has been successfully placed, and we’re preparing it for delivery.To keep a
                                record, you can download
                                your invoice using the button below. Need help? Contact our support team anytime at <a
                                    href="mailto:info.ardhanggini@gmail.com"
                                    class="text-muted">info.ardhanggini@gmail.com</a>.</p> --}}
                        </div>
                        {{-- <div class="">
                            @include('frontend.layouts.invoice')
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="https://cdn.sheetjs.com/xlsx-0.19.1/xlsx.full.min.js"></script>
        {{-- thank-you.blade.php --}}
        <script>
            fbq('track', 'Purchase', {
                currency: "TK",
                value: {{ $order->total_amount ?? '0' }}
            });
        </script>
    @endpush
</x-frontend-app-layout>
