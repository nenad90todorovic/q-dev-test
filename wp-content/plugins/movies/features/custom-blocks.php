<?php 

	// exit if file is called directly
	if ( ! defined( 'ABSPATH' ) ) { exit; }

  // Custom Blocks class
  if ( !class_exists( 'Movies_Custom_Blocks' ) ) {
    
    class Movies_Custom_Blocks {
     
      public function __construct() {

        add_action(
          'init', 
          array( $this, 'movies_block_init' ) 
        );

      }

      public function movies_block_init() {
        
        register_block_type( WP_PLUGIN_DIR . '/movies/build', array(
          'render_callback' => array( $this, 'render_fav_quote' )
        ) );                    

      }

      public function render_fav_quote( $atts, $content, $block ) {

        ob_start();

        $fav_quote = ( isset( $atts['favMovieQuote'] ) ) ? $atts['favMovieQuote'] : null;

        if( $fav_quote ) :
        
          ?>
        
            <section class='fav_movie_quote'>
              <p><b><?php esc_html_e( trim( $fav_quote ), 'movies' ) ?></b></p>
            </section>
        
          <?php

        endif;
        
        return ob_get_clean();

      }

    }
    
    $movies_custom_blocks = new Movies_Custom_Blocks;

  }

?>