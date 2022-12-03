@extends('layouts.front')

@section('content')
    @include('layouts.inc.frontslider')

    <div class="py-5">

        <div class="container">

            <div class="row">



                <div class="col-md-12">
                    <h1>trending product</h1>
                    <div class="row">


                        @foreach ($product_trend as $item)
                            <div class="col-md-3  mt-3">
                                <div class="card">
                                    <img style="width: 100%; height: 200px;" src="{{ asset('assets/uploads/product/' . $item->image) }}" alt="">
                                    <div class="card-body">
                                        <p>{{ $item->name }}</p>
                                        <span class="float-start">{{ $item->selling_price }}</span>
                                        <span class="float-end"><s>{{ $item->original_price }}</s></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

{{-- @section('script')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection --}}
