<?php 

  get_header();

  if ( have_posts() ) {

    while ( have_posts() ) {

      the_post(); 

      ?>

        <section class="movie_title">
          <h1><?php echo get_post_meta( get_the_ID(), '_movie_title', true ) ?></h1>
        </section>

        <section class="movie_content">
          <?php the_content() ?>
        </section>
      
      <?php

    }

    wp_reset_postdata();

  }

  else {

    ?> 
      <p><?php esc_html_e( 'There is not a single movie at the moment...' ); ?></p>
    <?php

  }

  get_footer();

?>