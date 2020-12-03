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

            <div class="content">

                <h2><?php the_field('1st_header'); ?></h2>
                <p><?php the_field('1st_paragraph'); ?></p>

                <div class="content_box_mythos">
                    <div id="content-text">
                        <h2><?php the_field('2nd_header'); ?></h2>
                        <p><?php the_field('2nd_paragraph'); ?></p>
                    </div>
                    <div class="mythos">
                        <?php if (get_field('1st_m_img')) : ?>
                            <div id="myth1" class="myth" style="background-image: url('<?php the_field('1st_m_img'); ?>')">
                            <?php endif; ?>
                            <h3><?php the_field('1st_m_header'); ?></h3>
                            <p><?php the_field('1st_m_paragraph'); ?></p>
                            </div>
                            <?php if (get_field('2nd_m_img')) : ?>
                                <div id="myth2" class="myth" style="background-image: url('<?php the_field('2nd_m_img'); ?>')">
                                <?php endif; ?>
                                <h3><?php the_field('2nd_m_header'); ?></h3>
                                <p><?php the_field('2nd_m_paragraph'); ?></p>
                                </div>
                                <?php if (get_field('3rd_m_img')) : ?>
                                    <div id="myth3" class="myth" style="background-image: url('<?php the_field('3rd_m_img'); ?>')">
                                    <?php endif; ?>
                                    <h3><?php the_field('3rd_m_header'); ?></h3>
                                    <p><?php the_field('3rd_m_paragraph'); ?></p>
                                    </div>
                                    <?php if (get_field('4th_m_img')) : ?>
                                        <div id="myth4" class="myth" style="background-image: url('<?php the_field('4th_m_img'); ?>')">
                                        <?php endif; ?>
                                        <h3><?php the_field('4th_m_header'); ?></h3>
                                        <p><?php the_field('4th_m_paragraph'); ?></p>
                                        </div>
                                        <?php if (get_field('5th_m_img')) : ?>
                                            <div id="myth5" class="myth" style="background-image: url('<?php the_field('5th_m_img'); ?>')">
                                            <?php endif; ?>
                                            <h3><?php the_field('5th_m_header'); ?></h3>
                                            <p><?php the_field('5th_m_paragraph'); ?></p>
                                            </div>
                                            <?php if (get_field('6th_m_img')) : ?>
                                                <div id="myth6" class="myth" style="background-image: url('<?php the_field('6th_m_img'); ?>')">
                                                <?php endif; ?>
                                                <h3><?php the_field('6th_m_header'); ?></h3>
                                                <p><?php the_field('6th_m_paragraph'); ?></p>
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