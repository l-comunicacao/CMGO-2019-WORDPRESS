<?php get_header(); ?>

<?php get_template_part( 'includes/entrada-pagina' ); ?>

<div class="w-section city-guide-content">
	<div class="container overflow">
		<div class="row">
			<div class="col-12 col-md">
				<div class="city-guide-column" data="5">
					<div class="city-guide-col-title secundary-text">Pacote Turismo</div>
					<div class="d-none d-md-block text-center">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
				</div>
			</div>

			<div class="col-12 col-md">
				<div class="city-guide-column" data="4">
					<div class="city-guide-col-title secundary-text">Passeios</div>
					<div class="d-none d-md-block text-center">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
				</div>
			</div>

			<div class="col-12 col-md">
				<div class="city-guide-column" data="1">
					<div class="city-guide-col-title secundary-text">gastronomia</div>
					<div class="d-none d-md-block text-center">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="col-12 col-md">
				<div class="city-guide-column active" data="2">
					<div class="city-guide-col-title secundary-text">hospedagem</div>
					<div class="d-none d-md-block text-center">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<!-- <div class="col-12 col-md">
				<div class="city-guide-column" data="3">
					<div class="city-guide-col-title secundary-text">telefones úteis</div>
					<div class="d-none d-md-block text-center">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</div>
				</div>
			</div> -->
		</div>
	</div>



	
	<!-- Bloco Passeios -->
	<div class="container container-items active" data="4">
		<?php get_template_part( 'includes/guia-passeios' ); ?>
		<br>
	</div>

	<!-- Pacotes de turismo -->
	<div class="container container-items" data="5">
		<?php get_template_part( 'includes/guia-pacotes-turismo' ); ?>
		<br>
	</div>

	<!-- Bloco Gastronomia -->
	<div class="container container-items" data="1">
		<?php get_template_part( 'includes/guia-gastronomia' ); ?>
		<br>
	</div>

	<!-- Bloco Hospedagens -->
	<div class="container container-items" data="2">
		<?php get_template_part( 'includes/guia-hospedagem' ); ?>
		<br>
	</div>

	<!-- Telefone úteis -->
	<div class="container container-items" data="3">
		<?php get_template_part( 'includes/guia-telefones-uteis' ); ?>
		<br>
	</div>


</div>









<?php get_footer(); ?>