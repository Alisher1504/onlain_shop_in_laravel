@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>category</h1>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $key)
                        <tr>
                            <td>{{ $key->id }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->slug }}</td>
                            <td>{{ $key->description }}</td>
                            <td>
                                <img width="150" src="{{ asset('assets/uploads/product/' . $key->image) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ url('edit-category/' . $key->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('destroy/' . $key->id) }}" class="btn btn-danger">Destroy</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
