<?php

/*Template Name: Special Layout */

get_header(); ?>

<!-- the post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <?php if (get_field('bg_img')) : ?>
            <div style="background-image: url('<?php the_field('bg_img'); ?>')">
            <?php endif; ?>

            <article class="post page">
                <!-- a customizable info-box to display on desired pages -->

                <!-- the post title -->
                <h2>
                    <?php the_title(); ?>
                </h2>


                <!-- the post content -->
                <?php the_content(); ?>
            </article>
    <?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

    ?>