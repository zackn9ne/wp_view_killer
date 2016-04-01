<?php
/*
Plugin Name: View Killer
*/

function where_are_we( $hook ) {
    $screen = get_current_screen();

  echo "asdf " . $hook . "screen" . $screen->post_type;    // This bad boy forces HTML edit mode yes
  add_filter( 'wp_default_editor', create_function('', 'return "visual";') );

  if ( $hook == 'post.php' && $screen->post_type == 'post' ) {
  // if ( $hook == 'post.php' && $screen->post_type != 'post' ) {

       //If You're In The Right Place Alert this notice
       echo 'you are on a POST you should be VISUAL';

        // This bad boy forces VISUAL edit mode yes
        add_filter( 'wp_default_editor', create_function('', 'return "visual";') );

    } 

    elseif ( $hook == 'post.php' && $screen->post_type == 'w2dc_listing' ) {
       
       //If You're In The Right Place Alert this notice
       echo 'you are on a w2dc_listing';

       //If You're In The Right Place Peg the User to HTML when they get here
       // This bad boy forces HTML edit mode yes
       add_filter( 'wp_default_editor', create_function('', 'return "html";') );

       
       //If You're In The Right Place Run This Bunch Of JavaScript
       wp_enqueue_script( 'avada-child-stylesheet', plugins_url( 'wp_view_killer/myscript.js' ) );
       
       // If You're In The Right Place Convert Line Breaks To BR's
        function amytheme_tinymce_settings( $tinymce_init_settings ) {
            $tinymce_init_settings['forced_root_block'] = false;
            return $tinymce_init_settings;
        }
        
        add_filter( 'tiny_mce_before_init', 'amytheme_tinymce_settings' );
        remove_filter ( 'the_content', 'wpautop' );
        add_filter ( 'the_content', 'add_newlines_to_post_content' );
        
        function add_newlines_to_post_contentz( $content ) {
            return nl2br( $content );
        }

    
    } else {
        //Die  
      echo "dead";
    }
 

}
add_action( 'admin_enqueue_scripts', 'where_are_we' );
