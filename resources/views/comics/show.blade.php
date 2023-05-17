@extends('layouts/main-layout')


@section('content')

<main class="__cshow-main">
    <div class="container-fluid __thumb-ctn-fluid">
        <div class="container __thumb-ctn">

            <img class="__thumb-img" src="{{$comic->thumb}}" alt="comic-image">
        </div>




    </div>
    <div class="container py-5 __info-ctn">
        <div class="d-flex __top-info">
            <div class="__tl-pr-dsc">
                <h1>{{$comic->title}}</h1>


            </div>
            <div class="__ad">
                <a href=""><img src="{{Vite::asset('resources/img/adv.jpg')}}" alt=""></a>
            </div>

        </div>








        <p>
            {{$comic->description}}
        </p>
    </div>
</main>

@endsection
