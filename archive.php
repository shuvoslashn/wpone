<?php get_header(); ?>
<div class="content_wrapper">
    <div class="left_content">
        <article class="single_page">
            <!-- Page Section -->

            <?php

                if (have_posts()): ?>

            <h2 class="archive_heding">

                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works.?>

                <?php /* If this is a category archive */ if (is_category()) { ?>

                <?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>

                <?php /* If this is a tag archive */  } elseif (is_tag()) { ?>

                <?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>

                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

                <?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>

                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

                <?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>

                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

                <?php _e('Archive For'); ?> <?php the_time('Y'); ?>

                <?php /* If this is a search */ } elseif (is_search()) { ?>

                <?php _e('Search Results'); ?>

                <?php /* If this is an author archive */ } elseif (is_author()) { ?>

                <?php _e('Author Archive For'); ?> '<?php echo get_the_author(); ?>'
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

                <?php _e('Blog Archives'); ?>

                <?php } ?>
            </h2>


            <?php
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
                <?php echo excerpt('25'); ?>
                <br><br>
            </p>

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