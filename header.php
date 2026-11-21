<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
    <title> Waleed Saeed | Software Engineer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <meta property="og:title" content="Waleed Saeed – Software Engineer - Front-End Developer & Consultant " />
    <meta property="og:description" content="Helping businesses build clean, fast, and user-focused websites. View selected work, services, and testimonials." />
    <meta property="og:image" content="https://waleedsaeed.com/assets/images/og-image.png" />
    <meta property="og:url" content="https://waleedsaeed.com" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Waleed Saeed" />

    <!-- https://elements.envato.com/mighty-creative-and-digital-agency-html-template-66N7R9A -->


    <style>
        a.rts-btn.btn-white.rts-btn-2 {
            background: transparent !important;
            color: #fff !important;
            border: 1px solid #fff;
        }


        .my-image {
            position: absolute;
            bottom: 0;
            right: 0;
            height: 93%;
        }



        .feature-main-wrapper-1 {
            row-gap: 40px;
            column-gap: 15px;
            justify-content: center;
        }

        .to-word {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
        }

        .homepage {
            background: #0E0E0E;
            height: 100vh;
        }


        .rts-feature-area {
            width: 200px !important;
        }

        .homepage-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .homepage-wrapper:after {
            content: "";
            display: block;
            width: 20px;
            height: 100%;
            background: #fff;
            position: absolute;
            right: calc(50% - 10px);
        }

        .homepage-wrapper:before {
            content: "";
            display: block;
            width: 100%;
            height: 20px;
            background: #fff;
            position: absolute;
            top: calc(50% - 10px);
            z-index: 9;
        }

        .homepage-box {
            width: calc(50vw - 1px);
            height: 50vh;
        }

        .center-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background: #fff;
            border-radius: 500px;
            width: 180px;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-logo img {
            width: 170px;
        }

        .image-box-blog img {
            object-fit: cover;
        }

        .homepage-box {
            position: relative;
        }

        .homepage-box h2 {
            font-size: 58px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            z-index: 9999;
            margin: 0;
            width: fit-content;
            letter-spacing: 2px;
        }

        .header-area.header-one .header-container-one {
            padding: 15px 140px;


        }

        .header-area.header-one .header-wrapper .logo img {
            min-width: unset !important;
            width: 60px;
        }


        .main-wrapper-case-studies .title {
            font-size: 130px;
            line-height: 150px;
        }

        .rts-section-gap {
            padding: 40px 0 150px 0;
        }


        .inner-page .rts-section-gap {
            padding: 150px 0;
        }


        .footer-left-two .logo img {
            min-width: unset;
            width: 60px;
        }

        .footer-two-wrapper-content .footer-left-two p.disc {
            width: 60%;
        }


        .contact-information.thanks {
            width: 400px;
        }

        .contact-information.thanks h5.title {
            font-size: 54px !important;
            text-align: center;
        }


        .single-testimonial-2 .left-area img {
            width: 210px;
            min-width: unset;
            height: 210px;
            border-radius: 500px;
        }


        .inner-page.service-3 .single-service-card-box-1 {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-bottom: 2px solid;
        }



        .signle-portfolio-style-four-inner .thumbnail img {

            transform: scale(1.1);
        }


        @media (max-width : 1000px) {

            .my-image {
                height: auto;
                width: 70vw;
                z-index: -1;
            }

            .homepage-box {
                width: 100vw;
                height: calc(25vh - 30px);
                border-bottom: 5px solid #fff;
            }

            .homepage-box.first {
                border-top: 5px solid #fff;
            }

            .homepage-box:last-child {
                border: none;
            }

            .homepage-box h2 {
                font-size: 42px !important;
                display: block;
                width: 100%;
                line-height: 42px;
            }

            .center-logo {
                height: 100px;
                width: 100px;
                position: relative;
                top: unset;
                left: unset;
                transform: unset;
                margin-top: 15px;
                margin-bottom: 15px;
            }


            .homepage-wrapper:before {
                content: none;
            }

            .homepage-wrapper:after {
                content: none;
            }

            .footer-two-wrapper-content .footer-left-two p.disc {
                width: 100%;
            }

            .contact-information.thanks {
                width: auto;
            }

            .rts-banner-area-three-start .social-share-horizental {
                display: none;
            }


            .rts-about-area .pli-image {
                max-width: unset;
            }


            .header-area.header-one .header-container-one {
                padding: 15px 20px !important;
            }


            .baread-crumb-main-wrapper.pt--100 {
                padding-top: 10px;
            }

        }



        @media (max-width : 600px) {
            .my-image {
                right: -70px;
            }
        }
    </style>

