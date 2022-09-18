<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Cliente;

class ClienteTest extends TestCase{
    use RefreshDatabase;

    public function test_clientes_can_be_instantiated(){
        $obj = new Cliente();

        $obj->fill([
            'cpf' => "12345678910",
            'nome' => mb_strtoupper("Cliente da Silva", 'UTF-8'),
            'telefone' => 34232334,
            'endereco' => mb_strtoupper("logradouro rua bairro cidade estado", 'UTF-8')
        ]);

        $obj->save();

        $this->assertModelExists($obj);

    }

}
