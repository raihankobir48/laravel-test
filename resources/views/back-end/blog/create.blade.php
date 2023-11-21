@extends('back-end.master')

@section('title')
    Blog
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Form</h6>
                        <hr/>
                        <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">select Option</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
