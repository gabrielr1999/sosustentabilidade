@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')
    @if(isset($denuncias))
    <div class="container">
        <br><br><br>
        <h3 class="center">Resultado de busca para <strong>“{{$search}}”</strong></h1>
        <div class="row">
            @foreach($denuncias as $denuncia)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($denuncia->imagem)}}" width=400px height=180px>  
                    </div>
                    <div class="card-content">
                        <h4>{{$denuncia->titulo}}</h4>
                        <p>{{$denuncia->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver mais</a>
                    </div>
                </div>
            </div>
            @endforeach
            @if(count($denuncias) == 0)
                <p class="center flow-text">Desculpe, sem resultados</p>
                <div class="center-align">
                    <a class="waves-effect waves-light btn-large #00695c teal darken-3" href="{{route('site.home')}}">Voltar para home</a>
                </div>
                <br><br><br>
            @endif
        </div>
    </div>
    @endif
@endsection