@extends('layouts/main-layout')

@section('content')
<div class="container py-3 __edit-ctn">
  <h1>Edit Page</h1>
  <h2>{{$comic->title}}</h2>

  <form action="{{route('comics.update', $comic->id)}}" method="POST" class="py-5">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" value="{{$comic->description}}"></textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Image Link</label>
      <input class="form-control" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
    </div>

    <div class="mb-3">
      <label for="price">Price</label>
      <input class="form-control" type="number" name="price" id="price" value="{{$comic->price}}">
    </div>

    <div class="mb-3">
      <label for="series">Series</label>
      <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
    </div>

    <div class="mb-3">
      <label for="sale_date">Launch Date</label>
      <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div class="mb-3">
      <label for="type">Type</label>
      <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
    </div>

    <div class="mb-3">
        <label for="artists">Artists</label>
        <input class="form-control" type="text" name="artists" id="artists" value="{{$comic->artists}}">
    </div>

    <div class="mb-3">
        <label for="writers">Writers</label>
        <input class="form-control" type="text" name="writers" id="writers" value="{{$comic->writers}}">
    </div>

    <div class="__btns">

        <button type="submit" class="btn btn-primary">Add to the Database</button>


    </div>

  </form>
  <button type="button" class="btn btn-primary text-uppercase fw-bold px-5"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Go back to the previous page</a></button>

</div>

@endsection
