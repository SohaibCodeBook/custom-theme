<?php
/**
 * Template Name: Outlets
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-store fa-xs me-2"></i>Find Us</div>
    <h1>Our Outlets</h1>
    <p class="mt-2" style="color:rgba(255,255,255,.7);font-size:1rem;max-width:540px;">Visit our main office and retail outlet in Gampaha for IT products, engineering service enquiries, and technical support.</p>
    <div class="pl-breadcrumb mt-3">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span><span class="current">Outlets</span>
    </div>
  </div>
</section>

<!-- MAIN OUTLET -->
<section class="section-lg">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=75&auto=format&fit=crop"
             alt="PrimeLink Holdings main office and retail outlet in Gampaha, Sri Lanka"
             loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:420px;object-fit:cover;">
      </div>
      <div class="col-lg-6">
        <div class="section-badge"><i class="fa-solid fa-building fa-xs me-2"></i>Main Office</div>
        <h2 class="section-title mt-3">PrimeLink Holdings – Gampaha</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">Our main office serves as both our operational headquarters and retail outlet. Visit us for computer products, IT accessories, engineering service enquiries, and software consultations.</p>

        <div class="d-flex flex-column gap-3 mt-4">
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon" style="background:var(--pl-primary-soft);">
              <i class="fa-solid fa-location-dot" style="color:var(--pl-primary);"></i>
            </div>
            <div>
              <strong style="color:var(--pl-dark);">Office Address</strong>
              <span style="color:var(--pl-text-muted);font-size:0.9rem;">54A, Sanasa Ideal Shopping Complex, Colombo Road, Gampaha 10019, Sri Lanka</span>
            </div>
          </div>
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon" style="background:var(--pl-primary-soft);">
              <i class="fa-solid fa-phone" style="color:var(--pl-primary);"></i>
            </div>
            <div>
              <strong style="color:var(--pl-dark);">Phone / WhatsApp</strong>
              <a href="tel:+94775860868" style="color:var(--pl-text-muted);font-size:0.9rem;">+94 775 860 868</a>
            </div>
          </div>
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon" style="background:var(--pl-primary-soft);">
              <i class="fa-solid fa-envelope" style="color:var(--pl-primary);"></i>
            </div>
            <div>
              <strong style="color:var(--pl-dark);">Email</strong>
              <a href="mailto:info@primelink.com.lk" style="color:var(--pl-text-muted);font-size:0.9rem;">info@primelink.com.lk</a>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <h5 style="font-size:0.9rem;font-weight:700;margin-bottom:12px;">Available at Our Outlet</h5>
          <div class="d-flex flex-wrap gap-2">
            <?php foreach (['Laptops','Desktop PCs','Computer Accessories','Networking Equipment','SSDs & RAM','USB Drives','Keyboards & Mice','Monitors','Laptop Bags','Chargers & Cables'] as $p) : ?>
            <span class="pl-tag primary"><?php echo esc_html($p); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl">
            <i class="fa-solid fa-paper-plane fa-sm"></i> Contact Us
          </a>
          <a href="https://wa.me/94775860868" target="_blank" rel="noopener" class="btn-pl btn-accent-pl">
            <i class="fa-brands fa-whatsapp fa-sm"></i> WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOURS + EXPANSION -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="row g-5">
      <!-- Business Hours -->
      <div class="col-lg-5">
        <div class="pl-contact-info-card">
          <h3><i class="fa-solid fa-clock me-2"></i>Business Hours</h3>
          <p>Our office is open during the following hours. Contact us in advance for holiday visits.</p>
          <div class="pl-hours-list">
            <?php
            $hours = [
              ['Monday',    '8:30 AM – 5:30 PM'],
              ['Tuesday',   '8:30 AM – 5:30 PM'],
              ['Wednesday', '8:30 AM – 5:30 PM'],
              ['Thursday',  '8:30 AM – 5:30 PM'],
              ['Friday',    '8:30 AM – 5:30 PM'],
              ['Saturday',  '9:00 AM – 2:00 PM'],
              ['Sunday',    'Closed'],
            ];
            foreach ($hours as [$day,$time]) : ?>
            <div class="pl-hours-row">
              <span><?php echo esc_html($day); ?></span>
              <span><?php echo esc_html($time); ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Expansion -->
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-map-location-dot fa-xs me-2"></i>Coming Soon</div>
        <h2 class="section-title mt-3">Future Outlet Expansion</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">PrimeLink Holdings plans to expand its retail presence to additional districts across Sri Lanka. More outlets are coming soon to better serve our growing client base island-wide.</p>
        <div style="background:var(--pl-white);border:2px dashed var(--pl-border);border-radius:var(--pl-radius-lg);padding:20px 24px;margin:20px 0;display:flex;align-items:center;gap:14px;">
          <i class="fa-solid fa-clock-rotate-left" style="color:var(--pl-text-muted);font-size:1.5rem;"></i>
          <div>
            <strong style="color:var(--pl-dark);font-size:0.95rem;">Additional outlets coming soon</strong>
            <p style="margin:0;font-size:0.83rem;color:var(--pl-text-muted);">We are planning expansion to multiple districts across Sri Lanka.</p>
          </div>
        </div>
        <h5 style="font-size:0.9rem;font-weight:700;margin-bottom:14px;color:var(--pl-dark);">Planned Districts</h5>
        <div class="d-flex flex-wrap gap-2">
          <?php foreach (['Colombo','Kandy','Kurunegala','Negombo','Kalutara','Ratnapura','Kegalle','Matara','Anuradhapura','Galle'] as $d) : ?>
          <span class="pl-district-chip"><?php echo esc_html($d); ?></span>
          <?php endforeach; ?>
        </div>
        <div class="mt-4 p-3 rounded-3" style="background:var(--pl-primary-soft);display:flex;align-items:start;gap:12px;">
          <i class="fa-solid fa-info-circle" style="color:var(--pl-primary);margin-top:2px;"></i>
          <p style="margin:0;font-size:0.87rem;color:var(--pl-primary);">While physical outlets are limited to Gampaha currently, all our <strong>engineering and software services</strong> are available island-wide. We visit project sites throughout Sri Lanka.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP -->
<section class="section-md" style="background:var(--pl-white);">
  <div class="container">
    <div class="text-center mb-4">
      <h2 style="font-size:1.5rem;font-weight:800;letter-spacing:-0.02em;">Find Us on the Map</h2>
      <p class="text-muted-pl" style="font-size:0.9rem;">54A, Sanasa Ideal Shopping Complex, Colombo Road, Gampaha, Sri Lanka</p>
    </div>
    <div class="pl-map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31670.27!2d80.0074!3d7.0873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f8b5bdb5b0ab%3A0x0!2sGampaha!5e0!3m2!1sen!2slk!4v1" width="100%" height="420" style="border:0;display:block;" allowfullscreen="" loading="lazy" title="PrimeLink Holdings – Gampaha, Sri Lanka"></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>
