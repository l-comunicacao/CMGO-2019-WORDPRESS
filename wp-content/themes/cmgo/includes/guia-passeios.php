	<div class="row">
		<div class="col-md-6" style="padding: 0 5px">
<?php $categorias = get_terms( array(
    'taxonomy' => 'category',
    'parent' => 41,
    'hide_empty' => false,
)); ?>

<?php $number = 0; ?>
<?php foreach ($categorias as $categoria){ $number++ ?>

	<div class="row entertaimento">
		<div class="col-12">
			<div class="city-types <?php echo  ($number==1)?'no-top':'' ?>">
				<?php echo $categoria->name; ?> <small>(por adesão)</small>
			</div>
		</div>
	</div>
	<?php $entretenimento = get_posts( ['post_type'=>'post','numberposts'=>-1,'category'=>$categoria->term_id] ); ?>
	<?php foreach ($entretenimento as $post){ setup_postdata( $post );  ?>
		<div class="row entertaimento" style="background-color: #ece8e8; margin-bottom: 5px;">
			<div class="col-12 col-md-4">
				<div class="image-entertaiment" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
			</div>
			<div class="col-12 col-md-8 col-entertaiment">
								<div class="centralizar">
					<a href="<?php the_permalink(); ?>"><span style="    font-size: 17px;
    margin-top: 20px; font-weight: bold;"><?php the_title(); ?></span></a>
					<div><?php the_excerpt(); ?></div>
					<a href="<?php the_permalink(); ?>"><div>Saiba mais</div></a>
					<br>
				</div>
			</div>
		</div>
	<?php } ?>

<?php } ?>
</div>



		<div class="col-md-6 " style="padding: 0 5px">
<?php $categorias = get_terms( array(
    'taxonomy' => 'category',
    'parent' => 23,
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
		<div class="row entertaimento" style="background-color: #ffffff; margin-bottom: 5px;">
			<div class="col-12 col-md-4">
				<div class="image-entertaiment" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
			</div>
			<div class="col-12 col-md-8 col-entertaiment" style="    border-bottom: none;
    border-right: none;">
				<div class="centralizar">
					<a href="<?php the_permalink(); ?>"><span style="    font-size: 17px;
    margin-top: 20px; font-weight: bold;"><?php the_title(); ?></span></a>
					<div><?php the_excerpt(); ?></div>
					<a href="<?php the_permalink(); ?>"><div>Saiba mais</div></a>
					<br>
				</div>
			</div>
		</div>
	<?php } ?>

<?php } ?>
</div>
</div>