@extends('frontendlayouts.main')

@section('content')
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="">Order({{ $sum_of_all_products }} items)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-comments">
                                <h2>All Products</h2>
                                <div class="comments-body">

                                    @php
                                        $subtotal = 0;
                                    @endphp

                                    @foreach ($order_products as $op)
                                        @php
                                            $current_product = \App\Models\Product::where(
                                                'id',
                                                '=',
                                                $op->product_id,
                                            )->first();
                                            $subtotal += $current_product->price * $op->quantity;
                                        @endphp


                                        <!-- Single Product -->
                                        <div class="single-comments">
                                            <div class="main">
                                                <div class="head">
                                                    <img src="{{ Storage::url($current_product->image_url) }}"
                                                        alt="#" />
                                                </div>
                                                <div class="body  align-items-center">

                                                    @php
                                                        $current_product = \App\Models\Product::where(
                                                            'id',
                                                            '=',
                                                            $op->product_id,
                                                        )->first();
                                                    @endphp

                                                    <div>
                                                        <div>
                                                            <h4>{{ $current_product->name }}</h4>
                                                            <h5>{{ $current_product->price }}</h5>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex flex-row">

                                                        <div class="d-flex flex-row align-items-center mt-2 ">
                                                            <div class="">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-control p-2 mr-2"
                                                                        data-action="decrement">-</button>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <input class="text-center mr-2" value="{{ $op->quantity }}"
                                                                    readonly required name="quantity_input"
                                                                    id="quantity_input" min="0"
                                                                    max="{{ $current_product->quantity }}" type="number"
                                                                    placeholder="Order quantity">
                                                            </div>
                                                            <div>
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-control p-2"
                                                                        data-action="increment">+</button>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="mt-2">
                                                            <button type="button"
                                                                class="bg-danger text-white p-2">Remove</button>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p>Description: {{ $current_product->description }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Product -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="comments-form">
                                <h2>Leave Review</h2>
                                <!-- Contact Form -->
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="first-name" placeholder="First name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="text" name="last-name" placeholder="Last name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <i class="fa fa-pencil"></i>
                                                <textarea name="message" rows="7" placeholder="Type Your Review Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit
                                                    Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="blog-comments">
                                <h2>My Orders</h2>
                                <div class="comments-body">


                                    @foreach ($my_orders as $mo)
                                        <div class="single-comments">
                                            <div class="main">
                                                <div class="body d-flex flex-row">

                                                    <div class="mr-4">
                                                        <h4>Order No. {{ $mo->id }}</h4>
                                                    </div>
                                                    <div class="mr-4">
                                                        <h4>{{ $mo->placed ? 'Awaiting Delivery' : 'Not Confirmed' }}</h4>
                                                    </div>


                                                    <div class="mr-4">
                                                        @if ($mo->placed)
                                                            <h4>Confirmed: {{ $mo->updated_at }}</h4>
                                                        @else
                                                            <h4>Created: {{ $mo->created_at }}</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="comments-form">
                                <h2>Leave Review</h2>
                                <!-- Contact Form -->
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="first-name" placeholder="First name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="text" name="last-name" placeholder="Last name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <i class="fa fa-pencil"></i>
                                                <textarea name="message" rows="7" placeholder="Type Your Review Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit
                                                    Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex justify-content-center">
                    <div class="main-sidebar ">
                        <div class="single-widget category">
                            <h3 class="">Order Summary</h3>
                            <ul class="categor-list">
                                <li><a href="#">Subtotal Ksh. {{ $subtotal }} </a></li>
                            </ul>

                            @if (empty($order->id))
                                <a href="{{ url('/goods') }}" class="btn btn-primary mt-2 text-white">Browse Goods</a>
                            @else
                                {{-- <a href="{{ route('confirm.order', $order) }}" class="btn btn-primary mt-2 text-white">Confirm
                                    Order</a> --}}
                                        <form class="form" method="POST" action="{{ route('confirm.order',$order) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row  mt-2">
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <input name="delivery_location" id="delivery_location" required type="text" placeholder="Delivery Location...">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"  class="btn btn-primary ">Confirm Order</button>
                                        </form>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('javascript')

@endsection
