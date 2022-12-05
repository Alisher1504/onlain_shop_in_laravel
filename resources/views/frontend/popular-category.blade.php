@extends('layouts.front')
@section('content')
    <div class="container">

        <div class="p-3">

            <div class="row">
                <div class="col-md-12">


                    <div class="row">
                        @foreach ($popular_category as $item)
                            <div class="col-md-3 mt-5">
                                <a href="{{ url('view-category/' . $item->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="">
                                        <div class="card-body">
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>

        </div>

    </div>
@endsection
