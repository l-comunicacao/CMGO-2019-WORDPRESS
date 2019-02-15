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




<?php get_template_part( 'includes/chamada-contato' ); ?>

<?php get_template_part( 'includes/patrocinadores' ); ?>

<?php get_footer(); ?>