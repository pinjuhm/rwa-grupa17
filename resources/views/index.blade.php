<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/bootstrap4/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/main_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/responsive.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main>
        <div class="super_container">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                                    <div class="logo"><a href="indssex.blade.php">Travello</a></div>
                                    <nav class="main_nav">
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li class="active"><a href="indssex.blade.php">Početna</a></li>

                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="#">Services</a></li>
                                            @guest
                                                <li><a href="{{ route('login') }}">Prijava</a></li>
                                                <li><a href="{{ route('register') }}">Registracija</a></li>
                                            @else
                                                @admin
                                                <li><a href="/admin">Admin panel</a></li>
                                                @endAdmin
                                                <li class="nav-item dropdown ml-5">
                                                    <a class="text-white">
                                                        {{ Auth::user()->full_name }}
                                                    </a>
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        (Odjava)
                                                    </a>

                                                    {{--												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                                    {{--													<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                                    {{--													   onclick="event.preventDefault();--}}
                                                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                                                    {{--														{{ __('Logout') }}--}}
                                                    {{--													</a>--}}

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @endguest
                                        </ul>
                                    </nav>

                                    <!-- Hamburger -->

                                    <div class="hamburger ml-auto">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="header_social d-flex flex-row align-items-center justify-content-start">--}}
                {{--                    <ul class="d-flex flex-row align-items-start justify-content-start">--}}
                {{--                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </header>
        </div>

        <div class="super_container">
            <!-- Header -->


            <!-- Menu -->

            <div class="menu">
                <div class="menu_header d-flex flex-row align-items-center justify-content-start">
                    <div class="menu_logo"><a href="indssex.blade.php">Travello</a></div>
                    <div class="menu_close_container ml-auto">
                        <div class="menu_close">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="menu_content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.blade.php">Contact</a></li>
                    </ul>
                </div>
                <div class="menu_social">
                    <div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Home -->

            <div class="home">

                <!-- Home Slider -->
                <div class="home_slider_container">
                    <div class="owl-carousel owl-theme home_slider">

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                 style="background-image:url('{{ asset('images/home_slider.jpg') }}');"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title"><h2>Dopustite da vas odvedemo</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                 style="background-image:url('{{ asset('images/home_slider.jpg') }}');"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title"><h2>Let us take you away</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="home_page_nav">
                        <ul class="d-flex flex-column align-items-end justify-content-end">
                            <li><a href="#" data-scroll-to="#destinations">Ponude<span>01</span></a></li>
                            <li><a href="#" data-scroll-to="#testimonials">Iskustva<span>02</span></a></li>
                            <li><a href="#" data-scroll-to="#news">Najnovije<span>03</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search -->

            <div class="home_search">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_search_container">
                                <div class="home_search_title">Pronađite vaš let</div>
                                <div class="home_search_content">
                                    <form class="home_search_form" id="search_flights" @submit.prevent="searchFlights">
                                        <div
                                            class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                            <select class="search_input search_input_1" v-model="city_id_from"
                                                    name="city_id_from"
                                                    required>
                                                <option value="" selected disabled>Polazište</option>
                                                @foreach($cities as $city)
                                                    <option value={{$city->id}}>{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                            <select class="search_input search_input_1" v-model="city_id_to"
                                                    name="city_id_to"
                                                    required>
                                                <option value="" selected disabled>Odredište</option>
                                                @foreach($cities as $city)
                                                    <option value={{$city->id}}>{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="date" v-model="date_from" name="date_from"
                                                   class="search_input search_input_2"
                                                   placeholder="Departure" required="required">
                                            <input type="date" v-model="date_to" name="date_to" class="search_input search_input_3"
                                                   placeholder="Arrival" required="required">
                                            <input type="number" v-model="budget" name="budget" class="search_input search_input_4"
                                                   placeholder="Budžet max. (€)">
                                            <button class="home_search_button">pretraga</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--            <div class="container">--}}
            {{--                <div class="row justify-content-center border-bottom border-dark">--}}
            {{--                    <h4 class="p-3 m-3">Polazište</h4>--}}
            {{--                    <h4 class="p-3 m-3">Odredište</h4>--}}
            {{--                    <h4 class="p-3 m-3">Aviokompanija</h4>--}}
            {{--                    <h4 class="p-3 m-3">Vrijeme</h4>--}}
            {{--                    <h4 class="p-3 m-3">Trajanje leta</h4>--}}
            {{--                    <h4 class="p-3 m-3">Cijena</h4>--}}
            {{--                    <h4 class="p-3 m-3">Kupi</h4>--}}
            {{--                </div>--}}
            {{--                <div class="d-flex flex-column">--}}
            {{--                    <div class="row justify-content-center">--}}
            {{--                        <p class="p-3 m-3 mx-4">Mostar</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">Široki Brijeg</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">Vueling</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">2020-01-01 15:00</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">120min</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">120€</p>--}}
            {{--                        <button type="button" class="btn btn-dark p-3 m-3 mx-4 align-self-end">Kupi</button>--}}
            {{--                    </div>--}}

            {{--                    <div class="row justify-content-center">--}}
            {{--                        <p class="p-3 m-3 mx-4">Bali</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">Fuji</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">Booking</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">2020-01-01 15:00</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">120min</p>--}}
            {{--                        <p class="p-3 m-3 mx-4">1200€</p>--}}
            {{--                        <button type="button" class="btn btn-dark p-3 m-3 mx-4 align-self-end">Kupi</button>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--            </div>--}}

            <div class="container">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Polazište</th>
                        <th scope="col">Odredište</th>
                        <th scope="col">Vrijeme</th>
                        <th scope="col">Trajanje leta</th>
                        <th scope="col">Cijena</th>
                        <th scope="col">Akcija</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(flight,index) in filteredFlights">
                        <td>@{{ index }}</td>
                        <td>@{{flight.city_from_name}}</td>
                        <td>@{{flight.city_to_name}}</td>
                        <td>@{{flight.datetime}}</td>
                        <td>@{{flight.duration}}</td>
                        <td>@{{flight.price}}</td>
                        <td></td>
{{--                        <td>{{flight.city_to_name}}</td>--}}
                        <td>
{{--                            <button class="btn btn-danger" @click="deletePost(post)"><i style="color:white" class="fa fa-trash"></i></button>--}}
                        </td>
                    </tr>
                    {{--                    @foreach($filteredFlights as $filteredFlight)--}}
                    {{--                        <tr>--}}
                    {{--                            <th scope="row">1</th>--}}
                    {{--                            <td>Mark</td>--}}
                    {{--                            <td>Otto</td>--}}
                    {{--                            <td>@mdo</td>--}}
                    {{--                            <td>@mdo</td>--}}
                    {{--                            <td>@mdo</td>--}}
                    {{--                            <td>@mdo</td>--}}
                    {{--                        </tr>--}}
                    {{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>

            <!-- Intro -->

            <div class="intro">
                <div class="intro_background" style="background-image:url(http://grupa17.test/images/intro.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro_container">
                                <div class="row">

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/beach.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Vrhunske destinacije</div>
                                                <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Najbolje cijene</div>
                                                <div class="intro_subtitle"><p>Sollicitudin mauris lobortis in.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Odlična usluga</div>
                                                <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destinations -->

            <div class="destinations" id="destinations">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_subtitle">raj na zemlji</div>
                            <div class="section_title"><h2>Popularne destinacije</h2></div>
                        </div>
                    </div>
                    <div class="row destinations_row">
                        <div class="col">
                            <div class="destinations_container item_grid">
                            @foreach($popularDestinations as $destination)

                                <!-- Destination -->
                                    <div class="destination item">
                                        <div class="destination_image">
                                            <img src="images/destination_1.jpg" alt="">
                                        </div>
                                        <div class="destination_content">
                                            <div class="destination_title"><a
                                                    href="destinations.blade.php">{{$destination->cityTo->name}}</a>
                                            </div>
                                            <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p>
                                            </div>
                                            <div class="destination_price">Od {{$destination->price}}€</div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->

            <div class="testimonials" id="testimonials">
                <div class="parallax_background parallax-window" data-parallax="scroll"
                     data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            {{--                            <div class="section_subtitle">simply amazing places</div>--}}
                            <div class="section_title"><h2>Iskustva zadovoljnih korisnika</h2></div>
                        </div>
                    </div>
                    <div class="row testimonials_row">
                        <div class="col">

                            <!-- Testimonials Slider -->
                            <div class="testimonials_slider_container">
                                <div class="owl-carousel owl-theme testimonials_slider">

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis
                                            vehicula odio.
                                        </div>
                                        <div class="testimonial_author">
                                            <div
                                                class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>Mario Marić</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis
                                            vehicula odio.
                                        </div>
                                        <div class="testimonial_author">
                                            <div
                                                class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>Jozo Jozić</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News -->

            <div class="news" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="news_container">

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div
                                            class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>02</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique
                                                at leo. Vivamus massa.Tempor massa et laoreet.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div
                                            class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>01</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum
                                                ccumsan sit amet mattis eget, tristique at leo.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div
                                            class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>29</div>
                                            <div>may</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl,
                                                accumsan sit amet mattis.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- News Sidebar -->
                        <div class="col-xl-4">
                            <div class="travello">
                                <div class="background_image"
                                     style="background-image:url(http://grupa17.test/images/travello.jpg)"></div>
                                <div class="travello_content">
                                    <div class="travello_content_inner">
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="travello_container">
                                    <a href="#">
                                        <div class="d-flex flex-column align-items-center justify-content-end">
                                            <span class="travello_title">Get a 20% Discount</span>
                                            <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

            <footer class="footer">
                <div class="parallax_background parallax-window" data-parallax="scroll"
                     data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="newsletter">
                                <div class="newsletter_title_container text-center">

                                </div>
                                <div class="newsletter_form_container">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row footer_contact_row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="row">

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div
                                        class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
                                        <div class="footer_contact_title">Kontaktirajte nas</div>
                                        <div class="footer_contact_list">
                                            <ul>
                                                <li>Telefon: +387 36 123 456</li>
                                                <li>Mobitel: +387 63 456 789</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div
                                        class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
                                        <div class="footer_contact_title">Posjetite nas</div>
                                        <div class="footer_contact_list">
                                            <ul style="max-width:190px">
                                                <li>Omladinska 123, Mostar 88000, BiH</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div
                                        class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
                                        <div class="footer_contact_title">Pošaljite nam poruku</div>
                                        <div class="footer_contact_list">
                                            <ul>
                                                <li>email@gmail.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
            </footer>
        </div>
    </main>
</div>


<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('css/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}" defer></script>
<script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}" defer></script>
<script src="{{ asset('plugins/easing/easing.js') }}" defer></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
