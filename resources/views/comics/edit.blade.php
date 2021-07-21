@extends('layouts.main')

@section('content')
    

    <div class="container">
        <h1>Modifica fumetto : {{ $comic->title }}</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method("POST")
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un nuovo titolo">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Inserisci una nuova descrizione"></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci un url">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.05" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto">
            </div>
            <div class="form-group">
                <label for="sale_date">Data d'uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data d'uscita">
            </div>
            <div class="form-group">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
@endsection