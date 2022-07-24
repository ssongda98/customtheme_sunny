<?php
function styleLoad() {  
    wp_enqueue_style('style', get_stylesheet_uri());    
}
add_action('wp_enqueue_scripts', 'styleLoad');
// Navigation Menu Code
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'sidebar' => __( 'Sidebar Menu')
));
// Custom Post Type Creation
// function create_posttype() {
//     register_post_type( 'wp_teammember',
//       array(
//         'labels' => array(
//           'name' => __( 'Teammembers' ),
//           'singular_name' => __( 'Teammember' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array('slug' => 'teammembers'),
//       )
//     );
//   }
//   add_action( 'init', 'create_posttype' );
// below line enables 'Featured Images' tab to emerge on dashboard for posts/pages/customposts
add_theme_support( 'post-thumbnails' );


