<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("title") ?></title>
    <?php wp_head() ?>
</head>


<?php if (get_field('bg_img')) : ?>                            
<body style="background-image: url('<?php the_field('bg_img'); ?>')" <?php body_class(); ?>>
<?php endif; ?>

<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>

    <div class="container">

        <!-- header -->
        <header class="site-header">
           <div id="menuflex"> <img src="<?php echo 'get_template_directory_uri'(); ?>/assets/logoblack.png" height="200" width="auto" />
            
            </div>

                <!-- msg displayed on specific page -->
                <?php if (is_page('page-slug')) { ?>
                    - >The Message< <?php } ?></h5> <!-- nav bar -->
                        <nav id="menuflex" class="site-nav">

                            

                            <!-- pulls in header menu from functions.php -->
                            <?php
                            $args = array(
                                'theme_location' => 'header-menu'
                            );
                            ?>

                            <!-- function to list all pages -->
                            <?php wp_nav_menu($args); ?>

                        </nav>

        </header>