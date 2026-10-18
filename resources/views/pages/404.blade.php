@extends('layouts.app')

@section('title', '404 Not found • Rutvik Khandhar')
@section('description', '404 Error — page not found')
@section('page_id', 'notfound')
@section('namespace', '404')

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
    <a href="/" class="hero container" data-pointer="Go Home">
        <video autoplay loop muted playsinline poster="/_astro/images/404.webp">
            <source src="/_astro/videos/404.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
            <source src="/_astro/videos/404.webm" type="video/webm">
        </video>
        <div class="work is-title">
            <div class="work__categories">
                <div class="work__categories-row">
                    <div class="work__categories-inner">
                        <h1 class="work__categories-inner-text">Not found</h1>
                        <span class="work__categories-inner-separator"></span>
                        <h1 class="work__categories-inner-text">404</h1>
                        <span class="work__categories-inner-separator"></span>
                        <h1 class="work__categories-inner-text">Not found</h1>
                        <span class="work__categories-inner-separator"></span>
                        <h1 class="work__categories-inner-text">404</h1>
                        <span class="work__categories-inner-separator"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
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
