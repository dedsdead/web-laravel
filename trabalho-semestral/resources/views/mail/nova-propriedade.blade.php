<html>
    <body>
        <h4>Olá {{$user->nome}}, temos uma novidade pra você!</h4>
        <p>{{ $propriedade->tipo }} {{$propriedade->nome}}</p>
        <p>{{ $propriedade->descrição }}</p>
        <p>No endereço: {{$propriedade->endereco}}</p>
        <p>Com a metragem de: {{$propriedade->metragem}}</p>
    </body>
</html>