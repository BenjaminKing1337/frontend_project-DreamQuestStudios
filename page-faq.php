<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">
            <!-- splitting layout of this specific page into columns -->
            <div class="column-container clearfix">
            
            <div class="faq">
                    <div><h1 id="fh"><?php the_field('faq_header'); ?></h1></div>
                    
                    <div><h3 id="f1"><?php the_field('1st_faq'); ?></h3></div>
                    <div><h4 id="fa1"><?php the_field('1st_faa'); ?></h4></div>

                    <div><h3 id="f2"><?php the_field('2nd_faq'); ?></h3></div>
                    <div><h4 id="fa2"><?php the_field('2nd_faa'); ?></h4></div>

                    <div><h3 id="f3"><?php the_field('3rd_faq'); ?></h3></div>
                    <div><h4 id="fa3"><?php the_field('3rd_faa'); ?></h4></div>

                    <div><h3 id="f4"><?php the_field('4th_faq'); ?></h3></div>
                    <div><h4 id="fa4"><?php the_field('4th_faa'); ?></h4></div>

                    <div><h3 id="f5"><?php the_field('5th_faq'); ?></h3></div>
                    <div><h4 id="fa5"><?php the_field('5th_faa'); ?></h4></div>


                </div>
            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>