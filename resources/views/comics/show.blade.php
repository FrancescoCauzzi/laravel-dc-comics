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
        <div class="__btns-ctn d-flex gap-5">
            <div class="text-center mb-5 __edit-btn">
                <button type="button" class="btn btn-primary text-uppercase fw-bold px-5"><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit this Comic</a></button>
            </div>
            <form class="text-center mb-5" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger text-uppercase fw-bold px-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Are you sure that you want to delete this comic?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {{-- <div class="modal-body">
                    With this action you will delete this comic
                    </div> --}}
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- here specify type="submit" !!! otherwise nothing works --}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
                </div>
            </div>


              </form>



        </div>
        <div class=" mb-5 __go-back-btn">
            <button type="button" class="btn btn-success text-uppercase fw-bold px-5"><a href="{{ route('comics.index')}}">Go back to the previous page</a></button>
        </div>

    </div>
    <!-- Button trigger modal -->




  </div>
</main>

@endsection
