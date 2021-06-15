
@extends('layouts.app')

@section('content')
    <section class="container  mt-5">
        <h1>EDIT THIS COMIC</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
    
                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="6"> {{$comic->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="control-label">Series</label>
                        <input type="text" name="series" id="series" class="form-control"  value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="control-label">Date</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control"  value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        <input type="text" name="type" id="type" class="form-control"  value="{{ $comic->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="control-label">Cover</label>
                        <input type="text" name="thumb" id="thumb" class="form-control"  value="{{ $comic->thumb }}">
                    </div>

                    <div class="text-center mb-5">
                       <button class="btn btn-primary" type="submit"> EDIT </button>
                    </div>
               </form>
            </div>  
        </div>

       
              <div class="text-center">
                <a href="{{route('comics.index')}}" class="btn btn-dark text-center mb-5"> BACK TO ALL COMICS</a>
              </div>
              
         
    </section>

        
@endsection