@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add product</h1>
        </div>
        <div class="card-body">

            <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <select name="cate_id" class="form-select">
                            <option value="">select a category</option>
                            @foreach ($category_id as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="name" placeholder="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="slug" placeholder="slug" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="small_description" cols="5" rows="5" placeholder="small description" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="description" cols="5" rows="5" placeholder="description" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="original_price"  placeholder="original_price">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="selling_price"  placeholder="selling_price">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="tax"  placeholder="tax">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="qty"  placeholder="quantity">
                    </div>
                    <div class="col-md-6">
                        <label for="">status</label>
                        <input type="checkbox" name="status" >
                    </div>
                    <div class="col-md-6">
                        <label for="">trending</label>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input class="form-control" type="text" name="meta_title" placeholder="meta_title" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_keyvord" cols="5" rows="5" placeholder="meta_keywords" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_description" cols="5" rows="5" placeholder="meta_descrip" required></textarea>
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
