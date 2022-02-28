<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoMetlifeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_metlife', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // es necesario especificar para poder usar llaves foraneas
            $table->id();
            $table->unsignedBigInteger('agente_id')->unsigned();
            $table->foreign('agente_id')->references('id')->on('agentes');

            $table->string('entrevista')->nullable();
            $table->date('fechaEntrevista')->nullable();
            $table->string('observacionesEntrevista')->nullable();

            $table->string('pda')->nullable();
            $table->date('fechaPda')->nullable();
            $table->string('observacionesPda')->nullable();

            $table->string('inscripcionACedula')->nullable();
            $table->date('fechaIncripcionACedula')->nullable();
            $table->string('observacionesIncripcionACedula')->nullable();

            $table->string('inscripcionACia')->nullable();
            $table->date('fechaIncripcionACia')->nullable();
            $table->string('observacionesIncripcionACia')->nullable();

            $table->string('claveArranque')->nullable();
            $table->date('fechaClaveArranque')->nullable();
            $table->integer('numeroClaveArranque')->nullable();

            $table->string('examenCedula')->nullable();
            $table->date('fechaExamenCedula')->nullable();
            $table->string('observacionesExamenCedula')->nullable();

            
            $table->string('cartaDesarrollo')->nullable();
            $table->date('fechaCartaDesarrollo')->nullable();
            $table->string('observacionesCartaDesarrollo')->nullable();
            $table->string('archivoCartaDesarrollo')->nullable();

            $table->string('cartaConexion')->nullable();
            $table->date('fechaCartaConexion')->nullable();
            $table->string('observacionesCartaConexion')->nullable();
            $table->string('archivoCartaConexion')->nullable();

            $table->string('CheckList')->nullable();
            $table->date('fechaCheckList')->nullable();
            $table->string('archivosContratosYAnexos')->nullable();

            $table->string('claveDefinitiva')->nullable();
            $table->date('fechaClaveDefinitiva')->nullable();
            $table->integer('numeroClaveDefinitiva')->nullable();

            $table->string('TraspasoClaveArranqueADefinitiva')->nullable();
            $table->date('fechaTraspasoClaveArranqueADefinitiva')->nullable();

            $table->string('altaPortalInterfactura')->nullable();
            $table->date('fechaPortalInterfactura')->nullable();
            $table->string('archivoSellos')->nullable();

            $table->string('AltaPortales')->nullable();
            $table->date('fechaAltaPortales')->nullable();
            $table->string('observacionesAltaPortales')->nullable();

            $table->date('fechaInicioProcesoRespuesta')->nullable();
            $table->date('fechaFinProcesoRespuesta')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proceso_metlife');
    }
}
