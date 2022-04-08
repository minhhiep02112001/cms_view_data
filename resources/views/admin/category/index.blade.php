@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center align-content-center justify-content-between mb-3">
                        <h4 class="card-title">List Categories</h4>
                        <a href="{{route('category.create')}}" class=" btn btn-sm btn-success">Create category</a>
                    </div>
                    @include('admin.layout.notification')

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
{{--                                <th>Active</th>--}}
                                <th width="15%" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('category.edit', ['category'=> $item])}}" class="btn btn-sm mr-1 btn-warning">Edit</a>
{{--                                            <form action="{{route('category.destroy' , ['category' => $item])}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>--}}
{{--                                            </form>--}}
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4">
                                    {{$categories->links()}}
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
