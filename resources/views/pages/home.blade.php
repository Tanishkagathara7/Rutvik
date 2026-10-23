@extends('layouts.app')

@section('title', 'Rutvik Khandhar • Web & Mobile App Developer • Founder of FlayoTech')
@section('description', 'Rutvik Shantilal Khandhar — Web & Mobile App Developer, Founder of FlayoTech, BNI Member based in Rajkot, Gujarat, India.')
@section('page_id', 'home')
@section('namespace', 'home')

@section('content')
<!-- ==========================================================================
     1. MINIMAL HEADER — EXACTLY TWO PROMINENT LOGOS ONLY
     Left: FlayoTech (~240px wide). Right: BNI (~165px wide).
     115px height, transparent/blur background, zero menus, zero extra buttons.
     ========================================================================== -->
<header class="bespoke-header">
    <div class="bespoke-header__inner">
        <a href="https://flayotech.com" target="_blank" rel="noopener noreferrer" class="bespoke-brand-link" title="FlayoTech - We Build What You Imagine">
            <img src="/_astro/images/logo.png" alt="FlayoTech Logo" class="bespoke-logo-flayotech" width="240" height="56">
        </a>
        <a href="https://bni.com" target="_blank" rel="noopener noreferrer" class="bespoke-brand-link" title="BNI - Member Biography">
            <img src="/_astro/images/bni-logo.png" alt="BNI Member Logo" class="bespoke-logo-bni" width="165" height="52">
        </a>
    </div>
</header>

