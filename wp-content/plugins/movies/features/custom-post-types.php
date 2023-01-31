<?php 

	// exit if file is called directly
	if ( ! defined( 'ABSPATH' ) ) { exit; }

  // CPT class
  if ( !class_exists( 'Movies_CPT' ) ) {
    
    class Movies_CPT {
     
      public function __construct() {

        add_action(
        	'init',
        	array( $this, 'register_cpt' )
        );

      }

      public function register_cpt() {
        
        register_post_type( 'movies', array(
          'label'              => __( 'Movies', 'movies' ),
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'show_in_rest'       => true,
          'menu_icon'          => 'dashicons-format-video',
          'supports'           => array( 'title', 'editor', 'movie_title' ),
        ) );

      }

    }
    
    $movies_cpt = new Movies_CPT;

  }

?>