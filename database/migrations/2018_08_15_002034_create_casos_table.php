<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni');
            $table->date('fechaNacimiento');
            $table->string('centroMedico');
            $table->string('codigoReferencia');
            $table->longText('fichaDerivacion');
            $table->longText('historia');
            $table->longText('descripcion');
            $table->longText('foto');
            $table->boolean('sms');
            $table->integer('unidadesTotales');
            $table->integer('unidadesDonadas');
            $table->unsignedInteger('distrito_id');
            $table->unsignedInteger('tiposangre_id');
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
        Schema::dropIfExists('casos');
    }
}
