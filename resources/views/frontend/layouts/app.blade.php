<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @props(['title'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>PiqPaq | Go Green, Live Clean!</title>
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/noUiSlider/nouislider.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home-14.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            /* Slightly transparent white background */
            z-index: 9999;
            /* Ensure it's on top of all content */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preloader-inner {
            text-align: center;
        }

        .spinner {
            border: 8px solid #f3f3f3;
            /* Light grey background */
            border-top: 8px solid #3498db;
            /* Blue spinner */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-percentage {
            font-size: 1.5rem;
            color: #3498db;
            /* Blue color for percentage text */
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="loading-percentage" id="loadingPercentage">0%</div>
        </div>
    </div>

    <div class="ps-page">
        {{-- Header --}}
        @include('frontend.layouts.header')
        {{-- Header --}}
        {{ $slot }}
        {{-- Footer --}}
        @include('frontend.layouts.footer')
        {{-- Footer --}}
    </div>
    @include('frontend.layouts.extra')

    <script src="{{ asset('frontend/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/lightGallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/noUiSlider/nouislider.min.js') }}"></script>
    <!-- jQuery (required for DataTables and Date Range Picker) -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <!-- Date Range Picker JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> --}}
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/sidebar.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    @stack('scripts')
    <!-- custom code-->
    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        // Simulate loading progress
        let percentage = 0;

        function updateLoadingProgress() {
            percentage += 1;
            $('#loadingPercentage').text(percentage + '%');
            if (percentage < 100) {
                setTimeout(updateLoadingProgress, 100); // Update every 100ms
            }
        }
        updateLoadingProgress();
    </script>
    <script>
        class Dashboard {
            constructor() {
                this.initDataTables();
                this.initDateRangePicker();
            }

            initDataTables() {
                $(document).ready(() => {
                    // Initialize DataTable for elements with class 'order-history-table'
                    $('.order-history-table').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                        "language": {
                            "paginate": {
                                "previous": "<i class='fa fa-chevron-left pagination-icon'></i>",
                                "next": "<i class='fa fa-chevron-right pagination-icon'></i>"
                            }
                        }
                    });
                });
            }

            initDateRangePicker() {
                $(document).ready(() => {
                    // Initialize Date Range Picker
                    $('#kt_daterangepicker_1').daterangepicker({
                        opens: 'left',
                        locale: {
                            format: 'MM/DD/YYYY'
                        }
                    });
                });
            }
        }

        // Create an instance of the Dashboard class
        $(document).ready(() => {
            new Dashboard();
        });
    </script>
    {{-- add_to_cart_btn_product --}}

    {{-- add_to_cart_btn_product --}}

    {{-- add_to_cart_btn_product_single --}}
    <script>
        $(document).ready(function() {
            $('.add_to_cart_btn_product_single').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link

                // Find the quantity input
                var $quantityInput = $(this).closest('.ps-product__feature').find('.quantity');
                var product_id = $(this).data('product_id');
                var cartHeader = $('.miniCart');
                var qty = $quantityInput.val(); // Get the quantity value

                // Check if quantity is valid
                if (qty <= 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Quantity',
                        text: 'Please select a valid quantity.'
                    });
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: '/cart/store/' + product_id,
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token for security
                        quantity: qty
                    },
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });

                            // Update mini cart
                            cartHeader.html(data.cartHeader);
                            $(".cartCount").html(data.cartCount);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong!'; // Default message

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMessage = response.message;
                                }
                            } catch (e) {
                                // If responseText is not JSON, use default message
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });



    </script>


    <script>
        $(document).ready(function() {
            $('.add_to_cart').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link
                var button = $(this);
                var product_id = button.data('product_id');
                var qty = button.data('product_qty'); // Get the quantity value
                var cartUrl = $(this).attr('href');
                var cartHeader = $('.miniCart');
                // Check if quantity is valid
                if (qty <= 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Quantity',
                        text: 'Please select a valid quantity.'
                    });
                    return;
                }

                $.ajax({
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token for security
                        quantity: qty
                    },
                    url: cartUrl,
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            button.prop('disabled', true); // Disable the button
                            button.text('Already added'); // Change button text
                            $(".cartCount").html(data.cartCount);
                            cartHeader.html(data.cartHeader);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong!'; // Default message

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMessage = response.message;
                                }
                            } catch (e) {
                                // If responseText is not JSON, use default message
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.add_to_wishlist').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link
                var button = $(this);
                var product_id = button.data('product_id');
                var user_id = button.data('product_id');
                var wishlistUrl = $(this).attr('href');
                var wishlistCount = $('.wishlistCount');
                // Check if quantity is valid


                $.ajax({
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    url: wishlistUrl,
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            button.prop('disabled', true); // Disable the button
                            button.text('Already added'); // Change button text
                            wishlistCount.html(data.wishlistCount);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'Something went wrong!'; // Default message

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMessage = response.message;
                                }
                            } catch (e) {
                                // If responseText is not JSON, use default message
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });
    </script>

    {{-- MiNiCart  --}}

    <script>
        function miniCart() {

            $.ajax({

                type: 'GET',
                dataType: 'json',
                url: '/product/mini/cart',

                success: function(response) {

                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartQty').text(response.cartQty);

                    var miniCart = ""

                    $.each(response.carts, function(key, value) {

                        miniCart += `<ul id="minicartHeader" class="product_list_widget list-unstyled">

                            <li>
                                <div class="media clearfix">

                                    <div class="media-lefta">
                                        <a href="single-product.html">
                                            <img src="/${value.options.image}" style="width:50px;height:50px;" alt="hoodie_5_front" />
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <a href="">${value.name}</a>

                                        <span class="price">
                                            <span class="amount">
                                                Tk ${value.price}
                                            </span>
                                        </span>

                                        <span class="quantity">Qty: ${value.qty} Pcs</span>

                                    </div>

                                </div>
                                <div class="product-remove">

                                    <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" class="btn-remove" title="Remove this item">
                                        <i class="fa fa-close"></i>
                                    </a>

                                </div>
                            </li>

                            </ul>`

                    });

                    $('#miniCart').html(miniCart);

                }

            })

        }

        miniCart();
    </script>

    {{-- //MiNiCart Remove  --}}
    <script>
        function miniCartRemove(rowId) {

            $.ajax({

                type: 'GET',
                url: '/minicart/product/remove/' + rowId,
                dataType: 'json',
                success: function(data) {

                    miniCart();

                    // Start Message

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            title: data.error,
                        })
                    }

                    // End Message

                }



            })
        }
    </script>

    {{-- add_to_cart_btn_product_single --}}
</body>


</html>
