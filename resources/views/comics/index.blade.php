
@extends('layouts.app')

@section('content')
    <section class="container mt-5">
        <h1>ALL COMICS</h1>

        @if(session('deleted'))
           <div class="alert alert-success">
               <strong>{{ session('deleted') }}</strong>
               successfully deldeted.
           </div>
        @endif   
        <div>
            @foreach ($comics as $comic)
            <div class="card mb-3 " >
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="{{ $comic->thumb}}" alt="{{$comic->title}}">
                  </div>
                  <div class="col-md-6 mt-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title}}</h5>
                        <p class="card-text">{{ $comic->type}}</p>
                        <p class="card-text">{{ $comic->price}} €</p>
                        <p class="card-text"><small class="text-muted">{{ $comic->series}}, {{ $comic->sale_date}}</small></p>
                    </div>
                  </div>

                  <div class="col-md-3 my-5 p-3 ">
                    <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-dark">SHOW</a>
                    <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-dark">EDIT</a>
                    
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="form-check-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
                  </div>
                </div>
              </div>

            @endforeach

    </section>
    <div class="text-center">
        <a href="#"> <i class=" m-3 fs-2 fas fa-arrow-circle-up"></i> </a>
    </div>
   
        
@endsection