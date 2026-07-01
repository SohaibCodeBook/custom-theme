<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-envelope fa-xs me-2"></i>Get In Touch</div>
    <h1>Contact PrimeLink Holdings</h1>
    <p class="mt-2" style="color:rgba(255,255,255,.7);font-size:1rem;max-width:540px;">Have a project enquiry, need a quotation, or want to discuss a service? Our team is ready to assist.</p>
    <div class="pl-breadcrumb mt-3">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span><span class="current">Contact</span>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section-lg">
  <div class="container">
    <div class="row g-5">

      <!-- Contact Info Card -->
      <div class="col-lg-4">
        <div class="pl-contact-info-card">
          <h3>PrimeLink Holdings</h3>
          <p>We serve clients across Sri Lanka. Reach us through any of the channels below, or visit our office in Gampaha.</p>

          <div class="pl-contact-item">
            <div class="pl-contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div>
              <strong>Office Address</strong>
              <span>54A, Sanasa Ideal Shopping Complex, Colombo Road, Gampaha 10019, Sri Lanka</span>
            </div>
          </div>
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon"><i class="fa-solid fa-phone"></i></div>
            <div>
              <strong>Phone</strong>
              <a href="tel:+94775860868">+94 775 860 868</a>
            </div>
          </div>
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon"><i class="fa-brands fa-whatsapp"></i></div>
            <div>
              <strong>WhatsApp</strong>
              <a href="https://wa.me/94775860868" target="_blank" rel="noopener">+94 775 860 868</a>
            </div>
          </div>
          <div class="pl-contact-item">
            <div class="pl-contact-item-icon"><i class="fa-solid fa-envelope"></i></div>
            <div>
              <strong>Email</strong>
              <a href="mailto:info@primelink.com.lk">info@primelink.com.lk</a>
            </div>
          </div>

          <div class="pl-hours-list">
            <h5>Business Hours</h5>
            <?php
            $hours = [
              ['Monday – Friday', '8:30 AM – 5:30 PM'],
              ['Saturday',        '9:00 AM – 2:00 PM'],
              ['Sunday',          'Closed'],
            ];
            foreach ($hours as [$d,$t]) : ?>
            <div class="pl-hours-row">
              <span><?php echo esc_html($d); ?></span>
              <span><?php echo esc_html($t); ?></span>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Social -->
          <div class="mt-4 pt-3" style="border-top:1px solid rgba(255,255,255,.1);">
            <p style="color:rgba(255,255,255,.5);font-size:0.8rem;margin-bottom:12px;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Follow Us</p>
            <div class="d-flex gap-2">
              <a href="#" class="pl-contact-pill-icon text-decoration-none" aria-label="Facebook" target="_blank" rel="noopener" style="width:38px;height:38px;border-radius:var(--pl-radius-sm);background:rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;">
                <i class="fa-brands fa-facebook-f" style="color:rgba(255,255,255,.7);"></i>
              </a>
              <a href="https://wa.me/94775860868" class="pl-contact-pill-icon text-decoration-none" aria-label="WhatsApp" target="_blank" rel="noopener" style="width:38px;height:38px;border-radius:var(--pl-radius-sm);background:rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;">
                <i class="fa-brands fa-whatsapp" style="color:rgba(255,255,255,.7);"></i>
              </a>
              <a href="mailto:info@primelink.com.lk" class="pl-contact-pill-icon text-decoration-none" aria-label="Email" style="width:38px;height:38px;border-radius:var(--pl-radius-sm);background:rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;">
                <i class="fa-solid fa-envelope" style="color:rgba(255,255,255,.7);"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="pl-form-card h-100" style="border:1.5px solid var(--pl-border);">
          <h3>Send Us a Message</h3>
          <p class="subtitle">Use this form for project enquiries, quotation requests, or general questions. We respond within 24 hours on business days.</p>
          <form id="contact-form" novalidate>
            <?php wp_nonce_field('primelink_form','primelink_nonce'); ?>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Full Name <span style="color:#ef4444;">*</span></label>
                  <input type="text" name="name" placeholder="Your full name" required autocomplete="name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Phone Number</label>
                  <input type="tel" name="phone" placeholder="+94 77X XXX XXX" autocomplete="tel">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Email Address <span style="color:#ef4444;">*</span></label>
                  <input type="email" name="email" placeholder="your@email.com" required autocomplete="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Subject</label>
                  <select name="subject">
                    <option value="General Enquiry">General Enquiry</option>
                    <option value="Request a Quotation">Request a Quotation</option>
                    <option value="Engineering Services">Engineering Services</option>
                    <option value="GIS & AutoCAD">GIS &amp; AutoCAD</option>
                    <option value="Software Development">Software Development</option>
                    <option value="IT Products">IT Products</option>
                    <option value="Technical Support">Technical Support</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="pl-form-group">
                  <label>Your Message <span style="color:#ef4444;">*</span></label>
                  <textarea name="message" rows="6" placeholder="Describe your project or enquiry in detail…" required></textarea>
                </div>
              </div>
            </div>
            <div id="contact-form-msg" class="form-msg" role="status" aria-live="polite"></div>
            <button type="submit" class="btn-pl btn-primary-pl w-100 justify-content-center mt-2">
              <i class="fa-solid fa-paper-plane fa-sm"></i> Send Message
            </button>
          </form>

          <!-- Quick contact alternatives -->
          <div class="row g-3 mt-4 pt-4" style="border-top:1px solid var(--pl-border);">
            <div class="col-sm-4">
              <a href="tel:+94775860868" class="text-decoration-none d-flex align-items-center gap-2 p-3 rounded-3" style="background:var(--pl-bg);">
                <div style="width:36px;height:36px;background:var(--pl-primary-soft);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                  <i class="fa-solid fa-phone" style="color:var(--pl-primary);font-size:0.85rem;"></i>
                </div>
                <div>
                  <span style="font-size:0.7rem;color:var(--pl-text-muted);display:block;font-weight:600;text-transform:uppercase;letter-spacing:0.5px;">Call Us</span>
                  <span style="font-size:0.82rem;font-weight:700;color:var(--pl-dark);">+94 775 860 868</span>
                </div>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="https://wa.me/94775860868" target="_blank" rel="noopener" class="text-decoration-none d-flex align-items-center gap-2 p-3 rounded-3" style="background:var(--pl-bg);">
                <div style="width:36px;height:36px;background:#dcfce7;border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                  <i class="fa-brands fa-whatsapp" style="color:#16a34a;font-size:0.95rem;"></i>
                </div>
                <div>
                  <span style="font-size:0.7rem;color:var(--pl-text-muted);display:block;font-weight:600;text-transform:uppercase;letter-spacing:0.5px;">WhatsApp</span>
                  <span style="font-size:0.82rem;font-weight:700;color:var(--pl-dark);">Chat With Us</span>
                </div>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="mailto:info@primelink.com.lk" class="text-decoration-none d-flex align-items-center gap-2 p-3 rounded-3" style="background:var(--pl-bg);">
                <div style="width:36px;height:36px;background:var(--pl-primary-soft);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                  <i class="fa-solid fa-envelope" style="color:var(--pl-primary);font-size:0.85rem;"></i>
                </div>
                <div>
                  <span style="font-size:0.7rem;color:var(--pl-text-muted);display:block;font-weight:600;text-transform:uppercase;letter-spacing:0.5px;">Email</span>
                  <span style="font-size:0.82rem;font-weight:700;color:var(--pl-dark);">info@primelink.com.lk</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Google Map -->
    <div class="pl-map-wrap mt-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31670.27!2d80.0074!3d7.0873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f8b5bdb5b0ab%3A0x0!2sGampaha!5e0!3m2!1sen!2slk!4v1" width="100%" height="420" style="border:0;display:block;" allowfullscreen="" loading="lazy" title="PrimeLink Holdings office on Google Maps – Gampaha, Sri Lanka"></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>
