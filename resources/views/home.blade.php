<!DOCTYPE html>
<html lang="en">

<head>
    
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food web site</title>
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- for icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">"
    <!-- for swiper slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- for fancy box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
</head>

<body class="body-fixed">
    <!-- header -->
    <header class="site header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="logo.png" width="100" height="36" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-navigation col-lg-6">
                    <!-- <button class="menu-toggle"><span></span><span></span></button> -->
                    <nav class="header menu">
                        <ul class="menu food-nav-menu">
                            <a href="#home">Home</a>
                            <li><a href="#about">About</a></li>
                            <li><a href="/menu">Menu</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                           
                            
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
   

    <!-- end of header -->
    <div id="viewport">
        <div id="js-scroll-content">
            <section id="home" class="main-banner" >
                <!-- <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div> -->
                This is home section
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to <span>FOOH HQ</span>
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Sint exercitationem blanditiis voluptatem tempora, natus facilis?
                                        Vero corporis beatae recusandae architecto a, porro nobis, neque,
                                        commodi voluptates voluptatum eos quaerat necessitatibus!</p>
                                    <div class="banner-btn-mt-4">
                                        <a href="/menu" class="sec-btn">check our menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image:url(assets/images/main-b.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">sushi</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Labore, est. Nobis vitae minima quis sapiente ea veniam quas perspiciatis
                                        deserunt?
                                        Voluptatum nobis architecto molestiae impedit, voluptate omnis sint natus eos?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">
                                    Trusted by 70+ companies
                                </h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="assets/images/brands/b1.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b2.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b3.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b4.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-5">About Us</p>
                                <h2 class="h2-title">
                                    Discover our <span> restaurant story</span>
                                </h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vitae suscipit delectus tempora corrupti dolorum repellendus amet natus inventore,
                                    aliquam doloremque, dolore vero molestiae recusandae nam eos et? Blanditiis,
                                    corrupti atque?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(assets/images/about.jpg);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox=video class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Watch our intro video</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="menu">

            @include("food")
            </div>
         

          @include("foodchef")


            <section class="book-table section bg-light" id="gallery">
                <div class="book-table-shape ">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Book Table</p>
                                    <h2 class="h2-title">Opening Table</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Thrusday</h3>
                                        <p>9:00 am - 22:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">+91 - 8866998866</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Friday to Sunday</h3>
                                        <p>11::00 am to 20:00 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div> -->


                    </div>
                </div>
            </section>


            

        </div>
    </div>



    <!-- jquery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- boottrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawsome -->
    <script src="assets/js/font-awsome.min.js"></script>

    <!-- swipe slider -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup--filter -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>

    <!-- scroll to plug in -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>

    <!-- rellax -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax.custom.js"></script> -->

    <!-- smooth scroll -->
    <script src="assets/js/smooth-scroll.js"></script>

    <!-- custom js -->
    <script src="main.js"></script>





</body>

</html>