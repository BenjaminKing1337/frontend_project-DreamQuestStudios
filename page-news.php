<?php

get_header(); ?>



<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>



        <article class="post page" id="hCorrection">
            <!-- splitting layout of this specific page into columns -->
               

            <div class="column-container clearfix">
                
                <!-- Title column -->
                <div class="title-column">
                    <h2><?php the_title(); ?></h2>
                    <img src="<?php echo 'get_template_directory_uri'(); ?>/assets/logoblack.png" height="200" width="auto"/>
                </div>
                <!-- The content column -->
                <div class="text-column">
                    <?php the_content(); ?>
                </div>

            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>