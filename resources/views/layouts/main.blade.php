<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>{{ $judul_halaman }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}"> --}}
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootsnav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme-vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    </head>
    <body> 
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav background-white header-light navbar-top navbar-expand-lg nav-box-width on no-full">
                <div class="container-lg nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto ps-0">
                        <a href="/" title="Pofo" class="logo"><img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo@2x.png') }}" class="logo-dark default" alt="Pofo"><img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pe-0 pe-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav navbar-left no-margin alt-font text-normal"">
                                <!-- start menu item -->
                                <li class="">
                                    <a href="/" class="nav-link">Beranda</a>
                                </li>
                                <li class="">
                                    <a href="/about" class="nav-link">Tentang</a>
                                </li>
                                <li class="">
                                    <a href="/blog" class="nav-link">Artikel</a>
                                </li>
                                <li class="">
                                    <a href="/gallery" class="nav-link">Galeri</a>
                                </li>
                                <li class="">
                                    <a href="/contact" class="nav-link">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->

        {{-- page content --}}
        @yield('page-content')

        <!-- start footer --> 
        <footer class="footer-center-logo bg-dark padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start copyright -->
                    <div class="col-md-6 text-small text-start alt-font sm-margin-15px-bottom">
                        &COPY; 2022 Golo Loni - Powered by <a href="https://jongkreatif.id" target="_blank" title="JongKreatif">JongKreatif</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start social media -->
                    <div class="col-md-6 text-end">
                        <span class="alt-font text-small margin-20px-right md-margin-15px-right">Jejaring Sosial</span>
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon  mb-0">
                                <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram me-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootsnav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/theme-vendors.min.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
