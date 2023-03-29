@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron">
</div>
@endsection

@section('card-container')
<div class="card-detail-container">
    <figure>
        <span class="text-white">COMIC BOOK</span>
        <img src="{{$comic['thumb']}}" alt="">
        <span class="text-center text-white">VIEW GALLERY</span>
    </figure>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-5">
                <h3 class="title-detail">
                    {{ $comic['title'] }}
                </h3>

                <div class="shop-bar d-flex w-100 mb-3">
                    <div class="price border border-dark px-2 d-flex justify-content-between">
                        <div>
                            <span class="text-muted">
                                U.S. Price:
                            </span> 
                            <span class="text-white">
                                {{$comic['price']}}
                            
                            </span>
                        </div>
                        <div>
                            <span class="text-muted">
                                AVAILABLE
                            </span>
                        </div>
                    </div>

                    <div class="ms-auto border border-dark text-white px-2">
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

<div class="card-detail-container-bottom pt-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-5">
                <h5 class="title-detail">Talent</h5>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="fw-bold title-detail">
                        Art by:
                    </span>
                    <p>
                        {{implode(", ", $comic['artists'])}}
                    </p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="fw-bold title-detail">
                        Written by:
                    </span>
                    <p>
                        {{implode(", ", $comic['writers'])}}
                    </p>
                </div>
                <hr>
            </div>

            <div class="col-5">
                <h5 class="title-detail">Specs</h5>
                <hr>
                <div class="d-flex">
                    <span class="fw-bold title-detail">
                        Series:
                    </span>
                    <b>
                        {{$comic['series']}}
                    </b>
                </div>
                <hr>
                <div class="d-flex">
                    <span class="fw-bold title-detail">
                        U.S. Price:
                    </span>
                    <b class="text-muted">
                        {{$comic['price']}}
                    </b>
                </div>
                <hr>
                <div class="d-flex">
                    <span class="fw-bold title-detail">
                        On Sale Date:
                    </span>
                    <b class="text-muted">
                        {{$comic['sale_date']}}
                    </b>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <hr class="mb-0">
    <div class="container container-bottom">
        <div class="row justify-content-center">

            <div class="col-3 border">
                <div class="d-flex justify-content-between py-2">
                    <h6 class="text-muted">
                        DIGITAL COMICS
                    </h6>
                    <img src="../../img/buy-comics-digital-comics.png" alt="Icon">
                </div>
            </div>

            <div class="col-3 border">
                <div class="d-flex justify-content-between py-2">
                    <h6 class="text-muted">
                        SHOP DC
                    </h6>
                    <img src="../../img/buy-comics-subscriptions.png" alt="Icon">
                </div>         
            </div>

            <div class="col-3 border">
                <div class="d-flex justify-content-between py-2">
                    <h6 class="text-muted">
                        COMIC SHOP LOCATOR
                    </h6>
                    <img src="../../img/buy-comics-shop-locator.png" alt="Icon">
                </div>              
            </div>

            <div class="col-3 border">
                <div class="d-flex justify-content-between py-2">
                    <h6 class="text-muted">
                        SUBSCRIPTIONS
                    </h6>
                    <img src="../../img/buy-comics-merchandise.png" alt="Icon">
                </div>               
            </div>

        </div>
    </div>
</div>
@endsection