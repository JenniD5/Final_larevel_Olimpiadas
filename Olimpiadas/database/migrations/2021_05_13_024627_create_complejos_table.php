<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complejos', function (Blueprint $table) {
            $table->id();
            $table->string('jefe');
            $table->text('localizacion');
            $table->float('areatotal');
            
            $table->unsignedBigInteger('sede_id')->unique();
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('complejos');
    }
}
