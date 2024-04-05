@extends('frontendlayouts.main')
@section('content')
    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{ route('products.show', $product) }}">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ Storage::url($product->image_url) }}" alt="#">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        {{-- <div class="date"><button class="date">22 Aug, 2020</button></div> --}}
                                        <h2>{{ $product->name }}</h2>
                                        <p>{{ $product->description }}</p>
                                        <h3 class="text">Ksh. {{ $product->price }}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Single Blog -->
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
