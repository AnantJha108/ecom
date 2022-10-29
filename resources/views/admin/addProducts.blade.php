@extends('admin.adminBase')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.side')
            <div class="col mt-4 px-5">
                <h4 class="h4">Add Products</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="" class="h6">Product Name</label>
                                            <input type="text" name="prod_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="" class="h6">Product Category</label>
                                            <select name="category_id" class="form-control">
                                                <option value="">select category</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="" class="h6">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="" class="h6">Price</label>
                                            <input type="text" name="prod_price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="" class="h6">Discount Price</label>
                                            <input type="text" name="prod_discount_price" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="" class="h6">Product Description</label>
                                        <textarea rows="5" name="prod_description" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 mt-2 float-end">
                                <input type="submit" value="Add Products" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
