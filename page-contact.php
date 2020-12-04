<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">
            <!-- splitting layout of this specific page into columns -->
            <div class="column-container clearfix">
                <div class="contact-info">
                    <div><h1><?php the_field('contact_header'); ?></h1></div>
                    
                    <div><h3 id="info1"><?php the_field('1st_info'); ?></h3></div>
                    <hr>
                    <div><h3 id="info2"><?php the_field('2nd_info'); ?></h3></div>
                    <hr>
                </div>

            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>