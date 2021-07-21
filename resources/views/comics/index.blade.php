@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="m-3"> Ecco l'elenco dei fumetti attualmente disponibili : </h1>
        
        {{-- @dump($comics); --}}

        <table class="m-5">
            <thead>
                <tr>    
                    <th>ID</th>
                    <th class="w-50">Titolo</th>
                    <th class="w-25">Serie</th>
                    <th class="w-50">Data d'uscita</th>
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
                            <a href="{{ route("comics.show", $item->id) }}" class="btn btn-info m-1">Show</a> 
                        </td>
                        <td>
                            <a href="{{ route("comics.edit", $item->id) }}" class="btn btn-warning m-1">Modify</a> 
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger m-1">Delete</a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $comics->links() }}
    </div>
    
@endsection