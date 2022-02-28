<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoDeAgente;

class cursoDeAgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursoDeAgente = CursoDeAgente::all();
        return $cursoDeAgente;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cursoDeAgente = new CursoDeAgente();
        $cursoDeAgente->agente_id = $request->agente_id;
        $cursoDeAgente->nombre = $request->nombre;
        $cursoDeAgente->estatus = $request->estatus;
        $cursoDeAgente->fecha = $request->fecha;
        $cursoDeAgente->constancia = $request->constancia;
        $cursoDeAgente->save();

        return CursoDeAgente::all();
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cursoDeAgente = CursoDeAgente::find($id);
        $cursoDeAgente->agente_id = $request->agente_id;
        $cursoDeAgente->nombre = $request->nombre;
        $cursoDeAgente->estatus = $request->estatus;
        $cursoDeAgente->fecha = $request->fecha;
        $cursoDeAgente->constancia = $request->constancia;
        $cursoDeAgente->save();

        return CursoDeAgente::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cursoDeAgente = CursoDeAgente::find($id);
        $cursoDeAgente->delete();
        return CursoDeAgente::all();
    }
}
