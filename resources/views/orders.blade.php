<!DOCTYPE html>
<html lang="en">

<head>
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
                <div class="main-navigation">
                    <button class="menu-toggle"><span></span><span></span></button>
                    <nav class="header menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Staff</a>

                                        <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif -->
                                    @endauth
                                </div>
                             @endif
                            </li>
                        </ul>
                    </nav>
                    <div class="header-right">
                        <form action="#" class="header-search-form for-des">
                            <input type="search" class="form-input" placeholder="Search Here...">
                            <button type="submit">
                                <i class="uil uil-search"></i>
                            </button>
                        </form>
                        <a href="javascript:void(0)" class="header-btn header-cart">
                            <i class="uil uil-shopping-cart-alt"></i>
                            <span class="cart-number">3</span>
                        </a>
                        <a href="javascript:void(0)" class="header-btn">
                            <i class="uil uil-user"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <?php

echo $_POST('tablenumber');

?>

    <!-- end of header -->
    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
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
                                   

                                    <form  method="post" >

                                    <!-- <form action="{{url('/HomeController')}}" method="post" > -->
                                        
                                    <div class="form-group">
                                     
                                        <label for="tablenumber">Select Table</label>
                                        <select class="form-control" name="tablenumber" id="tablenumber">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        </select>

                                        
                                    </div>

                                    <div class="form-group">
                                        <a type="submit" name="tablenumber" href="{{url('/menu')}}" class="src-btn">Place an Order</a>
                                    </div>

                                    </form>

                                    
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