@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create author</h4>
                    @include('admin.layout.error_validate')
                    @include('admin.layout.notification')
                    <form class="forms-sample" action="{{route('author.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" value="{{old('authors_name')}}" name="authors_name"
                                   placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="url">Url:</label>
                            <input type="text" class="form-control" id="url" value="{{old('url')}}" name="url" placeholder="Url">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                       placeholder="Upload Image">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="year">Year of birth:</label>
                            <input type="text" class="form-control" id="year" value="{{old('year_of_birth')}}" name="year_of_birth"
                                   placeholder="Year of birth">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Information:</label>
                            <textarea class="form-control" name="information">{{old('information')}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('author.index')}}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('theme_admin/js/file-upload.js')}}"></script>
@endsection
