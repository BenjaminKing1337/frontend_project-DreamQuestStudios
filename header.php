<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("title") ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

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