<?php
$ouro = get_posts(
		array(
			'post_type'=>'patrocinadores',
			'numberposts'=>-1,
			'cat_patrocinador'=>'ouro'
		)
	);
?>
<?php
$prata = get_posts(
		array(
			'post_type'=>'patrocinadores',
			'numberposts'=>-1,
			'cat_patrocinador'=>'prata'
		)
	);
?>
<?php
$bronze = get_posts(
		array(
			'post_type'=>'patrocinadores',
			'numberposts'=>-1,
			'cat_patrocinador'=>'bronze'
		)
	);
?>
<?php
$outros = get_posts(
		array(
			'post_type'=>'patrocinadores',
			'numberposts'=>-1,
			'cat_patrocinador'=>'outros'
		)
	);
?>
<?php
$apoio = get_posts(
		array(
			'post_type'=>'patrocinadores',
			'numberposts'=>-1,
			'cat_patrocinador'=>'apoio'
		)
	);
?>
<div class="container patrocinadores" id="patrocinadores">
	<div class="row justify-content-center">
		<div class="col-12 col-md-4">
			<a class="container-losango">
				<div class="losango-quadrado"></div>
				<div class="conteudo">
					<span>&nbsp;</span>
					<h2 class="titulo">Patrocinadores</h2>
					<div class="dash"></div>
				</div>
			</a>
		</div>
	</div>

	<?php if(!empty($ouro)){ ?>
		<div class="row justify-content-center">
			<div class="col-12">
				<h4><b>Patrocínio Ouro </b></h4> <br>
			</div>
			<?php foreach ($ouro as $post){ setup_postdata($post); ?>
				<div class="col-6 col-md-2">
					<div class="patrocinador ouro"><?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?></div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if(!empty($prata)){ ?>
		<div class="row justify-content-center">
			<div class="col-12">
				<h4><b>Patrocínio Prata </b></h4>
			</div>
			<?php foreach ($prata as $post){ setup_postdata($post); ?>
				<div class="col-6 col-md-2">
					<div class="patrocinador prata"><?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?></div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if(!empty($bronze)){ ?>
		<div class="row justify-content-center">
			<div class="col-12">
				<h4><b><br><br>Patrocínio Bronze </b></h4>
			</div>
			<!-- Gambs Jammal --><div class="row justify-content-center" style="width: 60%">
			<?php foreach ($bronze as $post){ setup_postdata($post); ?>
				<div class="col-6 col-md-4">
					<div class="patrocinador bronze"><?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?></div>
				</div>
			<?php } ?>
			</div>
		</div>
	<br>
	<?php } ?>


	<div class="row justify-content-center">
		<div class="col-12">
			<h4><b>Patrocinadores </b></h4>
		</div>
		<?php if(!empty($outros)){ ?>
			<?php foreach ($outros as $post){ setup_postdata($post); ?>
				<div class="col-12 col-md-2 ">
					<div class="patrocinador outros"><?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?></div>
				</div>
			<?php } ?>
		<?php } ?>
	<br>
	</div>

	<div class="row justify-content-center">
		<div class="col-12">
			<h4><b>Parceiros </b></h4>
		</div>
		<?php if(!empty($apoio)){ ?>
			<?php foreach ($apoio as $post){ setup_postdata($post); ?>
				<div class="col-12 col-md-2 ">
					<div class="patrocinador apoio"><?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?></div>
				</div>
			<?php } ?>
		<?php } ?>
		</div>	


	</div>
<br>
<br>
<br>





</div>
