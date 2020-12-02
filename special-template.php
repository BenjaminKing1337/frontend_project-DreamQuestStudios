<?php

/*Template Name: Special Layout */

get_header(); ?>

<!-- the post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">
            <!-- a customizable info-box to display on desired pages -->

            <!-- the post title -->
            <h2>
                <?php the_title(); ?>
            </h2>

            <div id="newsflash">
                <h2><?php the_field('news_header'); ?></h2>
                <p><?php the_field('news_paragraph'); ?></p>
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