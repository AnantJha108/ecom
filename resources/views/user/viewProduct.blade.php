@extends('base')

@section('content')
    @include('user.subHeader')
    <div class="container-fluid mt-4 px-5">
        @if (session('msg'))
            <div class="alert bg-warning text-white">
                {{ session('msg') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ $products->image }}" class="rounded-2 w-100 object-fit" style="height: 350px"
                            alt="">
                        {{-- <img src="{{ asset('/images/' . $products->image) }}" class="d-block w-100" alt=""> --}}
                    </div>
                    <div class="col-9">
                        <p class="m-0 text-truncate h6">{{ $products->prod_name }}</p>
                        <p class="m-0"><del class="text-danger fs-6">₹ {{ $products->prod_price }}</del>
                            ₹
                            {{ $products->prod_discount_price }}</p>
                        <p class="mb-2">{{ $products->getCategory->category_name }}</p>
                        <p class="mb-2">{{ $products->prod_description }}</p>
                        <div class="d-flex float-end gap-4">
                            @if ($exists)
                                <form action="{{ route('cart.increase') }}" method="post">
                                    @csrf
                                    <input type="text" class="form-control" name="product_id"
                                        value="{{ $products->id }}">
                                    <button type="submit" class="btn btn-warning">Add to Cart</button>
                                </form>
                            @else
                                <form action="{{ route('cart') }}" method="post">
                                    @csrf
                                    <input type="hidden" class="form-control" name="product_id"
                                        value="{{ $products->id }}">
                                    <button type="submit" class="btn btn-warning">Add to Cart</button>
                                </form>
                            @endif
                            <button type="button" class="btn btn-success">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.footer')
@endsection
