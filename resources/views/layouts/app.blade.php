<!DOCTYPE html>
<script type="module" src="/_astro/js/main.DQzkjJVx.js"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Rutvik Khandhar • Web &amp; Mobile App Developer">
    <meta property="og:title" content="@yield('title', 'Rutvik Khandhar • Web &amp; Mobile App Developer')">
    <meta property="og:description" name="description" content="@yield('description', 'Rutvik Shantilal Khandhar - Founder of FlayoTech, Web &amp; Mobile App Developer with 3.5+ years of experience based in Rajkot, India.')">
    <meta property="og:image:alt" content="@yield('title', 'Rutvik Khandhar • Web &amp; Mobile App Developer')">
    <meta property="og:image" content="/_astro/og_image.jpg">
    <title>@yield('title', 'Rutvik Khandhar • Web &amp; Mobile App Developer')</title>
    <link rel="sitemap" href="/sitemap-index.xml">
    <link rel="icon" type="image/svg+xml" href="/_astro/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Manrope:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link as="font" crossorigin rel="preload" href="/_astro/fonts/MangoGrotesque-Regular.woff2" type="font/woff2">
    <style>
        @font-face {font-weight: 400;font-style: regular;font-family: PP Neue Montreal;font-display: swap;src: url(/_astro/fonts/PPNeueMontreal-Book.woff2)}
        @font-face {font-weight: 500;font-style: medium;font-family: PP Neue Montreal;font-display: swap;src: url(/_astro/fonts/PPNeueMontreal-Medium.woff2)}
        @font-face {font-weight: 700;font-style: bold;font-family: PP Neue Montreal;font-display: swap;src: url(/_astro/fonts/PPNeueMontreal-Bold.woff2)}
        @font-face {font-weight: 300;font-style: regular;font-family: Mango Grotesque;font-display: swap;src: url(/_astro/fonts/MangoGrotesque-Regular.woff2)}
        @font-face {font-weight: 100;font-style: extralight;font-family: Mango Grotesque;font-display: swap;src: url(/_astro/fonts/MangoGrotesque-ExtraLight.woff2)}
        @font-face {font-weight: 200;font-style: light;font-family: Mango Grotesque;font-display: swap;src: url(/_astro/fonts/MangoGrotesque-Light.woff2)}
        body { font-family: PP Neue Montreal, '_font_fallback_1336686402507', sans-serif; }
        @font-face { font-family: '_font_fallback_1336686402507'; size-adjust: 94.40%; src: local('Arial'); ascent-override: 101.48%; descent-override: 25.66%; line-gap-override: 0.00%; }
        body { font-family: Mango Grotesque, '_font_fallback_762627013597', sans-serif; }
        @font-face { font-family: '_font_fallback_762627013597'; size-adjust: 50.98%; src: local('Arial'); ascent-override: 147.11%; descent-override: 41.19%; line-gap-override: 19.62%; }
        body { font-family: Mango Grotesque, '_font_fallback_79632165960', sans-serif; }
        @font-face { font-family: '_font_fallback_79632165960'; size-adjust: 48.90%; src: local('Arial'); ascent-override: 153.39%; descent-override: 42.95%; line-gap-override: 20.45%; }
    </style>
    <script defer src="/_astro/js/t.js" data-website-id="f4c0eb39-f9d2-4f81-9094-95a98f58d211"></script>
    <link rel="stylesheet" href="/_astro/css/main.Di2mB4H3.css">
    <link rel="stylesheet" href="/_astro/css/main.FDROcKoS.css">
    <link rel="stylesheet" href="/_astro/css/light-theme.css">
</head>
<body data-barba="wrapper">
    <div class="overlay-container overlay-container--over" aria-hidden="true">
        <div class="overlay-transition">
            <div class="overlay-transition__round-container overlay-transition__round-container--top">
                <div class="overlay-transition__round"></div>
            </div>
            <div class="overlay-transition__next-page">
                <span class="overlay-transition__next-page-inner">0</span>
            </div>
            <div class="overlay-transition__progress">
                <div class="overlay-transition__progress-container">
                    <div class="overlay-transition__progress-bar"></div>
                </div>
            </div>
            <div class="overlay-transition__round-container overlay-transition__round-container--bottom">
                <div class="overlay-transition__round"></div>
            </div>
        </div>
    </div>

    <div class="pointer" aria-hidden="true">
        <div class="pointer__circle pointer__circle--small"></div>
        <div class="pointer__circle pointer__circle--big">
            <span class="pointer__circle-text"><span class="split-wrap char"><span class="split-inner">V</span></span><span class="split-wrap char"><span class="split-inner">i</span></span><span class="split-wrap char"><span class="split-inner">e</span></span><span class="split-wrap char"><span class="split-inner">w</span></span></span>
        </div>
    </div>

    <div id="@yield('page_id')" data-barba="container" data-barba-namespace="@yield('namespace')">
        @yield('content')
    </div>

    <script>
        (function() {
            function updateHeaderScroll() {
                var headers = document.querySelectorAll('header');
                var scrolled = window.scrollY > 20;
                headers.forEach(function(h) {
                    if (scrolled) {
                        h.classList.add('is-scrolled');
                    } else {
                        h.classList.remove('is-scrolled');
                    }
                });
            }
            window.addEventListener('scroll', updateHeaderScroll, { passive: true });
            window.addEventListener('DOMContentLoaded', updateHeaderScroll);
            updateHeaderScroll();

            // Subtle, restrained creative parallax on hero backdrop
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                var heroSection = document.querySelector('.editorial-hero');
                if (heroSection) {
                    var geoDisc = heroSection.querySelector('.hero-geo-disc');
                    var ribbonSvg = heroSection.querySelector('.hero-ribbon-svg');
                    var sphereMid = heroSection.querySelector('.hero-sphere-accent--mid');
                    var archLines = heroSection.querySelector('.hero-arch-lines');

                    heroSection.addEventListener('mousemove', function(e) {
                        var rect = heroSection.getBoundingClientRect();
                        var relX = (e.clientX - rect.left) / rect.width - 0.5;
                        var relY = (e.clientY - rect.top) / rect.height - 0.5;

                        if (geoDisc) {
                            geoDisc.style.transform = 'translate(' + (25 + relX * 15) + '%, ' + (-52 + relY * 15) + '%)';
                        }
                        if (sphereMid) {
                            sphereMid.style.transform = 'translate(' + (relX * 22) + 'px, ' + (relY * 22) + 'px)';
                        }
                        if (archLines) {
                            archLines.style.transform = 'translateX(' + (relX * 10) + 'px)';
                        }
                        if (ribbonSvg) {
                            ribbonSvg.style.transform = 'translate(' + (relX * 6) + 'px, ' + (relY * 6) + 'px)';
                        }
                    }, { passive: true });

                    heroSection.addEventListener('mouseleave', function() {
                        if (geoDisc) geoDisc.style.transform = 'translate(25%, -52%)';
                        if (sphereMid) sphereMid.style.transform = 'translate(0px, 0px)';
                        if (archLines) archLines.style.transform = 'translateX(0px)';
                        if (ribbonSvg) ribbonSvg.style.transform = 'translate(0px, 0px)';
                    });
                }
            }
        })();
    </script>
</body>
</html>
