<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minmum-scale=1">
        <!--google-font-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--header-->
        <?php if (is_front_page() ): ?>
        <div class="ly_header">
        <?php else: ?>
        <div class="ly_header ly_header__border">
        <?php endif; ?>
            <!--logo-->
            <a href="<?php echo esc_url(home_url() ); ?>"><img class="bl_headLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/N-Design_logo.png" alt="logo"></a>
            <!--hamburger-->
            <div class="bl_hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!--header nav-->
            <?php
            $args = array(
                'theme_location' => 'header_nav',
                'container' => 'nav',
                'container_class' => 'bl_headerNav_wrap',
                'menu_class' => 'bl_headerNav',
            );
            wp_nav_menu($args);
            ?>
        </div><!--/.ly_header-->
        <?php
        if (!is_front_page() ):
            get_template_part('template-parts/breadcrumb');
        endif;
        

