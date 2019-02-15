<?php $banners = get_banners('slider'); ?>
<div class="slider-modular">

	<div class="container-fluid">
		<div id="sliderModular" class="carousel slide" data-ride="carousel">

			<div class="row">
				<div class="col">
					<div class="carousel-inner">
						<?php foreach ($banners as $x=>$banner) { ?>
							<div class="carousel-item <?php echo ($x===0)?'active':'' ?>">
								<?php if(empty($banner['url_btn'])){ ?>
									<img class="d-block w-100" src="<?php echo $banner['img_url']; ?>">
								<?php }else{ ?>
										<a href="<?php echo $banner['url_btn']; ?>">
											<img class="d-block w-100" src="<?php echo $banner['img_url']; ?>">
										</a>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md">
					<div class="controlers">
						<div class="msg">
							Datas importantes
						</div>
						<a class="carousel-control-prev" href="#sliderModular" role="button" data-slide="prev">
							<div class="square"><span class="prev-icon" aria-hidden="true"></span></div>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#sliderModular" role="button" data-slide="next">
							<div class="square"><span class="next-icon" aria-hidden="true"></span></div>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-12 col-md">
					<!-- <a href="#" title=""> -->
					<a href="<?php echo get_the_permalink(1615); ?>" title="">
						<div class="box-auxiliar display-table container-losango">
							<div class="losango-quadrado"></div>
							<div class="display-cell">
								<div class="conteudo text-center">
									programação completa
									<br>
									<small>Clique aqui</small>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>

</div>
