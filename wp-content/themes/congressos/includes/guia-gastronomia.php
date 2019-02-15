<?php $categorias = get_terms( array(
    'taxonomy' => 'category',
    'parent' => 9,
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
	<div class="row">
	<?php foreach ($entretenimento as $post){ setup_postdata( $post );  ?>
		<div class="col-6 col-md-3">
			<a href="http://<?php the_field('url'); ?>" target="_blank">
				<div class="column-item-retangulo">
					<div class="city-guide-col-title column-item-title secundary-text"><?php the_title(); ?></div>
					<div class="text-center">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</div>
				</div>
			</a>
		</div>
	<?php } ?>
	</div>
<?php } ?>