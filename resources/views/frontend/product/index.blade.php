@extends('layouts.front')
@section('content')
    <div class="container">

        <div class="p-3">

            <div class="row">
                <div class="col-md-12">


                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-md-3 mt-5">
                                <a href="">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/product/' . $item->image) }}" alt="">
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
