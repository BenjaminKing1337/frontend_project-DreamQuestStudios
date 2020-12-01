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
            <div id="xElementOne">
                <div id="xElOneText">
                    <h2>Xanthous is coming!</h2>
                    <p>A mysterious note has been recovered at the library of Miskatonic University in New England. As the head librarian you take the investigation upon yourself and venture out to where the note tells you of an unfinished ritual awaiting completion, in a small place called Newbury...</p>
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