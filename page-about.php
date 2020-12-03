<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">
            <div class="about">
                <h2><?php the_field('about_header'); ?></h2>
                <div class="cards">

                        
                        <div class="card" id="card1">
                       
                        <?php if (get_field('1st_img')) : ?>
                        <div class="img" style="background-image: url('<?php the_field('1st_img'); ?>')"></div>
                        <?php endif; ?>
                        <h2><?php the_field('1st_header'); ?></h2>
                        <p><?php the_field('1st_paragraph'); ?></p>
                        </div>
                        
                        
                        <div class="card" id="card2">
                        
                        <?php if (get_field('2nd_img')) : ?>
                        <div class="img" style="background-image: url('<?php the_field('2nd_img'); ?>')"></div>
                        <?php endif; ?>
                        <h2><?php the_field('2nd_header'); ?></h2>
                        <p><?php the_field('2nd_paragraph'); ?></p>
                        </div>
                            
                        
                        <div class="card" id="card3">
                      
                        <?php if (get_field('3rd_img')) : ?>
                        <div class="img" style="background-image: url('<?php the_field('3rd_img'); ?>')"></div>
                        <?php endif; ?>
                        <h2><?php the_field('3rd_header'); ?></h2>
                        <p><?php the_field('3rd_paragraph'); ?></p>
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