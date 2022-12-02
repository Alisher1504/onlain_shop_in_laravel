@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add product</h1>
        </div>
        <div class="card-body">

            <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <select name="cate_id" class="form-select">
                            <option value="">{{ $product->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="text" name="slug" value="{{ $product->slug }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="small_description" cols="5" rows="5" >{{ $product->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="description" cols="5" rows="5">{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="original_price" value="{{ $product->original_price }}">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="selling_price"  value="{{ $product->selling_price }}">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="tax"  value="{{ $product->tax }}">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="qty"  value="{{ $product->qty }}">
                    </div>
                    <div class="col-md-6">
                        <label for="">status</label>
                        <input type="checkbox" name="status" {{$product->status == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6">
                        <label for="">trending</label>
                        <input type="checkbox" name="trending" {{$product->trending == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input class="form-control" type="text" name="meta_title" value="{{ $product->meta_title }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_keyvord" cols="5" rows="5" >{{ $product->meta_keyvord }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="meta_description" cols="5" rows="5" >{{ $product->meta_description }}</textarea>
                    </div>
                    @if ($product->image)
                        <img style="width: 300px" src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="">
                    @endif
                    <div class="col-md-12 mt-3">
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
