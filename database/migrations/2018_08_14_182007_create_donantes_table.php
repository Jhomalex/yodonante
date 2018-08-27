<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->string('dni');
            $table->string('celular');
            $table->timestamp('fechaNacimiento');
            $table->boolean('genero');
            $table->longText('foto')->nullable();
            $table->timestamp('fechaUltimaDonacion')->nullable();
            $table->timestamp('fechaProximaDonacion')->nullable();
            $table->boolean('sms');
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
        Schema::dropIfExists('donantes');
    }
}
