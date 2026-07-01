<?php
/**
 * Index / Blog fallback — redirects to front page if blog is set as front page accidentally.
 */
if ( get_option('show_on_front') === 'posts' ) {
    wp_redirect( home_url('/') );
    exit;
}
get_header();
?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-newspaper fa-xs me-2"></i>News</div>
    <h1><?php
      if      (is_archive()) the_archive_title();
      elseif  (is_search())  printf('Search Results: "%s"', esc_html(get_search_query()));
      else                   echo 'Latest News';
    ?></h1>
  </div>
</section>

<section class="section-lg">
  <div class="container" style="max-width:860px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5 pb-5'); ?> style="border-bottom:1px solid var(--pl-border);">
      <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('primelink-card', ['class' => 'w-100 rounded-3 mb-3', 'style' => 'height:280px;object-fit:cover;']); ?>
      </a>
      <?php endif; ?>
      <h2 style="font-size:1.4rem;margin-bottom:8px;">
        <a href="<?php the_permalink(); ?>" style="color:var(--pl-dark);text-decoration:none;"><?php the_title(); ?></a>
      </h2>
      <p style="font-size:0.8rem;color:var(--pl-text-muted);margin-bottom:12px;">
        <i class="fa-regular fa-calendar fa-xs me-1"></i><?php echo get_the_date(); ?>
      </p>
      <p class="text-muted-pl"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn-pl btn-outline-dark btn-sm-pl">
        Read More <i class="fa-solid fa-arrow-right fa-sm"></i>
      </a>
    </article>
    <?php endwhile; else : ?>
    <div class="text-center py-5">
      <i class="fa-regular fa-newspaper" style="font-size:3rem;color:var(--pl-border);"></i>
      <h3 class="mt-3">No posts yet</h3>
      <p class="text-muted-pl">Check back soon for news and updates.</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-pl btn-primary-pl mt-2">
        <i class="fa-solid fa-house fa-sm"></i> Back to Home
      </a>
    </div>
    <?php endif; ?>
    <?php the_posts_pagination(['class' => 'mt-4']); ?>
  </div>
</section>

<?php get_footer(); ?>
