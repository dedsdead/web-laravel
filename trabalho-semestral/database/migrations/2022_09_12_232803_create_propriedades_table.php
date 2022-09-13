<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropriedadesTable extends Migration{
    public function up(){
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_tipo');
            $table->foreign('codigo_tipo')->references('id')->on('tipos');
            $table->unsignedBigInteger('codigo_caracteristica')->nullable();
            $table->foreign('codigo_caracteristica')->references('id')->on('caracteristicas');
            $table->unsignedBigInteger('cpf_cliente')->nullable();
            $table->foreign('cpf_cliente')->references('cpf')->on('clientes');
            $table->string('nome');
            $table->string('descricao');
            $table->double('metragem');
            $table->integer('matricula')->nullable();
            $table->string('endereco');
            $table->boolean('disponivel');
            $table->timestamps();
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
        Schema::dropIfExists('propriedades');
    }
}
