<?php
/**
 * The template for displaying all single posts.
 *
 * @package extremetechnologies
 */

get_header(); ?>

	<div class="subhero subhero-blog">
		<div class="container">
			<div class="col-sm-8">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-sm-4">
				<a href="/blog" class="button orange contact">< Back to Blog</a>
			</div>
		</div>
	</div>
	
	<style type="text/css">
		.entry-title {
			display:none;
		}
	</style>
	
	<div id="primary" class="content-area container">
		<div class="col-lg-9 col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div>

<div class="col-lg-3 col-sm-4">
	<?php get_sidebar(); ?>
</div>

</div><!-- #primary -->

<?php get_footer(); ?>
