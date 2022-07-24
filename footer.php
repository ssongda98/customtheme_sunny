<footer>
    <!-- <h1 class='footerText'>SUPPORT OUR FAMILIES</h1> -->
    <div class="footer_wrap">
        <div class="footer_content">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/hand_l.png" alt="">
                <div class="logo_text">
                    <h2><?php bloginfo('name'); ?></h2>
                    <p><?php  bloginfo('description'); ?></p>
                </div>
            </a>
            <div class="footer_social">
                <a href="<?php echo home_url(); ?>" class="social">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/social1.png" alt="">
                </a>
                <a href="<?php echo home_url(); ?>" class="social">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/social2.png" alt="">
                </a>
                <a href="<?php echo home_url(); ?>" class="social">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/social3.png" alt="">
                </a>
            </div>
        </div>

        <div class="footer_content">
            <nav class="footer_nav">
                <h2 class="footer_h2">QUICK LINKS</h2>
                <?php
                    $argument = array( 'theme_location' => 'footer' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
        </div>

        <div class="footer_content work_hours">
            <h2 class="footer_h2">WORK HOURS</h2>
            <?php
$work_hours = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'work_hours'
));
if ($work_hours->have_posts()) :
    while ($work_hours->have_posts()) : $work_hours->the_post(); ?>
            <div class="footer_time">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/clock.png" alt="">
                <h4><?php the_title(); ?></h4>
            </div>
            <?php the_content(); ?>
            <?php endwhile; 
endif;
?>

        </div>
        <div class="footer_content">
            <div class="footer_bt_donate">
                <h5>DONATE TODAY<h5></div>
                </div>
            </div>
            <div class="copyright">
                Charities Reg. No. CC24417 | Family Help Trust © 2022
            </div>
        </footer>
    </div>
    <!-- this is the closing tag for the div created in header.php -->
    <?php wp_footer(); ?>
</body>
</html>