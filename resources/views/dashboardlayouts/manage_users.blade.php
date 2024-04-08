@extends('dashboardlayouts.main')

@section('goodsContent')
    <!-- Start Add Product -->
    <section class="">
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-12 new-product-form d-none col-md-12 col-12">
                    <form class="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" required type="text" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" required type="text" placeholder="User Email">
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="quantity" required type="text" placeholder="Product Quantity">
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="price" required type="number" placeholder="Price">
                                </div>
                            </div> --}}
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <select class="form-control" id="category_id" required name="category_id">
                                         <option value="" selected disabled>Select Role</option>
                                        {{-- @foreach ($categories as $category) --}}
                                            {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
                                            <option value="Admin">Admin</option>
                                            <option value="Manager">Manager</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea required name="description" placeholder="Product description here....."></textarea>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-12 mb-4 col-md-12 col-12">
                                <div class="">
                                    <input required name="image" id="image" type="file">
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="">
                                    <div class="button">
                                        <button type="submit" class="btn">Add User</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-md-12 col-12">
                    <section class="text-gray-600 body-font">
                        <div class="mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Available
                                    Users</h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-4 col-12">
                                    <div class="">
                                        <div class="">
                                            <button onclick="toggleProductForm()" type="button" class="bg-red-400 p-2">New
                                                User</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                Name</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Email</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Role</th>
                                            {{-- <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Quantity</th> --}}
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Action</th>
                                            {{-- <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-4 py-3">{{ $user->name }}</td>
                                                <td class="px-4 py-3">{{ $user->email }}</td>
                                                <td class="px-4 py-3">Admin</td>
                                                {{-- <td class="px-4 py-3 text-lg text-gray-900">{{ $product->quantity }}</td> --}}
                                                <td class="w-10 text-center">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-4">
                                                            <form id=deleteForm method="POST"
                                                                action="">
                                                                @csrf
                                                                <button onclick="confirmDelete()" type="submit"><i
                                                                        class="icofont-trash"></i></button>
                                                            </form>
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

@section('javascript')
    <script>
        function toggleProductForm() {
            var productForm = document.querySelector('.new-product-form');
            productForm.classList.toggle('d-none');
        }

        function confirmDelete() {
            if (confirm("Are you sure you want to delete this Product?")) {
                document.getElementById('deleteForm').submit();
            }
        }
        document.getElementById('deleteForm').addEventListener('submit', function(event) {
            event.preventDefault();
        });
    </script>
@endsection
