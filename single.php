<?php get_header(); ?>

<div id="primary" class="row-fluid">
    <div id="content" role="main" class="span8 offset2">

        <!-- the post loop -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article class="post">

                    <!-- title of post -->
                    <h1 class="title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <!-- time of posting and date -->
                        <?php the_time('m.d.Y'); ?>
                        <!-- author name -->
                        <?php the_author(); ?>
                    </div>

                    <div class="the-content">
                        <!-- the post content -->
                        <?php the_content(); ?>

                        <!-- displays pagination link, if any -->
                        <?php wp_link_pages(); ?>
                    </div>

                    <div class="meta clearfix">

                        <!-- displays category if assigned any -->
                        <div class="category"><?php echo get_the_category_list(); ?></div>

                        <!-- displays tags if assigned any -->
                        <div class="tags"><?php echo get_the_tag_list('| &nbsp;', '&nbsp;'); ?></div>
                    </div>
                </article>

            <?php endwhile; ?>

            <!-- displays comments and comment text box -->
            <?php if (comments_open() || '0' != get_comments_number())
                comments_template('', true); ?>

        <?php else : ?>

            <!-- error msg if no posts -->
            <article class="post error">
                <h1 class="404">Nothing has been posted like that yet</h1>
            </article>

        <?php endif; ?>

    </div>
</div>
<?php get_footer();
?>