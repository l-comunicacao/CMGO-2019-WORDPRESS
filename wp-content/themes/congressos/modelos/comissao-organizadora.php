<?php get_header(); ?>
<?php the_post(); ?>

<?php get_template_part( 'includes/entrada-pagina' ); ?>


<div class="conteudo-principal-da-pagina">
	<div class="container">
		<div class="row">
			<div class="col">
			  	<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>



<div class="destaque-comissao">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-5 offset-md-1">
			  	<?php get_template_part('includes/slider-modular'); ?>
			</div>
			<div class="col-12 col-md">
				<?php get_template_part( 'includes/box-temas-cientificos' ); ?>
			</div>
		</div>
	</div>
</div>




<?php get_template_part( 'includes/chamada-contato' ); ?>

<?php get_template_part( 'includes/patrocinadores' ); ?>

<?php get_footer(); ?>