@extends('frontendlayouts.main')

@section('content')
    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">

                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <ul class="categor-list">


                                @can('add products')
                                    <li><a href="{{ url('/manage_goods') }}">Manage Products</a></li>
                                @endcan
                                @can('manage users')
                                    <li><a href="{{ url('/manage_users') }}">Manage Users</a></li>
                                @endcan
                                @can('manage trucks')
                                    <li><a href="{{ url('manage_trucks') }}">Manage Trucks</a></li>
                                @endcan
                                @can('manage orders')
                                    <li><a href="{{ url('/manage_orders') }}">Manage Orders</a></li>
                                @endcan





                            </ul>
                        </div>
                        <!--/ End Single Widget -->

                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    @yield('goodsContent')
                    {{-- <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="img/blog1.jpg" alt="#">
                            </div>
                            <!-- News Title -->
                            <h1 class="news-title"><a href="news-single.html">More than 80 clinical trials launch to test of the coronavirus .</a></h1>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img src="img/author1.jpg" alt="#">Naimur Rahman</a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i>03 Feb 2019</span>
                                </div>
                                <div class="meta-right">
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
                                    <span class="views"><i class="fa fa-eye"></i>33K Views</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commod</p>
                                <div class="image-gallery">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="img/blog2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="img/blog3.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p>
                                <blockquote class="overlay">
                                    <p>Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales</p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse</p>
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <!-- Next Prev -->
                                <ul class="prev-next">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                                <!--/ End Next Prev -->
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>

            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
