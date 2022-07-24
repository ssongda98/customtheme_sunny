<?php
get_header();
?>

<!-- HERO -->
<div class="hero">
    <img src="<?php echo get_bloginfo('template_url') ?>/img/hero1.png" alt="" style="opacity: .8;" class="hero_img">
    <div class="hero_text">
        <h1>
            <span>SUPPORT</span>
            FOR OUR CHILDREN</h1>
        <p>Family Help Trust recognises that parents often need support to make changes
            so they can improve their lives and those of their children.</p>
        <a href="<?php echo home_url(); ?>" class="logo">
            <div class="bt_donate">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/hand_l.png" alt="">
                <h5>DONATE TODAY<h5></div>
                </a>
            </div>

        </div>




        <!-- ABOUT 01 -->
        <?php
$about = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'about'
));
if ($about->have_posts()) :
    while ($about->have_posts()) : $about->the_post(); ?>

        <article class="about01">
            <div class="about_text">
                <h1><?php the_title(); ?></h1>
                <div class="line"></div>
                <?php the_content(); ?>
            </div>
            <div class="about_img">
                <?php the_post_thumbnail(array('800,600')); ?>
            </div>
        </article>

        <?php endwhile; 
endif;
?>

        <!-- OUR TEAM -->
        <h1 class='title_inbox'>OUR TEAM</h1>
        <div class="team_wrap">
            <?php
$team_members = new WP_Query(array(
    'posts_per_page' => 10,
    'post_type' => 'team_member'
));
if ($team_members->have_posts()) :
    while ($team_members->have_posts()) : $team_members->the_post(); ?>

            <article class="team">
                <div class="team_photo"><?php the_post_thumbnail('medium'); ?></div>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php the_content(); ?>
            </article>

            <?php endwhile; 
endif;
?>      

        </div>

        <!-- DOWNLOAD PDF FILE -->
        <a href="<?php echo get_bloginfo('template_url') ?>/pdf/Website_Customization_Guide.pdf" download>
           <div class="dwn_pdf">Website Custom Guide<br>PDF Download</div> 
        </a>


        <script src="<?php echo get_bloginfo('template_url') ?>/js/script.js"></script>

        <?
get_footer();
?>