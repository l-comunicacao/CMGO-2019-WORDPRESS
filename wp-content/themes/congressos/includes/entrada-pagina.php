<div class="entrada">
	<div class="fundo-parallax" style="background: url(<?php the_field('imagem_fundo'); ?>);" data-stellar-background-ratio="0.5">
		<h1 class="titulo-principal"><?php the_title(); ?></h1>
	</div>

	<div class="conteudo-entrada">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="dash"></div>
				  	<?php echo the_field('entrada'); ?>
				</div>
			</div>
		</div>
	</div>

</div>