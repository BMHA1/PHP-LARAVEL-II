<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatoIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plato_ingredientes', function (Blueprint $table) {

            $table->bigInteger('id_ingredientes');
            $table->bigInteger('id_plates');
            $table->timestamps();
            $table->foreign('id_ingredientes')->references('id')->on('ingredientes')->onDelete('cascade');
            $table->foreign('id_plates')->references('id')->on('plates')->onDelete('cascade');
            $table->unique(['id_plates', 'id_ingredientes']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plato_ingredientes');
    }
}
