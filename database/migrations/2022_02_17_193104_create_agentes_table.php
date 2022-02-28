<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // es necesario especificar para poder usar llaves foraneas
            $table->id();
            $table->string('nombre');
            $table->string('apellidos')->nullable();
            $table->string('correo');
            $table->integer('celular')->nullable();
            $table->string('rfc', 13)->nullable();
            $table->string('tipo')->nullable();
            $table->string('cedula')->nullable();
            $table->date('desdeCedula')->nullable();
            $table->date('hastaCedula')->nullable();
            $table->string('claveArranque')->nullable();
            $table->date('desdeClaveArranque')->nullable();
            $table->date('hastaClaveArranque')->nullable();
            $table->date('ingreso')->nullable();
            $table->string('recluto')->nullable();
            $table->string('desarrollo')->nullable();
            $table->text('comentarios',200)->nullable();
            $table->string('imagen')->nullable();
            $table->string('tipoProceso')->nullable();
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
        Schema::dropIfExists('agentes');
    }
}
