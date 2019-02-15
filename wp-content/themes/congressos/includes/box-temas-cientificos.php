<div class="box-temas-cientificos">
	<div class="titulo">Temas Científicos</div>
	<div class="conteudo">
		<?php $temas = get_temas_cientificos(); ?>
		<?php foreach ($temas as $tema){ ?>
			<div class="tema">• <?php echo $tema; ?></div>
		<?php } ?>
	</div>
</div>