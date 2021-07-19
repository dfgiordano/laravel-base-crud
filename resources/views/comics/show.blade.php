@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="m-5"> {{ $comic->series }} {{ $comic->title }} </h3> 

   <div>
       <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
   </div>
   <p class="mt-5">
       {{ $comic->description }}
   </p>
</div>
   
@endsection