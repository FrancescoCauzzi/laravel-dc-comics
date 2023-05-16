@extends('layouts/main-layout')


@section('content')

<main class="text-center">
  <img src="{{$comic->thumb}}" alt="comic-image">

  <hr>

  <h1>{{$comic->title}}</h1>



  <p>
    {{$comic->description}}
  </p>
</main>

@endsection
