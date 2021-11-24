@extends('layout.site')

@section('titulo','Sobre nós')

@section('meta-tags')
      <meta property="og:locale" content="pt_BR" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content='Saiba mais sobre sustentabilidade - SOSustentabilidade' />
      <meta property="og:url" content="{{ env('APP_URL') }}" />
      <meta property="og:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg" />
      <meta property="og:description" content='O que é sustentabilidade? Como ajudar? Saiba mais!'/>        
      <meta property="og:site_name" content="SOSustentabilidade" />	

      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content='Saiba mais sobre sustentabilidade - SOSustentabilidade'>
      <meta name="twitter:description" content='O que é sustentabilidade? Como ajudar? Saiba mais!'>
      <meta name="twitter:image" content="{{ env('APP_URL')}}image/sosustetabilidade.jpg">	
@endsection

@section('conteudo')

<div class="container">
<h1>Melhorando a sustentabilidade</h1>
</div>
    <div class="container">
        <div class="row">
            <h3>O que é sustentabilidade?</h3>
            <p class="flow-text">Sustentabilidade é uma característica ou condição de um processo ou de um sistema que permite a sua permanência, em certo nível, por um determinado prazo. Ultimamente, este conceito tornou-se um princípio segundo o qual o uso dos recursos naturais para a satisfação de necessidades presentes não pode comprometer a satisfação das necessidades das gerações futuras. Este novo princípio foi ampliado para a expressão "sustentabilidade no longo prazo", um "longo prazo" de termo indefinido.</p>
            <p class="flow-text">A sustentabilidade também pode ser definida como a capacidade de o ser humano interagir com o mundo, preservando o meio ambiente para não comprometer os recursos naturais das gerações futuras. O conceito de sustentabilidade é complexo, pois atende a um conjunto de variáveis interdependentes, mas podemos dizer que deve ter a capacidade de integrar as questões sociais, energéticas, econômicas e ambientais.</p>
            <h3>Que ações poderiam ser desenvolvidas em nossa sociedade para tornar o consumo mais sustentável?</h3>
            <div class="slider" style="top:20px">
                <ul class="slides">
                    <li>
                        <img src="https://plenarinho.leg.br/wp-content/uploads/2017/12/cida-fechando-torneira.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Economize água</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://blog.trash2money.com/wp-content/uploads/2020/06/Impacto-dos-produtos-nao-biodegradaveis-1536x1062.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3 style="background-color:#000000a6;">Prefira produtos biodegradáveis</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://superbeal.com.br/img/news/alimentos_organicos_e_risco_de_cancer_5de6647c51cfc.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3 style="background-color:#000000a6;">Procure alimentos orgânicos</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://www.oarquivo.com.br/images/thumbnails/images/concar1-fill-467x311.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Consuma menos carne</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://catracalivre.com.br/wp-content/thumbnails/4G1HMyT0M7TsIZQi-ZVx7rg-Kqo=/wp-content/uploads/2019/07/animais-silvestres-910x607.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Não crie animais silvetres</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://www.museucasadeportinari.org.br/wp-content/uploads/2019/12/museu-verde-01.png"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Cultive áreas verdes</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://s2.glbimg.com/fcEkzzW79z2XHou7Ld5MDvCO8Lc=/0x0:960x640/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/M/c/V4fp7VTgA2ACEFqPNG8w/lixo-plastico.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Diminua o uso de embalagens</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://cglimpeza.com.br/wp-content/uploads/2021/03/2021-03-guia-sobre-produtos-descart%C3%A1veis-800x415.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Evite produtos descartáveis</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://s2.glbimg.com/ctgnN1yA5sE5_VYTYhokzphm688=/e.glbimg.com/og/ed/f/original/2021/05/27/energia-eletrica-safrapay.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Economize energia</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://media.istockphoto.com/vectors/garbage-containers-and-types-of-trash-recycle-recycled-paper-food-vector-id1128489359"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Recicle lixo</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://www.embtec.com.br/media/resize/1110x1500/pasta/1/5d67b363e25da.png"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">tenha cuidado com resíduos perigosos</h3>
                        </div>
                    </li>
                    <li>
                        <img src="https://s2.glbimg.com/GSX8kEFQtoeQvNbKeRuArEd6r-4=/0x0:752x502/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/U/y/zHGOkEQVC5wdNHT43QyA/evolucao-do-transporte-publico-pode-evitar-engarrafamentos-nas-grandes-cidades.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3 style="background-color:#000000a6;">Evite transporte individual</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>

    <div class="container">
        <p class="flow-text">Tornar um mundo um lugar é uma missão diária e que nunca acaba. Antes de cobrar ações do próximo, o melhor caminho é ser o próprio exemplo. Não é necessário pensar globalmente, comece a mudança pelo que está perto de você, exatamente ao seu alcance, e deixe que as suas próprias atitudes falem por si e influenciem todos ao seu redor.</p>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="https://cdn.noticias.ambientebrasil.com.br/wp-content/uploads/2020/06/sustentabilidade1.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="https://certificadocursosonline.com/blog/wp-content/uploads/2020/04/o-que-%C3%A9-sustentabilidade-2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="https://certificadocursosonline.com/blog/wp-content/uploads/2020/04/O-que-%C3%A9-sustentabilidade.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="https://www.verdeghaia.com.br/wp-content/uploads/2021/03/tripe-da-sustentabilidade-1-1024x683.png"></a>
            <a class="carousel-item" href="#five!"><img src="https://www.verdeghaia.com.br/wp-content/uploads/2017/08/sustentabilidade-1024x621.jpg"></a>
        </div>
        
    </div>

<div class="container">
    <p class="flow-text">"Semear ideias ecológicas e plantar sustentabilidade é ter a garantia de colhermos um futuro fértil e consciente."</p>
    <img style="margin:0px 0px 10px 0px;width: 100%;" class="materialboxed" width="650" src="https://blog.usisolenergia.com.br/wp-content/uploads/2021/02/o-que-e-sustentabilidade-ambiental-e-qual-sua-importancia.jpg">    
</div>

    

@endsection