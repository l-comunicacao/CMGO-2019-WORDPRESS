<?php $palestrantes = get_posts( ['post_type'=>'palestrantes','numberposts'=>9, 'cat_palestrante'=>'palestrantes-internacionais'] ); ?>

<?php if(!empty($palestrantes)){ ?>
<section id="palestrantes-internacionais" class="palestrantes-internacionais">
	<div class="container-fluid">
		<div class="col-12 col-md-7">
			<div class="box-palestrantes-internacionais">
				<h2 class="titulo">Palestrantes </br>Internacionais</h2>
			</div>
		</div>
	</div>
</br></br>
	<div class="container">
		<div class="row">
			<?php foreach ($palestrantes as $post){ setup_postdata( $post );  ?>
			<div class="col-12 col-md-2">
			  	<div class="box-palestrante">
			  		<a href="<?php the_permalink(); ?>" title="">
				  		<?php the_post_thumbnail( 'full', ['class'=>'img-full'] ) ?>
				  		<div class="info">
				  			<h3><?php the_title(); ?></h3>
				  			<!-- <h4>Pais</h4> -->
				  		</div>
			  		</a>
			  	</div>
			</div>
			<?php } ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
	</br></br>
</section>
<?php } ?>