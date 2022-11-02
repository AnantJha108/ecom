@extends('admin.adminBase')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.side')
            <div class="col  mt-4 px-5">
                @if (session('msg'))
                    <div class="alert bg-success text-white">
                        {{ session('msg') }}
                    </div>
                @endif
                @if (session('msg1'))
                    <div class="alert bg-secondary text-white">
                        {{ session('msg1') }}
                    </div>
                @endif
                @if (session('msg2'))
                    <div class="alert bg-danger text-white">
                        {{ session('msg2') }}
                    </div>
                @endif
                <div class="d-flex">
                    <div class="col-8">
                        <h4 class="h4">Manage Products</h4>
                    </div>
                    <div class="col-4 float-end">
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-end">Add Products</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Category Id</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->prod_name }}</td>
                            <td>{{ $item->prod_description }}</td>
                            <td>{{ $item->category_id }}</td>
                            <td>{{ $item->prod_price }}</td>
                            <td>{{ $item->prod_discount_price }}</td>
                            <td>
                                <div class="d-flex gap-3">
                                    <a href="{{ route('products.edit', $item) }}" class="btn btn-info btn-sm"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('products.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class='bi bi-trash3'></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
