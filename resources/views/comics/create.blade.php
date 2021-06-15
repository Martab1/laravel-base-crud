
@extends('layouts.app')

@section('content')
    <section class="container  mt-5">
        <h1>CREATE NEW COMIC</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.store')}}" method="POST">
                    @csrf
                    @method('POST')
    
                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="control-label">Series</label>
                        <input type="text" name="series" id="series" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="control-label">Date</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="control-label">Cover</label>
                        <input type="text" name="thumb" id="thumb" class="form-control">
                    </div>

                    <div class="text-center mb-5">
                       <button class="btn btn-primary" type="submit"> CREATE COMIC </button>
                    </div>
               </form>
            </div>  
        </div>

       
              <div class="text-center">
                <a href="{{route('comics.index')}}" class="btn btn-dark text-center mb-5"> BACK TO ALL COMICS</a>
              </div>
              
         
    </section>

        
@endsection