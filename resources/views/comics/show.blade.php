@extends('layouts/main-layout')


@section('content')

<main class="__cshow-main">
    <div class="container-fluid __thumb-ctn-fluid">
        <div class="container __thumb-ctn">

            <img class="__thumb-img" src="{{$comic->thumb}}" alt="comic-image">
        </div>




    </div>
    <div class="container py-5">



        <hr>

        <h1>{{$comic->title}}</h1>



        <p>
            {{$comic->description}}
        </p>
    </div>
</main>

@endsection
