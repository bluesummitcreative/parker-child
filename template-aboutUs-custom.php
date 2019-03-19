<?php

/*

Template Name: About Us MT Custom

*/



get_header();

?>





<div class="content templateAboutUs">

					

	

	<?php wp_reset_postdata(); ?>

	<?php if(get_the_content()): ?>

			<div style="width: 100%; height: 7px; background: #37454e; border-bottom: 2px solid #FFF;"></div>

			<div class="theContent hasBg" id="aboutMT">

				<h1>About Everitt Construction</h1>

				<p>Our logo says it all! The Myrtle Tree is a symbol of restoration, which is how we like to look at our tenant finish construction and home remodel projects: restoring something that’s existing into something new.</p>

				<p>So why choose Everitt Construction? Owner Grant Everitt has a long history in Fort Collins working with many of the city’s well-known property owners. These long-time customers appreciate our cost-plus pricing, organization, and transparent, open-book approach. The homeowners we work with like our thorough design process and our attention to detail in our work. Whether we’re finishing a commercial space, remodeling a bathroom, or building a house from the ground up, fair prices, quality work, and minimum hassle to keep our customers satisfied is our goal.</p>

			</div>

			<div class="theContent hasBg" style="padding: 0px; padding-top: 3px;">

				<?php the_content(); ?>

			</div>

		

	<?php endif; ?>



	<section class="home_fullSlider">

	

	<?php $members = get_field('members'); ?>



	<?php if($members): ?>



		<div class="frame" id="basic" >

			<ul class="clearfix" >

				

				<?php foreach($members as $member): ?>

					<li>

						<article class="aboutMeBox fluidItem">



						<?php $image = wp_get_attachment_image_src( $member['image'],'full'); ?>

							<img class="me" src="<?php echo $image[0]; ?>">

							<div class="aboutMeContent">

								<h3 class="name"><?php echo $member['full_name'] ?></h3>

								<h6 class="title"><?php echo $member['postition'] ?></h6>

								<p class="description"><?php echo $member['description'] ?></p>

							

								<?php $social_networks = $member['social_networks']; ?>

								<?php if($social_networks): ?>

									

										<ul class="aboutUs_social">

										<?php foreach($social_networks as $network): ?>

											<li><a href="<?php echo $network['url']; ?>"><i class="fa <?php echo $network['network']; ?>"></i></a></li>

										<?php endforeach; ?>

										</ul>



								<?php endif; ?>

							</div>

							

						</article>

					</li>

				<?php endforeach; ?>

			</ul>

		</div>



	

		<?php if(count($members) > 2): ?>

			<div class="controls aboutUsControls">

				<span class="css_arrow prev"></span>

				<span class="css_arrow next"></span>

			</div>

		<?php endif;?>



	<?php endif; ?>



	<?php if(get_field('application_title')): ?>



		<div class="jobAplication">

		<i class="jobAplicationIcon fa <?php the_field('application_icon'); ?>"></i>

			<?php if(get_field('application_type') == 'file'):?>

				<a href="<?php the_field('application'); ?>"><h3><?php the_field('application_title'); ?></h3></a>

			<?php else: ?>

				<a href="<?php the_field('application_url'); ?>"><h3><?php the_field('application_title'); ?></h3></a>

			<?php endif; ?>

			<p><?php  the_field('application_description');?></p>

		</div>



	<?php endif; ?>



	</section>

</div>



<script>

	jQuery(document).ready(function($) {

		aboutUs();	

	});



</script>

<?php get_footer(); ?>
