<?php

namespace App\Http\Controllers;

use App\Models\TipoEnfoqueCurso;
use Illuminate\Http\Request;

class TipoEnfoqueCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('tipoenfoquecurso.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoenfoquecurso.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "hola";
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoEnfoqueCurso $tipoEnfoqueCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoEnfoqueCurso $tipoEnfoqueCurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoEnfoqueCurso $tipoEnfoqueCurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoEnfoqueCurso $tipoEnfoqueCurso)
    {
        //
    }
}
