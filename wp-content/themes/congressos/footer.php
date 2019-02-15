	<footer id="footer">
		<div class="footer">
			<div class="container">
				<div class="row">
					<?php for($x = 1 ; $x < 7; $x++){ ?>
						<div class="col-12 col-md-4">
							<div class="content-widget">
								<?php dynamic_sidebar( 'footer-'.$x ); ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col">
						<div class="content-widget">
							<?php dynamic_sidebar( 'footer-7' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <?php wp_footer(); ?>

    </body>
</html>



