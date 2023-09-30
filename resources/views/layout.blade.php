<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ANMC | @yield('title')</title>
        <meta content="anmc website" name="description">
        <meta content="anmc" name="keywords">

        <link href="{{ url('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ url('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    </head>
    <body>

        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="index.html">{{__('public.title')}}</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{__('public.home')}}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{__('public.about')}}</a></li>
                    <li><a class="nav-link scrollto" href="#services">{{__('public.services')}}</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">{{__('public.gallery')}}</a></li>
                    <li><a class="nav-link scrollto" href="#team">{{__('public.news')}}</a></li>
                    <li><a class="nav-link scrollto" href="#team">{{__('public.contact')}}</a></li>
                    <li class="dropdown"><a href="#"><span>{{__('public.language')}}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="/en">{{__('public.english')}}</a></li>
                        <li><a href="/fa">{{__('public.persian')}}</a></li>
                        <li><a href="/ps">{{__('public.pashto')}}</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
        </header>
        <div>
            @yield('content')
            {{ Session('lang') }}
        </div>
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>ANMC</h3>
                        <p>
                        Next to Parwan 3 Clinic <br> Nowabad, Badambagh Stree <br>
                        Kabul, Afghanistan<br>
                        <strong>Phone:</strong> +93 (0) 790-60-90-70<br>
                        <strong>Email:</strong> info@anmc.gov.af<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Registeration</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Accreditation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Capacity Building</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h4>Socail Media</h4>
                        <div>
                            <a href="" class="sociallink"><i class="bi bi-twitter"></i></a>
                            <a href="" class="sociallink"><i class="bi bi-facebook"></i></a>
                            <a href="" class="sociallink"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ url('vendor/aos/aos.js')}}"></script>
        <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url('vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ url('vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ url('vendor/purecounter/purecounter.js')}}"></script>
        <script src="{{ url('vendor/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ url('js/main.js')}}"></script>

    </body>
</html>