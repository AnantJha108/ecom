@extends('admin.adminBase')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.side')
            <div class="col mt-4">
                <div class="row">
                    <div class="col-9 px-5">
                        <h4 class="h4">Manage Category</h4>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->category_description }}</td>
                                    <td class="d-flex gap-3">
                                        <a href="" class="btn btn-info btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"  class="btn btn-danger btn-sm"><i class='bi bi-trash3'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('categories.update',$category) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="" class="mb-1">Category name</label>
                                        <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="mb-1">Category Description</label>
                                        <textarea name="category_description" class="form-control" rows="3">{{$category->category_description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" value="Update" class="btn btn-secondary w-100">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
