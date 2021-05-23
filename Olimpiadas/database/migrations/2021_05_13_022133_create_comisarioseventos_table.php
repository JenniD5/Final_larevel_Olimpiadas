<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisarioseventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisarioseventos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('evento_id')->unique();
            $table->foreign('evento_id')->references('id')->on('evento')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('comisario_id')->unique();
            $table->foreign('comisario_id')->references('id')->on('comisario')->onDelete('cascade')->onUpdate('cascade');
            
            $table->string('tarea');
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
        Schema::dropIfExists('comisarioseventos');
    }
}
