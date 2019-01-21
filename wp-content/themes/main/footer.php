<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mainTheme
 */

?>

	<footer>
		<div class="container">
			<div class="row">
				<?php $the_query = new WP_Query('p=33'); ?>
				<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-12">
						<h4><a href="#"><?php the_title(); ?></a></h4>
					</div>
					<div class="col-md-6">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata();?>

				<?php $the_query = new WP_Query('p=37'); ?>
				<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-md-6 d-none d-md-block">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata();?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>