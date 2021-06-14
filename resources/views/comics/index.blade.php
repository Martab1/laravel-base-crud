
@extends('layouts.app')

@section('content')
    <section class="container d-flex justify-content-center flex-wrap mt-5">
        <div>
            @foreach ($comics as $comic)
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ $comic->thumb}}" alt="...">
                  </div>
                  <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic->title}}</h5>
                        <p class="card-text">{{ $comic->description}}</p>
                        <p class="card-text">{{ $comic->type}}</p>
                        <p class="card-text">{{ $comic->price}} €</p>
                        <p class="card-text"><small class="text-muted">{{ $comic->series}}, {{ $comic->sale_date}}</small></p>
                        <a href="#" class="btn btn-dark">SHOW</a>
                        <a href="#" class="btn btn-dark">EDIT</a>
                        <a href="#" class="btn btn-dark">DELETE</a>
                        </div>
                  </div>
                </div>
              </div>

            @endforeach

    </section>

        
@endsection