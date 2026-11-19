<!-- ============================
     ZERO WASTE MOTORS HEADER
============================= -->

<header class="zwm-header" id="zwmHeader">

    <!-- TOPBAR -->
    <div class="zwm-topbar">
        <div class="container zwm-topbar-inner">

            <a href="mailto:info@zerowastemotors.com" class="zwm-topbar-email">
                <i class="bi bi-envelope-fill"></i>
                <span>info@zerowastemotors.in</span>
                <span>+91 87504 07784</span>
            </a>

            <div class="zwm-topbar-social">
                <a href="#" aria-label="Instagram" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" aria-label="Facebook" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" aria-label="LinkedIn" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>

        </div>
    </div>


    <!-- NAVBAR -->
    <nav class="zwm-navigation">
        <div class="container zwm-navigation-inner">

            <!-- LOGO -->
            <a href="index.php" class="zwm-navigation-logo">

                <img src="assets/images/logo/logo.png" alt="Zero Waste Motors">

                <span class="zwm-logo-text">
                    <strong>Zero Waste</strong>
                    <small>MOTORS</small>
                </span>

            </a>


            <!-- DESKTOP MENU -->
            <ul class="zwm-navigation-links">

                <li><a href="index.php" class="zwm-nav-active">Home</a></li>

                <li><a href="#services">Our Services</a></li>

                <li><a href="#process">How It Works</a></li>

                <li><a href="#about">About Us</a></li>

                <li><a href="#faq">FAQs</a></li>

                <li><a href="#scrap-form">Contact Us</a></li>

            </ul>


            <!-- DESKTOP BUTTON -->
            <a href="#scrap-form" class="zwm-navigation-cta zwm-desktop-button">
                Scrap Your Vehicle
                <i class="bi bi-arrow-right"></i>
            </a>


            <!-- MOBILE CONTROLS -->
            <div class="zwm-mobile-actions">

                <a href="#scrap-form" class="zwm-navigation-cta zwm-mobile-button">
                    Scrap Vehicle
                    <i class="bi bi-arrow-right"></i>
                </a>

                <button type="button" class="zwm-hamburger" id="zwmHamburger" aria-label="Open navigation"
                    aria-expanded="false" aria-controls="zwmDrawer">

                    <span></span>
                    <span></span>
                    <span></span>

                </button>

            </div>

        </div>
    </nav>

</header>


<!-- ============================
     MOBILE OVERLAY
============================= -->

<div class="zwm-drawer-overlay" id="zwmDrawerOverlay"></div>


<!-- ============================
     MOBILE OFFCANVAS DRAWER
============================= -->

<aside class="zwm-drawer" id="zwmDrawer" aria-hidden="true" aria-label="Mobile navigation">

    <!-- DRAWER HEADER -->
    <div class="zwm-drawer-header">

        <a href="index.php" class="zwm-drawer-logo">
            <img src="assets/images/logo/logo.png" alt="Zero Waste Motors">
        </a>

        <button type="button" class="zwm-drawer-close" id="zwmDrawerClose" aria-label="Close navigation">

            <i class="bi bi-x-lg"></i>

        </button>

    </div>


    <!-- DRAWER BODY -->
    <div class="zwm-drawer-body">

        <span class="zwm-drawer-heading">EXPLORE MENU</span>

        <nav class="zwm-drawer-nav">

            <a href="index.php">
                <span class="zwm-drawer-number">01</span>
                <span class="zwm-drawer-link-text">Home</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

            <a href="#services">
                <span class="zwm-drawer-number">02</span>
                <span class="zwm-drawer-link-text">Our Services</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

            <a href="#process">
                <span class="zwm-drawer-number">03</span>
                <span class="zwm-drawer-link-text">How It Works</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

            <a href="#about">
                <span class="zwm-drawer-number">04</span>
                <span class="zwm-drawer-link-text">About Us</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

            <a href="#faq">
                <span class="zwm-drawer-number">05</span>
                <span class="zwm-drawer-link-text">FAQs</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

            <a href="#scrap-form">
                <span class="zwm-drawer-number">06</span>
                <span class="zwm-drawer-link-text">Contact Us</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>

        </nav>


        <!-- SCRAP CTA -->
        <div class="zwm-drawer-cta-box">

            <!-- <div class="zwm-drawer-cta-content">
                <span>READY TO RECYCLE?</span>
                <h3>Give your old vehicle a new purpose.</h3>
            </div> -->

            <a href="#scrap-form" class="zwm-drawer-cta">
                Scrap Your Vehicle
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>


        <!-- DRAWER FOOTER -->
        <div class="zwm-drawer-footer">

            <span class="zwm-drawer-social-title">FOLLOW US</span>

            <div class="zwm-drawer-socials">
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>

            <a href="mailto:info@zerowastemotors.com" class="zwm-drawer-mail">
                <i class="bi bi-envelope"></i>
                info@zerowastemotors.com
            </a>

        </div>

    </div>

