<div class="agrupa-box">
    <div class="box-share-group" style="top: 270px;">
<ul class="social-share-group"> 	
<li class="social-share-item skew-content first">
		<a onclick="ga('send', 'event', 'Compartilhamento-web', 'barra-lateral', 'whatsapp');" rel="noreferrer" class="botao-redes botao-whatsapp" href="https://api.whatsapp.com/send?text={{ urlencode($registros[0]->titulo) . ' - ' . $urlSocial }}"  alt="Compartilhe no Whatsapp" title="Compartilhe no Whatsapp" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
	</li>
	
	<li class="social-share-item skew-content">
		<a onclick="ga('send', 'event', 'Compartilhamento-web', 'barra-lateral', 'facebook');" rel="noreferrer" class="botao-redes botao-facebook" href="https://www.facebook.com/sharer.php?u={{ $urlSocial }}&utm_source=facebook"  alt="Nosso Facebook" title="Nosso Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
	</li>

	<li class="social-share-item skew-content">
		<a onclick="ga('send', 'event', 'Compartilhamento-web', 'barra-lateral', 'twitter');" rel="noreferrer" class="botao-redes botao-twitter" href="https://twitter.com/intent/tweet?text={{ urlencode($registros[0]->titulo) }} - &url={{ $urlSocial}}&hashtags=SOSustentabilidade&utm_source=twitter" alt="Perfil no Twitter" title="Perfil no Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
	</li>

	<li class="social-share-item skew-content">
		<a onclick="ga('send', 'event', 'Compartilhamento-web', 'barra-lateral', 'linkedin');" rel="noreferrer" class="botao-redes botao-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $urlSocial }}&title={{ urlencode($registros[0]->titulo) }}" alt="Perfil no Linkedin" title="Perfil no Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	</li> 	
								
	<li class="social-share-item skew-content">
		<a onclick="ga('send', 'event', 'Compartilhamento-web', 'barra-lateral', 'envio por email');" class="botao-redes botao-envelope" href="" alt="Enviar por email" title="Enviar por email" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
	</li> 	
</ul>
</div>
</div>