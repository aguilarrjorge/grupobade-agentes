<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellidos', 'correo', 'celular', 'rfc', 'tipo', 'cedula',
                            'rfc', 'tipo', 'cedula', 'desdeCedula', 'hastaCedula', 'claveArranque',
                            'desdeClaveArranque', 'hastaClaveArranque', 'ingreso', 'recluto', 'desarrollo',
                            'comentarios', 'imagen', 'tipoProceso'];

    protected $hidden = ['id','created_at','updated_at'];                        
}
