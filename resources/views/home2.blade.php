<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

      
       
<!-- 
        <title>FOOD HQ</title> --> 

        <!-- Fonts
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style> -->
            <!-- /* ! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.csshtml{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}} */
        /* </style> */ -->

        <!-- /* <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>   */ -->

            <!-- <div> -->
<!--                     
                      <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Staff</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif -->
                                     <!-- @endauth
                                </div>
                             @endif

                        </li>   -->




                      
                   
             
            
        <!-- </div> -->
<!--        
    </header>
    <body>
        
    </body>
    </html> -->

    <!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    

    <!-- <base href="/public"> -->
    <title>Food web site</title>
    <!-- custom css -->
     <!-- <link rel="stylesheet" href="style.css">  -->
     <link href="{{ asset('style.css') }}" rel="stylesheet">

 
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <!-- for icons -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- for swiper slider -->
     <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->
     <link href="{{ asset('/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- for fancy box -->
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"> -->
</head> 

<body class="body-fixed">
    <!-- <div id="viewport"> -->
        <!-- <div id="js-scroll-content"> -->

       <!-- header -->
    
    <header class="site header" >
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo" style="margin-top: 15px">
                        <a href="index.html">
                        <img src="{{URL::asset('logo.png')}}" width="100" height="36" alt="logo">
                            <!-- <img src="logo.png" width="100" height="36" alt="logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">


                <div class="main-navigation " style="margin-top: 15px">
                    <button class="menu-toggle"><span></span></button>
                    
                    <nav class="header menu"  >
                        <ul class="menu food-nav-menu">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="{{url('/menu',$table_id)}}">Menu</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                 

                           

                            <li>
                            {{-- @if (Route::has('login')) 
                                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                                <!-- <div >-->
                                    @auth 
                                        <a href="{{ url('/redirects') }}" type="link" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        <!-- <a href="/dashboard" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
                                         <!-- <a href="/dashboard" >Staff</a> -->
                                    @else 
                                    <a href="{{ url('/login') }}" type="link" class="text-sm text-gray-700 dark:text-gray-500 underline">staff</a>
                                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Staff</a> -->
                                        <!-- <a href="{{ route('login') }}" >Staff</a> -->

                                        <!-- @if (Route::has('register')) 
                                        <a href="{{ url('/dashboard') }}" type="link" class="text-sm text-gray-700 dark:text-gray-500 underline">C</a> -->
                                            <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                                            <!-- <a href="{{ route('register') }}" >Register</a>  -->
                                        @endif 
                                      @endauth
                                 <!-- </div> -->
                             @endif  --}}
                                            <!-- <span class="header-userRole">{{ auth()->user()->usertype}}</span> -->
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    

                                    <!-- <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                                        {{ __('Log Out') }}
                                    </button> -->
                                    {{-- <button class="header-profile-logout" type="submit">
                                        <i class="sidenav-icon ci-logout "></i>
                                    </button> --}}
                                    <input class="logout-button" type="submit" value="logout">
                                </form>

                            
                            </li> 
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
    <!-- end of header -->


            <section id="home" class="main-banner" >
                 {{-- <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        
                        <img src="{{URL::asset('assets/images/berry.png')}}" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="{{URL::asset('assets/images/leaf.png')}}" alt="">
                    </div>
                </div>  --}}
               
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title" style="margin-top: 15px;margin-bottom:35px">
                                        Welcome to <span>FOOH HQ</span>
                                    </h1>
                                    <p>
                                        Food HQ is a system that interconnects the processes of ordering food and managing the inventory. It is a web app that is expected to provide an efficient approach for inventory management. 
                                        Food HQ helps the customers to clearly visualize the food items on the menu,and  gives the ability to rate and comment on their experience at the restaurant.
                                         It automatically adjusts the inventory levels according to the number of sold items.This system focuses on improving both the dine-in experience of the customers as well as the efficiency of the restaurant management process.
                                        
                               
                                    </p>

                                    <br><br>
                                    <div class="banner-btn-mt-4" >
                                        <a href="{{url('/menu',$table_id)}}" class="sec-btn" style = "position:relative; left:100px; top:50px;" >check our menu</a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">

                                {{-- <!-- "{{URL::asset('assets/images/main-b1.jpg')}}" --> --}}
                                
                                    <!-- <div class="banner-img" style="background-image:url(assets/images/main-b.jpg);"> -->
                                    <div class="banner-img" style="background-image:url({{URL::asset('assets/images/main-b.jpg')}})">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <!-- <h5 class="h5-title">sushi</h5> -->
                                    <p style="margin-top:20px;margin-right:5px">The novelty of this system is that it introduces a novel methodology of adjusting the 
                                        inventory records based on the customer orders and the predefined ingredient amounts for a specific order rather 
                                        than following the conventional inventory 
                                        management method where either the stock calculations are done manually, and a lot of guess work is included.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">
                                    Trusted by 70+ companies
                                </h5> --}}
                            {{-- </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                <img src="{{URL::asset('assets/images/brands/b1.png')}}" alt=""> --}}
                                    <!-- <img src="assets/images/brands/b1.png" alt=""> -->
                                {{-- </div>
                                <div class="brands-box">
                                    <img src="{{URL::asset('assets/images/brands/b2.png')}}" alt=""> --}}
                                    <!-- <img src="assets/images/brands/b2.png" alt=""> -->
                                {{-- </div>
                                <div class="brands-box">
                                    <img src="{{URL::asset('assets/images/brands/b3.png')}}" alt=""> --}}
                                    <!-- <img src="assets/images/brands/b3.png" alt=""> -->
                                {{-- </div>
                                <div class="brands-box">
                                    <img src="{{URL::asset('assets/images/brands/b4.png')}}" alt=""> --}}
                                    <!-- <img src="assets/images/brands/b4.png" alt=""> -->
                                {{-- </div>
                                <div class="brands-box">
                                    <img src="{{URL::asset('assets/images/brands/b5.png')}}" alt=""> --}}
                                    <!-- <img src="assets/images/brands/b5.png" alt=""> -->
                                {{-- </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-5">About Us</p>
                                <h2 class="h2-title">
                                    Discover our  restaurant story
                                </h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="{{URL::asset('assets/images/title-shape.svg')}}" alt="">
                                    <!-- <img src="assets/images/title-shape.svg" alt=""> -->
                                </div>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vitae suscipit delectus tempora corrupti dolorum repellendus amet natus inventore,
                                    aliquam doloremque, dolore vero molestiae recusandae nam eos et? Blanditiis,
                                    corrupti atque?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                            <!-- url({{URL::asset('assets/images/about2.jpg')}}) -->
                                <div class="about-video-img" style="background-image: url({{URL::asset('assets/images/about2.jpg')}})">
                                </div>
                                <div class="play-btn-wp">
                                <!-- src="{{URL::asset('assets/images/video.mp4')}}" -->
                                    <a href="{{URL::asset('assets/images/video.mp4')}}" data-fancybox=video class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Watch our intro video</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

         


            <section class="book-table section bg-light" id="gallery">
                @include("foodchef")
                <div class="book-table-shape ">
                
                    <img src="{{URL::asset('assets/images/table-leaves-shape.png')}}" alt="">
                    <!-- <img src="assets/images/table-leaves-shape.png" alt=""> -->
                </div>

                <div class="book-table-shape book-table-shape2">

                <img src="{{URL::asset('assets/images/table-leaves-shape.png')}}" alt="">
                    <!-- <img src="assets/images/table-leaves-shape.png" alt=""> -->
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Contact Us</p>
                                    <h2 class="h2-title">Opening Times</h2>
                                    <div class="sec-title-shape mb-4">
                                    <img src="{{URL::asset('assets/images/title-shape.png')}}" alt="">
                                        <!-- <img src="assets/images/title-shape.svg" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Thrusday</h3>
                                        <p>9:00 am - 9:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">0112996633</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Friday to Sunday</h3>
                                        <p>10:00 am to 10:00 pm</p>
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

    <script src="{{URL::asset('assets/js/jquery-3.5.1.min.js')}}" ></script>
  
    <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->

    <!-- bootstrap -->

    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}" ></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}" ></script>

    <!-- <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script> -->

    <!-- fontawsome -->

    <script src="{{URL::asset('assets/js/font-awsome.min.js')}}" ></script>
    <!-- <script src="assets/js/font-awsome.min.js"></script> -->

    <!-- swipe slider -->

    <script src="{{URL::asset('assets/js/swiper-bundle.min.js')}}" ></script>
    
    <!-- <script src="assets/js/swiper-bundle.min.js"></script> -->

    <!-- mixitup--filter -->

    <script src="{{URL::asset('assets/js/jquery.mixitup.min.js')}}" ></script>

    <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->

    <!-- fancy box -->

    <script src="{{URL::asset('assets/js/jquery.fancybox.min.js')}}" ></script>

    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->

    <!-- parallax -->

    <script src="{{URL::asset('assets/js/parallax.min.js')}}" ></script>

    <!-- <script src="assets/js/parallax.min.js"></script> -->

    <!-- gsap -->

    <script src="{{URL::asset('assets/js/gsap.min.js')}}" ></script>

    <!-- <script src="assets/js/gsap.min.js"></script> -->

    <!-- scroll trigger -->

    <script src="{{URL::asset('assets/js/ScrollTrigger.min.js')}}" ></script>

    <!-- <script src="assets/js/ScrollTrigger.min.js"></script> -->

    <!-- scroll to plug in -->

    <script src="{{URL::asset('assets/js/ScrollToPlugin.min.js')}}" ></script>

    <!-- <script src="assets/js/ScrollToPlugin.min.js"></script> -->

    <!-- rellax -->
    <!-- <script src="assets/js/rellax.min.js"></script>
     <script src="assets/js/rellax.custom.js"></script>  -->

    <!-- smooth scroll -->

    <script src="{{URL::asset('assets/js/smooth-scroll.js')}}" ></script>

    <!-- <script src="assets/js/smooth-scroll.js"></script> -->

    <!-- custom js -->
    <script src="{{URL::asset('main.js')}}" ></script>

    <!-- <script src="main.js"></script> -->





</body>

</html>


    