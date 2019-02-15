<?php $categorias = get_terms( array(
    'taxonomy' => 'category',
    'parent' => 5,
    'hide_empty' => false,
)); ?>

<?php $number = 0; ?>
<?php foreach ($categorias as $categoria){ $number++ ?>

	<div class="row entertaimento">
		<div class="col-12">
			<div class="city-types <?php echo  ($number==1)?'no-top':'' ?>">
				<?php echo $categoria->name; ?>
			</div>
		</div>
	</div>
	<?php $entretenimento = get_posts( ['post_type'=>'post','numberposts'=>-1,'category'=>$categoria->term_id] ); ?>
	<?php foreach ($entretenimento as $post){ setup_postdata( $post );  ?>
		<div class="row entertaimento">
			<div class="col-12 col-md-3">
				<div class="image-entertaiment" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
			</div>
			<div class="col-12 col-md-9 col-entertaiment">
				<div class="centralizar">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<div><?php the_excerpt(); ?></div>
				</div>
			</div>
		</div>
	<?php } ?>

<?php } ?>
