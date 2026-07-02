<?php get_header(); ?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="pl-hero" aria-label="Welcome to PrimeLink Holdings">
  <div class="pl-hero-grid-bg"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center g-5">

      <!-- Text -->
      <div class="col-lg-6">
        <div class="pl-hero-eyebrow">
          <span class="dot"></span>
          Sri Lankan Engineering &amp; Technology
        </div>
        <h1>
          Connecting<br>
          <span class="highlight">Industries.</span><br>
          Unlocking<br>Opportunities.
        </h1>
        <p class="pl-hero-lead">
          Ceylon PrimeLink Holdings provides trusted solutions in geotechnical engineering, GIS mapping, AutoCAD design, construction, software development, and IT products across Sri Lanka.
        </p>
        <div class="pl-hero-actions">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-pl btn-accent-pl btn-lg-pl">
            <i class="fa-solid fa-file-lines fa-sm"></i> Request a Quotation
          </a>
          <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="btn-pl btn-outline-pl">
            <i class="fa-solid fa-circle-play fa-sm"></i> Learn More
          </a>
        </div>
        <div class="pl-hero-stats">
          <div class="pl-hero-stat">
            <span class="pl-hero-stat-num">200<sup>+</sup></span>
            <span class="pl-hero-stat-label">Projects</span>
          </div>
          <div class="pl-hero-stat">
            <span class="pl-hero-stat-num">150<sup>+</sup></span>
            <span class="pl-hero-stat-label">Clients</span>
          </div>
          <div class="pl-hero-stat">
            <span class="pl-hero-stat-num">10<sup>+</sup></span>
            <span class="pl-hero-stat-label">Yrs Exp.</span>
          </div>
        </div>
      </div>

      <!-- Visual -->
      <div class="col-lg-6 d-none d-lg-block">
        <div class="pl-hero-visual">
          <div class="pl-hero-card-stack">
            <img
              src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=75&auto=format&fit=crop"
              alt="Engineering site investigation in Sri Lanka"
              class="pl-hero-main-img"
              loading="eager"
              decoding="async"
              width="800" height="420">

            <!-- Float card top-left -->
            <div class="pl-hero-float-card top-left" aria-hidden="true">
              <div class="pl-hero-float-icon blue">
                <i class="fa-solid fa-hard-hat fa-lg" style="color:var(--pl-primary);"></i>
              </div>
              <div>
                <strong>200+</strong>
                <span>Projects Done</span>
              </div>
            </div>

            <!-- Float card bottom-right -->
            <div class="pl-hero-float-card bottom-right" aria-hidden="true">
              <div class="pl-hero-float-icon amber">
                <i class="fa-solid fa-award fa-lg" style="color:var(--pl-accent);"></i>
              </div>
              <div>
                <strong>10+ Years</strong>
                <span>Trusted Service</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT SECTION
     ============================================================ -->
<section class="section-lg" aria-labelledby="about-h">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="pl-about-img-wrap pe-lg-3">
          <img
            src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=700&q=75&auto=format&fit=crop"
            alt="PrimeLink engineering team at a site investigation in Sri Lanka"
            class="pl-about-img lazy"
            loading="lazy" decoding="async" width="700" height="500">
          <div class="pl-about-badge" aria-hidden="true">
            <strong>2014</strong>
            <span>Est. Sri Lanka</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="section-badge"><i class="fa-solid fa-building-columns fa-xs me-1"></i> Who We Are</div>
        <h2 id="about-h" class="section-title">A Trusted Multi-Sector Company in Sri Lanka</h2>
        <div class="section-divider"></div>
        <p class="text-muted-pl mb-4">
          Ceylon PrimeLink Holdings is a Sri Lankan company delivering practical engineering knowledge and modern technology solutions. We bridge geotechnical engineering, GIS, AutoCAD, construction, software development, and IT retail under one professional team.
        </p>
        <ul class="pl-check-list mb-4">
          <?php
          $features = [
            ['fa-mountain', 'Geotechnical Engineering & Site Investigations'],
            ['fa-map',      'GIS & Mapping Solutions (ArcGIS / QGIS)'],
            ['fa-drafting-compass', 'AutoCAD Drafting & Housing Design'],
            ['fa-shield-halved', 'Landslide Mitigation & Slope Stability'],
            ['fa-code',     'Custom Software & Database Development'],
            ['fa-laptop',   'IT Products & Technical Support'],
          ];
          foreach ($features as [$icon, $label]) :
          ?>
          <li>
            <span class="check-icon"><i class="fa-solid fa-check fa-xs"></i></span>
            <span><?php echo esc_html($label); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="btn-pl btn-primary-pl">
          <i class="fa-solid fa-arrow-right fa-sm"></i> Learn More About Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES
     ============================================================ -->
