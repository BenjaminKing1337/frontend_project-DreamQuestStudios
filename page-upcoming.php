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
                <h2>Upcoming Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. Donec auctor libero efficitur consequat iaculis. Quisque augue velit, aliquet id metus vitae, volutpat porta urna. Vivamus lobortis</p>
            
                <div class="projects">
                    <div class="placeholder">
                        <h2>Coming Soon</h2>
                    </div>
                    <div class="placeholder">
                        <h2>Coming Soon</h2>
                    </div>
                    <div class="placeholder">
                        <h2>Coming Soon</h2>
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