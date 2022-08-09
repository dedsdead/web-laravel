<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration{
    public function up(){
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->integer('siape')->unique();
            $table->unsignedBigInteger('eixo_id');
            $table->foreign('eixo_id')->references('id')->on('eixos');
            $table->boolean('ativo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('professores');
    }
}
