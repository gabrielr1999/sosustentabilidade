@extends('layout.site')

@section('titulo','Denuncias')

@section('meta-tags')
      <meta property="og:locale" content="pt_BR" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content='Veja as denuncias no SOSustentabilidade' />
      <meta property="og:url" content="{{ env('APP_URL') }}" />
      <meta property="og:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg" />
      <meta property="og:description" content='Ajude compartilhando as denuncias da sua cidade para chegar aos orgãos reponsáveis!'/>        
      <meta property="og:site_name" content="SOSustentabilidade" />	

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content='Veja as denuncias no SOSustentabilidade'>
      <meta name="twitter:description" content='Ajude compartilhando as denuncias da sua cidade para chegar aos orgãos reponsáveis!'>
      <meta name="twitter:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg">	
@endsection

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
                        <p><strong>Resolvido:</strong> {{$denuncia->resolvido}}</p>
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