@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center align-content-center justify-content-between mb-3">
                       <h4 class="card-title mb-0">List Authors</h4>
                       <a href="{{route('author.create')}}" class=" btn btn-sm btn-success">Create author</a>
                   </div>
                   
                    @include('admin.layout.notification')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Year Of Birth</th>
                                <th>Information</th>
                                <th class="text-center" width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $item)
                                <tr>
                                    <td>{{$item->authors_name}}</td>
                                    <td>{{$item->year_of_birth}}</td>
                                    <td>{{$item->information}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('author.edit', ['author'=> $item])}}" class="btn btn-sm mr-1 btn-warning">Edit</a>
{{--                                            <form class="form-delete" action="{{route('author.destroy' , ['author' => $item])}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button type="submit" class="btn btn-sm btn-danger btn-delete-author">Delete</button>--}}
{{--                                            </form>--}}
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        document.querySelectorAll('form.form-delete').forEach((item)=>{
            item.addEventListener('submit', (event)=>{
                event.preventDefault();
                if(confirm('Bạn có chắc muốn xóa không')){
                    event.target.submit();
                }
            })
        })
    </script>
@endsection
