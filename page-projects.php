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
                    <h2><?php the_field('1st_header'); ?></h2>
                     <p><?php the_field('1st_paragraph'); ?></p>
                </div>
<!--                 <?php if (get_field('1st_img')) : ?>
                    <img src="<?php the_field('1st_img'); ?>" />
                <?php endif; ?> -->
            </div>
            <div class="slideshow-container">

        <div class="mySlides fade">
        <div class="numbertext">1 / 17</div>
        <img src="<?php the_field('1st_img'); ?>" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 17</div>
            <img src="<?php the_field('2nd_img'); ?>" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 17</div>
            <img src="<?php the_field('3rd_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 17</div>
            <img src="<?php the_field('4th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 17</div>
            <img src="<?php the_field('5th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 17</div>
            <img src="<?php the_field('6th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 17</div>
            <img src="<?php the_field('7th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">8 / 17</div>
            <img src="<?php the_field('8th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">9 / 17</div>
            <img src="<?php the_field('9th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">10 / 17</div>
            <img src="<?php the_field('10th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">11 / 17</div>
            <img src="<?php the_field('11th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">12 / 17</div>
            <img src="<?php the_field('12th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">13 / 17</div>
            <img src="<?php the_field('13th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">14 / 17</div>
            <img src="<?php the_field('14th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">15 / 17</div>
            <img src="<?php the_field('15th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">16 / 17</div>
            <img src="<?php the_field('16th_img'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">17 / 17</div>
            <img src="<?php the_field('17th_img'); ?>" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
            <span class="dot" onclick="currentSlide(6)"></span> 
            <span class="dot" onclick="currentSlide(7)"></span> 
            <span class="dot" onclick="currentSlide(8)"></span> 
            <span class="dot" onclick="currentSlide(9)"></span> 
            <span class="dot" onclick="currentSlide(10)"></span> 
            <span class="dot" onclick="currentSlide(11)"></span> 
            <span class="dot" onclick="currentSlide(12)"></span> 
            <span class="dot" onclick="currentSlide(13)"></span> 
            <span class="dot" onclick="currentSlide(14)"></span> 
            <span class="dot" onclick="currentSlide(15)"></span> 
            <span class="dot" onclick="currentSlide(16)"></span> 
            <span class="dot" onclick="currentSlide(17)"></span> 
        </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>