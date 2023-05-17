@extends('layouts/main-layout')


@section('content')

<main class="__cshow-main">
    <div class="container-fluid __thumb-ctn-fluid">
        <div class="container __thumb-ctn">

            <img class="__thumb-img" src="{{$comic->thumb}}" alt="comic-image">
        </div>




    </div>
    <div class="container py-5 __info-ctn">
        <div class="d-flex __top-info gap-4">
            <div class="__tl-pr-dsc">
                <h1>{{$comic->title}}</h1>
                <div class="__price-avail-ctn d-flex justify-content-between text-white" style="">
                    <div class="__price-avail d-flex justify-content-between align-items-center p-3"  style=""  >
                        <div class="__price">
                            <span>U.S. Price: {{$comic->price}}</span>


                        </div>
                        <div class="__avail">
                            <span class="text-uppercase">{{$comic->price ? 'available' : 'not available'}}</span>


                        </div>
                    </div>
                    <div class="__number p-3 justify-content-end ">
                        <select class="form-select text-white __form-select" aria-label="Default select example">
                            <option selected>Check Availability</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>


                    </div>

                </div>
                <p class="p-2">
                    {{$comic->description}}
                </p>


            </div>
            <div class="__ad d-flex flex-column align-items-end">
                <h5 class="text-uppercase">advertisement</h5>
                <a href=""><img src="{{Vite::asset('resources/img/advert.jpg')}}" alt="cannot retrieve image"></a>
            </div>

        </div>
        <div class="text-center mb-5 __edit-btn">
            <button type="button" class="btn btn-primary text-uppercase fw-bold px-5"><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit this Comic</a></button>
        </div>

    </div>
</main>

@endsection
