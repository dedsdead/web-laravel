<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration{
    public function up(){
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cpf');
            $table->unsignedBigInteger('codigo_tipo')->nullable();
            $table->foreign('codigo_tipo')->references('id')->on('tipos');
            $table->unsignedBigInteger('codigo_caracteristica')->nullable();
            $table->foreign('codigo_caracteristica')->references('id')->on('caracteristicas');
            $table->string('nome');
            $table->integer('telefone');
            $table->string('endereco');
            $table->timestamps();
            $table->primary('cpf');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
