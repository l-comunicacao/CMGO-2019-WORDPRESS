<?php get_header(); ?>


<section class="banners-principais">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6">
			  	<?php $banners = get_banners('home'); ?>
				<a href="<?php echo $banners[0]['url_btn']; ?>" class="banner-principal">
			  		<?php echo $banners[0]['img']; ?>
				</a>
			</div>

			<div class="col">
			  	<div class="img-bg-full" style="background-image: url(<?php echo img('bg-home-banner.png'); ?>);">
					<div class="container-fluid full-height">
						<div class="row full-height">
							<div class="col-12 col-md-6">
								<a href="#footer" class="mascara cor-02 container-losango">
									<div class="losango-quadrado"></div>
									<div class="conteudo">
										<span>Seja um</span>
										<h2 class="titulo">Patrocinador</h2>
										<div class="dash"></div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="https://www.28cbrh.com.br/inscricao/" class="mascara cinza container-losango">
									<div class="losango-quadrado"></div>
									<div class="conteudo">
										<span>Faça sua</span>
										<div class="titulo">Inscrição</div>
										<div class="dash"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	</div>
</section>

<?php
$noticias = get_posts(['post_type'=>'post','numberposts'=>3]);
// print_r($noticias);
?>
<section class="destaques">
	<div class="container-fluid">
		<div class="row">
			<?php foreach ($noticias as $post) { setup_postdata( $post ); ?>
				<div class="col-12 col-md">
					<!-- <a href="<?php the_permalink(); ?>" title=""> -->
					<a href="#" title="">
					  	<div class="img-bg-full" style="background-image: url(<?php the_field('imagem_da_home'); ?>);">
							<div class="container-fluid full-height">
								<div class="row full-height">
									<div class="col">
										<div class="mascara">
											<div class="conteudo mascara cor-01">
												<div class="texto">
													<div class="display-table">
														<div class="display-cell text-center">
															<?php the_excerpt(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					  	</div>
				  	</a>
				</div>
			<?php } ?>
			<div class="col-12 col-md">
			  	<div class="img-bg-full" style="background-image: url(<?php echo img('bg-home-banner-2.png'); ?>);">
					<div class="container-fluid full-height">
						<div class="row full-height">
							<div class="col">
								<div class="mascara branco display-table full-size">
									<div class="display-cell text-center">
										<!-- <a href="https://www.28cbrh.com.br/" class="btn btn-outline-primary">mais novidades</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	</div>
</section>


<section class="bem-vindo">
	<div class="container-fluid">
		<div class="row">
			<div class="col-10 col-md-5 offset-1">
				<?php get_template_part( 'includes/mensagem-bem-vindo' ); ?>
			</div>
			<div class="col-10 col-md-5 offset-1 offset-md-0">
				<?php get_template_part('includes/slider-modular'); ?>
			</div>
		</div>
	</div>
</section>


<section class="local-home">
	<?php
	global $fundo;
	global $principal;
	$fundo = get_field('fundo_parallax',39);
	$principal = get_field('principal_parallax',39);
	?>
	<?php get_template_part( 'includes/parallax' ); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col text-center">
				<div class="dash"></div>
				<h2 class="titulo"><?php echo get_field('nome_do_local',39); ?></h2>
				<div class="conteudo"><?php echo get_field('resumo',39); ?></div>
				<a href="<?php echo get_the_permalink(39); ?>" class="btn btn-outline-primary">Saiba Mais</a>
			</div>
		</div>
	</div>
</section>


<section class="mensagem-presidente">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-12 col-md-4 offset-md-1">
				<?php echo get_the_post_thumbnail( 46, 'full', ['class'=>'img-fluid'] ) ?>
			</div>
			<div class="col-12 col-md-7">
				<?php get_template_part( 'includes/box-temas-cientificos' ); ?>
			</div>
		</div>
	</div>
</section>


<?php get_template_part( 'includes/palestrantes-internacionais' ); ?>


<section class="tabela-inscricao" id="tabela-inscricao">
	<div class="fundo-parallax" style="background: url(<?php echo $fundo; ?>);" data-stellar-background-ratio="0.5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 col-md-3 offset-1">
					<div class="fundo-site full-size">
						<div class="text">
							<div class="dash"></div>
							<h2 class="titulo">
								Inscrição
							</h2>
							<div class="conteudo">
								Valores especiais para associados SBRH. Caso não seja sócio aproveite para se associar no momento da inscrição e aproveite os desconto
							</div>
							<a href="https://www.28cbrh.com.br/inscricao/" class="btn btn-outline-primary">Faça sua inscrição</a>
						</div>
					</div>
				</div>
				<div class="col-10 offset-1 col-md-7 offset-md-0">
					<div class="fundo-site full-size">
						<?php get_template_part( 'includes/tabela-precos' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="chamada">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?php get_template_part( 'includes/chamada-inscricao' ); ?>
			</div>
		</div>
	</div>
</section>



<section class="call-to-action-conheca-cidade-home">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-12 col-md">
				<img src="<?php echo get_field('imagem_call_to_action',28) ?>" class="img-fluid">
			</div>
			<div class="col-12 col-md">
				<div class="texto-call-to-action">
					<h2>
						<div class="dash"></div>
						<?php echo get_field('titulo_call_to_action',28) ?>
					</h2>
					<div class="conteudo">
						<?php echo get_field('texto_call_to_action',28) ?>
						<a href="<?php echo get_the_permalink(28) ?>" class="btn  img-full btn-outline-primary">Saiba Mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_template_part( 'includes/patrocinadores' ); ?>


<?php get_footer(); ?>