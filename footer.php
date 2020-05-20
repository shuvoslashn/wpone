<footer class="site-footer clearfix">
    <div class="top-footer">
        <?php get_template_part('footer_widgets') ?>
    </div>
    <br>
    <hr>
    <p>All Rights Reserved By <a href="http://shuvom.com">Shuvo Sarker</a> &copy; 2019 -
        <?php the_date("Y"); ?></p>
    <nav id="footer_nav">
        <?php
            $args = array(
                'theme_location' => 'tolarMenu'
            );
            wp_nav_menu($args);
        ?>
    </nav>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>