@extends('frontendlayouts.main')

@section('content')
    <section class="">
        <div class="container pt-4">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-12">
                    <section class="text-gray-600 body-font">
                        <div class="mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">My
                                    Orders</h1>
                            </div>

                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                Order ID</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Product Name</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Product Quantity</th>

                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Action</th>
                                            {{-- <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($order_products as $op)
                                            <tr>
                                                <td class="px-4 py-3">{{ $op->order_id }}</td>
                                                <td class="px-4 py-3">
                                                    @php
                                                        $current_product = \App\Models\Product::where('id', '=', $op->product_id)->first();

                                                    @endphp
                                                    {{   $current_product->name }}
                                                </td>
                                                <td class="px-4 py-3 text-lg text-gray-900">{{ $op->quantity }}</td>
                                                <td class="w-10 text-center">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-4">

                                                            <button  type="submit"><i
                                                                    class="icofont-trash"></i></button>
                                                        </div>
                                                        <div>
                                                            <a href="#"><i class="icofont-edit"></i></a>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>
    <!-- End Appointment -->
@endsection
