<?php get_header(); ?>
<div class="content_wrapper">
    <div class="left_content">
        <article class="post">
            <!-- POST Section -->

            <?php

                if (have_posts()):
                    while (have_posts()): the_post();
            ?>
            <div class="single-posts">
                <!-- Post Title -->
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <!-- Post Thumbnails -->
                <div class="post_thumbnails">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                ?>
                </div>

                <!-- Post Meta -->
                <div class="post_meta">
                    <!-- Author -->
                    Posted By: <?php the_author_posts_link(); ?> |
                    <!-- Date -->
                    Posted On: <?php the_time("jS F, Y"); ?> |
                    <!-- Category -->
                    Posted In: <?php the_category(", "); ?> |
                    <!-- Comments -->
                    <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'mycomment', 'Comments Off'); ?>
                </div>

                <!-- Post Content -->
                <p>
                    <?php echo excerpt('25'); ?>
                    <br><br>
                </p>
            </div>

            <?php
                endwhile;
                else:
                    echo "No Post Founded!";
                    
                endif;

            ?>
        </article>

        <!-- Pagination -->
        <div class="main_pagination" style="overflow:hidden;">
            <div class="new_post" style="float: left;"><?php previous_posts_link('Newer Posts') ?></div>
            <div class="old_post" style="float: right;"><?php next_posts_link('Older Posts') ?></div>
        </div>

    </div>
    <?php get_sidebar(); ?>
    <br class="clear" />
</div>

<?php get_footer(); ?>