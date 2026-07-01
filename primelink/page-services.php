<?php
/**
 * Template Name: Services
 */
get_header(); ?>

<section class="pl-page-banner">
  <div class="pl-hero-grid-bg"></div>
  <div class="container pl-page-banner-content">
    <div class="section-badge mb-3"><i class="fa-solid fa-grid-2 fa-xs me-2"></i>What We Offer</div>
    <h1>Our Services</h1>
    <p class="mt-2" style="color:rgba(255,255,255,.7);font-size:1rem;max-width:560px;">Professional engineering, GIS, software, and IT services for businesses and individuals across Sri Lanka.</p>
    <div class="pl-breadcrumb mt-3">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa-solid fa-house fa-xs"></i> Home</a>
      <span class="sep mx-2">/</span><span class="current">Services</span>
    </div>
  </div>
</section>

<!-- ENGINEERING SERVICES -->
<section class="section-lg" id="engineering">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-5">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=700&q=75&auto=format&fit=crop"
             alt="Geotechnical engineering site investigation in Sri Lanka" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:360px;object-fit:cover;">
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-mountain fa-xs me-2"></i>Engineering</div>
        <h2 class="section-title mt-3">Engineering &amp; Geotechnical Services</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">Professional geotechnical, construction, and engineering services delivered with technical precision and industry-standard methodologies.</p>
        <div class="row g-2 mt-3">
          <?php
          $eng = ['Geotechnical Investigations & SPT','Borehole Drilling (Soil & Rock)','Core Logging & Engineering Reports','Landslide Mitigation Works','Retaining Wall Design','Earth Reinforcement Systems','Foundation Engineering','Site Re-evaluation (Gov-Rejected)','Construction Consultancy'];
          foreach ($eng as $item) : ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2" style="font-size:0.88rem;padding:6px 0;border-bottom:1px solid var(--pl-border);">
              <i class="fa-solid fa-check" style="color:var(--pl-success);font-size:0.75rem;"></i>
              <?php echo esc_html($item); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="d-flex align-items-center gap-3 mt-4 flex-wrap">
          <div style="background:var(--pl-primary-soft);border-radius:var(--pl-radius-md);padding:12px 20px;">
            <span style="font-size:0.78rem;color:var(--pl-text-muted);display:block;">Starting from</span>
            <strong style="font-size:1.4rem;color:var(--pl-primary);font-family:var(--pl-font-head);">LKR 100,000</strong>
          </div>
          <a href="<?php echo esc_url(home_url('/engineering-solutions')); ?>" class="btn-pl btn-primary-pl">
            <i class="fa-solid fa-arrow-right fa-sm"></i> View All Engineering Services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GIS & AUTOCAD -->
<section class="section-lg" style="background:var(--pl-bg);" id="gis">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-7 order-2 order-lg-1">
        <div class="section-badge"><i class="fa-solid fa-map fa-xs me-2"></i>GIS &amp; Design</div>
        <h2 class="section-title mt-3">GIS, Mapping &amp; AutoCAD Services</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">GIS mapping, spatial analysis, and AutoCAD drafting services for engineering firms, universities, researchers, and businesses across Sri Lanka.</p>
        <div class="row g-2 mt-3">
          <?php
          $gis = ['ArcGIS Project Support','QGIS Project Support','Spatial Analysis','Terrain Modelling','Highway Engineering GIS','Infrastructure GIS Studies','AutoCAD Engineering Drafting','Housing & Building Plans','Structural Concept Drawings','Site Layout Plans'];
          foreach ($gis as $item) : ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2" style="font-size:0.88rem;padding:6px 0;border-bottom:1px solid var(--pl-border);">
              <i class="fa-solid fa-check" style="color:var(--pl-success);font-size:0.75rem;"></i>
              <?php echo esc_html($item); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="d-flex align-items-center gap-3 mt-4 flex-wrap">
          <div style="background:var(--pl-primary-soft);border-radius:var(--pl-radius-md);padding:12px 20px;">
            <span style="font-size:0.78rem;color:var(--pl-text-muted);display:block;">Starting from</span>
            <strong style="font-size:1.4rem;color:var(--pl-primary);font-family:var(--pl-font-head);">LKR 100,000</strong>
          </div>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl">
            <i class="fa-solid fa-paper-plane fa-sm"></i> Request Quote
          </a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=700&q=75&auto=format&fit=crop"
             alt="GIS mapping and spatial analysis" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:360px;object-fit:cover;">
      </div>
    </div>
  </div>
