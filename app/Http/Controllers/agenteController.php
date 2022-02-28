<?php

namespace App\Http\Controllers;
use App\Models\Agente;

use Illuminate\Http\Request;

class agenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agente = Agente::all();
        return $agente;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $agente = new Agente();
        $agente->nombre = $request->nombre;
        $agente->apellidos = $request->apellidos;
        $agente->correo = $request->correo;
        $agente->celular = $request->celular;
        $agente->tipo = $request->tipo;
        $agente->cedula = $request->cedula;
        $agente->desdeCedula = $request->desdeCedula;
        $agente->hastaCedula = $request->hastaCedula;
        $agente->claveArranque = $request->claveArranque;
        $agente->desdeClaveArranque = $request->desdeClaveArranque;
        $agente->hastaClaveArranque = $request->hastaClaveArranque;
        $agente->ingreso = $request->ingreso;
        $agente->recluto = $request->recluto;
        $agente->desarrollo = $request->desarrollo;
        $agente->comentarios = $request->comentarios;
        $agente->imagen = $request->imagen;
        $agente->tipoProceso = $request->tipoProceso;
        $agente->save();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $agente = Agente::find($request->id);
        $agente->nombre = $request->nombre;
        $agente->correo = $request->correo;
        $agente->save();

        return $agente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $agente = Agente::destroy($request->id);
        return $agente;

    }
}
