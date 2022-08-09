<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration{
    public function up(){
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla');
            $table->integer('tempo');
            $table->unsignedBigInteger('eixo_id');
            $table->foreign('eixo_id')->references('id')->on('eixos');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('cursos');
    }
}
