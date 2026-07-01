<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdn.jsdelivr.net">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header id="site-header" role="banner">
  <div class="container">
    <nav class="pl-navbar">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-logo" aria-label="<?php bloginfo('name'); ?> – Home">
        <div class="pl-logo-icon" aria-hidden="true">
          <i class="fa-solid fa-link-slash"></i>
        </div>
        <div class="pl-logo-text">
          <strong>PrimeLink</strong>
          <span>Holdings (Pvt) Ltd</span>
        </div>
      </a>

      <!-- Desktop nav -->
      <ul class="pl-nav-links" role="list">
        <?php
        $nav_items = [
          '/'                       => 'Home',
          '/about-us'               => 'About Us',
          '/services'               => 'Services',
          '/engineering-solutions'  => 'Engineering',
          '/outlets'                => 'Outlets',
          '/it-services'            => 'IT Services',
          '/contact'                => 'Contact',
        ];
        $current = $_SERVER['REQUEST_URI'] ?? '/';
        foreach ($nav_items as $path => $label):
          $url    = home_url($path);
          $active = ($path === '/')
                    ? (is_front_page() ? ' active' : '')
                    : (strpos($current, ltrim($path,'/')) !== false ? ' active' : '');
        ?>
        <li role="listitem">
          <a href="<?php echo esc_url($url); ?>" class="<?php echo $active; ?>">
            <?php echo esc_html($label); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>

      <!-- CTA -->
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pl-nav-cta d-none d-lg-inline-flex align-items-center gap-2">
        <i class="fa-solid fa-paper-plane fa-sm"></i> Get Quote
      </a>

      <!-- Hamburger -->
      <button class="pl-hamburger" id="pl-hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="pl-mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </div>
</header>

<!-- Mobile Nav Drawer -->
<nav id="pl-mobile-nav" class="pl-mobile-nav" aria-label="Mobile navigation" hidden>
  <?php foreach ($nav_items as $path => $label): ?>
  <a href="<?php echo esc_url(home_url($path)); ?>"><?php echo esc_html($label); ?></a>
  <?php endforeach; ?>
  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pl-nav-cta">
    <i class="fa-solid fa-paper-plane fa-sm"></i> Get a Quote
  </a>
</nav>

<main id="main-content" tabindex="-1">
