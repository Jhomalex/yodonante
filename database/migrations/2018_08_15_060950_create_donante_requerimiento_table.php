<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonanteRequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donante_requerimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('donante_id');
            $table->unsignedInteger('requerimiento_id');
            $table->double('tiempoRespuesta',5,2)->nullable();
            $table->longText('observacion')->nullable();
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
        Schema::dropIfExists('donante_requerimiento');
    }
}
