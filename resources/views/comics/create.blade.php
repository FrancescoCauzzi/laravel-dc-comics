@extends('layouts/main-layout')

@section('content')
<div class="container py-3">
  <h1>Add a comic</h1>

  <form action="{{route('comics.store')}}" method="POST" class="py-5">
    @csrf

    <div class="mb-3">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" id="title">
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description"></textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Image Link</label>
      <input class="form-control" type="text" name="thumb" id="thumb">
    </div>

    <div class="mb-3">
      <label for="price">Price</label>
      <input class="form-control" type="number" name="price" id="price">
    </div>

    <div class="mb-3">
      <label for="series">Series</label>
      <input class="form-control" type="text" name="series" id="series">
    </div>

    <div class="mb-3">
      <label for="sale_date">Launch Date</label>
      <input class="form-control" type="date" name="sale_date" id="sale_date">
    </div>

    <div class="mb-3">
      <label for="type">Type</label>
      <input class="form-control" type="text" name="type" id="type">
    </div>

    <div class="mb-3">
        <label for="artists">Artists</label>
        <input class="form-control" type="text" name="artists" id="artists">
    </div>

    <div class="mb-3">
        <label for="writers">Writers</label>
        <input class="form-control" type="text" name="writers" id="writers">
    </div>

    <button type="submit" class="btn btn-primary">Add to the Database</button>

  </form>

</div>

@endsection
