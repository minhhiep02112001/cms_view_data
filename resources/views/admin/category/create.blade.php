@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create category</h4>
                    @include('admin.layout.error_validate')
                    @include('admin.layout.notification')
                    <form class="forms-sample" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category name:</label>
                            <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name"
                                   placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description:</label>
                            <textarea class="form-control" name="description">{{old('description')}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('category.index')}}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('theme_admin/js/file-upload.js')}}"></script>
@endsection
