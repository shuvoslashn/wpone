<?php get_header(); ?>
<div class="content_wrapper">
    <div class="left_content">
        <article class="post">
            <!-- POST Section -->

            <?php

                if (have_posts()):
                    while (have_posts()): the_post();
            ?>
            <!-- Post Title -->
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>


            <!-- Post Meta -->
            <div class="post_meta">
                <!-- Author -->
                Posted By: <?php the_author_posts_link(); ?> |
                <!-- Date -->
                Posted On: <?php the_time("jS F, Y"); ?>
                <!-- Category -->
                Posted In: <?php the_category(", "); ?>
            </div>

            <!-- Post Content -->
            <p>
                <?php
                    if (is_single()):
                        the_content();
                    else:
                        the_excerpt();
                    endif;

                ?>
                <br><br>
            </p>

            <?php
                endwhile;
                else:
                    echo "No Post Founded!";
                    
                endif;

            ?>

            <?php comments_template(); ?>
        </article>
    </div>
    <?php get_sidebar(); ?>
    <br class="clear" />
</div>

<?php get_footer(); ?>