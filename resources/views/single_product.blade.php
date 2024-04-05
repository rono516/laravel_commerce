@extends('frontendlayouts.main')

@section('content')
    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <img src="{{ Storage::url($product->image_url) }}" alt="#">
                            <!-- Video Animation -->
                            {{-- <div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a> --}}
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-minus"></i>Quantity: {{ $product->quantity }} </li>


                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-earth-americas"></i>Location: {{ $product->location }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button class="btn ">Order Now</button>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>

            </div>
        </div>
    </section>
    <!--/ End Why choose -->
@endsection
