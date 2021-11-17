@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de denuncias</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Problema</th>
                        <th>Resolvido</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->descricao}}</td>
                        <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                        <td>{{$registro->problema}}</td>
                        <td><label style="margin-left: 10px;"><input type="checkbox" name="resolvido" id="test5" {{$registro->resolvido && $registro->resolvido == 'Sim' ? 'checked' : 'disabled'}}><span></span></label></td>
                        <td>
                            <a class="btn deep-orange" href="{{route('admin.denuncias.editar',$registro->id)}}"><i class="large material-icons">edit</i></a>
                            <a class="btn deep-red" href="{{route('admin.denuncias.deletar',$registro->id)}}"><i class="large material-icons">delete</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn #26a69a teal lighten-1" href="{{route('admin.denuncias.adicionar')}}">Adicionar</a>
        </div>
    </div>
@endsection