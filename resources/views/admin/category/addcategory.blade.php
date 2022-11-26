@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>add category</h1>
        </div>
        <div class="card-body">

            <form action="{{ url('add-category') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="name" placeholder="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="slug" placeholder="slug" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="description" cols="5" rows="5" placeholder="description" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input class="form-control" type="text" name="meta_title" placeholder="meta_title" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_descrip" cols="5" rows="5" placeholder="meta_descrip" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_keywords" cols="5" rows="5" placeholder="meta_keywords" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" required>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
