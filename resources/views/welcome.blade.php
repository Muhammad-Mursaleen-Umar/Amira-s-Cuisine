@extends('layouts.newapp')

@section('title', "Amira's Cuisine")

@section('content')
<main>
    <div class="hero_single version_1">
        <div class="opacity-mask">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <h1>Delivery or Takeaway Food</h1>
                        <p>The best restaurants at the best price</p>
                        <form method="post" action="grid-listing-filterscol.html">
                            <div class="row g-0 custom-search-input">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" type="text" id="autocomplete" placeholder="Address, neighborhood...">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button class="btn_1 gradient" type="submit">Search</button>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="search_trends">
                                <h5>Trending:</h5>
                                <ul>
                                    <li><a href="#0">Sushi</a></li>
                                    <li><a href="#0">Burgher</a></li>
                                    <li><a href="#0">Chinese</a></li>
                                    <li><a href="#0">Pizza</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <div class="wave hero"></div>
    </div>
    <!-- /hero_single -->

    <div class="container margin_30_60">
        <div class="main_title center">
            <span><em></em></span>
            <h2>Popular Categories</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <!-- /main_title -->

        <div class="owl-carousel owl-theme categories_carousel">
            <div class="item_version_2">
                <a href="grid-listing-filterscol.html">
                    <figure>
                        <img src="{{ asset('img/home_cat_placeholder.jpg') }}" data-src="{{ asset('img/grillthrill.jpg') }}" alt="" class="owl-lazy" width="350" height="450">
                        <div class="info">
                            <h3>Grill & Thrill</h3>
                            <small>£10.99</small>
                        </div>
                    </figure>
                </a>
            </div>
        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->

    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title">
                <span><em></em></span>
                <h2>Top Rated Foods</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                <a href="#0">View All &rarr;</a>
            </div>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <div class="list_home">
                        <ul>
                            <li>
                                <a href="detail-restaurant.html">
                                    <figure>
                                        <img src="img/location_list_placeholder.png" data-src="{{ asset('img/grillthrill.jpg') }}" alt="" class="lazy" width="350" height="250">
                                    </figure>
                                    <!-- <div class="score"><strong>9.5</strong></div> -->
                                    <h3>Grill & Thrill</h3>
                                    <small>Perfectly grilled juicy Chicken with Golden Onion-Pepper Fusion and lettuce</small>
                                    <ul>
                                        <li>Golden Sunset Sauce</li>
                                        <li><span class="ribbon off">&#163;10.99</span></li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
            <div class="banner lazy" data-bg="url({{ asset('img/banner_bg_desktop.jpg') }})">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div>
                        <small>{{ config('app.name') }} Delivery</small>
                        <h3>We Deliver to your Office</h3>
                        <p>Enjoy a tasty food in minutes!</p>
                        <a href="#" class="btn_1 gradient">Start Now!</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->
        </div>
    </div>
    <!-- /bg_gray -->

    <div class="shape_element_2">
        <div class="container margin_60_0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box_how">
                                <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_1.svg" alt="" width="150" height="167" class="lazy"></figure>
                                <h3>Easly Order</h3>
                                <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin.</p>
                            </div>
                            <div class="box_how">
                                <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_2.svg" alt="" width="130" height="145" class="lazy"></figure>
                                <h3>Quick Delivery</h3>
                                <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="box_how">
                                <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_3.svg" alt="" width="150" height="132" class="lazy"></figure>
                                <h3>Enjoy Food</h3>
                                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros.</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-3 d-block d-lg-none"><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register Now!</a></p>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="intro_txt">
                        <div class="main_title">
                            <span><em></em></span>
                            <h2>Start Ordering Now</h2>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shape_element_2 -->

</main>
@endsection