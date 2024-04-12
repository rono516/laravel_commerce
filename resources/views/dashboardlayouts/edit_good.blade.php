@extends('dashboardlayouts.main')

@section('goodsContent')
    <section class="">
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-12 new-product-form  col-md-12 col-12">
                    <form class="form" method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
                       @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" value="{{ $product->name }}"  type="text"
                                        placeholder="Product Name">
                                </div>
                            </div>
                            {{-- <input name="product_id" value="{{ $product->id }}"  type="hidden"> --}}
                            {{-- <input type="hidden" name="_method" value="PUT"> --}}

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="location" value="{{ $product->location }}"  type="text"
                                        placeholder="Product Location">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="quantity" value="{{ $product->quantity }}"  type="text"
                                        placeholder="Product Quantity">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="price" value="{{ $product->price }}"  type="number"
                                        placeholder="Price">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <select class="form-control" id="category_id"  name="category_id">
                                        <option value="" selected disabled>{{ $product->category->name }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea  name="description" placeholder="Product description here.....">{{ $product->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4 col-md-6 col-12">
                                <div class="">
                                    <img width="80" height="80" src="{{ Storage::url($product->image_url) }}"
                                        alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4 col-md-6 col-12 ">
                                <div class="">
                                    <input  name="image" id="image" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="">
                                    <div class="button">
                                        <button type="submit" class="btn">Upate Product</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>



            </div>
        </div>
    </section>
    <!-- End Appointment -->
@endsection

@section('javascript')

@endsection
