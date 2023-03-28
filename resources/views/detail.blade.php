@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron">
</div>
@endsection

@section('card-container')
<div class="card-detail-container">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-5">
                <h3>
                    {{ $comic['title'] }}
                </h3>

                <div class="shop-bar d-flex w-100">
                    <div class="price border">
                        <span>
                            U.S. Price: {{$comic['price']}}
                        </span>
                        <span>
                            AVAILABLE
                        </span>
                    </div>

                    <div class="ms-auto border">
                        Check Availability
                    </div>
                </div>

                <p>
                    {{ $comic['description'] }}
                </p>
    
            </div>
    
            <div class="col-5">
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class="img" alt="Detail image">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-white">
    <h5>Art by:</h5>
    <p>
        {{implode(",", $comic['artists'])}}
    </p>
</div>

<div class="text-white">
    <h5>Written by:</h5>
    <p>
        {{implode(",", $comic['writers'])}}
    </p>
</div>
@endsection