</section>

<!-- SOFTWARE & IT -->
<section class="section-lg" id="software">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-5">
        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=75&auto=format&fit=crop"
             alt="Custom software development for Sri Lankan businesses" loading="lazy" class="lazy w-100 rounded-4 shadow-lg" style="height:360px;object-fit:cover;">
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-code fa-xs me-2"></i>Software &amp; IT</div>
        <h2 class="section-title mt-3">Software Development &amp; IT Services</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl">Custom software, database solutions, and complete IT services for small and medium businesses across Sri Lanka.</p>
        <div class="row g-2 mt-3">
          <?php
          $sw = ['Database Development','Custom Business Software','Retail Cashier Systems','Restaurant Management Systems','Barcode & Inventory Systems','Small Business Solutions','Technical Support','Software Installation'];
          foreach ($sw as $item) : ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2" style="font-size:0.88rem;padding:6px 0;border-bottom:1px solid var(--pl-border);">
              <i class="fa-solid fa-check" style="color:var(--pl-success);font-size:0.75rem;"></i>
              <?php echo esc_html($item); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="d-flex align-items-center gap-3 mt-4 flex-wrap">
          <div style="background:var(--pl-primary-soft);border-radius:var(--pl-radius-md);padding:12px 20px;">
            <span style="font-size:0.78rem;color:var(--pl-text-muted);display:block;">Starting from</span>
            <strong style="font-size:1.4rem;color:var(--pl-primary);font-family:var(--pl-font-head);">LKR 45,000</strong>
          </div>
          <a href="<?php echo esc_url(home_url('/it-services')); ?>" class="btn-pl btn-primary-pl">
            <i class="fa-solid fa-arrow-right fa-sm"></i> View IT Services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="section-lg" style="background:var(--pl-bg);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-tag fa-xs me-2"></i>Pricing</div>
      <h2 class="section-title mt-3">Service Pricing Overview</h2>
      <div class="section-divider center"></div>
      <p class="section-subtitle">Transparent starting prices for our most common services. All projects are individually quoted.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="pl-price-card h-100">
          <div class="pl-price-label">Database Solutions</div>
          <div class="pl-price-amount"><sup>LKR </sup>45,000</div>
          <div class="pl-price-desc">Starting price per project</div>
          <div class="pl-price-divider"></div>
          <ul class="pl-price-features">
            <li><i class="fa-solid fa-check"></i> Database design & setup</li>
            <li><i class="fa-solid fa-check"></i> Small business systems</li>
            <li><i class="fa-solid fa-check"></i> Data entry & management</li>
            <li><i class="fa-solid fa-check"></i> Ongoing support available</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-outline-dark w-100 justify-content-center">Get Quote</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="pl-price-card featured h-100">
          <div class="pl-price-label">Business Software</div>
          <div class="pl-price-amount"><sup>LKR </sup>50,000</div>
          <div class="pl-price-desc">Per system, per project</div>
          <div class="pl-price-divider"></div>
          <ul class="pl-price-features">
            <li><i class="fa-solid fa-check"></i> Cashier / POS software</li>
            <li><i class="fa-solid fa-check"></i> Restaurant management</li>
            <li><i class="fa-solid fa-check"></i> Barcode & inventory system</li>
            <li><i class="fa-solid fa-check"></i> Training & support included</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-primary-pl w-100 justify-content-center">Get Quote</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="pl-price-card h-100">
          <div class="pl-price-label">Engineering & GIS</div>
          <div class="pl-price-amount"><sup>LKR </sup>100,000</div>
          <div class="pl-price-desc">Starting price per project</div>
          <div class="pl-price-divider"></div>
          <ul class="pl-price-features">
            <li><i class="fa-solid fa-check"></i> GIS mapping & analysis</li>
            <li><i class="fa-solid fa-check"></i> AutoCAD project support</li>
            <li><i class="fa-solid fa-check"></i> Geotechnical reports</li>
            <li><i class="fa-solid fa-check"></i> Slope stability analysis</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-outline-dark w-100 justify-content-center">Get Quote</a>
        </div>
      </div>
    </div>
    <p class="text-center mt-4 text-muted-pl" style="font-size:0.85rem;">All prices are starting prices. Final pricing depends on project scope and complexity. <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a> for a detailed quotation.</p>
  </div>
</section>

<?php get_footer(); ?>
