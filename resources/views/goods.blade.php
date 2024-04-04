@extends('frontendlayouts.main')
@section('content')
    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('img/products/bags.png') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                {{-- <div class="date"><button class="date">22 Aug, 2020</button></div> --}}
                                <h2><a href="#">Product Name</a></h2>
                                <p>Product short description to user</p>
                                <h3 class="text">Ksh. 300</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('img/products/fruits.png') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                {{-- <div class="date"><button class="date">22 Aug, 2020</button></div> --}}
                                <h2><a href="#">Product Name</a></h2>
                                <p>Product short description to user</p>
                                <h3 class="text">Ksh. 300</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ asset('img/products/vegetables.png') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                {{-- <div class="date"><button class="date">22 Aug, 2020</button></div> --}}
                                <h2><a href="#">Product Name</a></h2>
                                <p>Product short description to user</p>
                                <h3 class="text">Ksh. 300</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
