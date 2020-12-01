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
            <div id="elementOne">
                <div id="elOneText">
                    <h2>Xanthous is coming!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet vehicula est ut rhoncus. Mauris hendrerit posuere neque a hendrerit. Nulla id lacus at elit dapibus auctor at a erat. Mauris sapien augue, lobortis eu enim in, viverra tempus risus. Duis ornare sapien lacinia tellus vestibulum blandit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent commodo sagittis elit ac ultrices. Cras at purus eros. Mauris fermentum pellentesque congue. Sed nec magna nec libero vehicula venenatis. Ut diam felis, iaculis eu maximus et, tristique ac ipsum. Morbi mi est, porttitor non aliquam et, imperdiet lobortis libero. Aenean eu lectus id quam euismod venenatis ac consequat odio. Etiam a purus a justo tincidunt aliquet et ac nisi.</p>
                </div>
                <img src="<?php echo 'get_template_directory_uri'(); ?>/assets/logoblack.png" height="400px" width="auto" />

            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>