@extends('layouts.main')

@section('content')
    
    <div class="container">
        <h1>Modifica fumetto : {{ $comic->title }}</h1>
        {{-- @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>          
        @endif --}}
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
        <form action="{{ route('comics.update',$comic->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un nuovo titolo" value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description" placeholder="Inserisci una nuova descrizione">{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci un url" value="{{$comic->thumb}}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.05" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{ $comic->price }}">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Data d'uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data d'uscita" value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia" value="{{ $comic->type }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('comics.index') }}">Back</a>
          </form>
    </div>
@endsection