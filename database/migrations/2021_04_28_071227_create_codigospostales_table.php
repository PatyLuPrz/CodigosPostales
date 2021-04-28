<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigospostalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigospostales', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('idEstado')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->mediumInteger('idMunicipio')->unsigned()->nullable();
            $table->string('municipio')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('zona')->nullable();
            $table->integer('cp')->nullable();
            $table->string('asentamiento')->nullable();
            $table->string('tipo')->nullable();
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
        Schema::dropIfExists('codigospostales');
    }
}
