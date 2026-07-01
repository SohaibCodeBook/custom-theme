<?php
/**
 * PrimeLink Corporate Theme – Functions
 * Bootstrap 5 + Font Awesome 6 + Soft UI
 */
defined('ABSPATH') || exit;

require_once get_template_directory() . '/inc/setup-wizard.php';

/* ================================================================
   THEME SETUP
   ================================================================ */
function primelink_setup() {
    load_theme_textdomain('primelink', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo', ['height' => 80, 'width' => 250, 'flex-height' => true, 'flex-width' => true]);
    add_theme_support('responsive-embeds');
    register_nav_menus(['primary' => __('Primary Navigation', 'primelink')]);
    set_post_thumbnail_size(900, 500, true);
    add_image_size('primelink-card',  600, 400, true);
    add_image_size('primelink-thumb', 300, 200, true);
}
add_action('after_setup_theme', 'primelink_setup');

/* ================================================================
   ENQUEUE ASSETS — Bootstrap 5 CDN + FA6 + Custom CSS/JS
   ================================================================ */
function primelink_assets() {
    // Bootstrap 5.3 CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );
    // Font Awesome 6 Free
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        [],
        '6.5.2'
    );
    // Main theme stylesheet (after Bootstrap)
    wp_enqueue_style(
        'primelink-style',
        get_stylesheet_uri(),
        ['bootstrap', 'fontawesome'],
        '2.0.0'
    );

    // Bootstrap 5 Bundle JS (includes Popper)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );
    // Main theme JS
    wp_enqueue_script(
        'primelink-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['bootstrap-js'],
        '2.0.0',
        true
    );
    wp_localize_script('primelink-main', 'PrimeLink', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('primelink_form'),
        'site_url' => home_url('/'),
    ]);
}
add_action('wp_enqueue_scripts', 'primelink_assets');

/* ================================================================
   AJAX FORM HANDLER
   ================================================================ */
function primelink_handle_form() {
    check_ajax_referer('primelink_form', 'nonce');
    $name    = sanitize_text_field($_POST['name']    ?? '');
    $phone   = sanitize_text_field($_POST['phone']   ?? '');
    $email   = sanitize_email($_POST['email']        ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (!$name || !$email || !$message || !is_email($email)) {
        wp_send_json_error(['msg' => 'Please fill in all required fields correctly.']);
    }
    $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>'];
    $body = '<p><strong>Name:</strong> ' . esc_html($name) . '</p>'
          . '<p><strong>Phone:</strong> ' . esc_html($phone) . '</p>'
          . '<p><strong>Email:</strong> ' . esc_html($email) . '</p>'
          . '<p><strong>Subject:</strong> ' . esc_html($subject) . '</p>'
          . '<p><strong>Message:</strong><br>' . nl2br(esc_html($message)) . '</p>';

    $sent = wp_mail('info@primelink.com.lk', 'PrimeLink Enquiry: ' . $subject, $body, $headers);
    if ($sent) wp_send_json_success(['msg' => 'Thank you! We will get back to you shortly.']);
    else       wp_send_json_error(['msg' => 'Something went wrong. Please email us directly at info@primelink.com.lk']);
}
add_action('wp_ajax_primelink_form',        'primelink_handle_form');
add_action('wp_ajax_nopriv_primelink_form', 'primelink_handle_form');

/* ================================================================
   CLEAN UP HEAD
   ================================================================ */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/* ================================================================
   EXCERPT
   ================================================================ */
add_filter('excerpt_length', fn() => 18, 999);
add_filter('excerpt_more',   fn() => '…');

/* ================================================================
   BODY CLASSES
   ================================================================ */
add_filter('body_class', function($c) {
    if (is_front_page()) $c[] = 'is-home';
    return $c;
});

if (!defined('DISALLOW_FILE_EDIT')) define('DISALLOW_FILE_EDIT', true);
