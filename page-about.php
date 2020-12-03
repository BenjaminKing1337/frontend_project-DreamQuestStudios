<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page" id="hCorrection">
           <div class="about">
                <h2>Who are Dream Quest Studios?</h2>
                <div class="cards">
                    <div class="card">
                        <div class="img"></div>
                        <h2>The Beginnings</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. Donec auctor libero efficitur consequat iaculis. Quisque augue velit, aliquet id metus vitae, volutpat porta urna. Vivamus lobortis </p>
                    </div>
                    <div class="card">
                    <div class="img"></div>
                        <h2>First Game Finished</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. Donec auctor libero efficitur consequat iaculis. Quisque augue velit, aliquet id metus vitae, volutpat porta urna. Vivamus lobortis </p>
                    </div>
                    <div class="card">
                    <div class="img"></div>
                        <h2>What's Next?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. Donec auctor libero efficitur consequat iaculis. Quisque augue velit, aliquet id metus vitae, volutpat porta urna. Vivamus lobortis </p>
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