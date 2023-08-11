<?php

namespace App\Http\Controllers;

use App\Models\TipoCurso;
use Illuminate\Http\Request;

class TipoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tpcursos=TipoCurso::get();
        return view('tipo_curso.index',compact('tpcursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       
        return view('tipo_curso.crear');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tpcurso = new TipoCurso();


        $tpcurso->TpCursoSiglas = $request->input('TpCursoSiglas');
        $tpcurso->TpCursoNombre = $request->input('TpCursoNombre');
        $tpcurso->TpCursoDesc = $request->input('TpCursoDesc');
        $tpcurso->TpCursoComen = $request->input('TpCursoComen');
        
 
         if ($tpcurso->save()) {
             return redirect()->route('TipoCurso.index')->with('success', '¡campo editado correctamente!');
         } else {
             return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
         }
 
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoCurso $tipoCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tpcurso = TipoCurso::findOrFail($id);
        return view('tipo_curso.editar',compact('tpcurso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $tpcurso = TipoCurso::findOrFail($id);
       
       
       

        $tpcurso->TpCursoSiglas = $request->input('TpCursoSiglas');
        $tpcurso->TpCursoNombre = $request->input('TpCursoNombre');
        $tpcurso->TpCursoDesc = $request->input('TpCursoDesc');
        $tpcurso->TpCursoComen = $request->input('TpCursoComen');
        
 
         if ($tpcurso->save()) {
             return redirect()->route('TipoCurso.index')->with('success', '¡campo editado correctamente!');
         } else {
             return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
         }
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $TpCursoId)
    {
        $tpcurso = TipoCurso::findOrFail($TpCursoId);
        $tpcurso->delete();
        return redirect()->route('TipoCurso.index');
    }
}         
