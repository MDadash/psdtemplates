<?php /* Template Name: MenuPages */ ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="menu-pages col-sx-12">
      <h2><?php the_post(); ?></h2>
      <p class=""><?php the_content(); ?></p>
    </div>
  </div>
</div>

<?php

get_footer();

