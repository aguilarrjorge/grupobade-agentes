<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDeAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_de_agentes', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // es necesario especificar para poder usar llaves foraneas
            $table->id();
            $table->unsignedBigInteger('agente_id')->unsigned();
            $table->foreign('agente_id')->references('id')->on('agentes');
            $table->string('nombre');
            $table->string('estatus')->default('pendiente');
            $table->date('fecha')->nullable();
            $table->string('constancia')->nullable();
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
        Schema::dropIfExists('curso_de_agentes');
    }
}
