<?php
/**
 * Template Name: Engineering Solutions
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-mountain fa-xs me-2"></i>Engineering</div>
    <h1>Engineering Solutions</h1>
    <p class="mt-2" style="color:rgba(255,255,255,.7);font-size:1rem;max-width:600px;">Professional geotechnical investigations, landslide mitigation, GIS mapping, and AutoCAD design services for Sri Lankan projects.</p>
    <div class="pl-breadcrumb mt-3">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span><span class="current">Engineering Solutions</span>
    </div>
  </div>
</section>

<!-- INTRO -->
<section class="section-lg">
  <div class="container">
    <div class="row g-4 justify-content-center text-center mb-5">
      <?php
      $pills = [
        ['fa-mountain','Geotechnical','#geotech'],
        ['fa-shield-halved','Landslide Mitigation','#landslide'],
        ['fa-map','GIS & Mapping','#gis'],
        ['fa-drafting-compass','AutoCAD Design','#autocad'],
        ['fa-folder-open','Projects','#projects'],
      ];
      foreach ($pills as [$icon,$label,$href]) : ?>
      <div class="col-auto">
        <a href="<?php echo $href; ?>" class="btn-pl btn-outline-dark btn-sm-pl">
          <i class="fa-solid <?php echo $icon; ?> fa-sm"></i> <?php echo $label; ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Geotechnical -->
    <div id="geotech" class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid var(--pl-border);">
      <div class="col-lg-5">
        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=700&q=75&auto=format&fit=crop"
             alt="Borehole drilling and soil investigation" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:380px;object-fit:cover;">
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-mountain fa-xs me-2"></i>Ground Investigation</div>
        <h2 class="section-title mt-3">Geotechnical Engineering</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">We carry out comprehensive geotechnical site investigations for construction, housing, infrastructure, and research projects. Our investigations provide the ground data needed to make informed foundation and design decisions.</p>
        <div class="row g-2 my-3">
          <?php foreach (['Soil Investigation & Sampling','Standard Penetration Test (SPT)','Borehole Drilling Through Soil','Rock Core Drilling & Core Logging','Field & Laboratory Testing','Geotechnical Engineering Reports','Foundation Depth Recommendations','Bearing Capacity Analysis'] as $s) : ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2" style="font-size:0.87rem;padding:5px 0;border-bottom:1px solid var(--pl-border);">
              <i class="fa-solid fa-check-circle" style="color:var(--pl-success);font-size:0.8rem;"></i><?php echo esc_html($s); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="pl-alert info mt-3">
          <i class="fa-solid fa-circle-info"></i>
          <p><strong>Typical Pricing:</strong> Starting from LKR 100,000. Larger investigations range up to LKR 500,000+ depending on number of boreholes and depth required.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl mt-3">
          <i class="fa-solid fa-paper-plane fa-sm"></i> Request a Quotation
        </a>
      </div>
    </div>

    <!-- Landslide -->
    <div id="landslide" class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid var(--pl-border);">
      <div class="col-lg-7 order-2 order-lg-1">
        <div class="section-badge"><i class="fa-solid fa-shield-halved fa-xs me-2"></i>Slope Engineering</div>
        <h2 class="section-title mt-3">Landslide Mitigation &amp; Slope Engineering</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">Sri Lanka's hilly terrain presents unique challenges for construction and infrastructure. PrimeLink specialises in evaluating unstable slopes, designing mitigation measures, and providing engineering solutions for sites previously rejected due to slope instability.</p>
        <div class="row g-2 my-3">
          <?php foreach (['Landslide Mitigation Works','Retaining Wall Design','Slope Stabilisation Solutions','Earth Reinforcement Systems','Gov-Rejected Site Re-evaluation','Site Stability Assessments','Slope Stability Analysis (GeoStudio)','PLAXIS Modelling','Factor of Safety Calculations','Foundation Recommendations'] as $s) : ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2" style="font-size:0.87rem;padding:5px 0;border-bottom:1px solid var(--pl-border);">
              <i class="fa-solid fa-check-circle" style="color:var(--pl-success);font-size:0.8rem;"></i><?php echo esc_html($s); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl mt-2">
          <i class="fa-solid fa-paper-plane fa-sm"></i> Contact Us for Quotation
        </a>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=75&auto=format&fit=crop"
             alt="Slope stabilisation and retaining wall construction" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:380px;object-fit:cover;">
      </div>
    </div>

    <!-- GIS -->
    <div id="gis" class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid var(--pl-border);">
      <div class="col-lg-5">
        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=700&q=75&auto=format&fit=crop"
             alt="GIS mapping and satellite imagery analysis" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:380px;object-fit:cover;">
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-map fa-xs me-2"></i>Spatial Solutions</div>
        <h2 class="section-title mt-3">GIS &amp; Mapping Solutions</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">We provide GIS mapping and spatial analysis for engineering companies, government agencies, universities, and individual researchers. Our GIS team works with ArcGIS and QGIS to deliver accurate, professionally produced spatial outputs.</p>
        <div class="row g-3 my-3">
          <?php foreach (['ArcGIS Projects','QGIS Projects','Spatial Analysis','Terrain Modelling','Highway Engineering GIS','Infrastructure Studies','University Research Support','Government Projects'] as $item) : ?>
          <div class="col-6 col-md-3">
            <div class="text-center p-2 rounded-3" style="background:var(--pl-primary-soft);">
              <span style="font-size:0.8rem;font-weight:600;color:var(--pl-primary);"><?php echo esc_html($item); ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="pl-alert warning">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <p>PrimeLink only accepts <strong>legitimate project work</strong>. We do not provide services for academic misconduct. GIS support is available for genuine research, industry projects, and approved academic work.</p>
        </div>
      </div>
    </div>

    <!-- AutoCAD -->
    <div id="autocad">
      <div class="text-center mb-5">
        <div class="section-badge mx-auto"><i class="fa-solid fa-drafting-compass fa-xs me-2"></i>Design & Drafting</div>
        <h2 class="section-title mt-3">AutoCAD &amp; Engineering Design</h2>
        <div class="section-divider center"></div>
      </div>
      <div class="row g-4">
        <?php
        $autocad = [
          ['fa-pen-ruler',     'AutoCAD Drafting',       'Precise engineering drawings and technical drafting to professional standards using AutoCAD.'],
          ['fa-house-chimney', 'Housing Plans',           'Residential housing layout plans, floor plans, and elevation drawings for permit submission.'],
          ['fa-building',      'Building Layouts',        'Architectural and structural layout plans for commercial and residential projects.'],
          ['fa-compass',       'Structural Concepts',     'Conceptual structural designs and sketches for review and planning purposes.'],
          ['fa-map-location',  'Site Plans',              'Site layout plans including boundaries, setbacks, and infrastructure locations.'],
          ['fa-city',          'Large Scale Projects',    'Drafting support for larger engineering and infrastructure development projects.'],
        ];
        foreach ($autocad as [$icon,$title,$desc]) : ?>
        <div class="col-lg-4 col-md-6">
          <div class="pl-service-card h-100">
            <div class="pl-service-icon blue"><i class="fa-solid <?php echo $icon; ?>"></i></div>
            <h4><?php echo esc_html($title); ?></h4>
            <p><?php echo esc_html($desc); ?></p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pl-service-link">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED PROJECTS -->
<section class="section-lg" style="background:var(--pl-bg);" id="projects">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-folder-open fa-xs me-2"></i>Our Work</div>
      <h2 class="section-title mt-3">Featured Projects</h2>
      <div class="section-divider center"></div>
      <p class="section-subtitle">A selection of representative projects by our engineering team. Images are illustrative and will be updated with actual project photographs.</p>
    </div>
    <div class="row g-4">
      <?php
      $projects = [
        ['https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=70&auto=format&fit=crop','Geotechnical Investigation – Residential Development','Borehole drilling, SPT testing, and engineering report for a multi-unit residential development.','Gampaha District','Geotechnical'],
        ['https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&q=70&auto=format&fit=crop','Slope Stabilisation – Re-evaluated Site','Re-evaluation and slope stability analysis for a government-rejected site, with retaining wall design.','Kandy','Landslide Mitigation'],
        ['https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=600&q=70&auto=format&fit=crop','GIS Terrain Mapping – Highway Study','ArcGIS-based terrain analysis and spatial data mapping for an infrastructure development corridor.','Western Province','GIS Mapping'],
        ['https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&q=70&auto=format&fit=crop','Housing Plan Design – Residential Property','Complete AutoCAD housing plan set including floor plans, elevations, and site layout for permit submission.','Colombo','AutoCAD'],
        ['https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&q=70&auto=format&fit=crop','Rock Core Drilling – Foundation Investigation','Rock core drilling through soil and into bedrock to determine foundation depth for a commercial building.','Gampaha','Geotechnical'],
        ['https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=70&auto=format&fit=crop','Earth Reinforcement – Road Embankment','Design and technical supervision of earth reinforcement for a road embankment stabilisation project.','Kurunegala','Construction'],
      ];
      foreach ($projects as [$img,$title,$desc,$loc,$tag]) : ?>
      <div class="col-lg-4 col-md-6">
        <div class="pl-project-card h-100">
          <div class="pl-project-img-wrap">
            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" class="lazy">
            <div class="pl-project-overlay">
              <span class="pl-project-tag"><?php echo esc_html($tag); ?></span>
            </div>
          </div>
          <div class="pl-project-body">
            <h5><?php echo esc_html($title); ?></h5>
            <p><?php echo esc_html($desc); ?></p>
            <div class="pl-project-meta">
              <i class="fa-solid fa-location-dot"></i>
              <?php echo esc_html($loc); ?>, Sri Lanka
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- QUOTE FORM -->
<section class="pl-quote-section section-lg">
  <div class="container position-relative" style="z-index:1;">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="section-badge accent"><i class="fa-solid fa-file-invoice fa-xs me-2"></i>Engineering Enquiry</div>
        <div class="pl-quote-info mt-3">
          <h2>Discuss Your Engineering Project</h2>
          <p class="lead">Contact our engineering team for project quotes on geotechnical, GIS, AutoCAD, and construction consultancy services.</p>
          <a href="tel:+94775860868" class="pl-contact-pill text-decoration-none mb-2">
            <div class="pl-contact-pill-icon"><i class="fa-solid fa-phone"></i></div>
            <div><strong>+94 775 860 868</strong><span>Call our engineering team</span></div>
          </a>
          <a href="https://wa.me/94775860868" class="pl-contact-pill text-decoration-none" target="_blank" rel="noopener">
            <div class="pl-contact-pill-icon"><i class="fa-brands fa-whatsapp"></i></div>
            <div><strong>WhatsApp Us</strong><span>Quick response</span></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="pl-form-card">
          <h3>Engineering Enquiry Form</h3>
          <p class="subtitle">Describe your project and our engineers will respond promptly.</p>
          <form id="eng-quote-form" novalidate>
            <?php wp_nonce_field('primelink_form','primelink_nonce'); ?>
            <div class="row g-3">
              <div class="col-md-6"><div class="pl-form-group"><label>Full Name *</label><input type="text" name="name" placeholder="Your name" required></div></div>
              <div class="col-md-6"><div class="pl-form-group"><label>Phone Number</label><input type="tel" name="phone" placeholder="+94 77X XXX XXX"></div></div>
              <div class="col-md-6"><div class="pl-form-group"><label>Email Address *</label><input type="email" name="email" placeholder="your@email.com" required></div></div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label>Service Required</label>
                  <select name="subject">
                    <option>Geotechnical Engineering</option>
                    <option>Landslide Mitigation</option>
                    <option>Slope Stability Analysis</option>
                    <option>GIS Mapping</option>
                    <option>AutoCAD Drafting</option>
                    <option>Construction Consultancy</option>
                    <option>Engineering Report</option>
                  </select>
                </div>
              </div>
              <div class="col-12"><div class="pl-form-group"><label>Project Details *</label><textarea name="message" rows="4" placeholder="Describe your project location, requirements, and specific details…" required></textarea></div></div>
            </div>
            <div id="eng-quote-form-msg" class="form-msg" role="status" aria-live="polite"></div>
            <button type="submit" class="btn-pl btn-primary-pl w-100 justify-content-center mt-2">
              <i class="fa-solid fa-paper-plane fa-sm"></i> Send Engineering Enquiry
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pl-map-wrap" style="border-radius:0;margin-top:0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31670.27!2d80.0074!3d7.0873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f8b5bdb5b0ab%3A0x0!2sGampaha!5e0!3m2!1sen!2slk!4v1" width="100%" height="420" style="border:0;display:block;" allowfullscreen="" loading="lazy" title="PrimeLink Holdings location in Gampaha, Sri Lanka"></iframe>
</div>

<?php get_footer(); ?>
