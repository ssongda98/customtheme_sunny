<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <!-- SCROLL REAVEL -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="container">
            <header>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/hand_l.png" alt="">
                    <div class="logo_text">
                        <h2><?php bloginfo('name'); ?></h2>
                        <p><?php  bloginfo('description'); ?></p>
                    </div>
                </a>

                <nav class="nav" id="main-menu">
                    <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
                </nav>

                <!-- Hamburger Menu STAR -->
                <input type="checkbox" id="hamburger-input" class="burger-shower"/>
                <label id="hamburger-menu" for="hamburger-input">
                    <nav id="sidebar-menu">
                        <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
                    </nav>
                </label>
                <div class="overlay"></div>
                <!-- Hamburger menu END -->

                <a href="<?php echo home_url(); ?>" class="logo">
                    <div class="bt_donate">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/hand_l.png" alt="">
                        <h5>DONATE TODAY<h5></div>
                        </a>
                        <!-- this is the navbar structure that will emerge from wp php code that will
                        generate the menu <nav> <ul> <li></li> <li></li> </ul> </nav> -->
                    </header>