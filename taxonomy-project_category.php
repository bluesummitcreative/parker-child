<?php get_header(); ?>





<div class="content templateProjects">

	

        <ul class="orderByIsotope text-center">
           
            <?php

            $args = array( 'hide_empty=0' );

            $terms = get_terms('project_category', $args);

            $count = count($terms); $i=0;

            if ($count > 0) {

                $term_list = '<li>';

                foreach ($terms as $term) {

                    $i++;

                    $term_list .= '<a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';

                    if ($count != $i) $term_list .= '</li><li>'; else $term_list .= '</li>';

                }

                echo $term_list;

            }?>

        </ul>



    <div class="container">
	    
	    <h1 style="margin: 30px 0 0 10px!important;"><?php $term->name; ?></h1>

        <ul class="projects">

                    <?php while ($wp_query->have_posts()):

                            $wp_query->the_post(); ?>



                        <li class="col-md-4 col-sm-6  project_bucket <?php echo $post_terms; ?>">

                            <a class="um_ajaxLink" href="<?php the_permalink(); ?>">

                                <article class="project">

                                    <div class="projectHover">

                                        <div class="projectContent">

                                            <h5><?php the_title(); ?></h5>

                                        </div>

                                    </div>

                                    <?php if(has_post_thumbnail()): ?>

                                        <?php the_post_thumbnail('projects'); ?>

                                    <?php endif; ?>

                                </article>

                            </a>

                        </li>



                    <?php endwhile; ?>

            </ul>

    </div>

    <?php pagination($wp_query,$wp_rewrite); ?>

</div>



<?php get_footer(); ?>
