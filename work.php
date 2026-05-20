<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Work — mustapha.</title>
  <meta name="description" content="Selected creative work by Abdul Mustapha Hemedi: websites, 3D mockups, event visuals, branding, and product interfaces." />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    :root {
      --brand: #0c4a5a;
      --brand-dark: #073642;
      --brand-hover: #0f6178;
      --brand-soft: #e9f1f6;

      --page: #f4f7f8;
      --white: #ffffff;
      --text: #101820;
      --muted: #66757c;
      --line: #dfe8eb;

      --max: 980px;
      --wide: 1280px;
      --radius: 8px;
      --ease: cubic-bezier(.2, .8, .2, 1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: "Inter", system-ui, sans-serif;
      background: var(--page);
      color: var(--text);
      overflow-x: hidden;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }

    ::selection {
      background: var(--brand);
      color: #fff;
    }

    .container {
      width: 100%;
      max-width: var(--max);
      margin: 0 auto;
      padding: 0 24px;
    }

    .wide-container {
      width: 100%;
      max-width: var(--wide);
      margin: 0 auto;
      padding: 0 24px;
    }

    /* HEADER */

    .header {
      height: 70px;
      background: rgba(255,255,255,.94);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid var(--line);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav {
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 1.22rem;
      font-weight: 900;
      letter-spacing: -0.06em;
      color: var(--brand-dark);
    }

    .logo span {
      color: var(--brand);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 30px;
      font-size: .78rem;
      font-weight: 850;
      color: #66757c;
      text-transform: lowercase;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: var(--brand-dark);
    }

    .contact-btn {
      height: 38px;
      padding: 0 24px;
      border-radius: 5px;
      background: var(--brand);
      color: #fff !important;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: .78rem;
      font-weight: 900;
    }

    .contact-btn:hover {
      background: var(--brand-hover);
    }

    .menu-btn {
      display: none;
      width: 40px;
      height: 40px;
      border: 1px solid var(--line);
      border-radius: 6px;
      background: #fff;
      color: var(--brand-dark);
      font-size: 1.2rem;
      cursor: pointer;
    }

    /* MOBILE MENU */

    .mobile-menu {
      position: fixed;
      inset: 0;
      z-index: 200;
      background: var(--brand-dark);
      color: white;
      padding: 24px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transform: translateY(-100%);
      transition: transform .35s var(--ease);
    }

    .mobile-menu.open {
      transform: translateY(0);
    }

    .mobile-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .close-btn {
      width: 42px;
      height: 42px;
      border: 1px solid rgba(255,255,255,.2);
      background: transparent;
      color: #fff;
      border-radius: 6px;
      font-size: 1.1rem;
      cursor: pointer;
    }

    .mobile-links {
      display: grid;
      gap: 20px;
    }

    .mobile-links a {
      font-size: clamp(2.6rem, 13vw, 5rem);
      line-height: .9;
      letter-spacing: -0.08em;
      font-weight: 900;
      text-transform: lowercase;
    }

    .mobile-bottom {
      max-width: 320px;
      color: rgba(255,255,255,.65);
      font-size: .95rem;
      line-height: 1.55;
    }

    /* INTRO */

    .intro {
      padding: 72px 0 34px;
    }

    .intro-grid {
      display: grid;
      grid-template-columns: 1fr .55fr;
      gap: 42px;
      align-items: end;
    }

    .intro h1 {
      font-size: clamp(1.9rem, 3.4vw, 3.2rem);
      line-height: 1.02;
      letter-spacing: -0.065em;
      font-weight: 900;
      color: var(--text);
      max-width: 620px;
    }

    .intro p {
      color: var(--muted);
      font-size: .9rem;
      line-height: 1.5;
      font-weight: 750;
      max-width: 360px;
    }

    /* FILTERS */

    .filters {
      padding-bottom: 24px;
    }

    .filter-row {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
      border-top: 1px solid var(--line);
      border-bottom: 1px solid var(--line);
      padding: 16px 0;
    }

    .filter-btn {
      border: 0;
      background: transparent;
      color: var(--muted);
      font-family: inherit;
      font-size: .78rem;
      font-weight: 900;
      text-transform: lowercase;
      cursor: pointer;
      padding: 9px 13px;
      border-radius: 99px;
      transition: background .2s var(--ease), color .2s var(--ease);
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: var(--brand-soft);
      color: var(--brand-dark);
    }

    /* FEATURED */

    .featured {
      padding: 28px 0 64px;
    }

    .featured-card {
      display: grid;
      grid-template-columns: 1.2fr .8fr;
      gap: 34px;
      align-items: end;
    }

    .featured-image {
      height: 430px;
      overflow: hidden;
      border-radius: var(--radius);
      background: var(--brand-soft);
      position: relative;
    }

    .featured-image::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(7,54,66,0), rgba(7,54,66,.35));
      pointer-events: none;
    }

    .featured-image img {
      transition: transform .8s var(--ease);
    }

    .featured-card:hover img {
      transform: scale(1.04);
    }

    .featured-info {
      padding-bottom: 8px;
    }

    .tag {
      display: inline-flex;
      margin-bottom: 10px;
      color: var(--brand);
      font-size: .72rem;
      font-weight: 900;
      letter-spacing: .06em;
      text-transform: uppercase;
    }

    .featured-info h2 {
      font-size: clamp(1.5rem, 2.8vw, 2.4rem);
      line-height: 1.04;
      letter-spacing: -0.06em;
      font-weight: 900;
      max-width: 420px;
      margin-bottom: 10px;
    }

    .featured-info p {
      color: var(--muted);
      font-size: .9rem;
      line-height: 1.45;
      font-weight: 750;
      max-width: 390px;
      margin-bottom: 18px;
    }

    .small-link {
      color: var(--brand);
      font-size: .82rem;
      font-weight: 900;
      display: inline-flex;
      align-items: center;
      gap: 7px;
    }

    /* WORK GRID */

    .work-section {
      padding-bottom: 78px;
    }

    .section-head {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 22px;
      margin-bottom: 22px;
    }

    .section-title {
      font-size: 1.05rem;
      font-weight: 900;
      letter-spacing: -0.035em;
      color: var(--text);
    }

    .section-note {
      color: var(--muted);
      font-size: .82rem;
      font-weight: 750;
      line-height: 1.35;
      max-width: 330px;
    }

    .work-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 34px;
    }

    .work-card {
      display: block;
    }

    .work-image {
      height: 210px;
      border-radius: var(--radius);
      overflow: hidden;
      background: var(--brand-soft);
      position: relative;
    }

    .work-image::after {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: linear-gradient(180deg, rgba(7,54,66,0), rgba(7,54,66,.28));
    }

    .work-image img {
      transition: transform .7s var(--ease), filter .7s var(--ease);
    }

    .work-card:hover img {
      transform: scale(1.05);
      filter: saturate(1.05);
    }

    .work-body {
      padding-top: 14px;
    }

    .work-label {
      display: block;
      margin-bottom: 6px;
      color: var(--brand);
      font-size: .72rem;
      font-weight: 900;
      letter-spacing: .05em;
      text-transform: uppercase;
    }

    .work-body h3 {
      font-size: .98rem;
      font-weight: 900;
      letter-spacing: -0.045em;
      line-height: 1.2;
    }

    .work-body p {
      margin-top: 5px;
      color: var(--muted);
      font-size: .82rem;
      line-height: 1.35;
      font-weight: 700;
    }

    /* VISUAL WALL */

    .visual-wall {
      padding: 0 0 84px;
    }

    .wall-grid {
      display: grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 24px;
    }

    .wall-main,
    .wall-small {
      position: relative;
      overflow: hidden;
      border-radius: var(--radius);
      background: var(--brand-soft);
    }

    .wall-main {
      height: 430px;
    }

    .wall-column {
      display: grid;
      gap: 24px;
    }

    .wall-small {
      height: 203px;
    }

    .wall-main::after,
    .wall-small::after {
      content: attr(data-label);
      position: absolute;
      left: 18px;
      bottom: 16px;
      color: #fff;
      font-size: .76rem;
      font-weight: 900;
      letter-spacing: .08em;
      text-transform: uppercase;
      z-index: 2;
    }

    .wall-main::before,
    .wall-small::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(7,54,66,0), rgba(7,54,66,.65));
      z-index: 1;
    }

    /* CTA */

    .cta-section {
      padding: 0 0 90px;
    }

    .cta {
      min-height: 235px;
      border-radius: var(--radius);
      overflow: hidden;
      background: var(--brand-soft);
      position: relative;
    }

    .cta-bg {
      position: absolute;
      inset: 0;
      z-index: 1;
    }

    .cta-bg::after {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 2;
      background:
        linear-gradient(90deg, rgba(233,241,246,.96) 0%, rgba(233,241,246,.88) 50%, rgba(233,241,246,.14) 100%);
    }

    .cta-content {
      position: relative;
      z-index: 3;
      padding: 38px 46px;
      max-width: 640px;
      min-height: 235px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .cta h2 {
      font-size: clamp(1.45rem, 2.4vw, 2.05rem);
      line-height: 1.05;
      letter-spacing: -0.055em;
      font-weight: 900;
      margin-bottom: 12px;
    }

    .cta p {
      font-size: .9rem;
      line-height: 1.38;
      font-weight: 800;
      color: #233036;
      margin-bottom: 18px;
      max-width: 520px;
    }

    .cta a {
      height: 38px;
      width: min(100%, 360px);
      border-radius: 5px;
      background: var(--brand);
      color: white;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-size: .82rem;
      font-weight: 900;
    }

    .cta a:hover {
      background: var(--brand-hover);
    }

    /* FOOTER */

    .footer-section {
      background: var(--brand-dark);
      min-height: 340px;
      padding: 72px 0;
      color: #fff;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1fr .8fr;
      gap: 60px;
      align-items: start;
    }

    .footer-section h2 {
      font-size: 1.55rem;
      line-height: 1.1;
      letter-spacing: -0.05em;
      font-weight: 900;
      margin-bottom: 12px;
    }

    .footer-section p {
      color: rgba(255,255,255,.72);
      font-size: .9rem;
      line-height: 1.55;
      font-weight: 700;
      max-width: 520px;
    }

    .footer-links {
      display: grid;
      gap: 10px;
    }

    .footer-links a {
      min-height: 44px;
      padding: 0 14px;
      border-radius: 5px;
      background: rgba(255,255,255,.08);
      border: 1px solid rgba(255,255,255,.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: .86rem;
      font-weight: 900;
    }

    .footer-links a:hover {
      background: rgba(255,255,255,.14);
    }

    .copyright {
      margin-top: 70px;
      color: rgba(255,255,255,.5);
      font-size: .82rem;
      font-weight: 800;
    }

    /* RESPONSIVE */

    @media (max-width: 900px) {
      .nav-links {
        display: none;
      }

      .menu-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .intro-grid,
      .featured-card,
      .work-grid,
      .footer-grid,
      .wall-grid {
        grid-template-columns: 1fr;
      }

      .featured-image {
        height: 330px;
      }

      .work-grid {
        gap: 28px;
      }

      .work-image {
        height: 260px;
      }

      .wall-main,
      .wall-small {
        height: 280px;
      }
    }

    @media (max-width: 600px) {
      .header,
      .nav {
        height: 64px;
      }

      .intro {
        padding-top: 52px;
      }

      .section-head {
        display: grid;
      }

      .featured {
        padding-bottom: 54px;
      }

      .featured-image,
      .work-image {
        height: 220px;
      }

      .filter-row {
        overflow-x: auto;
        flex-wrap: nowrap;
        padding-bottom: 14px;
      }

      .filter-btn {
        white-space: nowrap;
      }

      .cta-content {
        padding: 28px;
      }
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header class="header">
    <div class="wide-container">
      <nav class="nav">
        <a href="index.html" class="logo">mustapha<span>.</span></a>

        <div class="nav-links">
          <a href="index.html">home</a>
          <a href="work.html" class="active">work</a>
          <a href="#visuals">visuals</a>
          <a href="#contact" class="contact-btn">
            <i class="bi bi-send-fill"></i>
            contact
          </a>
        </div>

        <button class="menu-btn" id="openMenu" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>
      </nav>
    </div>
  </header>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-top">
      <a href="index.html" class="logo" style="color:white;">mustapha<span>.</span></a>
      <button class="close-btn" id="closeMenu">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>

    <div class="mobile-links">
      <a href="index.html">home</a>
      <a href="work.html">work</a>
      <a href="#visuals">visuals</a>
      <a href="#contact">contact</a>
    </div>

    <p class="mobile-bottom">
      Selected work across websites, 3D mockups, events, brands, and interfaces.
    </p>
  </div>

  <main>

    <!-- Intro -->
    <section class="intro">
      <div class="container">
        <div class="intro-grid">
          <h1>Selected work.</h1>

          <p>
            Websites. 3D mockups. Events. Brands. Interfaces.
          </p>
        </div>
      </div>
    </section>

    <!-- Filters -->
    <section class="filters">
      <div class="container">
        <div class="filter-row">
          <button class="filter-btn active" data-filter="all">all</button>
          <button class="filter-btn" data-filter="website">websites</button>
          <button class="filter-btn" data-filter="3d">3d mockups</button>
          <button class="filter-btn" data-filter="event">events</button>
          <button class="filter-btn" data-filter="brand">branding</button>
          <button class="filter-btn" data-filter="ui">interfaces</button>
        </div>
      </div>
    </section>

    <!-- Featured -->
    <section class="featured">
      <div class="container">
        <a href="#" class="featured-card" data-category="website event">
          <div class="featured-image">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1300&q=90" alt="Tanzania Green Summit digital system">
          </div>

          <div class="featured-info">
            <span class="tag">featured / digital system</span>
            <h2>Tanzania Green Summit</h2>
            <p>Event website, registration flow, payment path, and participant experience.</p>
            <span class="small-link">View project <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
    </section>

    <!-- Work Grid -->
    <section class="work-section">
      <div class="container">
        <div class="section-head">
          <div>
            <h2 class="section-title">Work archive</h2>
            <p class="section-note">Image first. Short details only.</p>
          </div>
        </div>

        <div class="work-grid">

          <a href="#" class="work-card" data-category="website event">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=90" alt="Tanzania Green Summit website">
            </div>
            <div class="work-body">
              <span class="work-label">website / event</span>
              <h3>Tanzania Green Summit</h3>
              <p>Event website & registration system.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="3d event">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1000&q=90" alt="TIB Booth Concept">
            </div>
            <div class="work-body">
              <span class="work-label">3d / exhibition</span>
              <h3>TIB Booth Concept</h3>
              <p>Branded visitor space design.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="website brand">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=1000&q=90" alt="Prism Website">
            </div>
            <div class="work-body">
              <span class="work-label">website / brand</span>
              <h3>Prism Website</h3>
              <p>Corporate digital presentation.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="ui website">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1000&q=90" alt="Product interface">
            </div>
            <div class="work-body">
              <span class="work-label">interface</span>
              <h3>Payment Flow UI</h3>
              <p>Payment pages and product flow.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="3d event">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=1000&q=90" alt="3D visual concept">
            </div>
            <div class="work-body">
              <span class="work-label">3d mockup</span>
              <h3>Event Space Concepts</h3>
              <p>Spaces, booths, stages, and layouts.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="brand event">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=90" alt="Brand design">
            </div>
            <div class="work-body">
              <span class="work-label">brand / graphics</span>
              <h3>Brand Artworks</h3>
              <p>Campaign and presentation visuals.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="event 3d">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1000&q=90" alt="Event branding">
            </div>
            <div class="work-body">
              <span class="work-label">event</span>
              <h3>Event Branding</h3>
              <p>Walls, LED, banners, and visual flow.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="website ui">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1000&q=90" alt="Website system">
            </div>
            <div class="work-body">
              <span class="work-label">website / system</span>
              <h3>Web Systems</h3>
              <p>Clean pages and functional flows.</p>
            </div>
          </a>

          <a href="#" class="work-card" data-category="brand">
            <div class="work-image">
              <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1000&q=90" alt="Presentation design">
            </div>
            <div class="work-body">
              <span class="work-label">presentation</span>
              <h3>Brand Presentation</h3>
              <p>Visual systems for serious audiences.</p>
            </div>
          </a>

        </div>
      </div>
    </section>

    <!-- Selected Visuals -->
    <section class="visual-wall" id="visuals">
      <div class="container">
        <div class="section-head">
          <div>
            <h2 class="section-title">Selected visuals</h2>
            <p class="section-note">Visual range in one view.</p>
          </div>
        </div>

        <div class="wall-grid">
          <div class="wall-main" data-label="3D Space">
            <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=1200&q=90" alt="3D visual space">
          </div>

          <div class="wall-column">
            <div class="wall-small" data-label="Interface">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=90" alt="Website interface">
            </div>

            <div class="wall-small" data-label="Exhibition">
              <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=900&q=90" alt="Exhibition visual">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
      <div class="container">
        <div class="cta">
          <div class="cta-bg">
            <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=90" alt="Creative consultation space">
          </div>

          <div class="cta-content">
            <h2>Start a project.</h2>
            <p>Websites, 3D mockups, events, brands, and interfaces.</p>

            <a href="#contact">
              <i class="bi bi-send-fill"></i>
              Contact
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer / Contact -->
  <section class="footer-section" id="contact">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h2>Work that introduces the creator.</h2>
          <p>
            mustapha.co.tz is the creative portfolio of Abdul Mustapha Hemedi.
            Focused on websites, 3D mockups, event visuals, brands, and product interfaces.
          </p>
        </div>

        <div class="footer-links">
          <a href="mailto:hello@mustapha.co.tz">
            Email
            <i class="bi bi-arrow-up-right"></i>
          </a>

          <a href="https://wa.me/255712257370" target="_blank">
            WhatsApp
            <i class="bi bi-arrow-up-right"></i>
          </a>

          <a href="#">
            Instagram / Behance
            <i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>

      <p class="copyright">
        © <span id="year"></span> Abdul Mustapha Hemedi. All rights reserved.
      </p>
    </div>
  </section>

  <script>
    const openMenu = document.getElementById("openMenu");
    const closeMenu = document.getElementById("closeMenu");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileLinks = document.querySelectorAll(".mobile-links a");

    openMenu.addEventListener("click", () => {
      mobileMenu.classList.add("open");
      document.body.style.overflow = "hidden";
    });

    closeMenu.addEventListener("click", () => {
      mobileMenu.classList.remove("open");
      document.body.style.overflow = "";
    });

    mobileLinks.forEach(link => {
      link.addEventListener("click", () => {
        mobileMenu.classList.remove("open");
        document.body.style.overflow = "";
      });
    });

    document.getElementById("year").textContent = new Date().getFullYear();

    const filterButtons = document.querySelectorAll(".filter-btn");
    const workCards = document.querySelectorAll(".work-card");

    filterButtons.forEach(button => {
      button.addEventListener("click", () => {
        const filter = button.dataset.filter;

        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        workCards.forEach(card => {
          const categories = card.dataset.category || "";

          if (filter === "all" || categories.includes(filter)) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  </script>

</body>
</html>