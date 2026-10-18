# Reconstruction Audit: jorisbrianti.fr to Laravel

## 1. Overview & Forensic Baseline
- **Target URL**: [https://jorisbrianti.fr/](https://jorisbrianti.fr/)
- **Target Architecture**: Laravel 13 (PHP 8.5) with Blade templating, Vite, Vanilla CSS & ES modules.
- **Original Stack**: Astro static site generator bundled with Vite, GSAP (ScrollTrigger), Lenis smooth scrolling, Barba.js PJAX transitions, and custom WebGL/Canvas effects.

## 2. Source Scraping Audit & Deficiencies
- The initial scraped workspace contained HTML entrypoints and JavaScript files, but several media files and fonts were 0-byte stubs (e.g. `MangoGrotesque-*.woff2` and category preview videos).
- **Remediation**: An automated multi-asset fetcher (`download_all_assets.js`) was deployed to retrieve all 89 distinct live assets from `https://jorisbrianti.fr/` directly into the public directory tree (`public/_astro/`), totaling ~36.3 MB of intact fonts, WebM/MOV videos, images, and documents.

## 3. Architecture & Laravel Integration
- **Framework Initialization**: Fully structured Laravel 13 environment configured with `laravel/boost`.
- **Views**:
  - `resources/views/layouts/app.blade.php`: Shared root layout encapsulating `data-barba="wrapper"`, preloaded fonts, persistent overlays, magnetic cursor DOM, and Awwwards badge.
  - `resources/views/pages/`: Modularized Blade views for `home`, `about`, `work`, `brand`, `motion`, `product`, `webdev`, and `404`.
- **Routing & Controllers**:
  - [PortfolioController](file:///d:/portsd/app/Http/Controllers/PortfolioController.php) serves all 7 live routes + 404 fallback matching the canonical paths of the original portfolio.
