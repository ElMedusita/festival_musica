<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistaConciertoRequest;
use App\Http\Requests\UpdateArtistaConciertoRequest;
use App\Models\ArtistaConcierto;

class ArtistaConciertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = ArtistaConcierto::all();
        return view('artistaConciertos.index', compact('artistaconciertos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtistaConciertoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtistaConciertoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtistaConcierto  $artistaConcierto
     * @return \Illuminate\Http\Response
     */
    public function show(ArtistaConcierto $artistaConcierto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtistaConcierto  $artistaConcierto
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtistaConcierto $artistaConcierto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtistaConciertoRequest  $request
     * @param  \App\Models\ArtistaConcierto  $artistaConcierto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtistaConciertoRequest $request, ArtistaConcierto $artistaConcierto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtistaConcierto  $artistaConcierto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtistaConcierto $artistaConcierto)
    {
        //
    }
}
