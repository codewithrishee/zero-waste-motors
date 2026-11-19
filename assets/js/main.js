
/* =====================================================
   ZERO WASTE MOTORS - OFFCANVAS NAVIGATION
===================================================== */

document.addEventListener("DOMContentLoaded", function () {

    const header = document.getElementById("zwmHeader");
    const hamburger = document.getElementById("zwmHamburger");
    const drawer = document.getElementById("zwmDrawer");
    const overlay = document.getElementById("zwmDrawerOverlay");
    const closeBtn = document.getElementById("zwmDrawerClose");

    if (!header || !hamburger || !drawer || !overlay || !closeBtn) {
        return;
    }

    /* Automatically adjust page space for fixed header */
    function updateHeaderSpace() {
        document.body.style.paddingTop = header.offsetHeight + "px";
    }

    updateHeaderSpace();
    window.addEventListener("resize", updateHeaderSpace);


    /* OPEN DRAWER */
    function openDrawer() {
        drawer.classList.add("active");
        overlay.classList.add("active");
        hamburger.classList.add("active");

        document.body.classList.add("zwm-drawer-open");

        drawer.setAttribute("aria-hidden", "false");
        hamburger.setAttribute("aria-expanded", "true");

        closeBtn.focus();
    }


    /* CLOSE DRAWER */
    function closeDrawer() {
        drawer.classList.remove("active");
        overlay.classList.remove("active");
        hamburger.classList.remove("active");

        document.body.classList.remove("zwm-drawer-open");

        drawer.setAttribute("aria-hidden", "true");
        hamburger.setAttribute("aria-expanded", "false");
    }


    /* TOGGLE */
    hamburger.addEventListener("click", function () {

        if (drawer.classList.contains("active")) {
            closeDrawer();
        } else {
            openDrawer();
        }

    });


    /* CLOSE BUTTON */
    closeBtn.addEventListener("click", closeDrawer);


    /* OVERLAY CLICK */
    overlay.addEventListener("click", closeDrawer);


    /* CLOSE AFTER CLICKING MENU LINK */
    drawer.querySelectorAll("a").forEach(function (link) {

        link.addEventListener("click", function () {
            closeDrawer();
        });

    });


    /* ESCAPE KEY */
    document.addEventListener("keydown", function (event) {

        if (event.key === "Escape" && drawer.classList.contains("active")) {
            closeDrawer();
        }

    });


    /* PREVENT SCROLL WHEN DRAWER OPEN */
    drawer.addEventListener("touchmove", function (event) {
        event.stopPropagation();
    });

});



        /* FAQ SECTION JS */

/* ==============================
   FAQ ACCORDION
================================ */

document.querySelectorAll(".faq-question").forEach((button => {
    button.addEventListener("click", () => {

        const currentItem = button.closest(".faq-item");
        const faqList = button.closest(".faq-list");

        const isAlreadyActive = currentItem.classList.contains("active");

        // Close all FAQ items
        faqList.querySelectorAll(".faq-item").forEach(item => {
            item.classList.remove("active");
        });

        // Open clicked item
        if (!isAlreadyActive) {
            currentItem.classList.add("active");
        }

    });
}));


/* TESTIMONIALS CARA JS */
// Testimonials Carousel
const testimonialSwiper = new Swiper(".testimonialSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 700,
    grabCursor: true,

    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".testimonial-pagination",
        clickable: true,
    },

    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },

    breakpoints: {
        576: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
    },
});