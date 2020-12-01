<!-- footer -->
<footer class="site-footer">

    <!-- nav bar -->
    <nav class="site-nav">

        <!-- pulls in footer menu from functions.php -->
        <?php
        $args = array(
            'theme_location' => 'footer-menu'
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </nav>

    <!-- displays title of site, copyright symbol and year -->
    <div id="titleYear">
    <p class="decorNone">
        <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
    </p></div>

</footer>
</div>

<?php wp_footer(); ?> 
</body>

</html>