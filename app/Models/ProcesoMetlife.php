<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcesoMetlife extends Model
{
    use HasFactory;

    protected $table = "proceso_metlife";

    protected $fillable = ['entrevista','fechaEntrevista','observacionesEntrevista', 'pda','fechaPda','observacionesPda'
    ,'inscripcionACedula', 'fechaIncripcionACedula','observacionesIncripcionACedula','inscripcionACia', 'fechaIncripcionACia','observacionesIncripcionACia'
    ,'claveArranque', 'fechaClaveArranque','numeroClaveArranque','examenCedula', 'fechaExamenCedula','observacionesExamenCedula'
    ,'cartaDesarrollo', 'fechaCartaDesarrollo','observacionesCartaDesarrollo','archivoCartaDesarrollo'
    ,'cartaConexion', 'fechaCartaConexion','observacionesCartaConexion','archivoCartaConexion'
    ,'CheckList', 'fechaCheckList','archivosContratosYAnexos','claveDefinitiva', 'fechaClaveDefinitiva','numeroClaveDefinitiva'
    ,'TraspasoClaveArranqueADefinitiva', 'fechaTraspasoClaveArranqueADefinitiva'
    ,'altaPortalInterfactura','fechaPortalInterfactura', 'archivoSellos'
    ,'AltaPortales','fechaAltaPortales', 'observacionesAltaPortales','fechaInicioProcesoRespuesta', 'fechaFinProcesoRespuesta'];

    protected $hidden = ['id','agente_id','created_at','updated_at'];
}
