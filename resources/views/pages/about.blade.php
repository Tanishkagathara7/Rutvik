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
                <span class="hero__title-left"><span class="split-wrap char"><span class="split-inner">W</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">&amp;</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">M</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">e</span></span></span>
                <span class="hero__title-right"><span class="split-wrap char"><span class="split-inner">D</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">p</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">r</span></span></span>
            </h1>
        </div>
        <div class="hero__footer">
            <div class="hero__scroll-down"></div>
        </div>
    </section>

    <section class="about container">
        <div class="about__profile-picture">
            <div class="pp">
                <div class="pp__circle">
                    <canvas class="pp__circle-bg" data-transition-in></canvas>
                </div>
                <div class="pp__circle-stroke"></div>
                <div class="pp__circle-image" data-scroll>
                    <picture>
                        <source srcset="/_astro/images/Joris.DToCMZOR_Z1aVvOT.avif" type="image/avif">
                        <source srcset="/_astro/images/Joris.DToCMZOR_ZRvJj6.webp" type="image/webp">
                        <img src="/_astro/images/Joris.DToCMZOR_211lYo.png" alt="Rutvik Khandhar" loading="eager" decoding="sync" fetchpriority="high" width="960" height="960">
                    </picture>
                </div>
            </div>
        </div>

        <div class="about__description">
            <h2 data-split="lines" data-anim="from-bottom">
                Building impactful digital ecosystems across <strong>Web,</strong> <strong>Mobile</strong> &amp; <strong>Marketing</strong>
            </h2>
            <p data-anim="from-bottom">
                <span class="split-wrap word"><span class="split-inner">I </span></span><span class="split-wrap word"><span class="split-inner">am </span></span><span class="split-wrap word"><span class="split-inner">Rutvik </span></span><span class="split-wrap word"><span class="split-inner">Shantilal </span></span><span class="split-wrap word"><span class="split-inner">Khandhar, </span></span><span class="split-wrap word"><span class="split-inner">Founder </span></span><span class="split-wrap word"><span class="split-inner">of </span></span><span class="split-wrap word"><span class="split-inner">FlayoTech, </span></span><span class="split-wrap word"><span class="split-inner">based </span></span><span class="split-wrap word"><span class="split-inner">in </span></span><span class="split-wrap word"><span class="split-inner">Rajkot, </span></span><span class="split-wrap word"><span class="split-inner">Gujarat </span></span><span class="split-wrap word"><span class="split-inner">(resident </span></span><span class="split-wrap word"><span class="split-inner">for </span></span><span class="split-wrap word"><span class="split-inner">8+ </span></span><span class="split-wrap word"><span class="split-inner">years). </span></span><span class="split-wrap word"><span class="split-inner">With </span></span><span class="split-wrap word"><span class="split-inner">3.5+ </span></span><span class="split-wrap word"><span class="split-inner">years </span></span><span class="split-wrap word"><span class="split-inner">of </span></span><span class="split-wrap word"><span class="split-inner">dedicated </span></span><span class="split-wrap word"><span class="split-inner">entrepreneurial </span></span><span class="split-wrap word"><span class="split-inner">experience </span></span><span class="split-wrap word"><span class="split-inner">in </span></span><span class="split-wrap word"><span class="split-inner">Web </span></span><span class="split-wrap word"><span class="split-inner">& </span></span><span class="split-wrap word"><span class="split-inner">Mobile </span></span><span class="split-wrap word"><span class="split-inner">App </span></span><span class="split-wrap word"><span class="split-inner">Development </span></span><span class="split-wrap word"><span class="split-inner">combined </span></span><span class="split-wrap word"><span class="split-inner">with </span></span><span class="split-wrap word"><span class="split-inner">a </span></span><span class="split-wrap word"><span class="split-inner">strong </span></span><span class="split-wrap word"><span class="split-inner">background </span></span><span class="split-wrap word"><span class="split-inner">in </span></span><span class="split-wrap word"><span class="split-inner">Marketing </span></span><span class="split-wrap word"><span class="split-inner">and </span></span><span class="split-wrap word"><span class="split-inner">Sales, </span></span><span class="split-wrap word"><span class="split-inner">I </span></span><span class="split-wrap word"><span class="split-inner">engineer </span></span><span class="split-wrap word"><span class="split-inner">robust </span></span><span class="split-wrap word"><span class="split-inner">business </span></span><span class="split-wrap word"><span class="split-inner">solutions </span></span><span class="split-wrap word"><span class="split-inner">for </span></span><span class="split-wrap word"><span class="split-inner">forward-thinking </span></span><span class="split-wrap word"><span class="split-inner">enterprises. </span></span><span class="split-wrap word"><span class="split-inner">My </span></span><span class="split-wrap word"><span class="split-inner">burning </span></span><span class="split-wrap word"><span class="split-inner">desire </span></span><span class="split-wrap word"><span class="split-inner">is </span></span><span class="split-wrap word"><span class="split-inner">to </span></span><span class="split-wrap word"><span class="split-inner">build </span></span><span class="split-wrap word"><span class="split-inner">FlayoTech </span></span><span class="split-wrap word"><span class="split-inner">into </span></span><span class="split-wrap word"><span class="split-inner">a </span></span><span class="split-wrap word"><span class="split-inner">powerful, </span></span><span class="split-wrap word"><span class="split-inner">impactful </span></span><span class="split-wrap word"><span class="split-inner">IT </span></span><span class="split-wrap word"><span class="split-inner">powerhouse, </span></span><span class="split-wrap word"><span class="split-inner">achieving </span></span><span class="split-wrap word"><span class="split-inner">the </span></span><span class="split-wrap word"><span class="split-inner">Best </span></span><span class="split-wrap word"><span class="split-inner">IT </span></span><span class="split-wrap word"><span class="split-inner">Company </span></span><span class="split-wrap word"><span class="split-inner">Award </span></span><span class="split-wrap word"><span class="split-inner">in </span></span><span class="split-wrap word"><span class="split-inner">Rajkot </span></span><span class="split-wrap word"><span class="split-inner">and </span></span><span class="split-wrap word"><span class="split-inner">serving </span></span><span class="split-wrap word"><span class="split-inner">enterprise </span></span><span class="split-wrap word"><span class="split-inner">clients </span></span><span class="split-wrap word"><span class="split-inner">across </span></span><span class="split-wrap word"><span class="split-inner">every </span></span><span class="split-wrap word"><span class="split-inner">city </span></span><span class="split-wrap word"><span class="split-inner">in </span></span><span class="split-wrap word"><span class="split-inner">India. </span></span><span class="split-wrap word"><span class="split-inner">My </span></span><span class="split-wrap word"><span class="split-inner">key </span></span><span class="split-wrap word"><span class="split-inner">to </span></span><span class="split-wrap word"><span class="split-inner">success: </span></span><span class="split-wrap word"><span class="split-inner">Keep </span></span><span class="split-wrap word"><span class="split-inner">winning </span></span><span class="split-wrap word"><span class="split-inner">and </span></span><span class="split-wrap word"><span class="split-inner">continuously </span></span><span class="split-wrap word"><span class="split-inner">learn </span></span><span class="split-wrap word"><span class="split-inner">from </span></span><span class="split-wrap word"><span class="split-inner">every </span></span><span class="split-wrap word"><span class="split-inner">experience.</span></span>
            </p>
            <a role="button" class="btn" data-umami-event="Download Bio" target="_blank" href="/Rutvik Biosheet.pdf">
                <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                <span class="btn__text">
                    <span class="btn__text-inner">Download Bio Sheet</span>
                    <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet</span>
                    <span class="btn__text-inner" aria-hidden="true">Download Bio Sheet</span>
                </span>
            </a>
        </div>
    </section>

    <section class="resume container">
        <!-- SKILLS & CAPABILITIES -->
        <div class="resume__skills s-heading">
            <div class="divider divider--left">
                <div class="divider__text">About</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Expertise</span></span>
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
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Full-Stack Web Engineering</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Custom Web Portals & CMS</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">API Architecture & Cloud Integration</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">High-Performance UI/UX</span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Mobile App Development</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Cross-Platform Mobile Apps</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Native Performance & UI</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">App Store & Play Store Deployment</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Real-time State & Cloud APIs</span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Sales & Marketing</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">B2B Growth & Lead Funnels</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Digital Marketing Strategy</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Brand Outreach & Conversion</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Business Architecture</span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume__skill">
                                <h3 data-anim="from-bottom" class="resume__skill-title">
                                    <span class="split-wrap line"><span class="split-inner">Enterprise Solutions</span></span>
                                </h3>
                                <div class="resume__skill-details">
                                    <ul class="resume__skill-list">
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Industrial & Machine Tools Portals</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">E-Commerce Architecture (Oraki)</span></span></li>
                                        <li class="resume__skill-item" data-anim="from-bottom"><span class="split-wrap line"><span class="split-inner">Custom ERP & Operations Systems</span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOOLBOX / STACK -->
        <div class="resume__tools s-heading">
            <div class="divider divider--left">
                <div class="divider__text">About</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Toolbox</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div data-split="lines" data-anim="from-bottom" class="resume__tools-list">
                            <span class="resume__tools-item">Flutter / React Native</span>
                            <span class="resume__tools-item">JavaScript / TypeScript</span>
                            <span class="resume__tools-item">PHP / Laravel</span>
                            <span class="resume__tools-item">Node.js</span>
                            <span class="resume__tools-item">HTML5 / CSS3</span>
                            <span class="resume__tools-item">RESTful APIs</span>
                            <span class="resume__tools-item">SQL / Databases</span>
                            <span class="resume__tools-item">Git / GitHub</span>
                            <span class="resume__tools-item">Digital Marketing</span>
                            <span class="resume__tools-item">SEO & SEM</span>
                            <span class="resume__tools-item">UI/UX Prototyping</span>
                            <span class="resume__tools-item">Sales Strategy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EXPERIENCE -->
        <div class="resume__experience s-heading">
            <div class="divider divider--left">
                <div class="divider__text">About</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Experience</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">Founder & Lead Web & Mobile App Developer <span class="resume__experience-company">@FlayoTech</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">3.5+ Years <span class="resume__experience-arrow">→</span> Present (Rajkot)</span></span></span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">Digital Partner & Media Director <span class="resume__experience-company">@Trikon Baugh Ka Raja</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">Annual Campaign <span class="resume__experience-arrow">→</span> Ongoing</span></span></span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">Marketing & Business Development Lead <span class="resume__experience-company">@Previous Enterprises</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">Awarded Best Employee 2 Consecutive Years</span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CLIENT PORTFOLIO / CUSTOMERS -->
        <div class="resume__experience s-heading">
            <div class="divider divider--left">
                <div class="divider__text">About</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Key </span></span><span class="split-wrap word"><span class="split-inner">Clients</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">Machine Tools & Manufacturing <span class="resume__experience-company">@MTMA, Accurate Machine Tools, Weldor CNC, Global CNC</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">Enterprise Portals & Platforms</span></span></span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">Industrial Equipment & Safety <span class="resume__experience-company">@Patel Fire Fighter, Dowel Machinery, Devco Industries</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">Digital Infrastructure & Showcase</span></span></span>
                        </div>
                        <div class="resume__row" data-anim="from-bottom">
                            <span class="split-wrap line"><span class="split-inner"><h3 class="resume__experience-title">E-Commerce & Tech Innovations <span class="resume__experience-company">@Oraki, Techasoft Pvt Ltd, Innohub Technologies</span></h3></span></span>
                            <span class="split-wrap line"><span class="split-inner"><span class="resume__experience-details">E-Commerce & Scalable Web Apps</span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ASSOCIATIONS & MEMBERSHIP -->
        <div class="resume__recognitions s-heading">
            <div class="divider divider--left">
                <div class="divider__text">About</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <div class="s-heading__inner">
                <div class="s-heading__left">
                    <h2 data-anim="from-bottom">
                        <span class="split-wrap word"><span class="split-inner">Company </span></span><span class="split-wrap word"><span class="split-inner">&amp; </span></span><span class="split-wrap word"><span class="split-inner">BNI</span></span>
                    </h2>
                </div>
                <div class="s-heading__right">
                    <div class="resume__subsection-content">
                        <div class="resume__row">
                            <div class="resume__grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2.5rem; align-items: start;">
                                <div data-anim="from-bottom" class="resume__recognitions-item" style="padding: 1.8rem; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; display: flex; flex-direction: column; gap: 1.2rem; width: 100%;">
                                    <div style="height: 56px; display: flex; align-items: center; background: #ffffff; padding: 10px 18px; border-radius: 8px; width: fit-content;">
                                        <img src="/_astro/images/flayotech-logo.jpg" alt="FlayoTech Logo" style="height: 40px; width: auto; object-fit: contain;">
                                    </div>
                                    <span class="split-wrap line"><span class="split-inner">
                                        <strong style="color: #fff; font-size: 1.25rem;">FlayoTech</strong><br>
                                        <span style="font-size: 0.95rem; opacity: 0.85;">Web &amp; Mobile App Development Company in Rajkot</span>
                                    </span></span>
                                </div>
                                <div data-anim="from-bottom" class="resume__recognitions-item" style="padding: 1.8rem; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; display: flex; flex-direction: column; gap: 1.2rem; width: 100%;">
                                    <div style="height: 56px; display: flex; align-items: center;">
                                        <img src="/_astro/images/bni-logo.png" alt="BNI Logo" style="height: 48px; width: auto; object-fit: contain;">
                                    </div>
                                    <span class="split-wrap line"><span class="split-inner">
                                        <strong style="color: #fff; font-size: 1.25rem;">BNI Member</strong><br>
                                        <span style="font-size: 0.95rem; opacity: 0.85;">Active Member &bull; Rajkot Chapter</span>
                                    </span></span>
                                </div>
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
                <span class="split-wrap word"><span class="split-inner">Looking </span></span><span class="split-wrap word"><span class="split-inner">for </span></span><span class="split-wrap word"><span class="split-inner">a </span></span><span class="split-wrap word"><span class="split-inner">digital </span></span><span class="split-wrap word"><span class="split-inner">partner?</span></span>
            </h2>
            <span data-anim="from-bottom" class="footer__middle-email" data-pointer="Copy" data-umami-event="Copy email">
                <span class="footer__middle-email-inner">
                    <span class="split-wrap char"><span class="split-inner">r</span></span><span class="split-wrap char"><span class="split-inner">u</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">k</span></span><span class="split-wrap char"><span class="split-inner">@</span></span><span class="split-wrap char"><span class="split-inner">f</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">a</span></span><span class="split-wrap char"><span class="split-inner">y</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">c</span></span><span class="split-wrap char"><span class="split-inner">h</span></span><span class="split-wrap char"><span class="split-inner">.</span></span><span class="split-wrap char"><span class="split-inner">c</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">m</span></span>
                </span>
            </span>
            <div class="footer__middle-cta">
                <a role="button" class="btn btn--secondary" data-umami-event="LinkedIn Button" target="_blank" href="https://flayotech.com">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">FlayoTech</span>
                        <span class="btn__text-inner" aria-hidden="true">FlayoTech</span>
                        <span class="btn__text-inner" aria-hidden="true">FlayoTech</span>
                    </span>
                </a>
                <a role="button" class="btn btn--secondary" data-umami-event="Download Bio" target="_blank" href="/Rutvik Biosheet.pdf">
                    <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                    <span class="btn__text">
                        <span class="btn__text-inner">Bio Sheet</span>
                        <span class="btn__text-inner" aria-hidden="true">Bio Sheet</span>
                        <span class="btn__text-inner" aria-hidden="true">Bio Sheet</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="footer__bottom">
            <span class="footer__bottom-left">&copy;2026 Rutvik Khandhar • FlayoTech</span>
            <span class="footer__bottom-center" data-umami-event="Copy Email"><i class="available"></i>Rajkot, Gujarat, India</span>
            <span class="footer__bottom-right">Built with FlayoTech Architecture</span>
        </div>
    </div>
</footer>
@endsection
