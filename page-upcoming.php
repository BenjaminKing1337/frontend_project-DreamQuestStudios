<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">
            <?php

            if (has_children() or $post->post_parent > 0) { ?>
                <nav class="site-nav children-links clearfix">
                    <!-- parent links with children -->
                    <span class="parent-link">
                        <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
                            <?php echo get_the_title(get_top_ancestor_id()); ?>
                        </a></span>

                    <ul>
                        <?php $args = array(
                            'child_of' => get_top_ancestor_id(),
                            'title_li' => ''
                        ); ?>
                        <!-- function to list all pages -->
                        <?php wp_list_pages($args); ?>
                    </ul>
                </nav>
            <?php } ?>
            
            <div class="upcoming">
                <h2><?php the_field('1st_header'); ?></h2>
                <p><?php the_field('1st_paragraph'); ?></p>
            
                <div class="projects">
                    <div class="placeholder">
                        <h2><?php the_field('1st_u_header'); ?></h2>
                    </div>
                    <div class="placeholder">
                        <h2><?php the_field('2nd_u_header'); ?></h2>
                    </div>
                    <div class="placeholder">
                        <h2><?php the_field('3rd_u_header'); ?></h2>
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