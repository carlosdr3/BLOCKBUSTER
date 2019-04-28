<?php

namespace App\Http\Controllers;

use App\Generos;
use App\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peliculas=Peliculas::all();
        return view("Peliculas.index",compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generos=Generos::all();
        return view("peliculas.create",compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Peliculas::create($request->all());
        return redirect("peliculas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $pelicula)
    {
        //
        $generos=Generos::all();
        return view("Peliculas.edit",compact('pelicula','generos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $pelicula)
    {
        //
        $pelicula->update($request->all());
        return redirect("peliculas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $pelicula)
    {
        //
        $pelicula->delete();
        return redirect("peliculas");

    }
}
