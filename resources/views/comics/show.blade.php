@extends('layouts.main')

@section('content')

    <div class="container">
        @if (session('message'))
        <div class="container m-3 alert alert-success">
            {{ session('message') }}
        </div>          
        @endif

        <div class="container">
            <h3 class="m-5"> {{ $comic->series }} {{ $comic->title }} </h3> 

        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <p class="mt-5">
            {{ $comic->description }}
        </p>
        </div>
    </div>
    
   
@endsection