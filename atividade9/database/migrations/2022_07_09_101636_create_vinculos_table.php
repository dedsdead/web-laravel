<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinculosTable extends Migration{
    public function up(){
        Schema::create('vinculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professores');
            $table->unsignedBigInteger('disciplina_id');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('vinculos');
    }
}
