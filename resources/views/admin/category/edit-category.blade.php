@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>add category</h1>
        </div>
        <div class="card-body">

            <form action="{{ url('update/'.$category->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="name" value="{{$category->name}}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="slug" value="{{$category->slug}}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="description" cols="5" rows="5" required>{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="status" {{$category->status == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="popular" {{$category->popular == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input class="form-control" type="text" name="meta_title" value="{{$category->meta_title}}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_descrip" cols="5" rows="5" required>{{$category->meta_descrip}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_keywords" cols="5" rows="5" required>{{$category->meta_descrip}}</textarea>
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="">
                    @endif
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
