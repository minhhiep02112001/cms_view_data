@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit category</h4>
                    @include('admin.layout.error_validate')
                    @include('admin.layout.notification')
                    <form class="forms-sample" action="{{route('category.update' , ['category' => $category])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="username">Category name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $category->name}}" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description:</label>
                            <textarea class="form-control" name="description">{{old('description') ?? $category->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('category.index')}}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
