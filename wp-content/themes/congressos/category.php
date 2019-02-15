<?php get_header(); ?>
<div class="entrada">
	<div class="fundo-parallax" style="background: url(<?php echo img('img-fundo-parallax-post.png'); ?>);" data-stellar-background-ratio="0.5">
		<h1 class="titulo-principal"><?php single_cat_title(); ?></h1>
	</div>

	<div class="conteudo-entrada">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="dash"></div>
					<div class="text-center">
					  	<h1> <?php if(!have_posts()) echo "Em Breve"; ?> &nbsp;</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="conteudo-principal-da-pagina">
	<div class="container-fluid">
		<div class="row">
			<?php while (have_posts()){ the_post(); ?>
				<div class="col-12 col-md-3">
					<div class="box-noticia">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'full', ['class'=>'img-fluid'] ); ?>
						</a>
						<h3><?php the_title(); ?></h3>
						<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Leia Mais</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<br>
<br>
<?php get_footer(); ?>