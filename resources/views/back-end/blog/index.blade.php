@extends('back-end.master')

@section('title')
    category
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{$blog->title}}</th>
                                    <th>{{$blog->category->category_name}}</th>
                                    <th>{{$blog->author_name}}</th>
                                    <th>{{substr($blog->description,0,50)}}</th>
                                    <th><img src="{{asset($blog->image)}}" alt="" style="height: 50px; width: 50px;"> </th>
                                    <th>{{date('F j Y',strtotime($blog->created_at))}}</th>
                                    <th>{{$blog->status == 1 ? 'Active' : 'Inactive'}}</th>
                                    <th>
                                        <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        @if($blog->status == 1)
                                            <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-warning btn-sm">Inactive</a>
                                        @else
                                            <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-info btn-sm">Active</a>
                                        @endif

                                        <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-danger btn-sm float-start m-1" onclick="return confirm('Are you sure Delete this?')">Delete</button>
                                            </div>
                                        </form>
                                        {{--                                          <a href="{{route('categories.destroy',$category->id)}}" class="btn btn-danger btn-sm">Delete</a>--}}
                                    </th>
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
