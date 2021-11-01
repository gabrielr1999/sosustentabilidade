@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de denuncias</h3>
        <div class="row">
            @foreach($denuncias as $denuncia)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($denuncia->imagem)}}">
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
        </div>
        
    </div>
@endsection