<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedor</title>
</head>
<body>
    <h1>Fornecedor View </h1>

    {{-- Este é um comentário com a sintaxe blade --}}

    {{-- @php
        if (condition) {
            # code...
        } else {
            # code...
        }
    @endphp --}}

</body>

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) >0 && count($fornecedores) < 10)
    <h3>Existem fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>  
@endif      
</html>