@extends('layouts/main-layout')

@section('content')

<main class="__main">


    <div class="container py-5 d-flex flex-wrap justify-content-center __card-ctn">
        <div class="container">

            <div class="__current-series text-uppercase text-white fw-bold fs-4">
                <span >Current Series</span>
            </div>
        </div>
        @foreach ($comics as $item)
        <div class="card __card" >
            <a href="{{route('comics.show', $item->id)}}"><img src="{{$item['thumb']}}" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <h6 class="card-title text-uppercase text-white __card-title">{{$item['title']}}</h6>

            </div>
        </div>

        @endforeach
    </div>
    <div class="__btn-ctn d-flex justify-content-center gap-3">

        <div class="text-center mb-5">
            <button type="button" class="btn btn-primary text-uppercase fw-bold px-5">Load more</button>
        </div>
        <div class="text-center mb-5">
            <button type="button" class="btn btn-primary text-uppercase fw-bold px-5"><a href="{{route('comics.create')}}">Add a New Comic</a></button>
        </div>
    </div>
    <div class="container-fluid __dc-features-ctn-fluid d-flex justify-content-center">
        <div class="container py-5">
            <div class=" text-white">
                @foreach ($dcFeatures as $feature )
                <div

                class=" d-flex align-items-center __col gap-1"
                >
                <img class="" src="{{ Vite::asset('resources' .$feature['imageSrc'])}}" alt="cannot retrieve image" />
                <div class="__name px-2 text-uppercase">{{$feature['name']}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>


</main>

@endsection
