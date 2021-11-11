@extends('layout.site')

@section('titulo','Denuncias')

@section('conteudo')

    <div class="container">
    <div class="row">
    <div class="col s12"><h1 class="center">{{$registros[0]->titulo}}</h1></div>
    <div class="col s12 center"><img src="{{ env('APP_URL_IMG') }}{{$registros[0]->imagem}}" class="responsive-img" width="600" height="420"></div>
  </div>
  <div class="row">
    <div class="col s12"><p>{{$registros[0]->descricao}}</p></div>
    
  </div>
  
  <table>
        <thead>
          <tr>
              <th>Estado</th>
              <th>Municipio</th>
              <th>Bairro</th>
              <th>Ponto de referência</th>
              <th>Problema</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$registros[0]->estado}}</td>
            <td>{{$registros[0]->municipio}}</td>
            <td>{{$registros[0]->bairro}}</td>
            <td>{{$registros[0]->pntReferencia}}</td>
            <td>{{$registros[0]->problema}}</td>
          </tr>
        </tbody>
      </table>
@endsection