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


<div class="box-entrada">
	<div class="conteudo-entrada">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="dash"></div>
				  	<?php echo the_field('conteudo_entrada'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="conteudo-principal-da-pagina">
	<div class="container">
		<div class="row">
			<div class="col">
			  	<?php the_field('conteudo_principal'); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>