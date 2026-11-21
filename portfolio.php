<?php include 'header.php'; ?>

<!-- Scripts style two -->
<!-- rts bread crumba rea start -->
<div class="rts-breadcrumb-area bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="baread-crumb-main-wrapper pt--100">
                    <div class="inner">
                        <span class="works"> Latest Selected Works </span>
                        <h1 class="title rts_hero__title">Portfolio</h1>
                        <span class="bg-text">Showcase</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts bread crumba rea end -->
<!-- Scripts style two End -->









<div class="rts-portfolio-grid-area column">


    <div class="container-140">


        <?php
        $websites = [
            (object)["name" => "TaskedIn", "url" => "https://taskedin.net", "www_url" => "www.taskedin.net"],
            (object)["name" => "Penduline", "url" => "https://penduline.com", "www_url" => "www.penduline.com"],
            (object)["name" => "dr mohamed abdelhamed", "url" => "https://drmohamedabdelhamed.com", "www_url" => "www.drmohamedabdelhamed.com"],
            (object)["name" => "notabuk", "url" => "https://www.notabuk.com/", "www_url" => "www.notabuk.com"],
            (object)["name" => "QPN ", "url" => "https://www.qpnkw.com/", "www_url" => "www.qpnkw.com"],
            (object)["name" => "alamal hospital", "url" => "http://alamal-hospital.com/", "www_url" => "www.alamal-hospital.com"],
            (object)["name" => "Hesham Qassim", "url" => "https://www.hqassim.com/", "www_url" => "www.hqassim.com"],
            (object)["name" => "MisMoon", "url" => "https://mismonsa.com/", "www_url" => "www.mismonsa.com"],
            (object)["name" => "Mugtama Magazine", "url" => "https://mugtama.com/", "www_url" => "www.mugtama.com"],
            (object)["name" => "islamic book fair", "url" => "https://www.islamicbookfairkw.com/", "www_url" => "www.islamicbookfairkw.com"],
            (object)["name" => "Ethaaf", "url" => "https://ethaaf.com/", "www_url" => "www.ethaaf.com"],
            (object)["name" => "al-qattan", "url" => "https://al-qattan.net/", "www_url" => "www.al-qattan.net"],
        ];

        ?>

        <div class="row g-0 separetor-portfolio-bottom">
            <?php foreach ($websites as $i => $site) { ?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="signle-portfolio-style-four-inner">
                        <a href="<?php echo $site->url ?>" class="thumbnail rts-slide-up-gsap" target="_blank">
                            <img src="assets/images/product/portfolio-<?php echo $i + 1 ?>.png">
                        </a>
                        <div class="inner-content">
                            <span style="text-transform: capitalize;"> <?php echo $site->name ?> </span>
                            <a href="<?php echo $site->url ?>" target="_blank">
                                <h5 class="name"> <?php echo $site->www_url ?> </h5>
                            </a>
                        </div>
                    </div>
                </div>

            <?php  } ?>

        </div>

    </div>

</div>





















<?php include 'footer.php'; ?>


<script>
    $(document).ready(function() {
        $("body").addClass("inner-page")
    });
</script>