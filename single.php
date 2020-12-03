<?php get_header(); ?>

<div id="primary" class="row-fluid">
    <div id="content" role="main" class="span8 offset2">
        <div class="stars"></div>
        <div class="twinkling"></div>
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


                        <!-- displays tags if assigned any -->
                        <div class="tags"><?php echo get_the_tag_list('| &nbsp;', '&nbsp;'); ?></div>
                    </div>
                </article>

            <?php endwhile; ?>
            <div id="commentbox">
                <!-- displays comments and comment text box -->
                <?php if (comments_open() || '0' != get_comments_number())
                    comments_template('', true); ?>
            </div>
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