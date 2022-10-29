@extends('base')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/images/bg.jpg') }}" class="d-block w-100" alt="...">
                {{-- <img src="{{ asset('/images/' . $item->image) }}" class="d-block w-100" alt="..."> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/bg.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/bg.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    <div class="container-fluid mt-4">
        <h2 class="h3 mb-3">Our Products</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-3 mb-3">
            @foreach ($products as $item)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $item->image }}" class="" style="height: 180px" alt="">
                        {{-- <img src="{{ asset('/images/' . $item->image) }}" class="d-block w-100" alt=""> --}}
                        <div class="card-body">
                            <p class="m-0">{{ $item->prod_name }}</p>
                            <p><del class="text-danger fs-6">₹{{ $item->prod_price }}</del>
                                ₹{{ $item->prod_discount_price }}</p>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-sm btn-warning">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-success">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
