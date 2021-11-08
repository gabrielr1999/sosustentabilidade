@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')
    @if(isset($denuncias))
    <div class="container">
        <br><br><br>
        <h3 class="center">Resultado de busca para <strong>“{{$search}}”</strong></h1>
        <div class="row">
            @foreach($denuncias as $denuncia)
            
            <div class="col s12 m7">
                
                <div class="card horizontal">
                <div class="card-image">
                    <img src="{{asset($denuncia->imagem)}}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                    <h5>{{$denuncia->titulo}}</h5>
                    </div>
                    <div class="card-action">
                    <a href="#">Ver mais</a>
                    </div>
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