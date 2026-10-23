@extends('layouts.app')

@section('title', 'About • Rutvik Khandhar')
@section('description', 'Rutvik Shantilal Khandhar - Founder of FlayoTech, Web & Mobile App Developer with 3.5+ years of experience based in Rajkot, India.')
@section('page_id', 'about')
@section('namespace', 'about')

@section('content')
<header>
    <div class="header container">
        <div class="header__logo">
            <a class="header__logo-link" href="/">
                <span class="header__logo-link-inner">Rutvik K.</span>
                <span class="header__logo-link-inner" aria-hidden="true">Rutvik K.</span>
                <span class="header__logo-link-inner" aria-hidden="true">Rutvik K.</span>
            </a>
        </div>
        <nav class="header__nav">
            <ul class="header__menu">
                <li data-magnetic="15" class="header__menu-item">
                    <a class="header__menu-link" href="/">
                        <span class="header__menu-link-content">
                            <span class="header__menu-link-inner">Home</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Home</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Home</span>
                        </span>
                    </a>
                </li>
                <li data-magnetic="15" class="header__menu-item">
                    <a class="header__menu-link" href="/work/">
                        <span class="header__menu-link-content">
                            <span class="header__menu-link-inner">Work</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Work</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Work</span>
                        </span>
                    </a>
                </li>
                <li data-magnetic="15" class="header__menu-item">
                    <a class="header__menu-link active" href="/about/">
                        <span class="header__menu-link-content">
                            <span class="header__menu-link-inner">About</span>
                            <span class="header__menu-link-inner" aria-hidden="true">About</span>
                            <span class="header__menu-link-inner" aria-hidden="true">About</span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="hero container">
        <div class="hero__title">
            <video autoplay loop muted playsinline poster="/_astro/images/about.webp">
                <source src="/_astro/videos/about.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                <source src="/_astro/videos/about.webm" type="video/webm">
            </video>
            <h1>
                <span class="hero__title-left"><span class="split-wrap char"><span class="split-inner">W</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner">&nbsp;</span></span><span class="split-wrap char"><span class="split-inner">&amp;</span></span><span class="split-wrap char"><span class="split-inner">&nbsp;</span></span><span class="split-wrap char"><span class="split-inner">M</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">e</span></span></span>
                <span class="hero__title-right"><span class="split-wrap char"><span class="split-inner">D</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">p</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">r</span></span></span>
            </h1>
        </div>
        <div class="hero__footer">
            <div class="hero__scroll-down"></div>
        </div>
    </section>

    <!-- ABOUT HERO INTRO WITH RUTVIK'S REAL PORTRAIT -->
    <section class="about container">
        <div class="about__profile-picture">
            <div class="pp">
                <div class="pp__circle">
                    <canvas class="pp__circle-bg" data-transition-in></canvas>
                </div>
                <div class="pp__circle-stroke"></div>
                <div class="pp__circle-image" data-scroll>
                    <picture>
                        <source srcset="/_astro/images/Rutvik.png" type="image/png">
                        <img src="/_astro/images/Rutvik.png" alt="Rutvik Khandhar" loading="eager" decoding="sync" fetchpriority="high" width="960" height="960">
                    </picture>
                </div>
            </div>
        </div>

        <div class="about__description">
            <h2 data-split="lines" data-anim="from-bottom">
                About
            </h2>
            <p data-anim="from-bottom">
                <span class="indent"></span> I am <strong>Rutvik Shantilal Khandhar</strong>, Founder of <strong>FlayoTech</strong> based in Rajkot, Gujarat (resident for 8+ years). With 3.5+ years of dedicated entrepreneurial experience in Web &amp; Mobile App Development combined with sales &amp; marketing architecture, I engineer robust business platforms for forward-thinking enterprises across India.
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                <a role="button" class="btn" target="_blank" href="/Rutvik Biosheet.pdf">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">Download Bio Sheet (PDF)</span>
                        <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet (PDF)</span>
                        <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet (PDF)</span>
                    </span>
                </a>
                <a role="button" class="btn" target="_blank" href="https://flayotech.com">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">Visit FlayoTech.com</span>
                        <span class="btn__text-inner" aria-hidden="true">Visit FlayoTech.com</span>
                        <span class="btn__text-inner" aria-hidden="true">Visit FlayoTech.com</span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- RESUME / BIO SHEET STRUCTURED OVERVIEW -->
    <section class="resume container">
        <!-- 1. EXPERTISE -->
        <div class="resume__skills s-heading">
            <div class="divider divider--left">
                <div class="divider__text">Expertise</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Capabilities</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="resume__grid">
                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Web App Development</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom">Full-Stack Web Engineering (Laravel / PHP / Node)</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Enterprise Customer &amp; Vendor Portals</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">RESTful APIs &amp; Cloud Database Infrastructure</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">High-Conversion UI/UX Responsive Layouts</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Mobile App Engineering</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom">Cross-Platform Apps (Flutter / React Native)</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">iOS &amp; Android Native Performance Optimization</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">App Store &amp; Play Store Deployment Pipelines</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Offline-First &amp; Cloud Data Synchronization</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Sales &amp; Marketing Architecture</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom">B2B Growth Engineering &amp; Lead Systems</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Brand Outreach &amp; Conversion Optimization</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Technical Marketing Integration &amp; Tracking</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Enterprise Systems</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom">Industrial &amp; Machine Tools Platforms</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Custom E-Commerce Architectures</li>
                                        <li class="resume__skill-item" data-anim="from-bottom">Digital Showcases for Manufacturers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. TOOLBOX -->
        <div class="resume__tools s-heading">
            <div class="divider divider--left">
                <div class="divider__text">Toolbox</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Tech&nbsp;Stack</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div data-split="lines" data-anim="from-bottom" class="resume__tools-list">
                            <span class="resume__tools-item">Flutter / React Native</span>
                            <span class="resume__tools-item">JavaScript / TypeScript</span>
                            <span class="resume__tools-item">PHP / Laravel</span>
                            <span class="resume__tools-item">Node.js / Express</span>
                            <span class="resume__tools-item">Tailwind CSS / modern UI</span>
                            <span class="resume__tools-item">RESTful APIs</span>
                            <span class="resume__tools-item">MySQL / PostgreSQL</span>
                            <span class="resume__tools-item">Git / GitHub DevOps</span>
                            <span class="resume__tools-item">SEO / Growth Strategy</span>
                            <span class="resume__tools-item">UI/UX Prototyping</span>
                            <span class="resume__tools-item">Sales &amp; Lead Systems</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. EXPERIENCE -->
        <div class="resume__experience s-heading">
            <div class="divider divider--left">
                <div class="divider__text">Experience</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Career</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="resume__row" data-anim="from-bottom">
                            <h3 class="resume__experience-title">Founder &amp; Principal Engineer <span class="resume__experience-company">@FlayoTech</span></h3>
                            <span class="resume__experience-details">3.5+ Years &bull; Rajkot, Gujarat</span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <h3 class="resume__experience-title">Digital Media Director <span class="resume__experience-company">@Trikon Baugh Ka Raja</span></h3>
                            <span class="resume__experience-details">Annual Campaign &bull; Ongoing</span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <h3 class="resume__experience-title">Marketing &amp; Growth Specialist <span class="resume__experience-company">@Previous Enterprises</span></h3>
                            <span class="resume__experience-details">Awarded Best Employee 2 Consecutive Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. RECOGNITIONS & ASSOCIATIONS -->
        <div class="resume__recognitions s-heading">
            <div class="divider divider--left">
                <div class="divider__text">Associations</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Memberships</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="bni-card" style="margin-top: 0; padding: 2rem;">
                            <div class="bni-card__brand">
                                <div class="bni-card__logo-wrap">
                                    <img src="/_astro/images/bni-logo.png" alt="BNI Logo">
                                </div>
                                <span class="bni-tag"><span class="bni-tag__dot"></span> Active Chapter Member</span>
                            </div>
                            <div class="bni-card__content">
                                <h3 style="font-size: 2rem;">BNI Rajkot Chapter</h3>
                                <p style="font-size: 0.95rem; margin-bottom: 0;">
                                    Actively networking and driving strategic partnerships for IT software, web platforms, and mobile apps across Gujarat and India.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="footer container">
        <div class="footer__middle">
            <div class="footer__middle-border"></div>
            <h2 data-anim="from-bottom" class="footer__middle-heading">
                <span class="split-wrap word"><span class="split-inner">Looking&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">for&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">a&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">digital&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">partner?</span></span>
            </h2>
            <a href="mailto:rutvik@flayotech.com" data-anim="from-bottom" class="footer__middle-email" data-pointer="Email" style="text-decoration: none;">
                <span class="footer__middle-email-inner">
                    <span class="split-wrap char"><span class="split-inner">r</span></span><span class="split-wrap char"><span class="split-inner">u</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">k</span></span><span class="split-wrap char"><span class="split-inner">@</span></span><span class="split-wrap char"><span class="split-inner">f</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">a</span></span><span class="split-wrap char"><span class="split-inner">y</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">c</span></span><span class="split-wrap char"><span class="split-inner">h</span></span><span class="split-wrap char"><span class="split-inner">.</span></span><span class="split-wrap char"><span class="split-inner">c</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">m</span></span>
                </span>
            </a>
            <div class="footer__middle-cta">
                <a role="button" class="btn btn--secondary" target="_blank" href="https://flayotech.com">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">FlayoTech.com</span>
                        <span class="btn__text-inner" aria-hidden="true">FlayoTech.com</span>
                        <span class="btn__text-inner" aria-hidden="true">FlayoTech.com</span>
                    </span>
                </a>
                <a role="button" class="btn btn--secondary" target="_blank" href="/Rutvik Biosheet.pdf">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">Download Bio Sheet</span>
                        <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet</span>
                        <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="footer__bottom">
            <span class="footer__bottom-left">&copy;2026 Rutvik Khandhar • FlayoTech</span>
            <span class="footer__bottom-center"><i class="available"></i>Rajkot, Gujarat, India</span>
            <span class="footer__bottom-right">Architecture by FlayoTech</span>
        </div>
    </div>
</footer>
@endsection
