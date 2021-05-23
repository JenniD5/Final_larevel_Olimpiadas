<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplejosuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complejosuni', function (Blueprint $table) {
            $table->id();
            $table->text('lugar');
            $table->text('nombre');

            $table->unsignedBigInteger('complejo_id')->unique();
            $table->foreign('complejo_id')->references('id')->on('complejos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('complejosuni');
    }
}
