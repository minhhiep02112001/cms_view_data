@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create author</h4>
                    @include('admin.layout.error_validate')
                    @include('admin.layout.notification')
                    <form class="forms-sample" action="{{route('author.update' , ['author' => $author])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="authors_name" value="{{old('authors_name') ?? $author->authors_name}}" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="url">Url:</label>
                            <input type="text" class="form-control" id="url" name="url" value="{{old('url') ?? $author->url}}" placeholder="Url">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" value="{{$author->image}}" class="form-control file-upload-info" disabled=""
                                       placeholder="Upload Image">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="year">Year of birth:</label>
                            <input type="text" class="form-control" id="year" name="year_of_birth" value="{{old('year_of_birth') ?? $author->year_of_birth}}" placeholder="Year of birth">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Information:</label>
                            <textarea class="form-control" name="information">{{old('information') ?? $author->information}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('author.index')}}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
