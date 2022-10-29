@extends('admin.adminBase')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.side')
            <div class="col mt-4">
                <div class="row mb-5">
                    <div class="col-4">
                        <div class="card bg-success text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">34+</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-danger text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">50+</h1>
                                <h2 class="h4">Total Regular User</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-primary text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">22+</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <div class="card bg-warning text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">34+</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-secondary text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">50+</h1>
                                <h2 class="h4">Total Regular User</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-info text-white py-3">
                            <div class="card-body py-6">
                                <h1 class="h2">22+</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
