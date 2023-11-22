@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               @include('components.alert')


                <!-- Row start -->
                <div class="row">
                    <div class="col-sm-12 col-12">

                        <!-- Card start -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Product</div>
                            </div>
                            <div class="card-body">

                                <!-- Row start -->
                                <form action="{{ route('product.update', $product) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-sm-12 col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $product->name }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Price</label>
                                                <input type="number" class="form-control" name="price"
                                                    value="{{ $product->price }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">Stock</label>
                                                <input type="number" class="form-control" name="stock"
                                                    value="{{ $product->stock }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Photo</label>
                                                <input type="text" class="form-control" name="photo"
                                                    value="{{ $product->photo }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-7">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" placeholder="Enter Desc" name="desc" rows="3">{{ $product->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-actions-footer">
                                                <button class="btn btn-light">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Row end -->
                            </div>
                        </div>
                        <!-- Card end -->
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
@endsection
