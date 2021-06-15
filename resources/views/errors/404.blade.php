
@extends('layouts.app')

@section('content')
    <div class="m-5 text-center">
        <div class="fs-2"> OPS! THIS PAGE DOESN'T EXIST :(</div> 
        <a href="{{route('comics.index')}}" class="btn btn-dark text-center mt-5">BACK TO ALL COMICS</a>
    </div>
@endsection