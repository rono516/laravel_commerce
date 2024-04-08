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
                        <p>Ksh. {{ $product->price }}</p>
                        <p>{{ $product->description }}</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-earth-americas"></i>Total Quantity: {{ $product->quantity }} </li>


                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-earth-americas" style="color: #000000;"></i>Location:
                                        {{ $product->location }}</li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="d-flex flex-row align-items-center"> --}}
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <form action="">
                                    <div class="d-flex flex-row align-items-center w-100">
                                        <div class="">
                                            <span class="input-group-btn">
                                                <button  type="button" class="quantity-control p-2 mr-2" data-action="decrement">-</button>
                                            </span>
                                        </div>
                                        <div>
                                            <input class="text-center mr-2" value="1" readonly required id="quantity_input"
                                            min="0" max="{{ $product->quantity }}" type="number"
                                            placeholder="Order quantity">
                                        </div>
                                        <div>
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-control p-2" data-action="increment">+</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                Total amount: <span id="total_amount"></span>
                            </div>
                        </div>
                        {{-- </div> --}}


                        <div class="mt-4">
                            <button class="btn ">Order Now</button>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>

            </div>
        </div>
    </section>
    <!--/ End Why choose -->
    <div class="container">
        <h3>Related Products</h3>
    </div>
    <section class="blog section" id="blog">
        <div class="container">

            <div class="row">
                @foreach ($related_products as $related_product)
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{ route('products.show', $related_product) }}">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ Storage::url($related_product->image_url) }}" alt="#">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        {{-- <div class="date"><button class="date">22 Aug, 2020</button></div> --}}
                                        <h2>{{ $related_product->name }}</h2>
                                        <p>{{ $related_product->description }}</p>
                                        <h3 class="text">Ksh. {{ $related_product->price }}</h3>
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
@endsection

@section('javascript')
    <script>
        // quantity_input = document.getElementById('quantity_input').value;
        // product_price = {{ $product->price }}
        // total_amount = quantity_input * product_price

        // total_amount_html = document.getElementById('total_amount').innerHTML = total_amount;
        let quantityInput = document.getElementById('quantity_input');
        let totalAmountSpan = document.getElementById('total_amount');
        let productPrice = {{ $product->price }};
        let maxQuantity = {{ $product->quantity }};

        function updateTotalAmount() {
            let quantity = parseInt(quantityInput.value);
            let totalAmount = quantity * productPrice;
            totalAmountSpan.textContent = totalAmount;
        }

        quantityInput.addEventListener('input', updateTotalAmount);

        // Handle increment and decrement buttons
        document.querySelectorAll('.quantity-control').forEach(button => {
            button.addEventListener('click', function() {
                let action = this.getAttribute('data-action');
                let currentValue = parseInt(quantityInput.value);
                let newValue;

                if (action === 'increment') {
                    newValue = currentValue + 1;
                    newValue = newValue <= maxQuantity ? newValue : maxQuantity; // Ensure the new value does not exceed the maximum
                } else if (action === 'decrement') {
                    newValue = currentValue - 1 >= 0 ? currentValue - 1 : 0;
                }

                quantityInput.value = newValue;
                updateTotalAmount(); // Update total amount
            });
        });
        // Call the function initially to display the default total amount
        updateTotalAmount();
    </script>
@endsection
