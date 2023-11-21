@extends('back-end.master')

@section('title')
    category
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <form action="{{route('categories.store')}}" method="post" class="row g-3">
                            @csrf

                                <div class="col-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="category_name" class="form-control">
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
