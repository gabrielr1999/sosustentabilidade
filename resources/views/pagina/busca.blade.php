@extends('layout.site')

@section('titulo','Denuncias')

@section('meta-tags')
      <meta property="og:locale" content="pt_BR" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content='Denuncias por Estado - SOSustentabilidade' />
      <meta property="og:url" content="{{ env('APP_URL') }}denuncias/pesquisa?search={{$search}}" />
      <meta property="og:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg" />
      <meta property="og:description" content='Saiba todos os estado com denuncia.'/>        
      <meta property="og:site_name" content="SOSustentabilidade" />	

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content='Denucias por Estado - SOSustentabilidade'>
      <meta name="twitter:description" content='Saiba todos os estado com denuncia.'>
      <meta name="twitter:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg">	
@endsection

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