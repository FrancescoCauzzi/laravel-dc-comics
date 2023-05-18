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
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title') ?? $comic->title}}">
        @error('title')

          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description') ?? $comic->description}}</textarea>
        @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="thumb">Image Link</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" value="{{old('thumb') ?? $comic->thumb}}">
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
          <label for="price">Price</label>
          <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old(number_format(floatval(str_replace('$', '', $comic->price)), 2)) ?? number_format(floatval(str_replace('$', '', $comic->price)), 2) }}">
          @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>



      <div class="mb-3">
        <label for="series">Series</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" name="series" id="series" value="{{old('series') ?? $comic->series}}">
        @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date">Launch Date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
        @error('sale_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{old('type') ?? $comic->type}}">
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
          <label for="artists">Artists</label>
          <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" id="artists" value="{{old('artists') ?? $comic->artists}}">
          @error('artists')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <div class="mb-3">
          <label for="writers">Writers</label>
          <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" id="writers" value="{{old('writers')?? $comic->writers}}">
          @error('writers')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-success fw-bold text-uppercase">Edit this Comic</button>

  </form>
  <button type="button" class="btn btn-primary text-uppercase fw-bold px-5"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Go back to the comics page</a></button>

</div>

@endsection
