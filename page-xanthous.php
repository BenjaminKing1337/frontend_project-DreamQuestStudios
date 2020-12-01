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
            <!-- splitting layout of this specific page into columns -->
            <div class="content">
                <h2>Inspiration</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. </p>
                        
                <div class="content_box_mythos">
                    <h2>Relevant Mythos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>

                    <div class="mythos">
                        <div class="myth">
                            <h2>Azathoth</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
                        <div class="myth">
                            <h2>Nyarlathotep</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
                        <div class="myth">
                            <h2>The Nameless City</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
                        <div class="myth">
                            <h2>Inhabitants of the Nameless City</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
                        <div class="myth">
                            <h2>Outer Gods</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
                        <div class="myth">
                            <h2>Lovecraftian works</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit.</p>
                        </div>
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