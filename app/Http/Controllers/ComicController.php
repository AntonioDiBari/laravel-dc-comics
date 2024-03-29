<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $comics = Comic::all();
        return view("pages.comics", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate_form($request);
        $comic_data = $request->all();
        $comic = new Comic();

        $comic->fill($comic_data);

        $comic->save();
        return redirect()->route("comics.show", $comic)
            ->with("message", "Comic inserted successfully")
            ->with("type", "alert-success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function show(Comic $comic)
    {

        return view("pages.comic-detail", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
        return view("pages.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validate_form($request, $comic);
        $data = $request->all();
        $comic->update($data);

        return redirect()->route("comics.show", $comic)
            ->with("message", "Comic updated successfully")
            ->with("type", "alert-info");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index")
            ->with("message", "Comic deleted successfully")
            ->with("type", "alert-danger");

    }


    /**
     *  $id = null serve nel caso ci sia un campo unique da ignorare e
     * accettare il medesimo valore se inserimento (non creazione),
     * perciò se passato dalla update controlla ed evita di dare l'errore altrimenti
     * è unique di inserimento. Vainserita la direttiva Rule
     * 
    //  * use Illuminate\Validation\Rule;
     * 
    //  * !empty ($id) ? Rule::unique ('comics', 'title')-ignore($id) : Rule::unique('comics', 'title')
     *  
     * */
    private function validate_form($request, $id = null)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'series' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'sale_date' => 'required|date',
            'price' => ['required', 'numeric', 'between:0.01,9999.99'],
            'thumb' => 'nullable|URL',
            'description' => 'required|min:3|max:1000',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'sale_date.required' => 'La data di messa in vendita è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'description.required' => 'La descrizione è obbligatoria'
        ]);
    }
}
