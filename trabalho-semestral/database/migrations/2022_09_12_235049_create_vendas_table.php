<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration{
    public function up(){
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_propriedade');
            $table->foreign('codigo_propriedade')->references('id')->on('propriedades');
            $table->unsignedBigInteger('id_comprador');
            $table->foreign('id_comprador')->references('id')->on('clientes');
            $table->date('data_venda');
            $table->double('valor_venda');
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
        Schema::dropIfExists('vendas');
    }
}
