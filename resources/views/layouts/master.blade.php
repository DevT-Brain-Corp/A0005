<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('blog/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('blog/js/modernizr.js')}}"></script>
    <script src="{{asset('blog/js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <p><b>JOKI</b></p>
                    {{-- <a class="logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a> --}}
                </div> <!-- end header__logo -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="/home" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">{{ Auth::user()->name }}</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/tambah-artikel')}}">Tambah Artikel</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

        @yield('banner')
    </section> <!-- end s-pageheader -->

    @yield('content')

    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright DevT Brain Corp 2019</span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
        ================================================== -->
    <script src="{{asset('blog/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('blog/js/plugins.js')}}"></script>
    <script src="{{asset('blog/js/main.js')}}"></script>

</body>

</html>