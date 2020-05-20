<?php get_header(); ?>
<div class="content_wrapper">
    <div class="left_content">
        <article class="single_page">
            <!-- Page Section -->

            <?php

                if (have_posts()):
                    while (have_posts()): the_post();
            ?>
            <!-- Page Title -->
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <!-- Page Thumbnails -->
            <div class="post_thumbnails">
                <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                ?>
            </div>

            <!-- Page Content -->
            <p>
                <?php
                    the_content();
                ?>
                <br><br>
            </p>

            <?php
                endwhile;
                else:
                    echo "No Post Founded!";
                    
                endif;

            ?>


        </article>
    </div>
    <?php get_sidebar(); ?>
    <br class="clear" />
</div>

<?php get_footer(); ?>