<section class="section-lg" style="background:var(--pl-bg);" aria-labelledby="services-h">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-grid-2 fa-xs me-1"></i> What We Offer</div>
      <h2 id="services-h" class="section-title">Our Core Services</h2>
      <div class="section-divider center"></div>
      <p class="section-subtitle">
        From complex engineering investigations to custom software and retail IT products — solutions tailored for Sri Lankan businesses and projects.
      </p>
    </div>
    <div class="row g-4">
      <?php
      $services = [
        ['blue',   'fa-mountain',          'Engineering Solutions',     'Geotechnical investigations, borehole drilling, SPT testing, and engineering reports for construction projects.',  '/engineering-solutions'],
        ['amber',  'fa-shield-halved',      'Landslide Mitigation',      'Slope stability analysis, retaining wall design, earth reinforcement, and government-rejected site re-evaluation.', '/engineering-solutions'],
        ['cyan',   'fa-map',               'GIS &amp; Mapping',              'ArcGIS and QGIS project support, spatial analysis, terrain modelling, and engineering GIS applications.',          '/engineering-solutions'],
        ['purple', 'fa-drafting-compass',  'AutoCAD Design',            'Professional engineering drafting, housing plans, building layouts, and structural concept designs.',              '/engineering-solutions'],
        ['green',  'fa-code',              'Software Development',      'Custom business software, cashier systems, inventory management, and database applications from LKR 45,000.',     '/it-services'],
        ['blue',   'fa-laptop',            'IT Products &amp; Support',      'Laptops, computers, accessories, networking equipment, and technical support at competitive prices.',             '/it-services'],
        ['amber',  'fa-hammer',            'Construction Services',     'Construction consultancy, earth reinforcement, and infrastructure solutions for challenging terrain.',             '/services'],
        ['pink',   'fa-house-chimney',     'Housing Design',            'Residential and commercial housing plan designs, structural concepts, and engineering feasibility studies.',       '/services'],
        ['purple', 'fa-database',          'Database Solutions',        'Small business databases, data management systems, and ongoing technical support from LKR 45,000.',               '/it-services'],
        ['green',  'fa-chart-line',        'Slope Stability Analysis',  'GeoStudio and PLAXIS modelling, slope stability simulation, and engineering analysis for construction projects.',  '/engineering-solutions'],
        ['cyan',   'fa-file-contract',     'Geotechnical Reports',      'Professional site investigation reports, borehole logs, core logging, and engineering analysis documentation.',   '/engineering-solutions'],
        ['pink',   'fa-store',             'Retail Outlets',            'Computer products, laptops, IT accessories, and consumer technology at our Gampaha office and retail outlet.',    '/outlets'],
      ];
      foreach ($services as [$color, $icon, $title, $desc, $link]) :
      ?>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="pl-service-card h-100">
          <div class="pl-service-icon <?php echo $color; ?>">
            <i class="fa-solid <?php echo $icon; ?>"></i>
          </div>
          <h4><?php echo $title; ?></h4>
          <p><?php echo $desc; ?></p>
          <a href="<?php echo esc_url(home_url($link)); ?>" class="pl-service-link">
            Learn more <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="section-lg" aria-labelledby="why-h">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-star fa-xs me-1"></i> Why PrimeLink</div>
      <h2 id="why-h" class="section-title">Why Choose PrimeLink Holdings?</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $reasons = [
        ['fa-user-tie',        'Professional Engineering Experience', 'Hands-on geotechnical, construction, and GIS project experience across Sri Lanka.'],
        ['fa-shield-check',    'Reliable Technical Solutions',        'Technically sound, well-documented solutions that meet industry standards and client specifications.'],
        ['fa-laptop-code',     'Modern Software Expertise',           'From custom business software to GIS analysis tools — full spectrum of modern digital solutions.'],
        ['fa-tag',             'Affordable Pricing',                  'Competitive and transparent pricing tailored for Sri Lankan businesses, startups, and individuals.'],
        ['fa-headset',         'Responsive Customer Service',         'Quick responses via phone, email, and WhatsApp. We stay in contact from start to finish.'],
        ['fa-flag',            'Sri Lankan Based Company',            'We understand local terrain, regulations, and business needs. Based in Gampaha, Western Province.'],
        ['fa-sliders',         'Customized Solutions',                'No two projects are the same. Every solution is tailored to your requirements and budget.'],
        ['fa-graduation-cap',  'University & Research Support',       'GIS and engineering analysis support for undergrad students, postgrads, and academic projects.'],
      ];
      foreach ($reasons as [$icon, $title, $desc]) :
      ?>
      <div class="col-lg-3 col-md-6">
        <div class="pl-why-card">
          <div class="pl-why-icon"><i class="fa-solid <?php echo $icon; ?>"></i></div>
          <h5><?php echo esc_html($title); ?></h5>
          <p><?php echo esc_html($desc); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     QUOTE FORM
     ============================================================ -->
