<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy("id","DESC")->paginate(5);

        return view("comics.index",compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        //creare nuova istanza
        $comic = new Comic();
        //assegnare i nuovi dati
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];
        // mass assignment MA PRIMA DEVO FARE IL FILLABLE NEL CONTROLLER 
        $comic->fill($data);
        //salvare i dati
        $comic->save();
        //redirect alla pagina che voglio dopo aver caricato un nuovo record
        return redirect()->route('comics.show', $comic->id)
        ->with('message', 'Hai creato con successo un nuovo fumetto!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view("comics.show",compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //recupero il record
        $comic = Comic::findOrFail($id);
        
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $data = $request->all();

        $comic->update($data);

        return 
            redirect()->route('comics.show', $comic->id)
            ->with('message', 'Hai modificato con successo il fumetto!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //anzichè fare il find & abort, o il findOrFail, posso far fare l'abbinamento a laravel scrivendo (Comic $comic)
        //dump($comic);

        $comic->delete();

        return redirect()
            ->route('comics.index')
            ->with('deleted', 'Hai cancellato con successo il fumetto!')
            ;
    }
}
