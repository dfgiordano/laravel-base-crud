@extends('layouts.main')

@section('content')
<div class="container">
    <h3> {{ $comic->series }} {{ $comic->title }} </h3> 

   <div>
       <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
   </div>
   <p>
       {{ $comic->description }}
   </p>
</div>
   
@endsection