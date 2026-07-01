<?php
/**
 * Default Page Template
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <h1><?php the_title(); ?></h1>
    <div class="pl-breadcrumb mt-2">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span>
      <span class="current"><?php the_title(); ?></span>
    </div>
  </div>
</section>

<section class="section-lg">
  <div class="container" style="max-width:820px;">
    <?php while (have_posts()) : the_post(); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
