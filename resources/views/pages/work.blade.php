@extends('layouts.app')

@section('title', 'Work • Rutvik Khandhar')
@section('description', 'Selected enterprise engineering projects, web platforms, and mobile apps by Rutvik Khandhar (FlayoTech).')
@section('page_id', 'work')
@section('namespace', 'work')

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
                    <a class="header__menu-link active" href="/work/">
                        <span class="header__menu-link-content">
                            <span class="header__menu-link-inner">Work</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Work</span>
                            <span class="header__menu-link-inner" aria-hidden="true">Work</span>
                        </span>
                    </a>
                </li>
                <li data-magnetic="15" class="header__menu-item">
                    <a class="header__menu-link" href="/about/">
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
            <h1>
                <span class="hero__title-left"><span class="split-wrap char"><span class="split-inner">S</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">c</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">d</span></span><span class="split-wrap char"><span class="split-inner">&nbsp;</span></span><span class="split-wrap char"><span class="split-inner">W</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">r</span></span><span class="split-wrap char"><span class="split-inner">k</span></span></span>
            </h1>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">
                    <h2><span class="split-wrap word"><span class="split-inner">Engineering&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">Showcase&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">by&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">FlayoTech</span></span></h2>
                </div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <p><span class="split-wrap word"><span class="split-inner">Explore&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">enterprise&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">digital&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">systems,&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">web&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">platforms,&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">and&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">mobile&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">apps</span></span></p>
        </div>
        <div class="hero__footer">
            <div class="hero__scroll-down"></div>
        </div>
    </section>

    <!-- EDITORIAL PROJECTS GRID -->
    <section class="projects-editorial container" style="padding-top: 1rem;">
        <div class="projects-grid">
            <a class="project-tile" href="/work/web-development" data-pointer="View">
                <div class="project-tile__img-wrap">
                    <span class="project-tile__badge">Web Development</span>
                    <img class="project-tile__img" src="/_astro/images/PrescientSite1.n75GHmXi_1UQrAV.webp" alt="Prescient Web Platform">
                </div>
                <div class="project-tile__meta">
                    <h3 class="project-tile__title">Prescient Web Platform</h3>
                    <span class="project-tile__arrow">&nearr;</span>
                </div>
                <p class="project-tile__desc">High-speed corporate platform with headless CMS architecture and responsive engineering.</p>
            </a>

            <a class="project-tile" href="/work/product-design" data-pointer="View">
                <div class="project-tile__img-wrap">
                    <span class="project-tile__badge">Mobile &amp; Cloud UI</span>
                    <img class="project-tile__img" src="/_astro/images/BloomOS4.Dg4fWbeC_Z1tf6ry.webp" alt="Bloom OS Product Design">
                </div>
                <div class="project-tile__meta">
                    <h3 class="project-tile__title">Bloom OS Ecosystem</h3>
                    <span class="project-tile__arrow">&nearr;</span>
                </div>
                <p class="project-tile__desc">Enterprise-grade design system, modular architecture, and cross-platform management.</p>
            </a>

            <a class="project-tile" href="/work/brand-design" data-pointer="View">
                <div class="project-tile__img-wrap">
                    <span class="project-tile__badge">Brand Design</span>
                    <img class="project-tile__img" src="/_astro/images/Ziwig3.BKxLV8zG_15WI1V.webp" alt="Ziwig Brand Design">
                </div>
                <div class="project-tile__meta">
                    <h3 class="project-tile__title">Ziwig Healthcare Identity</h3>
                    <span class="project-tile__arrow">&nearr;</span>
                </div>
                <p class="project-tile__desc">Comprehensive digital art direction, medical packaging, and full brand book guidelines.</p>
            </a>

            <a class="project-tile" href="/work/web-development" data-pointer="View">
                <div class="project-tile__img-wrap">
                    <span class="project-tile__badge">Front-End Motion</span>
                    <img class="project-tile__img" src="/_astro/images/iRevolutionSite1.D8hxKnY2_Z1OX4MF.webp" alt="iRevolution Interactive Platform">
                </div>
                <div class="project-tile__meta">
                    <h3 class="project-tile__title">iRevolution Interactive Web</h3>
                    <span class="project-tile__arrow">&nearr;</span>
                </div>
                <p class="project-tile__desc">Dynamic vector animations, GSAP scroll triggers, and fluid page transitions.</p>
            </a>
        </div>
    </section>

    <!-- CATEGORIES MARQUEE -->
    <section class="work container">
        <div class="divider divider--center">
            <div class="divider__line divider__line--left"></div>
            <div class="divider__text">
                <h2 data-anim="from-bottom">
                    <span class="split-wrap word"><span class="split-inner">Browse&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">By&nbsp;</span></span><span class="split-wrap word"><span class="split-inner">Domain</span></span>
                </h2>
            </div>
            <div class="divider__line divider__line--right"></div>
        </div>

        <div class="work__categories">
            <a data-pointer="View" class="work__categories-row" href="/work/web-development">
                <video class="work__categories-video" preload="metadata" loop muted playsinline data-title="web-development" poster="/_astro/images/web-development.webp">
                    <source src="/_astro/videos/web-development-360x360.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                    <source src="/_astro/videos/web-development-360x360.webm" type="video/webm">
                </video>
                <div class="work__categories-inner">
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span>
                </div>
            </a>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">Click to view category projects</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <a data-pointer="View" class="work__categories-row" href="/work/product-design">
                <video class="work__categories-video" preload="metadata" loop muted playsinline data-title="product-design" poster="/_astro/images/product-design.webp">
                    <source src="/_astro/videos/product-design-360x360.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                    <source src="/_astro/videos/product-design-360x360.webm" type="video/webm">
                </video>
                <div class="work__categories-inner">
                    <span class="work__categories-inner-text">Mobile App Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Development</span>
                </div>
            </a>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">Click to view category projects</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <a data-pointer="View" class="work__categories-row" href="/work/brand-design">
                <video class="work__categories-video" preload="metadata" loop muted playsinline data-title="brand-design" poster="/_astro/images/brand-design.webp">
                    <source src="/_astro/videos/brand-design-360x360.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                    <source src="/_astro/videos/brand-design-360x360.webm" type="video/webm">
                </video>
                <div class="work__categories-inner">
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span>
                </div>
            </a>
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
