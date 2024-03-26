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
}
