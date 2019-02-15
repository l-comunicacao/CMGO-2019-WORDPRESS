<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - AdWords: 801145120 -->
<script async
src="https://www.googletagmanager.com/gtag/js?id=AW-801145120"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-801145120');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22597999-40"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-22597999-40');
</script>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="max-age=2419200"/>

	<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '202884607192258');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=202884607192258&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="<?php echo get_home_url(); ?>" title="">
							<img src="<?php echo img('logo.png'); ?>" class="img-fluid logo">
						</a>
					</div>
					<div class="col-12 col-md-7">
						<div class="full-size display-table">
							<div class="display-cell">
								<?php get_template_part( 'includes/menu-header' ) ?>
							</div>
						</div>
					</div>
					
					<!-- BOTÃO CERTO ANTES DO AVACALHAR DR. JOAO PEDRO PEDIR PARA AVACALHAR TUDO
					<div class="col-12 col-md-2">
						<div class="inscricao display-table">
							<div class="display-cell">
								<a href="http://www.28cbrh.com.br/site/inscricoes" class="btn btn-outline-primary btn-lg">Inscrição</a>
								<a href="<?php echo get_the_permalink(33); ?>" class="btn btn-outline-primary btn-lg">Inscrição</a> 
							</div>
					 -->

					<div class="col-12 col-md-2">
						<div class="inscricao display-table">
							<div class="display-cell">
								<a href="http://www.28cbrh.com.br/site/inscricoes" class="btn btn-outline-primary btn-lg">
							    <span">
<!-- 							    	<p style="background-color: #ff4100;font-size: 13px;margin-bottom: 0px;color: #fff;">Prorrogado</p> -->
						    		<p style="margin-bottom: 0px;"> Inscrição</p>
								    <span>
<!-- 									    <p style="background-color: #ff4100;font-size:10px;margin-bottom: 0px;color: #fff;">Valores com desconto </p> -->
									    <p style="background-color:red;font-size: 12px;color: #fff;margin-bottom: 0px;"> INSCREVA-SE</p> <p style="background-color: #003b65;font-size: 13px;margin-bottom: 0px;color: #fff;">NO LOCAL</p>
								    </span>
							    </span">
							    </a>
								<!-- <a href="<?php echo get_the_permalink(33); ?>" class="btn btn-outline-primary btn-lg">Inscrição</a> -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</header>