<section class="pl-quote-section section-lg" aria-labelledby="quote-h">
  <div class="container position-relative" style="z-index:1;">
    <div class="row align-items-center g-5">

      <!-- Info -->
      <div class="col-lg-5">
        <div class="section-badge accent"><i class="fa-solid fa-file-invoice fa-xs me-1"></i> Get Started</div>
        <div class="pl-quote-info mt-3">
          <h2 id="quote-h">Request a Free Quotation</h2>
          <p class="lead">Have a project in mind? Reach out and our team will get back to you promptly with a tailored quotation.</p>
          <a href="tel:+94775860868" class="pl-contact-pill text-decoration-none mb-2">
            <div class="pl-contact-pill-icon"><i class="fa-solid fa-phone"></i></div>
            <div>
              <strong>+94 775 860 868</strong>
              <span>Mon–Fri 8:30 AM – 5:30 PM</span>
            </div>
          </a>
          <a href="mailto:info@primelink.com.lk" class="pl-contact-pill text-decoration-none mb-2">
            <div class="pl-contact-pill-icon"><i class="fa-solid fa-envelope"></i></div>
            <div>
              <strong>info@primelink.com.lk</strong>
              <span>We respond within 24 hours</span>
            </div>
          </a>
          <a href="https://wa.me/94775860868" class="pl-contact-pill text-decoration-none" target="_blank" rel="noopener">
            <div class="pl-contact-pill-icon"><i class="fa-brands fa-whatsapp"></i></div>
            <div>
              <strong>WhatsApp Chat</strong>
              <span>Quick response guaranteed</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-7">
        <div class="pl-form-card">
          <h3>Send Your Request</h3>
          <p class="subtitle">We respond within 24 hours on business days.</p>
          <form id="quote-form" novalidate>
            <?php wp_nonce_field('primelink_form', 'primelink_nonce'); ?>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label for="qf-name">Full Name <span style="color:#ef4444;">*</span></label>
                  <input type="text" id="qf-name" name="name" placeholder="Your full name" required autocomplete="name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label for="qf-phone">Phone Number</label>
                  <input type="tel" id="qf-phone" name="phone" placeholder="+94 77X XXX XXX" autocomplete="tel">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label for="qf-email">Email Address <span style="color:#ef4444;">*</span></label>
                  <input type="email" id="qf-email" name="email" placeholder="your@email.com" required autocomplete="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="pl-form-group">
                  <label for="qf-subject">Service Required</label>
                  <select id="qf-subject" name="subject">
                    <option value="">Select a service…</option>
                    <option>Geotechnical Engineering</option>
                    <option>Landslide Mitigation</option>
                    <option>GIS &amp; Mapping</option>
                    <option>AutoCAD Design</option>
                    <option>Software Development</option>
                    <option>Database Solutions</option>
                    <option>IT Products</option>
                    <option>Construction Services</option>
                    <option>General Enquiry</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="pl-form-group">
                  <label for="qf-message">Project Details <span style="color:#ef4444;">*</span></label>
                  <textarea id="qf-message" name="message" rows="4" placeholder="Briefly describe your project or requirements…" required></textarea>
                </div>
              </div>
            </div>
            <div id="quote-form-msg" class="form-msg" role="status" aria-live="polite"></div>
            <button type="submit" class="btn-pl btn-primary-pl w-100 justify-content-center mt-2">
              <i class="fa-solid fa-paper-plane fa-sm"></i> Send Request
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="section-lg" style="background:var(--pl-bg);" aria-labelledby="reviews-h">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-badge mx-auto"><i class="fa-solid fa-star fa-xs me-1"></i> Client Reviews</div>
      <h2 id="reviews-h" class="section-title">What Our Clients Say</h2>
      <div class="section-divider center"></div>
    </div>
    <div class="row g-4">
      <?php
      $reviews = [
        ['DR','Dinesh Rajapaksha','Property Developer, Gampaha',  5,'PrimeLink provided an excellent geotechnical investigation report for our housing project site. The borehole drilling and SPT testing were professional and the report was very detailed. Highly recommended.'],
        ['AP','Amali Perera',    'Civil Engineer, Kandy',          5,'We contacted PrimeLink for a landslide risk assessment for a site previously rejected. They re-evaluated the slope stability and provided a proper mitigation plan. Very professional service.'],
        ['MF','Mohamed Farouk',  'Business Owner, Colombo',        5,'The cashier software they developed works perfectly. Setup was quick and they provided good training. The price was reasonable and handles all our daily billing needs.'],
        ['KD','Kavinda Dissanayake','Engineering Student, USJP',   4,'I needed GIS mapping for my final year research project. PrimeLink was very helpful and completed the ArcGIS analysis within the timeline. Good quality output.'],
        ['NB','Nilupul Bandara', 'Teacher, Gampaha',               5,'Purchased a laptop from their outlet. Good prices compared to Colombo stores. The staff was knowledgeable and helped me choose the right specifications.'],
        ['SW','Sushantha Wijeratne','Contractor, Kelaniya',        5,'AutoCAD drawings for our housing plan were done neatly and precisely. Communication was good throughout. Will use PrimeLink again for the next phase.'],
      ];
      foreach ($reviews as [$init, $name, $title, $stars, $text]) :
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="pl-review-card h-100">
          <div class="pl-stars"><?php echo str_repeat('★',$stars) . str_repeat('☆',5-$stars); ?></div>
          <p class="pl-review-text">"<?php echo esc_html($text); ?>"</p>
          <div class="pl-reviewer">
            <div class="pl-reviewer-avatar"><?php echo esc_html($init); ?></div>
            <div>
              <span class="pl-reviewer-name"><?php echo esc_html($name); ?></span>
              <span class="pl-reviewer-title"><?php echo esc_html($title); ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
