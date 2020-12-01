<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">

            <div id="elementOne">
                <div id="elOneText">
                    <h2><?php the_field('1st_header'); ?></h2>
                    <p><?php the_field('1st_paragraph'); ?></p>
                </div>
                <?php if (get_field('1st_img')) : ?>
                    <img src="<?php the_field('1st_img'); ?>" />
                <?php endif; ?>
            </div>
            <br>
            <div id="elementTwo">
                <div id="elTwoText">
                    <h2><?php the_field('2nd_header'); ?></h2>
                </div>
                <div id="video-container">
                    <div class="embed-container">
                        <?php the_field('video'); ?>
                    </div>
                </div>

            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>