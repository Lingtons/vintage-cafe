@extends('layouts.event')

@section('content')
    <section class="hero-wrap" style="background-image:url({{asset('event_assets/images/xbg_2.jpg.pagespeed.ic.gc_matbqGD.jpg')}})">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate text-center pt-5">
                    <span class="subheading">Hurry Up! Don't Waste Time</span>
                    <h1 class="mb-4">2021
                        <span>NIGERIAN</span>
                        <span>BARISTA </span> COMPETITION</h1>
                    <p class="loc-date">
						<span>
							<i class="fa fa-map-marker"></i> Abuja, Federal Capital Territory, NIGERIA</span>
                        <span>
							<i class="fa fa-calendar"></i> June 19, 2021</span>
                    </p>
                    <div id="timer" class="d-flex mb-3">
                        <div class="time" id="days"></div>
                        <div class="time" id="hours"></div>
                        <div class="time" id="minutes"></div>
                        <div class="time" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb img">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-12 about-intro">
                        <div class="row d-flex">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="img d-flex align-items-center align-self-stretch justify-content-center" style="background-image:url({{asset('event_assets/images/xabout-1.jpg.pagespeed.ic.JmEvbac9TM.png')}})">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-5 py-5">
                                <div class="row justify-content-start pb-3 pt-md-5">
                                    <div class="col-md-12 heading-section ftco-animate">
                                        <span class="subheading">Welcome to 2021 Nigerian BARISTA COMPETITION</span>
                                        <h2 class="mb-4"> first ever barista competition</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river
                                            named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                        <div class="year-stablish d-flex">
                                            <div class="icon2 d-flex align-items-center justify-content-center">
                                                <span class="flaticon-calendar"></span>
                                            </div>
                                            <div class="text pl-4">
                                                <!-- <strong class="number" data-number="20"></strong> -->
                                                <strong>
													<span>first ever barista
														<br> competition</span>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url({{asset('event_assets/images/xbg_3.jpg.pagespeed.ic.O-naq7q7Jt.jpg')}})">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-map"></span>
                            </div>
                            <div class="text pl-3">
                                <!-- <strong class="number" data-number="301">0</strong> -->
                                <strong>Unlimited</strong>
                                <span>Paticipants</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-event"></span>
                            </div>
                            <div class="text pl-3">
                                <strong>Unlimited</strong>
                                <span>Paticipants</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="favicon_study"></span>
                            </div>
                            <div class="text pl-3">
                                <strong>Unlimited</strong>
                                <span>Paticipants</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-conference"></span>
                            </div>
                            <div class="text pl-3">
                                <strong>4 Heavy weight</strong>
                                <span>Judge</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Schedule</span>
                        <h2 class="mb-4">Event Schedule</h2>
                    </div>
                </div>
                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                   aria-selected="true">2021 NIGERIAN BARISTA COMPETITION
                                    <span>19 jun. 2021</span>
                                </a>
                                <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2"
                                   aria-selected="false">NIGERIAN BARISTA COMPETITION
                                    <span>December. 2021</span>
                                </a>
                                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3"
                                   aria-selected="false">2022 NIGERIAN BARISTA COMPETITION
                                    <span>2022</span>
                                </a>
                                <!-- <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4"
                                 aria-selected="false">Day 04
                                    <span>27 Apr. 2021</span>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">How to Improve the WordPress Coding</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">What Are the Needs for Great StartUp</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/person_3.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">Web Performance For Third Party Scripts</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">How to Improve the WordPress Coding</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">What Are the Needs for Great StartUp</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/person_3.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">Web Performance For Third Party Scripts</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">How to Improve the WordPress Coding</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">What Are the Needs for Great StartUp</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/person_3.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">Web Performance For Third Party Scripts</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">How to Improve the WordPress Coding</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">What Are the Needs for Great StartUp</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="speaker-wrap ftco-animate d-md-flex">
                                        <div class="img speaker-img" style="background-image:url({{asset('event_assets/images/person_3.jpg')}})"></div>
                                        <div class="text pl-md-5">
                                            <span class="time">08: - 10:00</span>
                                            <h2>
                                                <a href="#">Web Performance For Third Party Scripts</a>
                                            </h2>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <h3 class="speaker-name">
                                                <a href="#">Henry Tyler</a>
                                                <span class="position">Founder of Wordpress</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section ftco-team">
            <div class="overlay"></div>
            <div class="container">
                <div class="row pb-5 justify-content-center">
                    <div class="col-md-7 col-lg-6 heading-section heading-section-white text-center ftco-animate">
                        <span class="subheading">Meet Our Heavy Weight Competition</span>
                        <h2 class="mb-4">Judge by our panel of Celebrities</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg ftco-animate d-flex">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <!-- <div class="img d-flex align-items-center" style="background-image:url(images/xstaff-1.jpg.pagespeed.ic.eGaw1QpE70.jpg)"> -->
                                <div class="img d-flex align-items-center" style="background-image:url({{asset('event_assets/images/team/isi.png')}})">

                                    <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                        <h3>Lloyd Wilson</h3>
                                        <span class="position">Web Developer</span>
                                        <div class="faded">
                                            <ul class="ftco-social text-center">
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-google"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg ftco-animate d-flex">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img d-flex align-items-center" style="background-image:url({{asset('event_assets/images/team/tall.png')}})">
                                    <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                        <h3>Lloyd Wilson</h3>
                                        <span class="position">Web Designer</span>
                                        <div class="faded">
                                            <ul class="ftco-social text-center">
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-google"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg ftco-animate d-flex">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img d-flex align-items-center" style="background-image:url({{asset('event_assets/images/team/boyo.png')}})">
                                    <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                        <h3>Liam Neil</h3>
                                        <span class="position">Graphic Designer</span>
                                        <div class="faded">
                                            <ul class="ftco-social text-center">
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-google"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg ftco-animate d-flex">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img d-flex align-items-center" style="background-image:url({{asset('event_assets/images/team/blo.png')}})">
                                    <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                        <h3>Alen Broke</h3>
                                        <span class="position">System Analytic</span>
                                        <div class="faded">
                                            <ul class="ftco-social text-center">
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-google"></span>
                                                    </a>
                                                </li>
                                                <li class="ftco-animate">
                                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row pb-4 justify-content-center">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Gallery</span>
                        <h2 class="mb-4">Photos of Our Events</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-1.jpg.pagespeed.ic.CTQnjRKBWM.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-2.jpg.pagespeed.ic.JcQcZ2pUne.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-3.jpg.pagespeed.ic.JPPWKtq9eU.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-4.jpg.pagespeed.ic.yccX7yuujl.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-5.jpg.pagespeed.ic.3k4TMBzyh4.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-6.jpg.pagespeed.ic.G5IRVoNuW_.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-7.jpg.pagespeed.ic.IBk9Ev05Cz.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="images/gallery-1.jpg" class="project-wrap image-popup img d-flex align-items-center justify-content-center" style="background-image:url({{asset('event_assets/images/xgallery-8.jpg.pagespeed.ic.JsS-bsAaCw.jpg')}})">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
