<?php

/*Template Name: Special Layout */

get_header(); ?>

<!-- the post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">
            
        <!-- the post title -->
            <h2>
                <?php the_title(); ?>
            </h2>
            
            <!-- a customizable info-box to display on desired pages -->
            <div class="info-box">
                <h4><?php the_field('info_box_title'); ?></h4>
                <p><?php the_field('info_box_content'); ?></p>

                </div>

            <!-- the post content -->
            <?php the_content(); ?>
        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>