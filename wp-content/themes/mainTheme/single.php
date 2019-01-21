<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div class="container">
	<h1>Hello world</h1>
<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('age'); ?></h1>

			<!-- <img src="<?php the_field('hero_image'); ?>" /> -->

			<p><?php the_content(); ?></p>

		<?php endwhile; // end of the loop. ?>



</div>

<?php
get_footer();