<main>
    <!-- ==========================================================================
         2. HERO — CINEMATIC EDITORIAL HERO
         Portrait cutout breaks out over deep burgundy organic arch directly against canvas.
         Zero white rectangular card. Oversized condensed typography.
         Headline: "The Vision to Lead. The Courage to Build."
         ========================================================================== -->
    <section class="editorial-hero">
        <!-- ======================================================================
             CREATIVE EDITORIAL GRAPHICS COMPOSITION (LAYERED ART DIRECTION)
             - Behind text & portrait
             - Sculptural flowing ribbons with fine parallel wave lines
             - Architectural vertical grid lines
             - Editorial dot matrix patterns
             - Soft oversized champagne/blush circle backdrop
             - Dimensional crimson sphere accents
             ====================================================================== -->
        <div class="hero-creative-backdrop" aria-hidden="true">
            <!-- Large soft blush/champagne circular glow form behind portrait -->
            <div class="hero-geo-disc"></div>

            <!-- Architectural Linework - Fine vertical cadence behind left/center of portrait -->
            <div class="hero-arch-lines">
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
                <span class="arch-line"></span>
            </div>

            <!-- Editorial Dot Matrix Grid (Upper Left of Portrait) -->
            <div class="hero-dot-matrix hero-dot-matrix--top">
                <div class="dot-grid"></div>
            </div>

            <!-- Editorial Dot Matrix Grid (Lower Right of Portrait) -->
            <div class="hero-dot-matrix hero-dot-matrix--bottom">
                <div class="dot-grid"></div>
            </div>

            <!-- Dimensional Crimson Sphere Accent (Center between text and card) -->
            <div class="hero-sphere-accent hero-sphere-accent--mid"></div>

            <!-- Smaller Champagne/Crimson Sphere Accent (Upper right above arch) -->
            <div class="hero-sphere-accent hero-sphere-accent--small"></div>

            <!-- Master Layered Vector Ribbons & Elegant Parallel Wave Trails -->
            <svg class="hero-ribbon-svg" viewBox="0 0 1600 900" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <!-- Flowing Gradient 1: Main sweeping ribbon -->
                    <linearGradient id="ribbonGradMain" x1="0%" y1="100%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#7D1720" stop-opacity="0.02" />
                        <stop offset="35%" stop-color="#B52D37" stop-opacity="0.22" />
                        <stop offset="65%" stop-color="#7D1720" stop-opacity="0.85" />
                        <stop offset="85%" stop-color="#C8A56A" stop-opacity="0.45" />
                        <stop offset="100%" stop-color="#EBC6C5" stop-opacity="0.1" />
                    </linearGradient>

                    <!-- Flowing Gradient 2: Underside loop ribbon -->
                    <linearGradient id="ribbonGradSub" x1="20%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#EBC6C5" stop-opacity="0.4" />
                        <stop offset="40%" stop-color="#B52D37" stop-opacity="0.65" />
                        <stop offset="80%" stop-color="#7D1720" stop-opacity="0.9" />
                        <stop offset="100%" stop-color="#4A0B10" stop-opacity="0.3" />
                    </linearGradient>

                    <!-- Soft Blush Shadow Fill Gradient -->
                    <linearGradient id="ribbonSoftSweep" x1="0%" y1="50%" x2="100%" y2="50%">
                        <stop offset="0%" stop-color="#B52D37" stop-opacity="0.0" />
                        <stop offset="45%" stop-color="#EBC6C5" stop-opacity="0.3" />
                        <stop offset="70%" stop-color="#B52D37" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="#B52D37" stop-opacity="0.0" />
                    </linearGradient>

                    <filter id="ribbonShadow" x="-10%" y="-10%" width="120%" height="120%">
                        <feDropShadow dx="0" dy="18" stdDeviation="22" flood-color="#7D1720" flood-opacity="0.18" />
                    </filter>
                </defs>

                <!-- Soft tonal ground sweep beneath text heading to lower portrait -->
                <path d="M 0 820 C 350 820, 600 780, 850 720 C 1100 660, 1350 500, 1600 480 L 1600 900 L 0 900 Z" fill="url(#ribbonSoftSweep)" />

                <!-- Deep Crimson Sweeping Sculptural Ribbon - Flowing under portrait & rising gracefully to right -->
                <path class="ribbon-flow-main"
                      d="M 280 840 C 520 840, 680 770, 840 730 C 1020 685, 1220 720, 1340 590 C 1460 460, 1490 320, 1600 240 C 1600 310, 1480 540, 1360 660 C 1210 800, 980 775, 800 810 C 640 840, 480 880, 280 840 Z"
                      fill="url(#ribbonGradMain)"
                      filter="url(#ribbonShadow)" />

                <!-- Secondary Fine Layer Ribbon Ribbon Underlap -->
                <path class="ribbon-flow-sub"
                      d="M 680 780 C 860 720, 1060 670, 1240 680 C 1390 690, 1500 520, 1600 370 C 1580 430, 1450 630, 1300 730 C 1140 830, 920 810, 680 780 Z"
                      fill="url(#ribbonGradSub)" />

                <!-- Architectural Fine Parallel Flow Lines (Precision Guilloche Strings) -->
                <g class="ribbon-parallel-lines" stroke="#7D1720" stroke-width="0.75" stroke-opacity="0.22" fill="none">
                    <path d="M 120 720 C 380 710, 720 740, 960 640 C 1200 540, 1420 380, 1600 210" />
                    <path d="M 120 728 C 380 718, 720 748, 960 648 C 1200 548, 1420 388, 1600 218" stroke-opacity="0.26" />
                    <path d="M 120 736 C 380 726, 720 756, 960 656 C 1200 556, 1420 396, 1600 226" stroke-opacity="0.2" />
                    <path d="M 120 744 C 380 734, 720 764, 960 664 C 1200 564, 1420 404, 1600 234" stroke-opacity="0.16" />
                    <path d="M 120 752 C 380 742, 720 772, 960 672 C 1200 572, 1420 412, 1600 242" stroke-opacity="0.12" />
                    <path d="M 120 760 C 380 750, 720 780, 960 680 C 1200 580, 1420 420, 1600 250" stroke-opacity="0.08" />
                </g>

                <!-- Champagne-Gold Delicate Accent Line Flowing Behind Arched Portrait -->
                <path class="ribbon-champagne-trace"
                      d="M 520 640 C 720 540, 1020 520, 1260 410 C 1440 330, 1540 210, 1600 130"
                      stroke="#C8A56A"
                      stroke-width="1.25"
                      stroke-opacity="0.55"
                      stroke-dasharray="4 4"
                      fill="none" />
            </svg>
        </div>

        <div class="editorial-hero__wrap">
            <div class="editorial-hero__grid">
                <!-- Left Narrative Stack -->
                <div class="hero-narrative-stack">
                    <div class="hero-tagline-quote">
                        &ldquo;The Vision to Lead.<br>The Courage to Build.&rdquo;
                    </div>

                    <h1 class="hero-monument-name">
                        <span class="hero-first-name">Rutvik</span>
                        <span class="hero-last-name">Khandhar</span>
                    </h1>

                    <div class="hero-meta-capsules">
                        <span class="hero-origin-pill">
                            <span class="pulse-indicator-emerald"></span>
                            <strong>Founder of FlayoTech</strong> &bull; Rajkot, Gujarat
                        </span>
                    </div>
                </div>

                <!-- Right Monumental Cutout Portrait with Organic Arch (UNCHANGED CARD) -->
                <div class="hero-portrait-stage">
                    <div class="hero-monument-sculpture">
                        <div class="hero-burgundy-silhouette"></div>
                        <img class="hero-portrait-cutout" 
                             src="/_astro/images/Rutvik.png" 
                             alt="Rutvik Shantilal Khandhar" 
                             width="600" 
                             height="800" 
                             loading="eager" 
                             fetchpriority="high">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         3. SIGNATURE MARQUEE — MASSIVE FULL-WIDTH KINETIC TYPOGRAPHY
         Two counter-scrolling infinite bands, alternating charcoal, burgundy & outlined.
         ========================================================================== -->
    <section class="kinetic-marquee-stage" aria-hidden="true">
        <!-- Band 1: Travelling Left -->
        <div class="marquee-track marquee-track--left">
            <div class="marquee-snippet marquee-snippet--charcoal">
                <span>Website Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>Mobile App Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--outline">
                <span>Custom CRM Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>ERP Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <!-- Seamless infinite clone -->
            <div class="marquee-snippet marquee-snippet--charcoal">
                <span>Website Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>Mobile App Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--outline">
                <span>Custom CRM Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>ERP Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <!-- Second clone for wide screens -->
            <div class="marquee-snippet marquee-snippet--charcoal">
                <span>Website Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>Mobile App Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--outline">
                <span>Custom CRM Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
            <div class="marquee-snippet marquee-snippet--burgundy">
                <span>ERP Development</span>
                <span class="marquee-bullet-dot"></span>
            </div>
        </div>

    </section>

    <!-- ==========================================================================
         4. ABOUT — ASYMMETRICAL EDITORIAL COMPOSITION (No Boxed Template)
         Cutout silhouette against oversized outlined KHANDHAR typography watermark.
         Clean typographic stat pods for 2022, 8+ Yrs, Core, BNI.
         ========================================================================== -->
    <section class="editorial-about-stage">
        <div class="editorial-section-wrap">
            <div class="about-asymmetrical-grid">
                <!-- Visual Anchor: Silhouette with outlined RUTVIK backdrop -->
                <div class="about-visual-anchor">
                    <div class="about-portrait-frame">
                        <!-- Dot Matrix Accent inside frame -->
                        <div class="about-card-dots" aria-hidden="true"></div>

                        <!-- Outlined RUTVIK text watermark inside card behind person -->
                        <div class="about-card-rutvik-watermark" aria-hidden="true">RUTVIK</div>

                        <img class="about-portrait-img" 
                             src="/_astro/images/Rutvik.png" 
                             alt="Rutvik Shantilal Khandhar" 
                             loading="lazy">
                    </div>
                </div>

                <!-- Narrative Stack -->
                <div class="about-narrative-flow">
                    <!-- Creative Editorial Heading Structure -->
                    <div class="about-creative-heading-wrap">
                        <div class="about-title-eyebrow-accent">
                            <span class="about-eyebrow-line"></span>
                            <span class="about-eyebrow-text">PROFILE &bull; BIOGRAPHY</span>
                            <span class="about-eyebrow-tag">EST. 2022</span>
                        </div>
                        <h2 class="about-monument-heading">
                            <span class="heading-word-solid">ABOUT</span>
                            <span class="heading-word-italic">Me.</span>
                        </h2>
                        <div class="about-heading-signature-line" aria-hidden="true"></div>
                    </div>

                    <p class="about-lead-editorial">
                        Myself <strong>Rutvik Shantilal Khandhar</strong>, Web Developer and entrepreneur at <strong>FlayoTech</strong>, based in Rajkot, Gujarat. I started my business in 2022 and have been running it successfully, leveraging my experience in marketing and technology to help businesses grow through innovative digital solutions.
                    </p>



                </div>
            </div>
        </div>
    </section>



    <!-- ==========================================================================
         6. CLIENT LOGOS — CONTINUOUS HORIZONTAL INFINITE SLIDER (NO BOXED CARDS)
         Logos float naturally against warm canvas with generous spacing.
         Two counter-scrolling infinite rows showcasing all 12 verified clients.
         ========================================================================== -->
    <section class="editorial-clients-slider-stage">
        <div class="editorial-section-wrap">
            <div class="clients-slider-header">
                <div class="section-label-eyebrow" style="justify-content: center;">Client Partnerships</div>
                <h2 class="clients-headline-serif">
                    Our <span>Valuable</span> Clients
                </h2>
            </div>
        </div>

        <!-- Creative Single-Row Continuous Infinite Slider -->
        <div class="client-marquee-single-track-wrap">
            <div class="client-marquee-slider client-marquee-single-line">
                <!-- Set 1: All 12 Clients -->
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Accurate Machine Tools.webp" alt="Accurate Machine Tools" loading="lazy">
                    </div>
                    <span class="client-logo-name">Accurate Machine Tools</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Weldor CNC Machines Limited.webp" alt="Weldor CNC Machines Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Weldor CNC Machines</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Machine Tools Manufacturers Assosciation.webp" alt="Machine Tools Manufacturers Association" loading="lazy">
                    </div>
                    <span class="client-logo-name">MTMA Association</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Dowel Machinery Private Limited.webp" alt="Dowel Machinery Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Dowel Machinery</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/LectroCraft India Private Limited.webp" alt="LectroCraft India Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">LectroCraft India</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Devco Industries.webp" alt="Devco Industries" loading="lazy">
                    </div>
                    <span class="client-logo-name">Devco Industries</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Techasoft Private Limited.webp" alt="Techasoft Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Techasoft Pvt Ltd</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Oraki Ecommerce.svg" alt="Oraki Ecommerce" loading="lazy">
                    </div>
                    <span class="client-logo-name">Oraki Ecommerce</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Wellnox International Private Limited.webp" alt="Wellnox International" loading="lazy">
                    </div>
                    <span class="client-logo-name">Wellnox International</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Verito India.webp" alt="Verito India" loading="lazy">
                    </div>
                    <span class="client-logo-name">Verito India</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Foreman Machine Tools.webp" alt="Foreman Machine Tools" loading="lazy">
                    </div>
                    <span class="client-logo-name">Foreman Machine Tools</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Ebizz Products Private Limited.png" alt="Ebizz Products Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Ebizz Products</span>
                </div>

                <!-- Set 2: Seamless Infinite Duplicate -->
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Accurate Machine Tools.webp" alt="Accurate Machine Tools" loading="lazy">
                    </div>
                    <span class="client-logo-name">Accurate Machine Tools</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Weldor CNC Machines Limited.webp" alt="Weldor CNC Machines Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Weldor CNC Machines</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Machine Tools Manufacturers Assosciation.webp" alt="Machine Tools Manufacturers Association" loading="lazy">
                    </div>
                    <span class="client-logo-name">MTMA Association</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Dowel Machinery Private Limited.webp" alt="Dowel Machinery Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Dowel Machinery</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/LectroCraft India Private Limited.webp" alt="LectroCraft India Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">LectroCraft India</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Devco Industries.webp" alt="Devco Industries" loading="lazy">
                    </div>
                    <span class="client-logo-name">Devco Industries</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Techasoft Private Limited.webp" alt="Techasoft Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Techasoft Pvt Ltd</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Oraki Ecommerce.svg" alt="Oraki Ecommerce" loading="lazy">
                    </div>
                    <span class="client-logo-name">Oraki Ecommerce</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Wellnox International Private Limited.webp" alt="Wellnox International" loading="lazy">
                    </div>
                    <span class="client-logo-name">Wellnox International</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Verito India.webp" alt="Verito India" loading="lazy">
                    </div>
                    <span class="client-logo-name">Verito India</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Foreman Machine Tools.webp" alt="Foreman Machine Tools" loading="lazy">
                    </div>
                    <span class="client-logo-name">Foreman Machine Tools</span>
                </div>
                <div class="client-logo-item">
                    <div class="client-logo-stage">
                        <img src="/_astro/images/Client Logo with Name/Ebizz Products Private Limited.png" alt="Ebizz Products Private Limited" loading="lazy">
                    </div>
                    <span class="client-logo-name">Ebizz Products</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         7. ACHIEVEMENTS — LARGE TYPOGRAPHIC COMPOSITION (NO SMALL CARDS)
         Table Tennis Champion • 2x Employee of the Year
         Sculptural typography, fine borders, verified Bio Sheet honors.
         ========================================================================== -->
    <section class="editorial-achievements-stage">
        <div class="editorial-section-wrap">
            <div class="section-label-eyebrow">Proven Honors</div>
            <h2 class="achievements-heading-serif">
                Competitive Focus &amp; <span>Corporate Merit</span>
            </h2>

            <div class="achievements-editorial-split">
                <!-- Achievement 1: Athletic - Table Tennis Champion -->
                <div class="achievement-monument-block honor-interactive-card honor-card--table-tennis" data-pointer="Honor">
                    <!-- Bright Daylight Luxury Background Image -->
                    <div class="honor-card-bg-layer" style="background-image: url('/_astro/images/table-tennis-bright.jpg');" aria-hidden="true"></div>
                    <div class="honor-card-backdrop-overlay" aria-hidden="true"></div>
                    <div class="honor-card-sheen"></div>
                    <div class="honor-card-glow-halo"></div>
                    
                    <div class="honor-card-inner honor-card-inner--title-only">
                        <div class="honor-text-block">
                            <h3 class="monument-title">
                                District Champion <span>Table Tennis</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Achievement 2: Corporate Leadership Merit -->
                <div class="achievement-monument-block honor-interactive-card honor-card--employee-merit" data-pointer="Honor">
                    <!-- Bright Daylight Luxury Background Image -->
                    <div class="honor-card-bg-layer" style="background-image: url('/_astro/images/corporate-merit-bright.jpg');" aria-hidden="true"></div>
                    <div class="honor-card-backdrop-overlay" aria-hidden="true"></div>
                    <div class="honor-card-sheen"></div>
                    <div class="honor-card-glow-halo"></div>

                    <div class="honor-card-inner honor-card-inner--title-only">
                        <div class="honor-text-block">
                            <h3 class="monument-title">
                                Employee of the Year <span>Two Consecutive Years</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==========================================================================
         9. NETWORKING — MINIMAL CONNECTED VISUAL DIAGRAM (NO 3 BOXES)
         Associations • Ideal Referral Partners • Ideal Clients
         Connected editorial nodes with fine linking lines and custom icons.
         ========================================================================== -->
    <section class="editorial-network-stage">
        <div class="editorial-section-wrap">
            <div class="network-header-center">
                <div class="section-label-eyebrow" style="justify-content: center;">Collaborative Ecosystem</div>
                <h2 class="network-headline-serif">
                    Network &amp; <span>Referral Synergies</span>
                </h2>
                <p class="network-lead-text">
                    Connecting industrial associations, strategic referral partners, and forward-looking corporate clients.
                </p>
            </div>

            <div class="network-diagram-flow">
                <!-- Node 1: Associations -->
                <div class="network-node-cluster">
                    <div class="cluster-header">
                        <span class="cluster-tag">Verified Alliances</span>
                        <h3 class="cluster-title">Network &amp; Associations</h3>
                    </div>
                    <div class="cluster-items-stack">
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            <span>Machine Tools Manufacturers Association (MTMA)</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <span>Digital Partner at Trikon Baugh Ka Raja</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/></svg>
                            <span>BNI Rajkot Chapter &bull; Member Biography</span>
                        </div>
                    </div>
                </div>

                <div class="diagram-connector-line" aria-hidden="true"></div>

                <!-- Node 2: Ideal Referral Partners -->
                <div class="network-node-cluster">
                    <div class="cluster-header">
                        <span class="cluster-tag">Strategic Referrals</span>
                        <h3 class="cluster-title">Ideal Referral Partners</h3>
                    </div>
                    <div class="cluster-items-stack">
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg>
                            <span>Startup Founders &amp; Entrepreneurs</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/></svg>
                            <span>Industrial &amp; Machine Manufacturers</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                            <span>E-Commerce Business Owners</span>
                        </div>
                    </div>
                </div>

                <div class="diagram-connector-line" aria-hidden="true"></div>

                <!-- Node 3: Ideal Client Network -->
                <div class="network-node-cluster">
                    <div class="cluster-header">
                        <span class="cluster-tag">Client Ecosystem</span>
                        <h3 class="cluster-title">Ideal Client Network</h3>
                    </div>
                    <div class="cluster-items-stack">
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
                            <span>Commercial Businesses &amp; Enterprises</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                            <span>Industrial Machinery &amp; Tool Companies</span>
                        </div>
                        <div class="cluster-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                            <span>Startups Seeking Rapid Digital Execution</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         10. PERSONAL PHILOSOPHY — ONE SPOKEN EDITORIAL MOMENT (NO CARD)
         Quote: "Keep winning, keep learning, and grow from every mistake."
         Verified personal interests: Cricket, Table Tennis, Movies, Travelling
         ========================================================================== -->
    <section class="editorial-philosophy-stage">
        <div class="editorial-section-wrap">
            <div class="section-label-eyebrow" style="justify-content: center; margin-bottom: 2.5rem;">Philosophy &bull; Creed</div>
            
            <blockquote class="philosophy-giant-quote">
                &ldquo;Keep winning, keep learning, and grow from every mistake.&rdquo;
            </blockquote>

            <p class="philosophy-personal-text">
                &ldquo;I am naturally introverted, but I believe in continuous learning, relentless discipline, and meaningful personal growth.&rdquo;
            </p>

            <!-- 4 Professional Luxury Interest Cards with Background Imagery & Animations -->
            <div class="interests-cards-grid">
                <!-- Card 1: Cricket -->
                <div class="interest-card" data-pointer="Passions">
                    <div class="interest-card-bg" style="background-image: url('/_astro/images/cricket-card.jpg');" aria-hidden="true"></div>
                    <div class="interest-card-overlay" aria-hidden="true"></div>
                    <div class="interest-card-sheen" aria-hidden="true"></div>
                    <div class="interest-card-content">
                        <span class="interest-card-tag">SPORT &bull; STRATEGY</span>
                        <h4 class="interest-card-title">Cricket</h4>
                        <span class="interest-card-hint">Teamwork &amp; Endurance</span>
                    </div>
                </div>

                <!-- Card 2: Table Tennis -->
                <div class="interest-card" data-pointer="Passions">
                    <div class="interest-card-bg" style="background-image: url('/_astro/images/tt-card.jpg');" aria-hidden="true"></div>
                    <div class="interest-card-overlay" aria-hidden="true"></div>
                    <div class="interest-card-sheen" aria-hidden="true"></div>
                    <div class="interest-card-content">
                        <span class="interest-card-tag">REFLEXES &bull; AGILITY</span>
                        <h4 class="interest-card-title">Table Tennis</h4>
                        <span class="interest-card-hint">District Champion Precision</span>
                    </div>
                </div>

                <!-- Card 3: Movies -->
                <div class="interest-card" data-pointer="Passions">
                    <div class="interest-card-bg" style="background-image: url('/_astro/images/movies-card.jpg');" aria-hidden="true"></div>
                    <div class="interest-card-overlay" aria-hidden="true"></div>
                    <div class="interest-card-sheen" aria-hidden="true"></div>
                    <div class="interest-card-content">
                        <span class="interest-card-tag">NARRATIVE &bull; VISION</span>
                        <h4 class="interest-card-title">Movies</h4>
                        <span class="interest-card-hint">Cinematic Storytelling</span>
                    </div>
                </div>

                <!-- Card 4: Travelling -->
                <div class="interest-card" data-pointer="Passions">
                    <div class="interest-card-bg" style="background-image: url('/_astro/images/travel-card.jpg');" aria-hidden="true"></div>
                    <div class="interest-card-overlay" aria-hidden="true"></div>
                    <div class="interest-card-sheen" aria-hidden="true"></div>
                    <div class="interest-card-content">
                        <span class="interest-card-tag">HORIZONS &bull; PERSPECTIVE</span>
                        <h4 class="interest-card-title">Travelling</h4>
                        <span class="interest-card-hint">Global Explorations</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         11. CONTACT — ARTISTIC FINAL SECTION (NO 3 SEPARATE BOXES)
         Headline: "LET'S BUILD SOMETHING GREAT TOGETHER"
         Verified Contact Details as clean typographical links.
         Direct Bio Sheet PDF download link.
         Minimal Colophon Footer.
         ========================================================================== -->
    <section class="editorial-contact-stage">
        <div class="editorial-section-wrap">
            <div class="section-label-eyebrow" style="justify-content: center; margin-bottom: 2.5rem;">Initiate Engagement</div>

            <h2 class="contact-monumental-headline">
                Let's Build Something <span>Great Together</span>
            </h2>

            <!-- Clean typographical link cluster (No separate rectangular cards) -->
            <div class="contact-editorial-links">
                <a href="tel:+919879879239" class="contact-line-link" data-pointer="Call">
                    <span class="contact-line-type">Phone</span>
                    <span class="contact-line-value">+91 987-987-9239</span>
                    <span class="contact-line-arrow">&rarr;</span>
                </a>

                <a href="mailto:flayotech@gmail.com" class="contact-line-link" data-pointer="Email">
                    <span class="contact-line-type">Email</span>
                    <span class="contact-line-value">flayotech@gmail.com</span>
                    <span class="contact-line-arrow">&rarr;</span>
                </a>

                <a href="https://flayotech.com" target="_blank" rel="noopener noreferrer" class="contact-line-link" data-pointer="Visit">
                    <span class="contact-line-type">Website</span>
                    <span class="contact-line-value">www.flayotech.com</span>
                    <span class="contact-line-arrow">&rarr;</span>
                </a>
            </div>

            <!-- Direct PDF download action -->
            <div class="contact-pdf-cta">
                <a href="/Rutvik Biosheet.pdf" target="_blank" rel="noopener noreferrer" class="bio-sheet-download-pill" data-pointer="PDF">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                    <span>Download Rutvik's 5-Page Bio Sheet (PDF)</span>
                </a>
            </div>

            <!-- Minimal Colophon Bar -->
            <div class="editorial-colophon-bar">
                <span>&copy; {{ date('Y') }} Rutvik Shantilal Khandhar &bull; Founder of FlayoTech</span>
                <span>Rajkot, Gujarat, India</span>
                <span>Member Biography &bull; BNI Rajkot Chapter</span>
            </div>
        </div>
    </section>
