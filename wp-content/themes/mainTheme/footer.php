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

		<footer class="footer">
		<div class="container">
			<div class="row footer_content">
				<div class="copyright-logo">
					<span>&copy; 2018</span>
					<a href="#">Logotype</a>
				</div>

				<nav>
					
					<?php wp_nav_menu( array(
						'theme_location'  => '',
						'menu'            => '',
						'container'       => 'ul',
						'container_class' => 'menu',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
					
				</nav>
			</div>
		</div>
	</footer>
	

<?php wp_footer(); ?>

</body>
</html>
