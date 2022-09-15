<html>
    <body>
        <h4>Olá {{$user->name}}, temos uma novidade pra você!</h4>
        <p>({{ $propriedade->tipo->nome }}) {{$propriedade->nome}}</p>
        <p>{{ $propriedade->descricao }}</p>
        <p>No endereço: {{$propriedade->endereco}}</p>
        <p>Com a metragem de: {{$propriedade->metragem}}</p>
    </body>
</html>