<?php
/**
 * Template Name: About Us
 */
get_header(); ?>

<!-- PAGE BANNER -->
<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="section-badge mb-3"><i class="fa-solid fa-building-columns fa-xs me-2"></i>Who We Are</div>
        <h1>About Ceylon PrimeLink Holdings</h1>
        <p class="mt-3" style="color:rgba(255,255,255,.7);font-size:1.05rem;max-width:560px;">Specialists in landslide investigations and geotechnical testing across Sri Lanka, with expanded engineering, GIS, software, and IT solutions.</p>
      </div>
      <div class="col-lg-5 d-none d-lg-flex justify-content-end">
        <div class="pl-breadcrumb mt-2">
          <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
          <span class="sep mx-2">/</span>
          <span class="current">About Us</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT STORY -->
<section class="section-lg">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="pl-about-img-wrap">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=75&auto=format&fit=crop"
               alt="PrimeLink engineering team at a site investigation in Sri Lanka"
               class="pl-about-img lazy" loading="lazy" decoding="async" width="700" height="500">
          <div class="pl-about-badge">
            <strong>2014</strong>
            <span>Est. Sri Lanka</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-flag fa-xs me-2"></i>Our Story</div>
        <h2 class="section-title mt-3">Ceylon PrimeLink Holdings (Pvt) Ltd</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">Ceylon PrimeLink Holdings is a Sri Lankan multi-sector company delivering engineering, geotechnical, GIS, construction, software, and IT solutions with precision and integrity.</p>
        <p class="text-muted-pl">We primarily specialize in <strong>landslide investigations and geotechnical testing</strong>. Much of our work focuses on landslide-prone areas in Sri Lanka, including districts such as <strong>Kandy, Nuwara Eliya, Badulla, Kegalle, Ratnapura, Galle, Kalutara</strong>, and parts of <strong>Gampaha</strong> and <strong>Kurunegala</strong>. This has been our core expertise, and over time we expanded our services to include <strong>AutoCAD drafting, engineering design, and related consultancy services</strong>.</p>
        <p class="text-muted-pl">Our mission is to connect industries through practical engineering knowledge, modern technology, and innovative solutions. Whether it is a geotechnical site investigation for a housing development, a GIS mapping study for a university research project, or a custom business software solution, we approach every project with the same level of professionalism and attention to detail.</p>
        <p class="text-muted-pl mb-4">We are based at our main office and retail outlet in Gampaha, conveniently located in the Western Province of Sri Lanka, and we serve clients across the island. Enquiries are welcome via email, telephone, WhatsApp, or our online enquiry form.</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl">
            <i class="fa-solid fa-paper-plane fa-sm"></i> Get in Touch
          </a>
          <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn-pl btn-outline-dark">
            <i class="fa-solid fa-grid-2 fa-sm"></i> Our Services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-bullseye fa-xs me-2"></i>Purpose</div>
      <h2 class="section-title mt-3">Mission &amp; Vision</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="h-100 p-4 rounded-3 bg-white border" style="border-color:var(--pl-border)!important;">
          <div class="pl-why-icon mb-3" style="background:#eff4ff;">
            <i class="fa-solid fa-rocket" style="color:var(--pl-primary);font-size:1.2rem;"></i>
          </div>
          <h3 style="font-size:1.3rem;font-weight:800;margin-bottom:12px;">Our Mission</h3>
          <p class="text-muted-pl mb-0">To connect industries through practical engineering knowledge, modern technology, and innovative solutions — delivering reliable services that empower Sri Lankan businesses and communities to grow and prosper.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-4 rounded-3 bg-white border" style="border-color:var(--pl-border)!important;">
          <div class="pl-why-icon mb-3" style="background:#fffbeb;">
            <i class="fa-solid fa-eye" style="color:var(--pl-accent);font-size:1.2rem;"></i>
          </div>
          <h3 style="font-size:1.3rem;font-weight:800;margin-bottom:12px;">Our Vision</h3>
          <p class="text-muted-pl mb-0">To be the most trusted multi-sector solutions provider in Sri Lanka — recognised for professional integrity, technical excellence, and commitment to delivering real value to every client we serve.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EXPERTISE -->
