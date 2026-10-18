# Animation & Interaction Inventory

## 1. Libraries & Engines
- **GSAP (GreenSock)**: Orchestrates timelines, split text line/word reveals, and magnetic element pull effects.
- **GSAP ScrollTrigger**: Drives scroll-bound animations, pin effects on project showcase sections, and scrub progress indicators.
- **Lenis Smooth Scroll**: Provides smooth inertial scrolling across all views, synchronized with GSAP tickers.
- **Barba.js**: Client-side PJAX routing and seamless page-to-page circular overlay transitions with zero hard refreshes.

## 2. Interactive Systems
- **Magnetic Elements**: Links and buttons with `data-magnetic="15"` follow the cursor within a defined proximity threshold.
- **Custom Dual-Circle Pointer**: Trailing magnetic pointer with dynamic states (`pointer__circle--small`, `pointer__circle--big`) and contextual actions (`View`, `Go Home`, `Copy`).
- **Circular Page Transition**: Fullscreen radial reveal with numeric counter and progress bar triggered on `barba` route transitions.
- **Marquee & Hover Videos**: Continuous auto-scrolling category titles with synchronized hover-triggered video preview playback.
- **Interactive Avatar**: Canvas/WebGL profile picture shader effect (`pp__circle-bg`) on the `/about` page.
