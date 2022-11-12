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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- for icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- for swiper slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- for fancy box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/tableTemplate.css" />

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
                            <li><a href="{{url('/home2',$table_id)}}">Home</a></li>
                            {{-- <li><a href="{{url('/home2',$table_id,'#about')}}">About</a></li> --}}
                            <li><a href="{{url('/home2/'.$table_id.'/#about')}}">About</a></li>
                            <li><a href="{{url('/home2/'.$table_id.'/#gallery')}}">Gallery</a></li>

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        </div>
    </header>

    <body>
        <table class="tableGG" style="margin-top:30px;margin-bottom:20px">
            <thead>
                <tr>
                    <th style="width:30px">Item name</th>
                    <th width="20px">Quantity</th>
                    <th width="20px">Unit Price</th>
                    <th width="20px">Value</th>
                    <th width="20px">Deduct</th>

                </tr>
            </thead>
            <tbody>

                @php ($indexes = [])

                    @foreach ($data2 as $d2)
                        @php ($indexes[] = $d2->id)
                    @endforeach

{{-- {{ implode(', ', $names) }} --}}

                @for ($i=0; $i < count($data); $i++)

                <tr>
                    <td> {{ $data[$i]['title'] }} </td>
                    <td> {{ $data[$i]['quantity'] }} </td>
                    <td> {{ $data[$i]['price'] }} </td>
                    <td> {{ $data[$i]['price']*$data[$i]['quantity'] }} </td>
                    {{-- <td> {{ $indexes[$i] }} </td> --}}
                    <td><a href="{{url('/remove',$indexes[$i])}}" class="uil uil-minus" type="button" style="position: "></a></td>

                </tr>
                @endfor

                {{-- @foreach($data as $data)
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->quantity}}</td>
                    <td> {{$data->price}}</td>
                    <td> {{($data->price)*($data->quantity)}}</td> --}}
                     {{-- <td><a href="{{url('/remove',$data->id)}}" class="uil uil-minus" type="button"></a></td>  --}}
                    {{-- <td><a href="{{url('/remove',$data->id)}}" class="uil uil-minus" type="button"></a></td> --}}
                    {{-- <td><a href="{{url('/remove',$data->id)}}" class="uil uil-minus" type="button"></a></td> --}}
                    {{-- <td> {{$data->carts.id}}</td> --}}



                {{-- </tr> --}}

                {{-- @endforeach --}}

                {{-- @foreach($data2 as $data2)

                <tr>
                    <td> {{$data2->id}}</td>
                    <td><a href="{{url('/remove',$data2->id)}}" class="uil uil-minus" type="button" style="position: "></a></td>

                </tr>

                @endforeach --}}
            </tbody>
        </table>

        <!-- </div> -->

        <br><br>

        <form class="form" action="{{url('/orderconfirm',$table_id)}}" method="get" enctype="multipart/form-data">
            @csrf


            <div >
                <p style="text-align:center">Any preparation notes?(Please mention any concerns such as the sugar levels,spice levels,allergies to any ingredients etc.)<p>
                <textarea id="prepcomment" name="prepcomment" rows="4" cols="50">
                </textarea>
            </div>

            <div>
                
                {{-- <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Place Order"> --}}
                <input class="btn btn-filled btn-theme-purple formBtn" style="text-align: center;margin:100px auto"   type="submit" value="Place Order">
            </div>
    
        </form>

        {{-- <div class="banner-btn-mt-4 text-center" style="padding:30px">
    
    
            <a href="{{url('/orderconfirm',$table_id)}}" class="sec-btn" type="button">Place Order</a>
        </div> --}}

        

    </body>

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