<section class="section-lg">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-star fa-xs me-2"></i>What We Do</div>
      <h2 class="section-title mt-3">Our Areas of Expertise</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $expertise = [
        ['fa-mountain',          'blue',   'Geotechnical Engineering', 'Soil investigations, borehole drilling, SPT testing, and detailed geotechnical reports for construction and infrastructure projects.'],
        ['fa-hammer',            'amber',  'Construction Consultancy',  'Site assessments, retaining wall design, earth reinforcement, and construction advisory services.'],
        ['fa-shield-halved',     'green',  'Landslide Mitigation',      'Slope stability analysis, hazard assessment, and practical mitigation solutions for unstable terrain.'],
        ['fa-map',               'cyan',   'GIS &amp; Mapping',              'ArcGIS and QGIS projects, spatial analysis, terrain modelling, and engineering GIS applications.'],
        ['fa-drafting-compass',  'purple', 'AutoCAD Drafting',           'Precision engineering drawings, housing plans, site layouts, and structural concept designs.'],
        ['fa-code',              'blue',   'Software Development',       'Custom business software, cashier systems, inventory management, and database applications.'],
        ['fa-database',          'amber',  'Database Solutions',         'Small business database setup, data management systems, and ongoing technical support.'],
        ['fa-laptop',            'green',  'IT Products &amp; Support',       'Laptops, desktops, accessories, and networking equipment at competitive prices.'],
        ['fa-house-chimney',     'purple', 'Housing Design',             'Residential and commercial housing plan designs, structural concepts, and engineering feasibility studies.'],
        ['fa-globe',             'cyan',   'Mining Support',             'Engineering support services for mining operations and geological site investigations.'],
        ['fa-file-contract',     'pink',   'Engineering Reports',        'Professional technical reports for geotechnical, slope stability, and site assessment projects.'],
        ['fa-graduation-cap',    'blue',   'University &amp; Research',       'GIS and engineering analysis support for undergraduate, postgraduate, and academic research projects.'],
      ];
      foreach ($expertise as [$icon, $color, $title, $desc]) : ?>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="pl-service-card h-100">
          <div class="pl-service-icon <?php echo $color; ?>">
            <i class="fa-solid <?php echo $icon; ?>"></i>
          </div>
          <h4><?php echo $title; ?></h4>
          <p><?php echo $desc; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-heart fa-xs me-2"></i>What Drives Us</div>
      <h2 class="section-title mt-3">Our Core Values</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $values = [
        ['fa-shield-halved',  'Integrity',     'We uphold honesty and transparency in every client relationship and project delivery.'],
        ['fa-crosshairs',     'Precision',     'Engineering and technical work demands accuracy. We deliver detailed, reliable outputs.'],
        ['fa-lightbulb',      'Innovation',    'We continuously adopt modern tools to deliver forward-thinking solutions.'],
        ['fa-handshake',      'Reliability',   'Our clients trust us to deliver what we promise, on time and to the agreed standard.'],
        ['fa-tag',            'Affordability', 'Professional-grade services at pricing that works for Sri Lankan budgets.'],
        ['fa-people-group',   'Community',     'As a Sri Lankan company, we are committed to contributing positively to local development.'],
      ];
      foreach ($values as [$icon, $title, $desc]) : ?>
      <div class="col-xl-2 col-lg-4 col-md-4 col-6">
        <div class="text-center p-3">
          <div style="width:60px;height:60px;background:var(--pl-primary-soft);border-radius:var(--pl-radius-md);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
            <i class="fa-solid <?php echo $icon; ?>" style="color:var(--pl-primary);font-size:1.3rem;"></i>
          </div>
          <h5 style="font-size:0.92rem;font-weight:700;margin-bottom:6px;"><?php echo esc_html($title); ?></h5>
          <p style="font-size:0.8rem;color:var(--pl-text-muted);margin:0;"><?php echo esc_html($desc); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="pl-quote-section section-lg">
  <div class="container position-relative" style="z-index:1;">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <div class="section-badge accent"><i class="fa-solid fa-phone fa-xs me-2"></i>Contact Us</div>
        <h2 style="color:#fff;font-size:clamp(1.8rem,3.5vw,2.4rem);font-weight:800;letter-spacing:-0.03em;margin:12px 0;">How to Reach PrimeLink Holdings</h2>
        <p style="color:rgba(255,255,255,.65);font-size:0.96rem;line-height:1.8;max-width:540px;">All enquiries are handled promptly via email, telephone, and WhatsApp. Use our enquiry form to describe your project and we will respond with a tailored solution.</p>
      </div>
      <div class="col-lg-5 d-flex flex-column gap-3">
        <a href="tel:+94775860868" class="pl-contact-pill text-decoration-none">
          <div class="pl-contact-pill-icon"><i class="fa-solid fa-phone"></i></div>
          <div><strong>+94 775 860 868</strong><span>Call us anytime</span></div>
        </a>
        <a href="mailto:info@primelink.com.lk" class="pl-contact-pill text-decoration-none">
          <div class="pl-contact-pill-icon"><i class="fa-solid fa-envelope"></i></div>
          <div><strong>info@primelink.com.lk</strong><span>We reply within 24 hours</span></div>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-accent-pl mt-1" style="align-self:flex-start;">
          <i class="fa-solid fa-paper-plane fa-sm"></i> Request a Quotation
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
