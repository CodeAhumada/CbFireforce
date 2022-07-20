<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecarro', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('carro_id')->unsigned();
            $table->date('fechainicio')->nullable();
            $table->string('tipo')->nullable();
            $table->string('kilometraje')->nullable();
            $table->string('obsinicio')->nullable();
            $table->date('fechatermino')->nullable();
            $table->string('obstermino')->nullable();
            $table->string('proveedor')->nullable();

            $table->timestamps();

            $table->foreign('carro_id')->references('id')->on('carros')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
