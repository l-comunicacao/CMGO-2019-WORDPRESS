<section class="call-to-action-conheca-cidade">
	<div class="container-fluid">
		<div class="row align-items-center">
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
			<div class="col-12 col-md">
				<img src="<?php echo get_field('imagem_call_to_action',28) ?>" class="img-fluid" alt="Responsive image">
			</div>
		</div>
	</div>
</section>