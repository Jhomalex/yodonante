<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposangreTiposangreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposangre_tiposangre', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tiposangre_id');
            $table->unsignedInteger('tiposangre2_id');
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
        Schema::dropIfExists('tiposangre_tiposangre');
    }
}
