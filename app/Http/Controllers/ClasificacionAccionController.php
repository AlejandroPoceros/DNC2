<?php

namespace App\Http\Controllers;

use App\Models\ClasifAccion;
use Illuminate\Http\Request;

class ClasificacionAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Clasificacion=ClasifAccion::get();
        return view('clasificacion_accion.index',compact('Clasificacion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clasificacion = ClasifAccion::all();
        return view('clasificacion_accion.crear');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clasificacion = new ClasifAccion();
       $clasificacion->ClasifAccionSiglas = $request->input('ClasifAccionSiglas');
       $clasificacion->ClasifAccionNombre = $request->input('ClasifAccionNombre');
       $clasificacion->ClasifAccionDescrip = $request->input('ClasifAccionDescrip');
       $clasificacion->ClasifAccionComent = $request->input('ClasifAccionComent');
       

        if ($clasificacion->save()) {
            return redirect()->route('ClasifAccion.index')->with('success', '¡campo editado correctamente!');
        } else {
            return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ClasifAccion $clasifAccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $clasificacion = ClasifAccion::findOrFail($id);
        return view('clasificacion_accion.editar',compact('clasificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $clasificacion = ClasifAccion::findOrFail($id);

       $clasificacion->ClasifAccionSiglas = $request->input('ClasifAccionSiglas');
        
        if ($clasificacion->save()) {
            return redirect()->route('Cursos.index')->with('success', '¡campo editado correctamente!');
        } else {
            return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $ClasifAccionId)
    {
        $clasificacion = ClasifAccion::findOrFail($ClasifAccionId);
        $clasificacion->delete();
        return redirect()->route('ClasifAccion.index');
    }
}
