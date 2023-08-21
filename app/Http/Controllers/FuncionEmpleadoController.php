<?php

namespace App\Http\Controllers;

use App\Models\FuncionEmpleado;
use Illuminate\Http\Request;

class FuncionEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funciones=FuncionEmpleado::get();
        return view('empleado.index',compact('funciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FuncionEmpleado $funcionEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
       // $request->nombreUsr
        //auth()->user()->id
       // return view('funcionEmpleado.editar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FuncionEmpleado $funcionEmpleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FuncionEmpleado $funcionEmpleado)
    {
        //
    }
}
