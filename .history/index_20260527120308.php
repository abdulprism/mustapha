<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>mustapha. — Creative Visual Systems</title>
  <meta name="description" content="Creative visuals for websites, 3D mockups, exhibitions, events, brands, venues, and product interfaces by Abdul Mustapha Hemedi." />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./public/css/root.css">
  <link rel="stylesheet" href="./public/css/header.css">
  <link rel="stylesheet" href="./public/css/index.css">
  <link rel="stylesheet" href="./public/css/font.css">
  <link rel="stylesheet" href="./public/css/index.css">
  
</head>

<body>

  <!-- Header -->
  <header class="header" id="siteHeader">
    <div class="wide-container">
      <nav class="nav">
        <a href="index.php" class="logo">
          <img src="./public/icons/logo-white.svg" alt="">
        </a>

        <div class="menu-area">

          <div class="nav-panel" id="navPanel">
            <a href="index.php" class="active">Home</a>
            <a href="work.php">Work</a>
            <a href="#competence">Skills</a>
            <a href="./routes/venues.php">Venues</a>
            <a href="#contact">Contact</a>
          </div>

          <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
            <i class="bi bi-list icon-menu"></i>
            <i class="bi bi-x-lg icon-close"></i>
          </button>

        </div>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero" data-header-theme="dark">
    <div class="hero-slider" id="heroSlider">

      <div class="hero-slide active">
        <img src="./public/img/profile/hero0.jpg" alt="3D architectural visual design">
      </div>

      <div class="hero-slide">
        <img src="./public/img/profile/hero1.jpg" alt="Exhibition booth visual design">
      </div>

      <div class="hero-slide">
        <img src="./public/img/profile/hero2.jpg" alt="Event branding visual design">
      </div>

      <div class="hero-slide">
        <img src="./public/img/profile/office0.jpg" alt="Website interface visual design">
      </div>
    </div>

    <div class="container hero-content-wrap">
      <div class="hero-content">
        <h1>Creative visuals by mustapha.</h1>
        <p>Websites. 3D mockups. Exhibitions. Events. Brands. Interfaces.</p>
        <div class="hero-actions">
          <a href="#work">View Work</a>
        </div>

      </div>
    </div>

    <div class="hero-dots" id="heroDots">
      <button class="hero-dot active" aria-label="View slide 1"></button>
      <button class="hero-dot" aria-label="View slide 2"></button>
      <button class="hero-dot" aria-label="View slide 3"></button>
      <button class="hero-dot" aria-label="View slide 4"></button>
    </div>

  </section>

  <!-- Competence -->
  <section class="competence" id="competence" data-header-theme="light">
    <div class="container competence-container">

      <div class="competence-head">
        <h2>What I Do</h2>
      </div>

      <div class="competence-grid">
        <a href="#work" class="competence-item">
          <div class="competence-icon">
            <i class="bi bi-globe2"></i>
          </div>

          <div class="competence-copy">
            <h3>Website & System</h3>
            <span></span>
            <p>Clean websites and functional systems for communication and registration.</p>
          </div>
        </a>

        <a href="#work" class="competence-item">
          <div class="competence-icon">
            <i class="bi bi-box"></i>
          </div>

          <div class="competence-copy">
            <h3>3D Visual Mockups</h3>
            <span></span>
            <p>Spaces, booths, stages, and environments before production.</p>
          </div>
        </a>

        <a href="#work" class="competence-item">
          <div class="competence-icon">
            <i class="bi bi-vector-pen"></i>
          </div>

          <div class="competence-copy">
            <h3>Brand & Graphic Design</h3>
            <span></span>
            <p>Campaign visuals and presentation assets for events and brands.</p>
          </div>
        </a>
      </div>

    </div>
  </section>

  <!-- Work Showcase -->
  <section class="work-showcase" id="work" data-header-theme="light">
    <div class="work-head">
      <div>
        <h2>Projects made to be seen.</h2>
      </div>
    </div>

    <div class="split-row project-item">
      <div class="split-image">
        <img src="./public/img/profile/mlimani00.jpg" alt="SITE Tourism Event">
      </div>

      <div class="split-copy">
        <div class="split-inner">
          <span class="project-chip">On going project</span>
          <h3>SITE Tourism Event</h3>

          <span class="click-hint">click to view details <i class="bi bi-arrow-down"></i></span>

          <div class="project-reveal">
            <p>
              Event visual direction, booth concept, and brand presentation for a tourism-focused event environment.
            </p>

            <a href="work.html#site-tourism" class="btn">
              View Project <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="split-row reverse project-item">
      <div class="split-image">
        <img src="./public/img/profile/tib0.jpg" alt="TIB Booth Concept">
      </div>

      <div class="split-copy">
        <div class="split-inner">
          <span class="project-chip">On going project</span>
          <h3>TIB Booth Concept</h3>

          <span class="click-hint">click to view details <i class="bi bi-arrow-down"></i></span>

          <div class="project-reveal">
            <p>
              3D exhibition booth concept with reception area, visitor interaction, publications display, and brand presence.
            </p>

            <a href="work.html#tib-booth" class="btn">
              View Project <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="split-row project-item">
      <div class="split-image">
        <img src="./public/img/profile/tent0.jpg" alt="SAFE & PROLA Booth">
      </div>

      <div class="split-copy">
        <div class="split-inner">
          <span class="project-chip">On going project</span>
          <h3>SAFE & PROLA Booth</h3>

          <span class="click-hint">click to view details <i class="bi bi-arrow-down"></i></span>

          <div class="project-reveal">
            <p>
              Clean booth design, event visuals, and professional presentation layout for development and institutional audiences.
            </p>

            <a href="work.html#safe-prola" class="btn">
              View Project <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Venue Section -->
  <section class="venue-section" id="venues" data-header-theme="dark">
    <div class="venue-shell">
      <div class="venue-card">
        <img src="./public/img/profile/mlimani02.jpg" alt="3D venue model in Tanzania">

        <div class="venue-content">

          <h2>Explore event venues before production.</h2>

          <p>
            I create 3D venue models for event spaces in Tanzania, allowing clients to view,
            observe, plan layouts, test branding, and understand the venue before setup begins.
          </p>

          <div class="venue-meta">
            <span>Mlimani City</span>
            <span>Serena Hotel</span>
            <span>SabaSaba</span>
            <span>Event halls</span>
          </div>

          <a href="./routes/venues.php" class="btn">
            View Venue Feature <i class="bi bi-arrow-right"></i>
          </a>

        </div>
      </div>
    </div>
  </section>

  <!-- Breathing Space -->
  <section class="breathing-block" data-header-theme="light"></section>

  <!-- Mosaic -->
  <section class="mosaic-section" data-header-theme="light">

    <div class="mosaic">

      <div class="mosaic-item">
        <img src="./public/img/work/udsm/profile.jpg" alt="Power Relief booth">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/work/dowelef/profile.jpg" alt="Power Relief artwork">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/mwangaBank/profile.jpg" alt="TIB booth visual">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/work/ADFinanceSystem/profile.jpg" alt="Power Relief booth">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/profile/tib-booth-02.png" alt="TIB booth visual">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/profile/power-relief-01.png" alt="Power Relief booth">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/profile/power-relief-02.png" alt="Power Relief artwork">
      </div>

      <div class="mosaic-item">
        <img src="./public/img/profile/tib-booth-02.png" alt="TIB booth visual">
      </div>
    </div>
  </section>

  <!-- Soft CTA -->
  <section class="soft-cta" data-header-theme="light">
    <div class="soft-cta-box">
      <div>
        <h2>Have an event or exhibition?</h2>
        <p>Get visual direction before production. Layouts, booths, branding, venue planning, and 3D presentation.</p>
      </div>

      <a href="#contact" class="btn">
        Start Discussion
      </a>
    </div>
  </section>

  <!-- Footer -->
  <section class="footer-section" id="contact" data-header-theme="dark">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h2>Work that introduces the creator.</h2>
          <p>
            mustapha.co.tz is the creative portfolio of Abdul Mustapha Hemedi.
            Focused on websites, 3D mockups, event visuals, brands, venue models, and product interfaces.
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
    const siteHeader = document.getElementById("siteHeader");
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.querySelectorAll(".nav-panel a");

    menuToggle.addEventListener("click", () => {
      const isOpen = siteHeader.classList.toggle("menu-open");
      menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      menuToggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
    });

    navLinks.forEach(link => {
      link.addEventListener("click", () => {
        siteHeader.classList.remove("menu-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
      });
    });

    document.addEventListener("click", (event) => {
      if (!siteHeader.contains(event.target)) {
        siteHeader.classList.remove("menu-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
      }
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") {
        siteHeader.classList.remove("menu-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
      }
    });

    const heroSlides = document.querySelectorAll(".hero-slide");
    const heroDots = document.querySelectorAll(".hero-dot");
    const heroCurrent = document.getElementById("heroCurrent");

    let currentHeroSlide = 0;
    let heroTimer;

    function showHeroSlide(index) {
      heroSlides.forEach(slide => slide.classList.remove("active"));
      heroDots.forEach(dot => dot.classList.remove("active"));

      heroSlides[index].classList.add("active");
      heroDots[index].classList.add("active");

      //heroCurrent.textContent = String(index + 1).padStart(2, "0");
      currentHeroSlide = index;
      
    }

    function nextHeroSlide() {
      const nextIndex = (currentHeroSlide + 1) % heroSlides.length;
      showHeroSlide(nextIndex);
    }

    function startHeroSlider() {
      heroTimer = setInterval(nextHeroSlide, 5200);
    }

    function resetHeroSlider() {
      clearInterval(heroTimer);
      startHeroSlider();
    }

    heroDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        showHeroSlide(index);
        resetHeroSlider();
      });
    });

    startHeroSlider();

    const projectItems = document.querySelectorAll(".project-item");

    projectItems.forEach(item => {
      item.addEventListener("click", (event) => {
        if (event.target.closest("a")) return;

        projectItems.forEach(other => {
          if (other !== item) other.classList.remove("active");
        });

        item.classList.toggle("active");
      });
    });

    const themeSections = document.querySelectorAll("[data-header-theme]");

    function updateHeaderTheme() {
      const checkPoint = 42;

      themeSections.forEach(section => {
        const rect = section.getBoundingClientRect();

        if (rect.top <= checkPoint && rect.bottom >= checkPoint) {
          const theme = section.dataset.headerTheme;

          if (theme === "light") {
            siteHeader.classList.add("on-light");
          } else {
            siteHeader.classList.remove("on-light");
          }
        }
      });
    }

    window.addEventListener("scroll", updateHeaderTheme);
    window.addEventListener("resize", updateHeaderTheme);
    updateHeaderTheme();

    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

</body>
</html>