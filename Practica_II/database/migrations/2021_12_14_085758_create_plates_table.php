<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tipo_plates');
            $table->foreign('tipo');
            $table->integer('comensales');
            $table->timestamps();
            $table->string('id_tipo_plates')->references('id')->on('tipo_plates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates');
    }
}
