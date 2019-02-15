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
				  	<h2 style="color: #003b65" >Convide todos</h2>
				  	<p style="color: #333333" >Gastronomia, cultura e entretenimento para todos os gostos.</br> Aproveite o feriado na semana do Congresso para conhecer o que Minas Gerais tem de melhor.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col">
			<?php get_template_part( 'includes/call-to-action-conheca-local' ); ?>
		</div>
	</div>
</div>

<?php get_template_part( 'includes/chamada-contato' ); ?>

<?php get_template_part( 'includes/patrocinadores' ); ?>

<?php get_footer(); ?>