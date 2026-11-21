<?php include 'header.php'; ?>


<style>
    .header-area.header-one,
    .bg-footer-2,
    .cta-main-wrapper-three {
        display: none;
    }


    div#bg-animated {
        display: flex;
        width: 100%;
        height: 100%;

        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;

    }
</style>


<div id="bg-animated">
</div>


<div class="homepage">

    <div class="homepage-wrapper">


        <div class="center-logo">
            <img src="assets/images/logo.png" alt="">
        </div>

        <div class="homepage-box first">
            <a href="about.php">
                <h2>About</h2>
            </a>
        </div>


        <div class="homepage-box">
            <a href="services.php">
                <h2>Services</h2>
            </a>
        </div>


        <div class="homepage-box">
            <a href="portfolio.php">
                <h2>Portfolio</h2>
            </a>
        </div>

        <div class="homepage-box">
            <a href="contact.php">
                <h2>Contact</h2>
            </a>
        </div>

    </div>

</div>

<?php include 'footer.php'; ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
<script>
    VANTA.WAVES({
        el: "#bg-animated",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x121212,
        shininess: 150.00,
        waveHeight: 26.50,
        waveSpeed: 0.3,
        zoom: 0.85
    })
</script>