@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de Denuncias</h3>
        <div class="row">
            @foreach($denuncias as $denuncia)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <a href="{{$denuncia->problema}}/{{$denuncia->titulo}}"><img src="{{asset($denuncia->imagem)}}" width=400px height=180px> </a>
                    </div>
                    <div class="card-content">
                        <h4>{{$denuncia->titulo}}</h4>
                        <p><strong>Estado:</strong> {{$denuncia->estado}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{$denuncia->problema}}/{{$denuncia->titulo}}">Ver mais</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection