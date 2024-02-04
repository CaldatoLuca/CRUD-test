<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ottenfo tutti i dati dal db
        $comics = Comic::all();

        //ritorno una view (pagina index nella cartella comics, a cui passo i dati ottenuti prima)
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        // $comic->title =  $data['title'];
        // $comic->description =  $data['description'];
        // $comic->thumb =  $data['thumb'];
        // $comic->price =  $data['price'];
        // $comic->series =  $data['series'];
        // $comic->sale_date =  $data['sale_date'];
        // $comic->type =  $data['type'];

        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //passo un istanza comic alla comics.show e laravel recupera l id e mostra il comic giusto
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',  compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        //evita riassegnazione e save
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
