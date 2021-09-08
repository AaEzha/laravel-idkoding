<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-site-verification" content="oxETb_Mhoh4csHiNuRnSyn0Gccgg7zFQBlXzt6RHZuA" />

    <title>IDKoding.com — Belajar Programming bahasa Indonesia terstruktur dan mudah</title>

    <meta name="description"
        content="IDKoding.com Merupakan Situs Belajar Programming bahasa Indonesia terstruktur dan mudah.">
    <meta name="keywords"
        content="Laravel, CodeIgniter,tutorial laravel indonesia, laravel indonesia, belajar laravel, tutorial laravel,tutorial php indonesia, belajar php, tutorial php bahasa indonesia, javascript indonesia, jquery indonesia, vuejs indonesia, Yii2, Golang, Web Design, Web Development, UI UX Design, Android Development, Full-Stack Developer, Back-End Developer, Front-End Developer, ID Koding, IDKoding, IDKoding.com">
    <meta name="author" content="IDKoding" />
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="all,index,follow" />
    <meta name="MSSmartTagsPreventParsing" content="TRUE">
    <meta http-equiv="Content-Language" content="id">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="Distribution" CONTENT="Global">
    <meta name="Rating" CONTENT="General">
    <link rel="shortcut icon" href="{{ asset('images/idkodingloginimg2.png') }}">
    <meta property="og:site_name" content="IDKoding.com — Belajar Programming bahasa Indonesia terstruktur dan mudah" />
    <link rel="canonical" href="https://idkoding.com" />
    <meta property="og:locale" content="id" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('images/idkodingloginimg2.png') }}">
    <meta property="og:title" content="IDKoding.com — Belajar Programming bahasa Indonesia terstruktur dan mudah" />
    <meta property="og:site_name" content="IDKoding">
    <meta property="og:description"
        content="IDKoding.com Merupakan Situs Belajar Programming bahasa Indonesia yang terstruktur dan mudah dipelajari Seperti Laravel, Yii2, Codeigniter, GOlang, Javascript, dan lain-lain." />
    <meta property="og:url" content="https://idkoding.com" />

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/feather/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/prism.css') }}">

    @if (\Request::is('ebook/lumen'))
        <style>
            .site-nav {
                background: white;
            }
        </style>
    @endif

    <script src="{{ asset('asset/js/prism.js') }}"></script>

</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="fixed-top bg-white d-block">
        <div class="container-fluid d-block position-relative">
            <nav class="site-nav">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/IDKODING.png') }}" width="50px">
                    </a>
                </div>

                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
                            <!-- <li><a href="{{ url('/') }}">
                  <font color="black">Home</font>
                </a></li> -->
                            <li class="has-children" id="kategori">
                                <a href="">
                                    <font color="black">Kategori</font>
                                </a>
                                <ul class="dropdown open" id="dropdown-kategori">
                                    <?php foreach ($datacategory['data']['data'] as $row) { ?>
                                    <li><a href="/kategori/<?= $row['slug'] ?>"><?= $row['name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="{{ url('/') }}#tutorial">
                                    <font color="black">Tutorial</font>
                                </a></li>
                            <!-- <li><a href="#ebook">Ebook</a></li> -->
                            <li><a href="{{ url('/') }}#partnerkami">
                                    <font color="black">Partner Kami</font>
                                </a></li>
                        </ul>

                        <ul
                            class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute mr-1">
                            @if (Auth::check())
                                <li class="cta-button"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="cta-button"><a href="{{ route('register') }}">Register</a></li>
                                <li class="cta-button"><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>

                        <a href="#" class="burger dark ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </nav> <!-- END nav -->
        </div> <!-- END container -->
    </div>
