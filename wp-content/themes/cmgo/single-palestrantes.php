<?php get_header(); ?>
<?php the_post(); ?>

<div class="entrada">
	<div class="fundo-parallax" style="background: url(<?php echo img('img-fundo-parallax-post.png'); ?>);" data-stellar-background-ratio="0.5">
		<h1 class="titulo-principal"><?php
			$categorias = wp_get_post_terms(get_the_ID(), 'cat_palestrante');
			echo $categorias[0]->name;
		?></h1>
	</div>

	<div class="conteudo-entrada">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="dash"></div>
					<div class="text-center">
					  	<h1 style="color: #666666" ><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="conteudo-principal-da-pagina">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<?php the_post_thumbnail( 'full', ['class'=>'img-fluid'] ); ?>
			</div>
			<div class="col-12 col-md-8">
				<div class="conteudo-padding">
			  		<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<?php get_footer(); ?>