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
        Schema::create('carros', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('sucursal');
            $table->string('name');
            $table->string('file')->nullable();
            $table->string('patente')->nullable();
            $table->string('denominacion')->nullable();
            $table->string('marcachasis')->nullable();
            $table->string('modelochasis')->nullable();
            $table->string('año')->nullable();
            $table->string('tipopadron')->nullable();
            $table->string('numerochasis')->nullable();
            $table->string('aceitedemotor')->nullable();
            $table->string('aceitedecaja')->nullable();
            $table->string('liquidorefrigerante')->nullable();
            $table->string('bateria')->nullable();
            $table->string('neumaticosd')->nullable();
            $table->string('neumaticost')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('carros');
    }
};
