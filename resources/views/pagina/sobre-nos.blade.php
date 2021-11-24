@extends('layout.site')

@section('titulo','Sobre nós')

@section('meta-tags')
      <meta property="og:locale" content="pt_BR" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content='Conheça mais sobre a SOSustentabilidade' />
      <meta property="og:url" content="{{ env('APP_URL') }}" />
      <meta property="og:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg" />
      <meta property="og:description" content='Sobre o SOSustentabilidade'/>        
      <meta property="og:site_name" content="SOSustentabilidade" />	

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content='Conheça mais sobre a SOSustentabilidade'>
      <meta name="twitter:description" content='Sobre o SOSustentabilidade'>
      <meta name="twitter:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg">	
@endsection

@section('style','.card-image {
  border-radius: 50%;
  overflow: hidden;
}')

@section('conteudo')

    <div class="container">
        <h1>Sobre nós</h1>
        <p class="flow-text">A SOSustentabilidade surgiu atraves do grupo da UNIFG, com um proposito de solucionar um problema dos Objetivos  de Desenvolviemnto Sustentável (ODS) da ONU.</p>
        <p class="flow-text">Os 17 Objetivos de Desenvolvimento Sustentável (ODS) nasceram na Conferência das Nações Unidas sobre desenvolvimento sustentável no Rio de Janeiro em 2012.  O objetivo foi produzir um conjunto de objectivos que suprisse os desafios ambientais, políticos e econômicos mais urgentes que nosso mundo enfrenta.</p>
        <p class="flow-text">A SOSustentabilide ajuda o cidadão a relatar problemas em relação à lixo, buracos na rua, esgoto, acessibilidade e entre outros. Você pode criar uma denuncia e compartilhar nas suas redes socias o problemas até ela for solucionada.</p>
    </div>

    <div class="container">
        <h2>Time</h2>
        <div class="row">

            <div class="col s12 m4">
                <div class="card #eeeeee grey lighten-3">
                    <div class="card-image">
                        <img src="img/team/alice.jpg">
                    </div>
                    <div class="card-content">
                        <p class="center" style="font-size: 20px;">Alice Soares Nunes de Oliveira</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card #eeeeee grey lighten-3">
                    <div class="card-image">
                        <img src="img/team/gabriel-henrique.jpg">
                    </div>
                    <div class="card-content">
                        <p class="center" style="font-size: 20px;">Gabriel Henrique Arantes Castro de Lima</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card #eeeeee grey lighten-3">
                    <div class="card-image">
                        <img src="img/team/gabriel.jpg">
                    </div>
                    <div class="card-content">
                        <p class="center" style="font-size: 20px;">Gabriel Renan da Silva</p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="row">
            

            <div class="col s12 m4">
                <div class="card #eeeeee grey lighten-3">
                    <div class="card-image">
                        <img src="img/team/linik.jpg">
                    </div>
                    <div class="card-content">
                        <p class="center" style="font-size: 20px;">João Linik Santos da Hora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection