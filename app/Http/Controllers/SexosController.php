<?php

namespace App\Http\Controllers;

use App\Sexos;
use Illuminate\Http\Request;

class SexosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sexos=Sexos::all();
        //dd($generos);
        return view("sexos.index",compact('sexos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sexos.create");
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
        $sexo=array(
            "sexo"=>$request->sexo,
        );
        Sexos::create($sexo);
        return redirect("sexos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sexos  $sexos
     * @return \Illuminate\Http\Response
     */
    public function show(Sexos $sexos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sexos  $sexos
     * @return \Illuminate\Http\Response
     */
    public function edit(Sexos $sexos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sexos  $sexos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sexos $sexos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sexos  $sexos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sexos $sexo)
    {
        //
        $sexo->delete();
        return redirect("sexos");
    }
}
