<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vintage Cafe') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('event_assets/css/animate.css%2bowl.carousel.min.css%2bowl.theme.default.min.css%2bmagnific-popup.css%2bflaticon.css%2bstyle.css.pagespeed.cc.bxoDsg8y1N.css')}}"/>
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}

<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone">
                    <span class="mailus">Phone no:</span>
                    <a href="#">+2348097246000</a> or
                    <span class="mailus">email us:</span>
                    <a href="#">
                        <span class="__cf_email__" data-cfemail="e58088848c89968488958980a58088848c89cb868a88">nigerianbaristacompetition@gmail.com</span>
                    </a>
                </p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-facebook">
									<i class="sr-only">Facebook</i>
								</span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-twitter">
									<i class="sr-only">Twitter</i>
								</span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-instagram">
									<i class="sr-only">Instagram</i>
								</span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-dribbble">
									<i class="sr-only">Dribbble</i>
								</span>
                        </a>
                    </p>
                </div>
                <p class="mb-0">
                    <a href="#" class="btn btn-primary">Buy Ticket</a>
                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('event_assets/images/Capture.PNG')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pricing')}}" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('schedule')}}" class="nav-link">Schedule</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('speakers')}}" class="nav-link">Speakers</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blog')}}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<section class="ftco-intro img" style="background-image:url({{asset('event_assets/images/xbg_3.jpg.pagespeed.ic.O-naq7q7Jt.jpg')}})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                <h2 class="mb-4">Book Your Tickets Now</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="#" class="registry-form ftco-animate">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon">
                                            <span class="fa fa-chevron-down"></span>
                                        </div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Price</option>
                                            <option value="">$10</option>
                                            <option value="">$20</option>
                                            <option value="">$25</option>
                                            <option value="">$30</option>
                                            <option value="">$50</option>
                                            <option value="">$75</option>
                                            <option value="">$100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="submit" value="Register Now" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo">
                        <a href="#">Convention</a>
                    </h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#">
                                <span class="fa fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('about')}}">
                                <span class="fa fa-chevron-right mr-2"></span>About</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">
                                <span class="fa fa-chevron-right mr-2"></span>Contact</a>
                        </li>
                        <li>
                            <a href="{{route('speakers')}}">
                                <span class="fa fa-chevron-right mr-2"></span>Speakers</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">
                                <span class="fa fa-chevron-right mr-2"></span>Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Info</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span class="fa fa-chevron-right mr-2"></span>Join us</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-chevron-right mr-2"></span>Buy Ticket</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Get Your Seat</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <a href="#" class="btn btn-primary px-3 py-2">Buy Ticket</a>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon fa fa-map marker"></span>
                                <span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-phone"></span>
                                    <span class="text">+2 392 3929 210</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-paper-plane pr-4"></span>
                                    <span class="text">
												<span class="__cf_email__" data-cfemail="ff96919990bf86908a8d9b90929e9691d19c9092">[email&#160;protected]</span>
											</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0" style="color: rgba(255,255,255,.5);">Copyright &copy;
{{--                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
                        <i class="fa fa-heart color-danger" aria-hidden="true"></i> by
                        <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>
<script src="{{asset('event_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('event_assets/js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js.pagespeed.jc.ClSsohhomS.js')}}"></script>
<script>eval(mod_pagespeed_Jk0eYH_1hK);</script>
<script>eval(mod_pagespeed_5vXMK0YFXy);</script>
<script>eval(mod_pagespeed_173hHsqYbG);</script>
<script src="{{asset('event_assets/js/jquery.easing.1.3.js%2bjquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js.pagespeed.jc.umQvigowvp.js')}}"></script>
<script>eval(mod_pagespeed_8MxE3VmDuJ);</script>
<script>eval(mod_pagespeed_kzHRM00OWJ);</script>
<script>eval(mod_pagespeed_Dhkgb82Vsp);</script>
<script>eval(mod_pagespeed_zf48_NWl0K);</script>
<script src="{{asset('event_assets/js/jquery.magnific-popup.min.js%2bjquery.animateNumber.min.js%2bscrollax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.TX23hQRr64.js')}}"></script>
<script>eval(mod_pagespeed_jul9BqcQwB);</script>
<script>eval(mod_pagespeed_tdDUrIel9p);</script>
<script>eval(mod_pagespeed_9UpqTOJlpB);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
{{--<script>eval(mod_pagespeed_x08rxoseRN);</script>--}}
<script>eval(mod_pagespeed_NhdM2oKiAm);</script>

</body>
</html>
