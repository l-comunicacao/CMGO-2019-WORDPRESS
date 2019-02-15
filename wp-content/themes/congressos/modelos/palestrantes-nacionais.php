<?php get_header(); ?>
<?php the_post(); ?>

<div class="entrada">
	<div class="fundo-parallax" style="background: url(<?php the_field('imagem_fundo'); ?>);" data-stellar-background-ratio="0.5">
		<h1 class="titulo-principal"><?php the_title(); ?></h1>
	</div>

	<?php $categorias = get_terms([
		'taxonomy' => 'cat_palestrante',
	    'exclude' => [28, 29],
	    'hide_empty' => false
	    ]);
	?>
	<div class="conteudo-entrada">
		<div class="container">
			<div class="row justify-content-center">
				<?php foreach ($categorias as $categoria){ ?>
					<div class="col">&nbsp;</div>
					<div class="col-12 col-md-5">
						<div class="box-outros-palestrantes">
							<div class="dash"></div>
							<?php $palestrantes = get_posts( ['post_type'=>'palestrantes','numberposts'=>-1,'cat_palestrante'=>$categoria->slug] ); ?>
								<h2><?php echo $categoria->name; ?></h2>
							<?php if($palestrantes){ ?>
								<ul>
									<?php foreach ($palestrantes as $post){ setup_postdata( $post );  ?>
										<li><?php the_title() ?></li>
									<?php } ?>
								</ul>
							<?php }else{ ?>
								<span>Em Breve</span><br>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

</div>




<?php get_footer(); ?>