</main>

<script>
    (function initScrollTextReveal() {
        var el = document.querySelector('.about-lead-editorial');
        if (!el) return;

        // Wrap words while preserving strong tags and structure
        function wrapWords(node) {
            var childNodes = Array.from(node.childNodes);
            childNodes.forEach(function(child) {
                if (child.nodeType === Node.TEXT_NODE) {
                    var text = child.textContent;
                    var tokens = text.split(/(\s+)/);
                    var frag = document.createDocumentFragment();
                    tokens.forEach(function(token) {
                        if (!token) return;
                        if (/^\s+$/.test(token)) {
                            frag.appendChild(document.createTextNode(token));
                        } else {
                            var span = document.createElement('span');
                            span.className = 'reveal-word';
                            span.textContent = token;
                            frag.appendChild(span);
                        }
                    });
                    node.replaceChild(frag, child);
                } else if (child.nodeType === Node.ELEMENT_NODE) {
                    if (child.tagName === 'STRONG') {
                        var text = child.textContent;
                        var tokens = text.split(/(\s+)/);
                        var frag = document.createDocumentFragment();
                        tokens.forEach(function(token) {
                            if (!token) return;
                            if (/^\s+$/.test(token)) {
                                frag.appendChild(document.createTextNode(token));
                            } else {
                                var span = document.createElement('span');
                                span.className = 'reveal-word';
                                var strong = document.createElement('strong');
                                strong.textContent = token;
                                span.appendChild(strong);
                                frag.appendChild(span);
                            }
                        });
                        node.replaceChild(frag, child);
                    } else {
                        wrapWords(child);
                    }
                }
            });
        }

        wrapWords(el);

        var words = Array.from(el.querySelectorAll('.reveal-word'));
        if (!words.length) return;

        var ticking = false;

        function updateReveal() {
            var rect = el.getBoundingClientRect();
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            
            // Start revealing when the text enters roughly 82% from top,
            // complete full reveal when it is around 38% from top.
            var startY = windowHeight * 0.82;
            var endY = windowHeight * 0.38;
            
            // Progress goes from 0.0 to 1.0 based on current scroll position of the element
            var progress = (startY - rect.top) / (startY - endY);
            if (progress < 0) progress = 0;
            if (progress > 1) progress = 1;

            var thresholdIndex = Math.floor(progress * words.length);

            for (var i = 0; i < words.length; i++) {
                if (i <= thresholdIndex && progress > 0) {
                    words[i].classList.add('revealed');
                } else {
                    words[i].classList.remove('revealed');
                }
            }

            ticking = false;
        }

        function onScroll() {
            if (!ticking) {
                requestAnimationFrame(updateReveal);
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
        updateReveal();
    })();

    // Premium 3D Magnetic Tilt Interaction on Honor & Interest Cards
    (function initCardTilt() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var cards = document.querySelectorAll('.honor-interactive-card, .interest-card');
        cards.forEach(function(card) {
            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = ((y - centerY) / centerY) * -5.5; // Max 5.5deg
                var rotateY = ((x - centerX) / centerX) * 6.5;  // Max 6.5deg
                
                card.style.transform = 'translateY(-7px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) scale(1.025)';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
            });
        });
    })();
</script>
@endsection

