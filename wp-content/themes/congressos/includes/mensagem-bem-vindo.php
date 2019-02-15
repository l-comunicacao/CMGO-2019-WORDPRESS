<?php $post = get_post( 28 ); setup_postdata( $post ); ?>

<div class="msg-bem-vindo">
	<div class="dash"></div>
	<div class="titulo">
		<?php the_field('titulo_home') ?>
	</div>
	<div class="conteudo">
		<?php the_field('texto_home') ?>
	</div>

	<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Saiba Mais</a> -->
</div>
