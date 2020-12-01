<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">

            <div id="elementOne">
                <div id="elOneText">
                    <h2>Xanthous is coming!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet vehicula est ut rhoncus. Mauris hendrerit posuere neque a hendrerit. Nulla id lacus at elit dapibus auctor at a erat. Mauris sapien augue, lobortis eu enim in, viverra tempus risus. Duis ornare sapien lacinia tellus vestibulum blandit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent commodo sagittis elit ac ultrices. Cras at purus eros. Mauris fermentum pellentesque congue. Sed nec magna nec libero vehicula venenatis. Ut diam felis, iaculis eu maximus et, tristique ac ipsum. Morbi mi est, porttitor non aliquam et, imperdiet lobortis libero. Aenean eu lectus id quam euismod venenatis ac consequat odio. Etiam a purus a justo tincidunt aliquet et ac nisi.</p>
                </div>
                <img src="<?php echo 'get_template_directory_uri'(); ?>/assets/logoblack.png" height="400px" width="auto" />

            </div>

            <div id="elementTwo">
                <div id="elTwoText">
                <h2>Checkout the Trailer!</h2>
                </div>
                <iframe class="resp-iframe" src="https://www.youtube.com/embed/LDIoxgnl-ho" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>