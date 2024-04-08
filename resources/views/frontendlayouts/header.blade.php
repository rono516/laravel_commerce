<header class="header">
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/PacklineLogo.png') }}"
                                    alt="Packline Systems Logo"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    {{-- <li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ url('/about_us') }}">About Us </a></li>
                                    {{-- <li><a href="#">Services </a></li> --}}
                                    <li><a href="#">Services <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/goods') }}">Order Goods</a></li>
                                            <li><a href="#">Manage Orders</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Help Center <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Login </a></li>
                                        <li><a href="{{ route('register') }}">Register </a></li>
                                    @endguest
                                    @auth
                                        <li><a href="{{ route('home') }}">Profile </a></li>
                                        <li><a href="{{ route('logout') }}">Logout </a></li>
                                        @can('add products')
                                            <li><a href="{{ url('/dashboard') }}">Dashboard </a></li>
                                        @endcan

                                    @endauth
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="{{ url('/goods') }}" class="btn">Browse Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
