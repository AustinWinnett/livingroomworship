<?php
  /*
   * Template Name: Home
   */
get_header();
?>

	<div id="primary" class="content-area content-area--home">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) :the_post();

			get_template_part( 'template-parts/content', 'home' );

		endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