</aside>


<style>
    /* =====================================================
   ZERO WASTE MOTORS - NEW RESPONSIVE NAVBAR
===================================================== */

    :root {
        --zwm-green: #4D8517;
        --zwm-green-dark: #38630D;
        --zwm-dark: #252728;
        --zwm-text: #303630;
        --zwm-muted: #737a72;
        --zwm-border: #E8EBE6;
        --zwm-light: #F5F7F3;
    }


    /* =====================================================
   FIXED HEADER
===================================================== */

    .zwm-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 99990;
        background: #ffffff;
    }


    /* =====================================================
   TOPBAR
===================================================== */

    .zwm-topbar {
        height: 40px;
        background: var(--zwm-dark);
    }

    .zwm-topbar-inner {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .zwm-topbar-email {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #e6e9e5;
        font-size: 12px;
        text-decoration: none;
        transition: color .25s ease;
    }

    .zwm-topbar-email i {
        color: #82b64e;
    }

    .zwm-topbar-email:hover {
        color: #82b64e;
    }

    .zwm-topbar-social {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .zwm-topbar-social a {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #e7eae6;
        font-size: 13px;
        text-decoration: none;
        transition: color .25s ease, transform .25s ease;
    }

    .zwm-topbar-social a:hover {
        color: #82b64e;
        transform: translateY(-2px);
    }


    /* =====================================================
   NAVIGATION BAR
===================================================== */

    .zwm-navigation {
        width: 100%;
        background: #ffffff;
        border-bottom: 1px solid var(--zwm-border);
    }

    .zwm-navigation-inner {
        min-height: 78px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
    }


    /* LOGO */

    .zwm-navigation-logo {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .zwm-navigation-logo img {
        display: block;
        width: auto;
        max-width: 175px;
        max-height: 58px;
        object-fit: contain;
    }


    /* DESKTOP LINKS */

    .zwm-navigation-links {
        display: flex;
        align-items: center;
        gap: 28px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .zwm-navigation-links li {
        margin: 0;
        padding: 0;
    }

    .zwm-navigation-links a {
        position: relative;
        display: inline-block;
        padding: 10px 0;
        color: var(--zwm-text);
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        white-space: nowrap;
        transition: color .25s ease;
    }

    .zwm-navigation-links a:hover,
    .zwm-navigation-links a.zwm-nav-active {
        color: var(--zwm-green);
    }

    .zwm-navigation-links a::after {
        content: "";
        position: absolute;
        bottom: 3px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--zwm-green);
        transition: width .3s ease;
    }

    .zwm-navigation-links a:hover::after,
    .zwm-navigation-links a.zwm-nav-active::after {
        width: 100%;
    }


    /* NAVBAR CTA */

    .zwm-navigation-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        background: var(--zwm-green);
        color: #ffffff;
        padding: 13px 18px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        white-space: nowrap;
        transition: background .3s ease, transform .3s ease;
    }

    .zwm-navigation-cta:hover {
        background: var(--zwm-green-dark);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .zwm-navigation-cta i {
        transition: transform .3s ease;
    }

    .zwm-navigation-cta:hover i {
        transform: translateX(4px);
    }


    /* MOBILE ELEMENTS HIDDEN ON DESKTOP */

    .zwm-mobile-actions {
        display: none;
    }


    /* =====================================================
   DRAWER OVERLAY
===================================================== */

    .zwm-drawer-overlay {
        position: fixed;
        inset: 0;
        z-index: 99998;
        background: rgba(19, 23, 19, .58);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);

        opacity: 0;
        visibility: hidden;
        transition: opacity .35s ease, visibility .35s ease;
    }

    .zwm-drawer-overlay.active {
        opacity: 1;
        visibility: visible;
    }


    /* =====================================================
   OFFCANVAS DRAWER
===================================================== */

    .zwm-drawer {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 99999;

        width: 420px;
        max-width: 90%;
        height: 100vh;
        height: 100dvh;

        display: flex;
        flex-direction: column;

        background: #ffffff;
        box-shadow: -15px 0 50px rgba(0, 0, 0, .10);

        transform: translateX(105%);
        transition: transform .4s cubic-bezier(.77, 0, .18, 1);

        overflow-y: auto;
        overscroll-behavior: contain;
    }

    .zwm-drawer.active {
        transform: translateX(0);
    }


    /* DRAWER HEADER */

    .zwm-drawer-header {
        min-height: 85px;
        padding: 18px 25px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        border-bottom: 1px solid var(--zwm-border);
    }

    .zwm-drawer-logo {
        display: flex;
        align-items: center;
    }

    .zwm-drawer-logo img {
        max-width: 155px;
        max-height: 54px;
        width: auto;
        object-fit: contain;
    }

    .zwm-drawer-close {
        width: 43px;
        height: 43px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--zwm-border);
        border-radius: 10px;

        background: #f8faf7f;
        color: var(--zwm-dark);

        font-size: 15px;
        cursor: pointer;

        transition: all .3s ease;
    }

    .zwm-drawer-close:hover {
        background: var(--zwm-green);
        border-color: var(--zwm-green);
        color: #ffffff;
        transform: rotate(90deg);
    }


    /* DRAWER BODY */

    .zwm-drawer-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 30px 25px 25px;
    }

    .zwm-drawer-heading {
        display: block;
        margin-bottom: 20px;
        color: var(--zwm-green);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2px;
    }


    /* DRAWER NAVIGATION */

    .zwm-drawer-nav {
        border-top: 1px solid var(--zwm-border);
    }

    .zwm-drawer-nav>a {
        min-height: 62px;
        display: flex;
        align-items: center;
        gap: 14px;

        border-bottom: 1px solid var(--zwm-border);

        color: var(--zwm-dark);
        text-decoration: none;

        transition: padding .25s ease, color .25s ease;
    }

    .zwm-drawer-number {
        color: #9da49a;
        font-size: 10px;
        letter-spacing: 1px;
    }

    .zwm-drawer-link-text {
        font-size: 15px;
        font-weight: 600;
    }

    .zwm-drawer-nav>a>i {
        margin-left: auto;
        color: #a0a69c;
        font-size: 14px;
        transition: transform .25s ease, color .25s ease;
    }

    .zwm-drawer-nav>a:hover {
        padding-left: 6px;
        color: var(--zwm-green);
    }

    .zwm-drawer-nav>a:hover>i {
        color: var(--zwm-green);
        transform: translate(3px, -3px);
    }


    /* DRAWER CTA BOX */

    .zwm-drawer-cta-box {
        margin-top: 28px;
        padding: 22px;
        background: var(--zwm-light);
        border: 1px solid #e6eddf;
        border-radius: 12px;
    }

    .zwm-drawer-cta-content>span {
        color: var(--zwm-green);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    .zwm-drawer-cta-content h3 {
        margin: 10px 0 18px;
        color: var(--zwm-dark);
        font-size: 18px;
        font-weight: 700;
        line-height: 1.4;
    }

    .zwm-drawer-cta {
        width: 100%;
        min-height: 48px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 13px 16px;

        background: var(--zwm-green);
        border-radius: 8px;

        color: #ffffff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;

        transition: background .3s ease;
    }

    .zwm-drawer-cta:hover {
        background: var(--zwm-green-dark);
        color: #ffffff;
    }


    /* DRAWER FOOTER */

    .zwm-drawer-footer {
        margin-top: auto;
        padding-top: 28px;
    }

    .zwm-drawer-social-title {
        display: block;
        margin-bottom: 14px;
        color: #92998e;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.8px;
    }

    .zwm-drawer-socials {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .zwm-drawer-socials a {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--zwm-border);
        border-radius: 50%;

        color: var(--zwm-dark);
        text-decoration: none;

        transition: all .25s ease;
    }

    .zwm-drawer-socials a:hover {
        background: var(--zwm-green);
        border-color: var(--zwm-green);
        color: #ffffff;
    }

    .zwm-drawer-mail {
        display: flex;
        align-items: center;
        gap: 9px;

        color: #70776e;
        font-size: 11px;
        text-decoration: none;
    }

    .zwm-drawer-mail i {
        color: var(--zwm-green);
    }


    /* LOCK BODY SCROLL */

    body.zwm-drawer-open {
        overflow: hidden;
    }


    /* =====================================================
   TABLET
===================================================== */

    @media (max-width: 991px) {

        .zwm-navigation-inner {
            gap: 15px;
        }

        .zwm-navigation-links {
            gap: 17px;
        }

        .zwm-navigation-links a {
            font-size: 12px;
        }

        .zwm-navigation-logo img {
            max-width: 145px;
        }

        .zwm-desktop-button {
            padding: 12px 14px;
            font-size: 11px;
        }

    }


    /* =====================================================
   MOBILE
===================================================== */

    @media (max-width: 767px) {

        .zwm-topbar {
            height: 36px;
        }

        .zwm-topbar-email {
            font-size: 10px;
            gap: 6px;
        }

        .zwm-topbar-social {
            gap: 12px;
        }

        .zwm-topbar-social a {
            font-size: 12px;
        }

        .zwm-navigation-inner {
            min-height: 68px;
        }

        .zwm-navigation-logo img {
            max-width: 135px;
            max-height: 48px;
        }

        /* Hide desktop navigation */
        .zwm-navigation-links,
        .zwm-desktop-button {
            display: none !important;
        }

        /* Mobile controls */
        .zwm-mobile-actions {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        /* Mobile CTA */
        .zwm-mobile-button {
            padding: 11px 12px;
            font-size: 10px;
            border-radius: 7px;
        }

        /* Hamburger */
        .zwm-hamburger {
            width: 43px;
            height: 43px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;

            padding: 0;
            border: 1px solid var(--zwm-border);
            border-radius: 9px;
            background: #ffffff;

            cursor: pointer;
        }

        .zwm-hamburger span {
            display: block;
            width: 18px;
            height: 2px;
            background: var(--zwm-dark);
            border-radius: 3px;

            transition: transform .3s ease, opacity .3s ease;
        }

        /* Hamburger transforms into X */
        .zwm-hamburger.active span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .zwm-hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .zwm-hamburger.active span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

    }


    /* =====================================================
   SMALL MOBILE
===================================================== */

    @media (max-width: 380px) {

        .zwm-navigation-inner {
            gap: 8px;
        }

        .zwm-navigation-logo img {
            max-width: 115px;
        }

        .zwm-mobile-actions {
            gap: 7px;
        }

        .zwm-mobile-button {
            padding: 10px;
            font-size: 10px;
        }

        .zwm-hamburger {
            width: 40px;
            height: 40px;
        }

        .zwm-drawer {
            width: 360px;
            max-width: 88%;
        }

        .zwm-drawer-body {
            padding: 25px 20px;
        }

    }

    /* =========================================
   MOBILE NAVBAR OVERFLOW FIX
========================================= */

    @media (max-width: 767px) {

        .zwm-header,
        .zwm-navigation,
        .zwm-navigation-inner {
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
        }

        .zwm-navigation-inner {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 10px !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .zwm-navigation-logo {
            min-width: 0 !important;
            flex-shrink: 1 !important;
            overflow: hidden !important;
        }

        .zwm-navigation-logo img {
            max-width: 130px !important;
            width: 100% !important;
            height: auto !important;
            object-fit: contain !important;
        }

        .zwm-mobile-actions {
            flex-shrink: 0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: flex-end !important;
            margin-left: auto !important;
        }

        .zwm-mobile-button {
            display: none !important;
        }

        .zwm-hamburger {
            flex-shrink: 0 !important;
            width: 42px !important;
            height: 42px !important;
        }

        .zwm-navigation-links,
        .zwm-desktop-button {
            display: none !important;
        }

        body {
            overflow-x: hidden !important;
        }
    }

    /* Small phones */
    @media (max-width: 380px) {

        .zwm-navigation-inner {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        .zwm-navigation-logo img {
            max-width: 115px !important;
        }

    }

    /* =========================================
   GLOBAL MOBILE WIDTH FIX
========================================= */

    @media (max-width: 767px) {

        html,
        body {
            width: 100% !important;
            max-width: 100% !important;
            overflow-x: clip !important;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .container,
        .container-fluid {
            max-width: 100% !important;
        }

        img,
        video,
        iframe {
            max-width: 100%;
        }
    }

    .zwm-navigation-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        flex-shrink: 0;
    }

    .zwm-navigation-logo img {
        width: 48px;
        height: 48px;
        object-fit: contain;
    }

    .zwm-logo-text {
        display: flex;
        flex-direction: column;
        line-height: 1.1;
    }

    .zwm-logo-text strong {
        font-size: 19px;
        font-weight: 800;
        color: #252a26;
        letter-spacing: -0.5px;
    }

    .zwm-logo-text small {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #4d8517;
        margin-top: 4px;
    }

    /* Mobile */
    @media (max-width: 767px) {

        .zwm-navigation-logo {
            gap: 7px;
        }

        .zwm-navigation-logo img {
            width: 38px;
            height: 38px;
        }

        .zwm-logo-text strong {
            font-size: 16px;
        }

        .zwm-logo-text small {
            font-size: 9px;
            letter-spacing: 2.5px;
        }
    }
</style>