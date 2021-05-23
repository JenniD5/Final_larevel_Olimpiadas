<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamientoeventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamientoevento', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('equipamiento_id')->unique();
            $table->foreign('equipamiento_id')->references('id')->on('equipamiento')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('evento_id')->unique();
            $table->foreign('evento_id')->references('id')->on('evento')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('equipamientoevento');
    }
}
