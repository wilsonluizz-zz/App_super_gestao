@extends('site/layouts/basico')

@section('titulo', $titulo)

@section('conteudo')
    

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site/layouts/components/form_contato', ['classe' => 'borda-preta'])
                    <p>
                        A nossa equipe snalisará a sua mensagem e retornaremos
                        o mais breve possível.
                    </p>
                    <p>
                        Nosso tempo médio de resposta é de 48 horas.
                    </p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site/layouts/partial_views/rodape')

@endsection
