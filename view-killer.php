<?php
/*
Plugin Name: View Killer
*/

function rwpse162680_enqueue_script( $hook ) {
    $screen = get_current_screen();
    if ( $hook == 'post.php' && $screen->post_type != 'w2dc_listing' ) {
        return;
    }
    // wp_enqueue_script( 'avada-child-stylesheet', get_template_directory_uri() . '-Child-Theme/myscript.js' );
    wp_enqueue_script( 'avada-child-stylesheet', plugins_url( 'wp_view_killer/myscript.js' ) );
    // wp_enqueue_script( plugin_dir_path(rad) . 'view-killer/myscript.js' );
    // wp_enqueue_script( plugins_url( 'myscript.js' , __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'rwpse162680_enqueue_script' );
