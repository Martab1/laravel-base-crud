
@extends('layouts.app')

@section('content')
    <section class="container  mt-5">
        <div>
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ $comic->thumb}}" alt="{{$comic->title}}">
                  </div>
                  <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic->title}}</h5>
                        <p class="card-text">{{ $comic->description}}</p>
                        <p class="card-text">{{ $comic->price}} €</p>
                        </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <a href="{{route('comics.index')}}" class="btn btn-dark text-center mb-5">BACK TO ALL COMICS</a>
              </div>
              
         
    </section>

        
@endsection