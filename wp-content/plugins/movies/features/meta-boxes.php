<?php 

	// exit if file is called directly
	if ( ! defined( 'ABSPATH' ) ) { exit; }

  // Meta Boxes class
  if ( !class_exists( 'Movies_Meta_Boxes' ) ) {
    
    class Movies_Meta_Boxes {
     
      public function __construct() {

        add_action(
          'add_meta_boxes', 
          array( $this, 'add_movie_title_meta_box' )
        );

        add_action(
          'save_post', 
          array( $this, 'save_movie_title_data' )
        );

      }

      public function add_movie_title_meta_box() {
        
        add_meta_box(
          'movie_title_box', 
          __( 'Movie Title Box', 'movies' ), 
          array( $this, 'movie_title_box_html' ), 
          'movies'
        );

      }

      public function movie_title_box_html( $post ) {

        $movie_title = get_post_meta( $post->ID, '_movie_title', true );

        ?>
        
          <label for="movie_title">Movie Title:</label>
          <input type="text" name="movie_title" id="movie_title" 
           placeholder="e.g. The Matrix" value="<?php echo $movie_title ?>">
        
        <?php

      }

      public function save_movie_title_data( $post_id ) {
        
        if ( isset( $_POST['movie_title'] ) ) {
          update_post_meta( $post_id, '_movie_title', trim( $_POST['movie_title'] ) );
        }

      }

    }
    
    $movies_meta_boxes = new Movies_Meta_Boxes;

  }

?>