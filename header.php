<?php if(!isset($_REQUEST["um_ajax_load_site"])): ?>

<!DOCTYPE html>

<html <?php language_attributes();?>>

<head>

	<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-51495426-1', 'myrtletreecontracting.com');

  ga('send', 'pageview');



</script>

	<script>

        var template_directory = "<?php echo get_template_directory_uri(); ?>";

        var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";

        var postId = "<?php echo $post->ID; ?>";

        var ajaxDisabled = "<?php echo get_field("disable_ajax","options");?>";

    </script>



    <?php if(get_field("site_favicon","options")): ?>

        <link rel="icon" type="image/png" href="<?php the_field("site_favicon","options"); ?>" />

    <?php endif; ?>

    <?php /* Removed to fix Title Tag Issues, and add theme support for WordPress core function for title tag
    
    <title><?php bloginfo('name') ?><?php wp_title(); ?></title>
    
    */ ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    

    <?php doFonts(); ?>

	<?php doBranding(); ?>



	<?php if(get_field('custom_css','options')):?>

		<style>

			<?php the_field('custom_css','options'); ?>

		</style>

	<?php endif; ?>

	

	<?php if(get_field('custom_javascript','options')):?>

		<script>

			<?php the_field('custom_javascript','options'); ?>

		</script>

	<?php endif; ?>



    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >





    

    <div class="um_container">

	<?php if(get_field('background','options') == 'img'): ?>

		<?php

			//set background image

			$backgroundImage = get_field('background_image','options');

			$image = wp_get_attachment_image_src($backgroundImage, 'full');

		?>

		<img class="um_background" src="<?php echo $image[0]; ?>"/>

	<?php endif;?>

	

        <header>

        <i class="responsiveMenuIcon fa fa-bars fa-2x"></i>

            <div class="menu_container"> 



      <?php $hasManu1 = false; ?>      

      <?php $hasManu2 = false; ?>      

      <?php $logoClassName = ''; ?>      

             

      <?php 



            if(has_nav_menu('first_menu')){

                $hasManu1 = true;

                $logoClassName .= ' logo_right';

            }

            if(has_nav_menu('second_menu')){

                $hasManu2 = true;

                $logoClassName .= ' logo_left';

            }





         ?>



                <div class="manuAndLogo <?php echo $logoClassName?>">

                <?php if(has_nav_menu('first_menu')): ?>

                    <nav class="navbar first_menu" role="navigation">

                        <?php

                            $defaults = array(

                                'theme_location'  => 'first_menu',

                                'menu'            => '',

                                'container'       => 'div',

                                'container_class' => '',

                                'container_id'    => '',

                                'menu_class'      => 'nav nav-pills',

                                'menu_id'         => '',

                                'echo'            => true,

                                'fallback_cb'     => 'wp_page_menu',

                                'before'          => '',

                                'after'           => '',

                                'link_before'     => '',

                                'link_after'      => '',

                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                                'depth'           => 0

                            );

                            wp_nav_menu( $defaults );

                        ?>

                    </nav>

                <?php endif; ?>



                    <?php if(get_field('logo','options') == "text"): ?>

                                <div class="logo <?php echo $logoClassName?>">

                                    <a href="<?php echo site_url(); ?>">

                                        <h1 class="logoTitle" ><?php the_field('text_logo','option'); ?></h1>

                                        <h6 class="logoTitle" ><?php the_field('logo_slogan','option'); ?></h6>

                                    </a>

                                </div>

                    <?php elseif(get_field('logo','options') == "image"): ?>

                                <div class="logo <?php echo $logoClassName?>">

                                    <a href="<?php echo site_url(); ?>">

                                      <?php $logo_image = wp_get_attachment_image_src( get_field('image_logo' ,'option'), 'logo_image'); ?>

                                      <img src="<?php echo $logo_image[0]; ?>">

                                    </a>

                                </div>   

                    <?php else: ?>

                             <div class="logo <?php echo $logoClassName?>">

                                <a  href="<?php echo site_url(); ?>">

                                    <h1 class="logoTitle"> <?php bloginfo('name');?> </h1>

                                </a>

                             </div>   

                    <?php endif; ?>







                <?php if(has_nav_menu('second_menu')): ?>

                        <nav class="navbar second_menu" role="navigation">

                        <?php

                            $defaults = array(

                                'theme_location'  => 'second_menu',

                                'menu'            => '',

                                'container'       => 'div',

                                'container_class' => '',

                                'container_id'    => '',

                                'menu_class'      => 'nav nav-pills',

                                'menu_id'         => '',

                                'echo'            => true,

                                'fallback_cb'     => 'wp_page_menu',

                                'before'          => '',

                                'after'           => '',

                                'link_before'     => '',

                                'link_after'      => '',

                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                                'depth'           => 0

                            );

                            wp_nav_menu( $defaults );

                        ?>

                    </nav>

                <?php endif; ?>



                </div>



            </div>

        </header>





        <div class="main_container">







                 

<?php endif; ?>



            <?php if(!get_field('disable_ajax','options')): ?>

                <div id="um_shadow" class="active">

                    <div class="spinner"></div>

                </div>

            <?php endif; ?>



