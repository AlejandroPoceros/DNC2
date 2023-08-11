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
        $tpenfoques=TipoEnfoqueCurso::get();
        return view('tipoenfoquecurso.index',compact('tpenfoques'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoenfoquecurso.crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tpenfoque = new TipoEnfoqueCurso();


        $tpenfoque->TpEnfoqueCursoSiglas = $request->input('TpEnfoqueCursoSiglas');
        $tpenfoque->TpEnfoqueNombre = $request->input('TpEnfoqueNombre');
        $tpenfoque->TpEnfoqueComen = $request->input('TpEnfoqueComen');
        
 
         if ($tpenfoque->save()) {
             return redirect()->route('TipoEnfoqueCurso.index')->with('success', '¡campo editado correctamente!');
         } else {
             return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
         }
 
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
    public function edit(String $id)
    {
        $tpenfoque = TipoEnfoqueCurso::findOrFail($id);
        return view('tipoenfoquecurso.editar',compact('tpenfoque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $tpenfoque= TipoEnfoqueCurso::findOrFail($id);
       
       
       

        $tpenfoque->TpEnfoqueCursoSiglas = $request->input('TpEnfoqueCursoSiglas');
        $tpenfoque->TpEnfoqueNombre = $request->input('TpEnfoqueNombre');
        $tpenfoque->TpEnfoqueComen = $request->input('TpEnfoqueComen');
        
 
         if ($tpenfoque->save()) {
             return redirect()->route('TipoEnfoqueCurso.index')->with('success', '¡campo editado correctamente!');
         } else {
             return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoEnfoqueCurso $tipoEnfoqueCurso)
    {
        //
    }
}
