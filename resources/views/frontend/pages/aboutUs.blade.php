<x-frontend-app-layout :title="'About Us'">
    <div class="ps-about">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('home') }}">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">About us</li>
            </ul>
            <section class="ps-banner--round">
                <div class="ps-banner">
                    <div class="ps-banner__block">
                        <div class="ps-banner__content">
                            <div class="ps-logo"><a href="{{ route('home') }}"> <img
                                        src="{{ asset('frontend/img/logo.png') }}" alt></a></div>
                            <h2 class="ps-banner__title">A Trusted Online Shop Where you can find stylish womens's bag &
                                baggage</h2>
                            <div class="ps-banner__btn-group">
                                <div class="ps-banner__btn">Bulk Savings</div>
                                <div class="ps-banner__btn">Diverse Selection</div>
                            </div>
                        </div>
                        <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                src="{{ asset('frontend/img/round5.png') }}" alt><img class="ps-banner__image"
                                src="{{ asset('frontend/img/about/about-bg.png') }}" alt></div>
                    </div>
                </div>
            </section>
            <section class="ps-about--info">
                <div class="ps-about__extent">
                    <div class="row m-0">
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon"><img src="{{ asset('frontend/img/icon/award-icon-2.png') }}"
                                        alt=""></div>
                                <h4 class="ps-block__title">Effortless Ordering</h4>
                                <div class="ps-block__subtitle">Streamline your  purchases with our easy-to-use
                                    online platform, making ordering a breeze for your convenience.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon"><img
                                        src="{{ asset('frontend/img/icon/dentistry-icon-2.png') }}" alt="">
                                </div>
                                <h4 class="ps-block__title">Flexible Shipping Options</h4>
                                <div class="ps-block__subtitle">Choose from a variety of shipping methods tailored to
                                    your needs, ensuring your orders arrive promptly and efficiently.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon"><img
                                        src="{{ asset('frontend/img/icon/toothbrush-icon-2.png') }}" alt="">
                                </div>
                                <h4 class="ps-block__title">Dedicated Customer Support</h4>
                                <div class="ps-block__subtitle">Our knowledgeable team is always here to assist you,
                                    providing personalized assistance and expert guidance whenever you need it.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="ps-about__content">
            <section class="ps-about__banner"
                style="background-image: url('{{ asset('frontend/img/Mask-Group.jpg') }}')">
                <div class="container">
                    <div class="ps-banner">
                        <h2 class="ps-banner__title">Hundreds of thousands of products at Best prices</h2>
                        <div class="ps-banner__desc">Completely the needs of home medicine chest and professional
                            offices</div><a class="ps-banner__shop" href="{{ route('allproducts') }}">Shop now</a>
                    </div>
                </div>
            </section>
            <section class="ps-about__project">
                <div class="container">
                    <h2 class="ps-about__title">Welcome to {{ optional($setting)->website_name }}, your premier
                        destination for  solutions.
                    </h2>
                    <section class="ps-section--block-grid">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img
                                    src="{{ asset('frontend/img/about/about-us-1.jpg') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Top quality products and proven suppliers with quality
                                certificates!</h3>
                            <div class="ps-section__subtitle">They have CEE 2020 certificate.</div>
                            <div class="ps-section__desc">At {{ optional($setting)->website_name }}, we pride ourselves
                                on delivering top-quality
                                products and exceptional service to businesses of all sizes. With our extensive range of
                                products and commitment to customer satisfaction, we strive to be your trusted partner
                                in meeting your  needs.</div>
                            <div class="ps-section__desc">
                                Our platform is designed with you in mind, offering a seamless shopping experience and
                                flexible options to accommodate your unique requirements. Whether you're stocking up on
                                everyday essentials or seeking specialty items, we've got you covered.
                            </div>
                        </div>
                    </section>
                    <section class="ps-section--block-grid row-reverse">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img
                                    src="{{ asset('frontend/img/about/about-us-2.jpg') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Empowering Your Business Success</h3>
                            <div class="ps-section__subtitle">Your Trusted Partner in  Solutions</div>
                            <div class="ps-section__desc">At {{ optional($setting)->website_name }}, we are dedicated
                                to empowering your business
                                success through our comprehensive range of  solutions. With a commitment to
                                excellence and a focus on customer satisfaction, we strive to be the go-to choice for
                                businesses seeking reliable and cost-effective  options.</div>
                            <ul class="ps-section__list">
                                <li>Quality Assurance</li>
                                <li>Tailored Solutions</li>
                                <li>Exceptional Service</li>
                                <li>Industry Experience</li>
                            </ul>
                        </div>
                    </section>
                    <section class="ps-section--block-grid">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img
                                    src="{{ asset('frontend/img/about/about-us-3.jpg') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Driving  Excellence</h3>
                            <div class="ps-section__subtitle">Your Gateway to Premium  Solutions</div>
                            <div class="ps-section__desc">At {{ optional($setting)->website_name }}, we're committed to
                                driving  excellence by
                                offering a comprehensive range of premium solutions tailored to meet your business
                                needs. With a focus on quality, reliability, and customer satisfaction, we aim to
                                elevate your  experience and help you achieve your goals.</div>
                            <ul class="ps-section__list">
                                <li>Premium Quality</li>
                                <li>Customized Options</li>
                                <li>Personalized Support</li>
                                <li>Industry Expertise</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>
            <section class="ps-about--video">
                <div class="ps-banner">
                    <div class="container">
                        <div class="ps-banner__block">
                            <div class="ps-banner__content">
                                <h2 class="ps-banner__title">Your Ultimate Source <br>for Health & Wellness Solutions!
                                </h2>
                                <div class="ps-banner__desc">Only this week 30% to 50% cheaper!</div>
                                <div class="ps-banner__btn-group">
                                    <div class="ps-banner__btn"><img src="{{ asset('frontend/img/icon/virus.svg') }}"
                                            alt>Limited Time Offer:
                                        Save Big Now!</div>
                                    <div class="ps-banner__btn"><img
                                            src="{{ asset('frontend/img/icon/ribbon.svg') }}" alt>Exclusive Deals:
                                        Don't Miss Out!</div>
                                </div><a class="ps-banner__shop bg-warning" href="#">About</a>
                            </div>
                            <div class="ps-banner__thumnail">
                                <div style="display:none;" id="video1">
                                    <video class="lg-video-object lg-html5" controls="" preload="none">
                                        <source src="{{ asset('frontend/img/video.mp4') }}" type="video/mp4">Your
                                        browser does not support
                                        HTML5 video.
                                    </video>
                                </div><img class="ps-banner__image"
                                    src="{{ asset('frontend/img/about/video-bg.jpg') }}" alt>
                                <div id="ps-video-gallery">
                                    <div class="video" data-html="#video1"
                                        data-poster="{{ asset('frontend/img/about/goby-tD3GaS9ysF4-unsplash-1.jpg') }}">
                                        <a href="#">
                                            <div class="ps-banner__video"><i class="fa fa-play"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(function() {
                // Owl Carousel
                var owl = $(".owl-carousel");
                owl.owlCarousel({
                    items: 1,
                    margin: 10,
                    loop: true,
                    nav: true,
                    dots: false, // Ensures that dot indicators are not shown
                    autoplay: true, // Enables autoplay
                    autoplayTimeout: 3000, // Time in milliseconds (3000ms = 3 seconds)
                    autoplayHoverPause: true, // Pause on mouse hover
                    responsive: {
                        480: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        992: {
                            items: 1
                        },
                        1200: {
                            items: 4
                        },
                        1680: {
                            items: 4
                        }
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
