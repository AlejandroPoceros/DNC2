<?php

namespace App\Http\Controllers;

use App\Models\ClasifAccion;
use App\Models\curso;

use App\Models\TipoCurso;
use App\Models\TipoEnfoqueCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos=curso::get();
        //dd($cursos);

        return view('cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enfoques=TipoEnfoqueCurso::get();
        $tipocursos=TipoCurso::get();
        $cursos = curso::all();
        $claveacciones=ClasifAccion::get();
        return view('cursos.crear',compact('enfoques','tipocursos','claveacciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cursos = new curso();
       
       
       

        $cursos->CursoNombre = $request->input('CursoNombre');
        $cursos->CursoDescr = $request->input('CursoDescr');
        $cursos->TipoEnfoqueId = $request->input('tipoenfoque');
        $cursos->TipoCursoId = $request->input('TipoCursoId');
        $cursos->ClasifAcionId = $request->input('ClasifAcionId');
        $cursos->CursoObjetivo = $request->input('CursoObjetivo');
        $cursos->CursoTemario = $request->input('CursoTemario');
        $cursos->CursoComentario = $request->input('CursoComentario');

        if ($cursos->save()) {
            return redirect()->route('Cursos.index')->with('success', '¡campo editado correctamente!');
        } else {
            return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $cursos = curso::findOrFail($id);
        return view('cursos.editar',compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $cursos = curso::findOrFail($id);
       
       
       

     
        $cursos->CursoNombre = $request->input('CursoNombre');
        $cursos->CursoDescr = $request->input('CursoDescr');
        $cursos->TipoEnfoqueId = $request->input('TipoEnfoqueId');
        $cursos->TipoCursoId = $request->input('TipoCursoId');
        $cursos->ClasifAcionId = $request->input('ClasifAcionId');
        $cursos->CursoObjetivo = $request->input('CursoObjetivo');
        $cursos->CursoTemario = $request->input('CursoTemario');
        $cursos->CursoComentario = $request->input('CursoComentario');

        if ($cursos->save()) {
            return redirect()->route('Cursos.index')->with('success', '¡campo editado correctamente!');
        } else {
            return redirect()->route('#')->with('error', 'Error al crear la partida presupuestal.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $CursoId)
    {
        $cursos = curso::findOrFail($CursoId);
        $cursos->delete();
        return redirect()->route('Cursos.index');
    }
}
