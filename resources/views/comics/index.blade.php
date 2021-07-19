@extends('layouts.main')

@section('content')
    <div class="container">
        <h1> Ecco l'elenco dei fumetti attualmente disponibili : </h1>
        
        {{-- @dump($comics); --}}

        <table>
            <thead>
                <tr class="w-25">    
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Serie</th>
                    <th>Data d'uscita</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>
                            <a href="{{ route("comics.show", $item->id) }}" class="btn btn-info">Show</a> 
                        </td>
                        <td>
                            <a href="{{ route("comics.show", $item->id) }}" class="btn btn-warning">Modify</a> 
                        </td>
                        <td>
                            <a href="{{ route("comics.show", $item->id) }}" class="btn btn-danger">Delete</a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $comics->links() }}
    </div>
    
@endsection