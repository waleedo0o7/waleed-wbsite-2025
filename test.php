<?php include 'header.php'; ?>


<style>
    .header-area.header-one,
    .bg-footer-2,
    .cta-main-wrapper-three {
        display: none;
    }

    div#test {
        display: flex;
        width: 100%;
        height: 100vh;
    }
</style>


<div id="test">
    <h1>Hello test!</h1>
</div>



<?php include 'footer.php'; ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
<script>
    VANTA.WAVES({
        el: "#test",
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
        waveSpeed: 1.10,
        zoom: 0.85
    })
</script>