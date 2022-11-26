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

                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img width="150" src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="">
                            </td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Edit</button>
                            </td>
                            
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
