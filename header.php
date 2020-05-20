<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

    <head>
        <!-- Wordpress Theme Development Tutorial By- Abdul Kader Hawlader -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php if (is_single() || is_page()) {
    wp_title('', true);
} elseif (is_front_page()) {
    bloginfo('description');
} else {
    bloginfo('description');
} ?> | <?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="container">
            <header class="main-header">
                <div class="header-wrapper" style="overflow:hidden;">
                    <div class="left-header" style="float:left;">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h3><?php bloginfo('description') ?></h3>
                    </div>
                    <div class="right-header" style="float:right;">
                        <?php get_search_form(); ?>
                    </div>
                </div>

                <nav class="main-menu">
                    <div class="menu">
                        <?php
                            $args = array(
                                'theme_location' => 'uporerMenu'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                </nav>
            </header>