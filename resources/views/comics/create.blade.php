@extends('layouts/main-layout')

@section('content')
<div class="container py-3 __create-ctn">
  <h1>Add a comic</h1>

  <form action="{{route('comics.store')}}" method="POST" class="py-5">
    @csrf

    <div class="mb-3">
      <label for="title">Title</label>
      <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
      @error('title')

        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description')}}</textarea>
      @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="thumb">Image Link</label>
      <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" value="{{old('thumb')}}">
      @error('thumb')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old(number_format(floatval(str_replace('$', '', $comic->price)), 2)) }}">
        @error('price')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="series">Series</label>
      <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series" value="{{old('series')}}">
      @error('series')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="sale_date">Launch Date</label>
      <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
      @error('sale_date')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="type">Type</label>
      <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="type" id="type" value="{{old('sale_date')}}">
      @error('type')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="artists">Artists</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="artists" id="artists" value="{{old('artists')}}">
        @error('artists')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="writers">Writers</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="writers" id="writers" value="{{old('writers')}}">
        @error('writers')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-success fw-bold text-uppercase">Add to the Database</button>

  </form>
  <div class="__go-back-create">
    <button type="button" class="btn btn-primary fw-bold text-uppercase"><a href="{{route('comics.index')}}">Go back to the comics page</a></button>
  </div>

</div>

@endsection
