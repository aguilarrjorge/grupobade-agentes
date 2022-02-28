<?php

namespace App\Http\Controllers;
use App\Models\ProcesoMetlife;

use Illuminate\Http\Request;

class procesoMetlifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $proceso_metlife = ProcesoMetlife::all();

       return $proceso_metlife;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $proceso_metlife = new ProcesoMetlife();
        $proceso_metlife->agente_id = $request->agente_id;
        $proceso_metlife->entrevista = $request->entrevista; 
        $proceso_metlife->fechaEntrevista = $request->fechaEntrevista;
        $proceso_metlife->observacionesEntrevista = $request->observacionesEntrevista;
        $proceso_metlife->pda = $request->pda;
        $proceso_metlife->fechaPda = $request->fechaPda;
        $proceso_metlife->observacionesPda = $request->observacionesPda;
        $proceso_metlife->inscripcionACedula = $request->inscripcionACedula;
        $proceso_metlife->fechaIncripcionACedula = $request->fechaIncripcionACedula;
        $proceso_metlife->observacionesIncripcionACedula = $request->observacionesIncripcionACedula;
        $proceso_metlife->inscripcionACia = $request->inscripcionACia;
        $proceso_metlife->fechaIncripcionACia = $request->fechaIncripcionACia;
        $proceso_metlife->observacionesIncripcionACia = $request->observacionesIncripcionACia;
        $proceso_metlife->claveArranque = $request->claveArranque;
        $proceso_metlife->fechaClaveArranque = $request->fechaClaveArranque;
        $proceso_metlife->numeroClaveArranque = $request->fechaClaveArranque; 
        $proceso_metlife->examenCedula = $request->examenCedula; 
        $proceso_metlife->fechaExamenCedula = $request->fechaExamenCedula;
        $proceso_metlife->observacionesExamenCedula = $request->observacionesExamenCedula;
        $proceso_metlife->cartaDesarrollo = $request->cartaDesarrollo;
        $proceso_metlife->fechaCartaDesarrollo = $request->fechaCartaDesarrollo;
        $proceso_metlife->observacionesCartaDesarrollo = $request->observacionesCartaDesarrollo;
        $proceso_metlife->archivoCartaDesarrollo = $request->archivoCartaDesarrollo;
        $proceso_metlife->cartaConexion = $request->cartaConexion;  
        $proceso_metlife->fechaCartaConexion = $request->fechaCartaConexion;
        $proceso_metlife->observacionesCartaConexion = $request->observacionesCartaConexion;
        $proceso_metlife->archivoCartaConexion = $request->archivoCartaConexion;
        $proceso_metlife->CheckList = $request->CheckList;
        $proceso_metlife->fechaCheckList = $request->fechaCheckList;
        $proceso_metlife->archivosContratosYAnexos = $request->archivosContratosYAnexos;
        $proceso_metlife->claveDefinitiva = $request->claveDefinitiva;
        $proceso_metlife->fechaClaveDefinitiva = $request->fechaClaveDefinitiva;
        $proceso_metlife->numeroClaveDefinitiva = $request->numeroClaveDefinitiva;
        $proceso_metlife->TraspasoClaveArranqueADefinitiva = $request->TraspasoClaveArranqueADefinitiva;
        $proceso_metlife->fechaTraspasoClaveArranqueADefinitiva = $request->fechaTraspasoClaveArranqueADefinitiva;
        $proceso_metlife->altaPortalInterfactura = $request->altaPortalInterfactura;
        $proceso_metlife->fechaPortalInterfactura = $request->fechaPortalInterfactura;
        $proceso_metlife->archivoSellos = $request->archivoSellos;
        $proceso_metlife->AltaPortales = $request->AltaPortales;
        $proceso_metlife->fechaAltaPortales = $request->fechaAltaPortales;
        $proceso_metlife->observacionesAltaPortales = $request->observacionesAltaPortales;
        $proceso_metlife->fechaInicioProcesoRespuesta = $request->fechaInicioProcesoRespuesta;
        $proceso_metlife->fechaFinProcesoRespuesta = $request->fechaFinProcesoRespuesta;

        $proceso_metlife->save();

        return ProcesoMetlife::all();
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
        $proceso_metlife = ProcesoMetlife::Find($id);

        $proceso_metlife->entrevista = $request->entrevista; 
        $proceso_metlife->fechaEntrevista = $request->fechaEntrevista;
        $proceso_metlife->observacionesEntrevista = $request->observacionesEntrevista;
        $proceso_metlife->pda = $request->pda;
        $proceso_metlife->fechaPda = $request->fechaPda;
        $proceso_metlife->observacionesPda = $request->observacionesPda;
        $proceso_metlife->inscripcionACedula = $request->inscripcionACedula;
        $proceso_metlife->fechaIncripcionACedula = $request->fechaIncripcionACedula;
        $proceso_metlife->observacionesIncripcionACedula = $request->observacionesIncripcionACedula;
        $proceso_metlife->inscripcionACia = $request->inscripcionACia;
        $proceso_metlife->fechaIncripcionACia = $request->fechaIncripcionACia;
        $proceso_metlife->observacionesIncripcionACia = $request->observacionesIncripcionACia;
        $proceso_metlife->claveArranque = $request->claveArranque;
        $proceso_metlife->fechaClaveArranque = $request->fechaClaveArranque;
        $proceso_metlife->numeroClaveArranque = $request->fechaClaveArranque; 
        $proceso_metlife->examenCedula = $request->examenCedula; 
        $proceso_metlife->fechaExamenCedula = $request->fechaExamenCedula;
        $proceso_metlife->observacionesExamenCedula = $request->observacionesExamenCedula;
        $proceso_metlife->cartaDesarrollo = $request->cartaDesarrollo;
        $proceso_metlife->fechaCartaDesarrollo = $request->fechaCartaDesarrollo;
        $proceso_metlife->observacionesCartaDesarrollo = $request->observacionesCartaDesarrollo;
        $proceso_metlife->archivoCartaDesarrollo = $request->archivoCartaDesarrollo;
        $proceso_metlife->cartaConexion = $request->cartaConexion;  
        $proceso_metlife->fechaCartaConexion = $request->fechaCartaConexion;
        $proceso_metlife->observacionesCartaConexion = $request->observacionesCartaConexion;
        $proceso_metlife->archivoCartaConexion = $request->archivoCartaConexion;
        $proceso_metlife->CheckList = $request->CheckList;
        $proceso_metlife->fechaCheckList = $request->fechaCheckList;
        $proceso_metlife->archivosContratosYAnexos = $request->archivosContratosYAnexos;
        $proceso_metlife->claveDefinitiva = $request->claveDefinitiva;
        $proceso_metlife->fechaClaveDefinitiva = $request->fechaClaveDefinitiva;
        $proceso_metlife->numeroClaveDefinitiva = $request->numeroClaveDefinitiva;
        $proceso_metlife->TraspasoClaveArranqueADefinitiva = $request->TraspasoClaveArranqueADefinitiva;
        $proceso_metlife->fechaTraspasoClaveArranqueADefinitiva = $request->fechaTraspasoClaveArranqueADefinitiva;
        $proceso_metlife->altaPortalInterfactura = $request->altaPortalInterfactura;
        $proceso_metlife->fechaPortalInterfactura = $request->fechaPortalInterfactura;
        $proceso_metlife->archivoSellos = $request->archivoSellos;
        $proceso_metlife->AltaPortales = $request->AltaPortales;
        $proceso_metlife->fechaAltaPortales = $request->fechaAltaPortales;
        $proceso_metlife->observacionesAltaPortales = $request->observacionesAltaPortales;
        $proceso_metlife->fechaInicioProcesoRespuesta = $request->fechaInicioProcesoRespuesta;
        $proceso_metlife->fechaFinProcesoRespuesta = $request->fechaFinProcesoRespuesta;

        $proceso_metlife->save();

        return ProcesoMetlife::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $proceso_metlife = ProcesoMetlife::find($id);
        $proceso_metlife->delete();

        return "Elemento eliminado Correctamente";
    }
}
