<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mainTheme
 */

get_header();
?>

	<section id="banner">
		<div class="container">
			<?php $the_query = new WP_Query('p=7'); ?>
			<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
				<h1><?php the_title(); ?></h1>    
				<a href="#" class="banner__link"><?php the_content(); ?></a>
				<a href="#" class="link-icon--banner link-icon"><i class="fas fa-chevron-right"></i></a>

				<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
	</section>
	<section id="text-box">
		<div class="row no-gutters">
			<div class="text-box__info col-8">
				<?php $the_query = new WP_Query('p=10'); ?>
				<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
					<p><?php the_title(); ?></p>

					<?php endwhile; ?>
				<?php wp_reset_postdata();?>

		</div>
			<div class="col-4 text-box__link text-center">
				<a href="#" class="link-icon"><i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
	</section>
	<section id="gallery">
			<div class="row no-gutters">
				<div class="col-12 col-sm-4 text-center gallery-block">
					<a href="" class="link-icon"><i class="fas fa-chevron-right"></i></a>
				</div>
				<?php 
						$query = new WP_Query( array( 'category_name' => 'pictures' ) );
							while ( $query->have_posts() ) { $query->the_post(); ?>  
								<div class="col-12 col-sm-4">
											<?php the_post_thumbnail(); ?>
								</div>
									
					<?php } ?> 
<!-- 

				<div class="col-12 col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/images/bridge.jpg" alt="">
				</div>
				<div class="col-12 col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/images/girl.jpg" alt="">
				</div> -->
			</div>
	</section>

<?php

get_footer();
