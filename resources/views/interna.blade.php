@extends('layout.site')

@section('titulo','Denuncias')

@section('meta-tags')
      <meta property="og:locale" content="pt_BR" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content='{{$registros[0]->titulo}}' />
      <meta property="og:url" content='{{$urlSocial}}' />
      <meta property="og:image" content='{{ env('APP_URL_IMG') }}{{$registros[0]->imagem}}' />
      <meta property="og:description" content='{{substr($registros[0]->descricao, 0, 130)}}'/>        
      <meta property="og:site_name" content="SOSustentabilidade" />	

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content='{{$registros[0]->titulo}}'>
      <meta name="twitter:description" content='{{substr($registros[0]->descricao, 0, 130)}}'>
      <meta name="twitter:image" content="{{ env('APP_URL_IMG') }}{{$registros[0]->imagem}}">	
@endsection

@section('conteudo')

  <div class="container">
    <div class="row">
      <div class="col s12"><h1 class="center">{{$registros[0]->titulo}}</h1></div>
      <div class="col s12 center"><img src="{{ env('APP_URL_IMG') }}{{$registros[0]->imagem}}" class="responsive-img" width="600" height="420"></div>
    </div>
    @include('componentes.sociais')
    <div class="row">
      <div class="col s12"><p class="flow-text">{{$registros[0]->descricao}}</p></div>
    </div>
    <h5>Localização</h5>
    <ul class="collapsible">
      <li>
        <div class="collapsible-header"><i class="material-icons">public</i>Estado</div>
        <div class="collapsible-body"><span>{{$registros[0]->estado}}</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">map</i>Municipio</div>
        <div class="collapsible-body"><span>{{$registros[0]->municipio}}</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Bairro</div>
        <div class="collapsible-body"><span>{{$registros[0]->bairro}}</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">my_location</i>Ponto de referência</div>
        <div class="collapsible-body"><span>{{$registros[0]->pntReferencia}}</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">home</i>Endereco</div>
        <div class="collapsible-body"><span>{{$registros[0]->endereco}}</span></div>
      </li>
    </ul>
  </div>
@endsection