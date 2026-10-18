@extends('layouts.app')

@section('title', 'Rutvik Khandhar • Web &amp; Mobile App Developer')
@section('description', 'Founder of FlayoTech, Web &amp; Mobile App Developer with 3.5+ years of experience based in Rajkot, India.')
@section('page_id', 'home')
@section('namespace', 'home')

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
                    <a class="header__menu-link active" href="/">
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
        <div class="hero__column hero__column--left">
            <h1>
                <span class="split-wrap char"><span class="split-inner">R</span></span><span class="split-wrap char"><span class="split-inner">u</span></span><span class="split-wrap char"><span class="split-inner">t</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">k</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">K</span></span><span class="split-wrap char"><span class="split-inner">h</span></span><span class="split-wrap char"><span class="split-inner">a</span></span><span class="split-wrap char"><span class="split-inner">n</span></span><span class="split-wrap char"><span class="split-inner">d</span></span><span class="split-wrap char"><span class="split-inner">h</span></span><span class="split-wrap char"><span class="split-inner">a</span></span><span class="split-wrap char"><span class="split-inner">r</span></span>
            </h1>
            <span class="hero__column-infos">
                <span class="split-wrap line"><span class="split-inner">Based in Rajkot, India</span></span>
            </span>
            <span class="hero__column-infos">
                <span class="split-wrap line"><span class="split-inner"><i class="available"></i></span></span>
                <span class="split-wrap line"><span class="split-inner">Founder @ FlayoTech • Available for Projects</span></span>
            </span>
        </div>
        <div class="hero__column hero__column--center">
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
        <div class="hero__column hero__column--right">
            <h1>
                <span class="split-wrap char"><span class="split-inner">W</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">&amp;</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">M</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">b</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><br>
                <span class="split-wrap char"><span class="split-inner">A</span></span><span class="split-wrap char"><span class="split-inner">p</span></span><span class="split-wrap char"><span class="split-inner">p</span></span><span class="split-wrap char"><span class="split-inner"> </span></span><span class="split-wrap char"><span class="split-inner">D</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">v</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">l</span></span><span class="split-wrap char"><span class="split-inner">o</span></span><span class="split-wrap char"><span class="split-inner">p</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">r</span></span>
            </h1>
        </div>
    </section>

    <section class="about container">
        <div class="about__description">
            <p data-split="words">
                <span class="indent"></span> I'm a Web &amp; Mobile App Developer and Founder of <strong>FlayoTech</strong> with over 3.5 years of industry experience based in Rajkot. Specializing in high-performance web applications, mobile platforms, and sales &amp; marketing architecture, I build impactful digital products that help businesses scale across India.
            </p>
        </div>
        <div class="about__logos" style="display: flex; justify-content: center; align-items: center; gap: 2.5rem; margin: 2.5rem 0; flex-wrap: wrap;">
            <a href="https://flayotech.com" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; padding: 1rem 2rem; background: #ffffff; border-radius: 12px; transition: transform 0.3s ease, box-shadow 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.3);" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='none'">
                <img src="/_astro/images/flayotech-logo.jpg" alt="FlayoTech" style="height: 52px; width: auto; max-width: 220px; object-fit: contain; display: block;">
            </a>
            <div style="display: flex; align-items: center; justify-content: center; padding: 1rem 2.2rem; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); border-radius: 12px; transition: transform 0.3s ease, border-color 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.borderColor='rgba(255,255,255,0.25)'" onmouseout="this.style.transform='none'; this.style.borderColor='rgba(255,255,255,0.12)'">
                <img src="/_astro/images/bni-logo.png" alt="BNI Member" style="height: 48px; width: auto; object-fit: contain; display: block;">
            </div>
        </div>
        <div class="about__cta">
            <a role="button" class="btn btn--centered" target="_self" href="/about">
                <span class="btn__circle" aria-hidden="true"><span class="btn__circle__arrow"></span></span>
                <span class="btn__text">
                    <span class="btn__text-inner">Learn more</span>
                    <span class="btn__text-inner" aria-hidden="true">Learn more</span>
                    <span class="btn__text-inner" aria-hidden="true">Learn more</span>
                </span>
            </a>
        </div>
    </section>

    <section class="work container">
        <div class="divider divider--center">
            <div class="divider__line divider__line--left"></div>
            <div class="divider__text">
                <h2 data-anim="from-bottom">
                    <span class="split-wrap word"><span class="split-inner">Discover </span></span><span class="split-wrap word"><span class="split-inner">our </span></span><span class="split-wrap word"><span class="split-inner">digital </span></span><span class="split-wrap word"><span class="split-inner">solutions</span></span>
                </h2>
            </div>
            <div class="divider__line divider__line--right"></div>
        </div>
        <p data-anim="from-bottom" class="work__description">
            <span class="split-wrap word"><span class="split-inner">Explore </span></span><span class="split-wrap word"><span class="split-inner">client </span></span><span class="split-wrap word"><span class="split-inner">engineering </span></span><span class="split-wrap word"><span class="split-inner">solutions </span></span><span class="split-wrap word"><span class="split-inner">and </span></span><span class="split-wrap word"><span class="split-inner">areas </span></span><span class="split-wrap word"><span class="split-inner">of </span></span><span class="split-wrap word"><span class="split-inner">technical </span></span><span class="split-wrap word"><span class="split-inner">expertise</span></span>
        </p>
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
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Web Development</span>
                </div>
            </a>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">Click to view projects</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <a data-pointer="View" class="work__categories-row" href="/work/product-design">
                <video class="work__categories-video" preload="metadata" loop muted playsinline data-title="product-design" poster="/_astro/images/product-design.webp">
                    <source src="/_astro/videos/product-design-360x360.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                    <source src="/_astro/videos/product-design-360x360.webm" type="video/webm">
                </video>
                <div class="work__categories-inner">
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Mobile App Engineering</span>
                </div>
            </a>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">Click to view projects</div>
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
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Enterprise Brand Architecture</span>
                </div>
            </a>
            <div class="divider divider--center">
                <div class="divider__line divider__line--left"></div>
                <div class="divider__text">Click to view projects</div>
                <div class="divider__line divider__line--right"></div>
            </div>
            <a data-pointer="View" class="work__categories-row" href="/work/motion-design">
                <video class="work__categories-video" preload="metadata" loop muted playsinline data-title="motion-design" poster="/_astro/images/motion-design.webp">
                    <source src="/_astro/videos/motion-design-360x360.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
                    <source src="/_astro/videos/motion-design-360x360.webm" type="video/webm">
                </video>
                <div class="work__categories-inner">
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span><span class="work__categories-inner-separator"></span>
                    <span class="work__categories-inner-text">Digital Marketing &amp; Media</span>
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
