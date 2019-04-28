<?php

namespace App\Http\Controllers;

use App\Formatos;
use Illuminate\Http\Request;

class FormatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formatos=Formatos::all();
        return view("formatos.index",compact('formatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("formatos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formato=array(
            "descripcion"=>$request->descripcion,
        );
        Formatos::create($formato);
        return redirect("formatos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function show(Formatos $formatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function edit(Formatos $formatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formatos $formatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formatos $formato)
    {
        $formato->delete();
        return redirect("formatos");
    }
}
