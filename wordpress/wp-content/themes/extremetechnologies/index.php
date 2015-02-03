<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package extremetechnologies
 */

get_header(); ?>

<div class="subhero subhero-blog">
	<div class="container">
		<div class="col-sm-8">
			<h1>Blog</h1>
			<h3>Read about company news, updates and industry information here.</h3>
		</div>
		<div class="col-sm-4">
			<a href="/contact" class="button orange contact">Contact Us Today</a>
		</div>
	</div>
</div>

	<div id="primary" class="content-area container">
		<div class="col-lg-9 col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div>

<div class="col-lg-3 col-sm-4">
	<?php get_sidebar(); ?>
</div>
	
</div><!-- #primary -->

<?php get_footer(); ?>
