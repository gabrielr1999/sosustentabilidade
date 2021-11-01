@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Editando Denuncias</h3>
        <div class="row">
            <form action="{{route('admin.denuncias.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.denuncias._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>  
    </div>
@endsection