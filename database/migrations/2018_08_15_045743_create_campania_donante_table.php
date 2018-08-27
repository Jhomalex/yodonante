<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaniaDonanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campania_donante', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('campania_id');
            $table->unsignedInteger('donante_id');
            $table->unsignedInteger('tipodonantecampanias_id');
            $table->unsignedInteger('estadocampanias_id');
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
        Schema::dropIfExists('campania_donante');
    }
}
