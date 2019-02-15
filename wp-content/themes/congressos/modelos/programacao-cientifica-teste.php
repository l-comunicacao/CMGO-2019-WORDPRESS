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


<?php  ?>

<?php
global $listaProgramacao;

$dias = get_arvore_taxonomy('sala', 0);
foreach ($dias as $dia) {
	$dia->salas = get_arvore_taxonomy(
										'sala',
										$dia->term_id,
										null,
										null
									);
}

?>

<!-- Botões dos dias -->
<div class="container">
	<div class="row">
		<?php
		foreach ($dias as $dia) {
			?>
			<div class="col-4">
				<div class="espacamento-btn">
					<a href="#" class="btn btn-primary btn-lg full-width btn-action-show" data-value="<?php echo $dia->slug ?>" data-list=".btn-sala"><?php echo $dia->name ?></a>
				</div>
			</div>
			<?php
			foreach ($dia->salas as $sala){
				?><?php
			}
		}
		?>
	</div>
</div>

<!-- Botões das salas -->
<div class="container">
	<div class="row">
		<?php
		// Gerando botoes
		foreach ($dias as $dia) {
			foreach ($dia->salas as $sala){
				?>
				<div class="col-4 btn-sala <?php echo $dia->slug ?>">
					<div class="espacamento-btn">
						<a href="#" class="btn btn-primary btn-lg full-width btn-action-show" data-value="<?php echo $sala->slug ?>" data-list=".programacao-corrida"><?php echo $sala->name ?></a>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>

<?php
foreach ($dias as $dia) {
	foreach ($dia->salas as $sala){
		$listaProgramacao = $sala;
		?><div class="programacao-corrida <?php echo $dia->slug ?> <?php echo $sala->slug ?>"><?php
			get_template_part( 'includes/programacao-corrida' );
		?></div><?php
	}
}
?>

<?php  ?>



<?php get_template_part( 'includes/chamada-contato' ); ?>

<?php get_template_part( 'includes/patrocinadores' ); ?>

<?php get_footer(); ?>