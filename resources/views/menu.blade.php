<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <base href="/public"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food web site</title>
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- for icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- for swiper slider -->
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->

    <link href="{{ asset('/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- for fancy box -->
    <!-- <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"> -->
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header class="site header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{URL::asset('logo.png')}}" width="100" height="36" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-navigation">
                    <button class="menu-toggle"><span></span><span></span></button>
                    <nav class="header menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="{{url('/home2',$table_id)}}">Home</a></li>
                            {{-- <li><a href="{{url('/home2',$table_id,'#about')}}">About</a></li> --}}
                            <li><a href="{{url('/home2/'.$table_id.'/#about')}}">About</a></li>
                            <li><a href="{{url('/home2/'.$table_id.'/#gallery')}}">Gallery</a></li>

                            <!-- @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Staff</a> -->

                            <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif -->
                            <!-- @endauth
                                </div>
                             @endif
                            </li> -->
                        </ul>
                    </nav>
                    <div class="header-right">

                        <a href="{{url('/showcart',$table_id)}}">
                            <a href="javascript:void(0)" class="header-btn header-cart">
                                <!-- <a href="{{url('/showcart',$table_id)}}" class="header-btn header-cart"> -->
                                
                                
                                <i class="uil uil-shopping-cart-alt" href="{{url('/showcart',$table_id)}}"></i>
                                
                                <span class="cart-number">{{$count}}</span>
                                <link rel="stylesheet" href="{{url('/showcart',$table_id)}}">

                                {{-- <i class="fa fa-facebook"></i></a> --}}


                                <!-- <a href="{{url('/showcart',$table_id)}}">
                                
                                </a> -->
                            </a>
                        </a>
                        {{-- <a href="javascript:void(0)" class="header-btn">
                            <i class="uil uil-user"></i>
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- end of header -->
    <div>
        <div>
            <section class="main-banner" id="home">
                <!-- <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div> -->



                @include("food");




                <div class="banner-btn-mt-4 text-center">

                    <a href="{{url('/showcart',$table_id)}}" class="sec-btn">Place Order</a>

                </div>
            </section>
        </div>
    </div>
    <!-- jquery -->
    <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
    <!-- boottrap -->
    <!-- <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script> -->

    <!-- fontawsome -->
    <!-- <script src="assets/js/font-awsome.min.js"></script> -->

    <!-- swipe slider -->
    <!-- <script src="assets/js/swiper-bundle.min.js"></script> -->

    <!-- mixitup--filter -->
    <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->

    <!-- fancy box -->
    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->

    <!-- parallax -->
    <!-- <script src="assets/js/parallax.min.js"></script> -->

    <!-- gsap -->
    <!-- <script src="assets/js/gsap.min.js"></script> -->

    <!-- scroll trigger -->
    <!-- <script src="assets/js/ScrollTrigger.min.js"></script> -->

    <!-- scroll to plug in -->
    <!-- <script src="assets/js/ScrollToPlugin.min.js"></script> -->

    <!-- rellax -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax.custom.js"></script> -->

    <!-- smooth scroll -->
    <!-- <script src="assets/js/smooth-scroll.js"></script> -->

    <!-- custom js -->
    <!-- <script src="main.js"></script> -->


    <!-- jquery -->

    <script src="{{URL::asset('assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->

    <!-- bootstrap -->

    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>

    <!-- <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script> -->

    <!-- fontawsome -->

    <script src="{{URL::asset('assets/js/font-awsome.min.js')}}"></script>
    <!-- <script src="assets/js/font-awsome.min.js"></script> -->

    <!-- swipe slider -->

    <script src="{{URL::asset('assets/js/swiper-bundle.min.js')}}"></script>

    <!-- <script src="assets/js/swiper-bundle.min.js"></script> -->

    <!-- mixitup--filter -->

    <script src="{{URL::asset('assets/js/jquery.mixitup.min.js')}}"></script>

    <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->

    <!-- fancy box -->

    <script src="{{URL::asset('assets/js/jquery.fancybox.min.js')}}"></script>

    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->

    <!-- parallax -->

    <script src="{{URL::asset('assets/js/parallax.min.js')}}"></script>

    <!-- <script src="assets/js/parallax.min.js"></script> -->

    <!-- gsap -->

    <script src="{{URL::asset('assets/js/gsap.min.js')}}"></script>

    <!-- <script src="assets/js/gsap.min.js"></script> -->

    <!-- scroll trigger -->

    <script src="{{URL::asset('assets/js/ScrollTrigger.min.js')}}"></script>

    <!-- <script src="assets/js/ScrollTrigger.min.js"></script> -->

    <!-- scroll to plug in -->

    <script src="{{URL::asset('assets/js/ScrollToPlugin.min.js')}}"></script>

    <!-- <script src="assets/js/ScrollToPlugin.min.js"></script> -->

    <!-- rellax -->
    <!-- <script src="assets/js/rellax.min.js"></script>
   <script src="assets/js/rellax.custom.js"></script>  -->

    <!-- smooth scroll -->

    <script src="{{URL::asset('assets/js/smooth-scroll.js')}}"></script>

    <!-- <script src="assets/js/smooth-scroll.js"></script> -->

    <!-- custom js -->
    <script src="{{URL::asset('main.js')}}"></script>

    <!-- <script src="main.js"></script> -->
</body>

</html>
