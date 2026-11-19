<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zero Waste Motors ·  Vehicle Recycling</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'includes/navbar.php'; ?>


    <!-- MAIN CONTENT -->
    <main id="mainContent">

        <!-- HERO SECTION -->
        <section id="home">
            <?php include 'components/hero.php'; ?>
        </section>

        <!-- SERVICES SECTION -->
       <section id="services">
    <?php include 'components/services.php'; ?>
</section>

        <!-- HOW IT WORKS -->
       <section id="process">
    <?php include 'components/process-section.php'; ?>
</section>

        <!-- ABOUT SECTION -->
     <section id="about">
    <?php include 'components/about.php'; ?>
</section>

        <!-- TESTIMONIALS -->
     <section id="testimonials">
    <?php include 'components/testimonial-card.php'; ?>
</section>

        <!-- FAQ -->
       <section id="faq">
    <?php include 'components/faq-section.php'; ?>
</section>

        <!-- VEHICLE SCRAP ENQUIRY -->
        <section id="scrap-form">
    <?php include 'components/quote-form.php'; ?>
</section>

    </main>


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- AOS INITIALIZATION -->
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 80,
            easing: 'ease-out-cubic'
        });
    </script>

    <!-- CUSTOM JAVASCRIPT -->
    <script src="assets/js/main.js"></script>

</body>
</html>