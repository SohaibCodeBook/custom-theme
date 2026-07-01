<?php
/**
 * Template Name: IT Services
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-laptop-code fa-xs me-2"></i>Technology</div>
    <h1>IT Services &amp; Products</h1>
    <p class="mt-2" style="color:rgba(255,255,255,.7);font-size:1rem;max-width:580px;">Custom software development, business systems, laptops, hardware, and technical support for Sri Lankan businesses.</p>
    <div class="pl-breadcrumb mt-3">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span><span class="current">IT Services</span>
    </div>
  </div>
</section>

<!-- SOFTWARE SOLUTIONS -->
<section class="section-lg">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-code fa-xs me-2"></i>Business Software</div>
      <h2 class="section-title mt-3">Software Solutions for Sri Lankan Businesses</h2>
      <div class="section-divider center"></div>
      <p class="section-subtitle">Custom-built software systems designed specifically for small and medium businesses in Sri Lanka. Cost-effective, reliable, and easy to use.</p>
    </div>
    <div class="row g-4">
      <?php
      $software = [
        ['fa-cash-register','amber','Retail Cashier Software','LKR 50,000',
         'Complete point-of-sale system for retail shops. Handles sales, receipts, daily reports, and user management.',
         ['Sales & receipt printing','Daily sales reports','Multiple user accounts','Product catalog management']],
        ['fa-utensils','green','Restaurant Management System','LKR 50,000',
         'Table management, order tracking, kitchen display, and billing system for restaurants and cafes.',
         ['Table & order management','Kitchen order display','Menu management','Daily revenue reports']],
        ['fa-barcode','blue','Barcode & Inventory System','LKR 75,000',
         'Full inventory management with barcode scanning, stock tracking, purchase orders, and reporting.',
         ['Barcode scanning support','Stock in/out tracking','Low stock alerts','Purchase order management']],
        ['fa-database','purple','Database Development','LKR 45,000',
         'Custom database design and setup for businesses needing secure, structured data management solutions.',
         ['Database design & setup','Data entry forms','Reporting & exports','User access control']],
        ['fa-code','cyan','Custom Business Software','LKR 100,000+',
         'Fully customized business applications built to your exact workflow and business process requirements.',
         ['Requirements analysis','Custom UI design','Process automation','Training & documentation']],
        ['fa-headset','pink','Technical Support & Maintenance','Contact Us',
         'Ongoing technical support, software maintenance, updates, and IT troubleshooting for businesses.',
         ['Remote & on-site support','Software updates','Bug fixing & improvements','Staff training']],
      ];
      foreach ($software as [$icon,$color,$title,$price,$desc,$features]) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="pl-service-card h-100">
          <div class="pl-service-icon <?php echo $color; ?>">
            <i class="fa-solid <?php echo $icon; ?>"></i>
          </div>
          <h4><?php echo esc_html($title); ?></h4>
          <p style="font-size:0.82rem;font-weight:700;color:var(--pl-primary);margin-bottom:8px;"><?php echo esc_html($price); ?></p>
          <p><?php echo esc_html($desc); ?></p>
          <ul style="margin:8px 0 16px;padding:0;">
            <?php foreach ($features as $f) : ?>
            <li style="display:flex;align-items:center;gap:8px;font-size:0.82rem;color:var(--pl-text-muted);padding:3px 0;">
              <i class="fa-solid fa-check" style="color:var(--pl-success);font-size:0.7rem;"></i><?php echo esc_html($f); ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pl-service-link mt-auto">
            Get Quote <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LAPTOPS -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-laptop fa-xs me-2"></i>Computer Products</div>
      <h2 class="section-title mt-3">Laptops &amp; Computers</h2>
      <div class="section-divider center"></div>
      <p class="section-subtitle">A selection of laptops available at our Gampaha outlet. Contact us for current stock and pricing.</p>
    </div>
    <div class="row g-4">
      <?php
      $laptops = [
        ['Dell','Dell Latitude 5430',
         'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&q=70&auto=format&fit=crop',
         ['Intel Core i5 12th Gen','8GB DDR4 RAM','256GB SSD','14" FHD Display','Windows 11 Pro']],
        ['Dell','Dell Inspiron 15 3520',
         'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400&q=70&auto=format&fit=crop',
         ['Intel Core i3 12th Gen','8GB RAM','512GB HDD','15.6" HD Display','Windows 11 Home']],
        ['Dell','Dell Vostro 3510',
         'https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?w=400&q=70&auto=format&fit=crop',
         ['Intel Core i5 11th Gen','16GB RAM','512GB SSD','15.6" FHD','Ubuntu / Windows']],
        ['ASUS','ASUS VivoBook 15',
         'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=400&q=70&auto=format&fit=crop',
         ['AMD Ryzen 5 5600H','8GB RAM','512GB SSD','15.6" FHD','Windows 11 Home']],
        ['ASUS','ASUS ExpertBook B1',
         'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=400&q=70&auto=format&fit=crop',
         ['Intel Core i5 12th Gen','8GB RAM','256GB SSD','14" FHD','Windows 11 Pro']],
        ['ASUS','ASUS ZenBook 14',
         'https://images.unsplash.com/photo-1611078489935-0cb964de46d6?w=400&q=70&auto=format&fit=crop',
         ['Intel Core i7 12th Gen','16GB RAM','512GB NVMe SSD','14" OLED FHD','Windows 11 Home']],
      ];
      foreach ($laptops as [$brand,$model,$img,$specs]) : ?>
      <div class="col-xl-4 col-md-6">
        <div class="pl-product-card h-100">
          <div class="pl-product-img">
            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($model); ?>" loading="lazy" class="lazy">
          </div>
          <div class="pl-product-body">
            <span class="pl-brand-chip"><?php echo esc_html($brand); ?></span>
            <h5><?php echo esc_html($model); ?></h5>
            <ul class="pl-product-specs">
              <?php foreach ($specs as $spec) : ?>
              <li><i class="fa-solid fa-circle fa-xs"></i><?php echo esc_html($spec); ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl btn-sm-pl w-100 justify-content-center">
              <i class="fa-solid fa-phone fa-sm"></i> Contact Us
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-4 text-muted-pl" style="font-size:0.83rem;">
      <i class="fa-solid fa-circle-info me-1"></i>Product listings are for display purposes. Contact us to confirm current stock and pricing.
    </p>
  </div>
</section>

<!-- HARDWARE & ACCESSORIES -->
<section class="section-lg">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-microchip fa-xs me-2"></i>Components & Peripherals</div>
      <h2 class="section-title mt-3">Hardware &amp; Accessories</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $hardware = [
        ['fa-hard-drive','blue','Storage','SSDs – SATA & NVMe, Hard Disk Drives, USB Flash Drives, External Storage Devices'],
        ['fa-memory','purple','Memory','DDR4 & DDR5 RAM Modules, Laptop RAM Upgrades, Server RAM'],
        ['fa-keyboard','amber','Peripherals','Keyboards, Optical & Gaming Mice, LED & IPS Monitors, Headphones & Speakers'],
        ['fa-wifi','green','Networking','Wi-Fi Routers, Network Switches, Ethernet Cables, Powerline Adapters'],
        ['fa-plug','cyan','Cables & Power','HDMI & DisplayPort Cables, USB-C Cables, Power Banks, Laptop Chargers'],
        ['fa-desktop','pink','Computer Systems','Desktop PCs, All-in-One Computers, Mini PCs, Workstations'],
      ];
      foreach ($hardware as [$icon,$color,$title,$items]) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="pl-service-card h-100">
          <div class="pl-service-icon <?php echo $color; ?>">
            <i class="fa-solid <?php echo $icon; ?>"></i>
          </div>
          <h4><?php echo esc_html($title); ?></h4>
          <p class="text-muted-pl" style="font-size:0.87rem;"><?php echo esc_html($items); ?></p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pl-service-link">
            Enquire Now <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TECHNICAL SERVICES -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-screwdriver-wrench fa-xs me-2"></i>Repair & Support</div>
      <h2 class="section-title mt-3">Computer Repair &amp; Technical Support</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $tech = [
        ['fa-laptop','Laptop Repair','Screen replacements, keyboard repairs, charging port fixes, and hardware fault diagnosis.'],
        ['fa-magnifying-glass','Computer Troubleshooting','Diagnosing and resolving hardware and software issues for desktops and laptops.'],
        ['fa-screwdriver-wrench','Hardware Installation','RAM upgrades, SSD upgrades, GPU installation, and component replacements.'],
        ['fa-floppy-disk','Software Installation','Operating system installation, driver setup, software configuration, and activation.'],
        ['fa-shield-virus','System Maintenance','Virus removal, disk cleanup, performance optimisation, and system health checks.'],
        ['fa-headset','Business IT Support','On-site and remote IT support for small businesses and professional offices.'],
      ];
      foreach ($tech as [$icon,$title,$desc]) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="pl-why-card h-100">
          <div class="pl-why-icon"><i class="fa-solid <?php echo $icon; ?>"></i></div>
          <h5><?php echo esc_html($title); ?></h5>
          <p><?php echo esc_html($desc); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- IT ENQUIRY FORM -->
<section class="pl-quote-section section-lg">
  <div class="container position-relative" style="z-index:1;">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="section-badge accent"><i class="fa-solid fa-laptop fa-xs me-2"></i>IT Enquiry</div>
        <div class="pl-quote-info mt-3">
          <h2>Send Your IT Enquiry</h2>
          <p class="lead">For software, hardware, or technical support enquiries. We respond within 24 hours on business days.</p>
          <a href="tel:+94775860868" class="pl-contact-pill text-decoration-none mb-2">
            <div class="pl-contact-pill-icon"><i class="fa-solid fa-phone"></i></div>
            <div><strong>+94 775 860 868</strong><span>Call or WhatsApp</span></div>
          </a>
          <a href="<?php echo esc_url(home_url('/outlets')); ?>" class="pl-contact-pill text-decoration-none">
            <div class="pl-contact-pill-icon"><i class="fa-solid fa-store"></i></div>
            <div><strong>Visit Our Outlet</strong><span>54A Colombo Rd, Gampaha</span></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="pl-form-card">
          <h3>IT &amp; Software Enquiry</h3>
          <p class="subtitle">Tell us what you need and we'll get back to you promptly.</p>
          <form id="it-quote-form" novalidate>
            <?php wp_nonce_field('primelink_form','primelink_nonce'); ?>
            <div class="row g-3">
              <div class="col-md-6"><div class="pl-form-group"><label>Full Name *</label><input type="text" name="name" placeholder="Your name" required></div></div>
              <div class="col-md-6"><div class="pl-form-group"><label>Phone Number</label><input type="tel" name="phone" placeholder="+94 77X XXX XXX"></div></div>
              <div class="col-md-6"><div class="pl-form-group"><label>Email Address *</label><input type="email" name="email" placeholder="your@email.com" required></div></div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Enquiry Type</label>
                  <select name="subject">
                    <option>Software Development</option>
                    <option>Database Solution</option>
                    <option>Cashier / POS System</option>
                    <option>Laptop / Computer Purchase</option>
                    <option>Hardware / Accessories</option>
                    <option>Computer Repair</option>
                    <option>Technical Support</option>
                    <option>General IT Enquiry</option>
                  </select>
                </div>
              </div>
              <div class="col-12"><div class="pl-form-group"><label>Details *</label><textarea name="message" rows="4" placeholder="Describe your requirements…" required></textarea></div></div>
            </div>
            <div id="it-quote-form-msg" class="form-msg" role="status" aria-live="polite"></div>
            <button type="submit" class="btn-pl btn-primary-pl w-100 justify-content-center mt-2">
              <i class="fa-solid fa-paper-plane fa-sm"></i> Send IT Enquiry
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pl-map-wrap" style="border-radius:0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31670.27!2d80.0074!3d7.0873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f8b5bdb5b0ab%3A0x0!2sGampaha!5e0!3m2!1sen!2slk!4v1" width="100%" height="380" style="border:0;display:block;" allowfullscreen="" loading="lazy" title="PrimeLink Holdings – Gampaha"></iframe>
</div>

<?php get_footer(); ?>
