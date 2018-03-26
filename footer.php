<?php if(!isset($_REQUEST["um_ajax_load_site"])): ?>

		

		</div><!-- Main Container -->



		<footer>

			<div class="container">

				<div class="row">

					<div class="copyrightBttm">

						<?php the_field('footer_text_part_1','options'); ?>

					</div>

				</div>

			</div>

		</footer>

		

	</div><!-- um_container -->



		



	</body>

<?php wp_footer(); ?>

</html>

<?php endif;?>