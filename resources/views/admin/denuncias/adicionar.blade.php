@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Adicionar Denuncias</h3>
        <div class="row">
            <form action="{{route('admin.denuncias.salvar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.denuncias._form')

                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>  
    </div>
@endsection