</head>

<body class="index-one tt-transition tt-boxed tt-smooth-scroll index-three">


    <header class="header-area header-one header--sticky">
        <div class="header-container-one">
            <div class="header-wrapper">
                <a href="index.php" class="logo">
                    <img src="assets/images/logo-white.png" alt="logo">
                </a>
                <div class="header-right">

                    <nav class="nav-area drop-down-rts">
                        <ul class="navbar-nav-1">


                            <li class="menu-item main-nav-on">
                                <a href="index.php"><span class="rolling-text">Home</span></a>
                            </li>


                            <li class="menu-item main-nav-on">
                                <a href="about.php"><span class="rolling-text">About</span></a>
                            </li>


                            <li class="menu-item main-nav-on">
                                <a href="portfolio.php"><span class="rolling-text">Portfolio</span></a>
                            </li>

                            <li class="menu-item main-nav-on">
                                <a href="services.php"><span class="rolling-text">Services</span></a>
                            </li>


                            <li class="menu-item main-nav-on">
                                <a class="menu-link" href="contact.php"><span class="rolling-text">Contact</span></a>
                            </li>
                        </ul>
                    </nav>

                    <div class="action-area">

                        <div class="menu-btn">

                            <div class="rts-offcanvas-wrapper">
                                <div class="container-menu">
                                    <div class="action-menu">
                                        <div class="close-event"></div>
                                        <div class="open-event">
                                            <!-- <div class="text">
                        <span>Menu</span>
                        <span>Close</span>
                    </div> -->
                                            <div class="burger">
                                                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-close" data-v-649bbaab="">
                                                    <line x1="13.788" y1="1.28816" x2="1.06011" y2="14.0161" stroke="currentColor" stroke-width="1.2"></line>
                                                    <line x1="1.06049" y1="1.43963" x2="13.7884" y2="14.1675" stroke="currentColor" stroke-width="1.2"></line>
                                                </svg>
                                                <svg viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-burger" data-v-649bbaab="">
                                                    <line x1="18" y1="0.6" y2="0.6" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                    <line x1="18" y1="5.7167" y2="5.7167" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                    <line x1="18" y1="10.8334" y2="10.8334" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-fs-menu">
                                    <div class="rts-fs-container row">

                                        <div class="rts-fs--nav col-12 col-md-6">
                                            <ul id="primary-menu" class="navbar-nav-button">


                                                <li class="menu-item"><a href="index.php">Home</a></li>
                                                <li class="menu-item"><a href="about.php">About</a></li>
                                                <li class="menu-item"><a href="portfolio.php">portfolio</a></li>
                                                <li class="menu-item"><a href="services.php">services</a></li>
                                                <li class="menu-item"><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </div>

                                        <div class="rts-fs--contacts col-12 col-md-6">
                                            <div class="contact-inner">
                                                <div class="contact-information">
                                                    <h2 class="heading-title" style="font-size: 52px;">
                                                        Let’s make your
                                                        <br />
                                                        idea real.
                                                    </h2>

                                                </div>
                                                <div class="contact-information">
                                                    <h2 class="heading-title">Get In Touch</h2>
                                                    <div class="contact">
                                                        <ul>
                                                            <li><a href="mailto:me@waleedsaeed.com" class="mail"> me@waleedsaeed.com </a></li>
                                                            <li><a href="tel:00201273495477" class="number">+2012 7349 5477</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="rts-social-area-one">
                                                        <ul>
                                                            <li><a target="_black" href="https://www.facebook.com/waleed.valencia"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a target="_black" href="https://www.linkedin.com/in/waleed-saeed-ibrahim/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                            <li><a target="_black" href="https://wa.me/201273495477?text=Hi%20Waleed%2C%20I%20visited%20your%20website%20and%20wanted%20to%20ask%20about%20your%20services"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                            <li><a target="_black" href="https://github.com/waleedo0o7"><i class="fa-brands fa-github"></i></a></li>
                                                            <li><a target="_black" href="https://codepen.io/waleedhd1"><i class="fa-brands fa-codepen"></i></a></li>
                                                            <li><a target="_black" href="https://www.hackerrank.com/profile/waleedhd1"><i class="fa-brands fa-hackerrank"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>