<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Desk_Dog_Development
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php $blog_page = get_option('page_for_posts'); ?>

		<?php if ( get_the_post_thumbnail_url($blog_page) ) : ?>

			<?php
				ddd_component(
					'hero-banner',

					array(
						'image'  => get_the_post_thumbnail_url($blog_page)
					)
				)
			?>

		<?php endif; ?>

    <div class="container">

			<?php if ( have_posts() ) : ?>



				<header class="page-header">
					<h1>Songs</h1>
				</header><!-- .page-header -->



				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/partials/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

      </div> <!-- /.container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
