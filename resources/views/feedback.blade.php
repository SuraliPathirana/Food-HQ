
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
    <link rel="stylesheet" href="css/ratingCss.css">
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- for icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- for swiper slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- for fancy box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    @include("admin.admincss")
    
</head>
<body>
    

 
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
                                    <p class="sec-sub-title mb-3">Feedback</p>
                                    
                                    <h1>Give us a feedback on the dishes you enjoyed!</h1>
                                    <br>
                                   
                                    <form class="form" action="{{url('/uploadcomment',$order_id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="rating-css">
                                        <!-- <div class="star-icon">
                                            <h5>How did the food taste?</h5>
                                            <input type="radio" value="1" name="product_rating" checked id="rating1">Very Bad &nbsp&nbsp  
                                            <label for="rating1" class="fa fa-star"></label> -->
                                            <!-- <input type="radio" value="2" name="product_rating" id="rating2">Bad &nbsp&nbsp     -->
                                            <!-- <label for="rating2" class="fa fa-star"></label> -->
                                            <!-- <input type="radio" value="3" name="product_rating" id="rating3">Satisfactory  &nbsp&nbsp  -->
                                            <!-- <label for="rating3" class="fa fa-star"></label> -->
                                            <!-- <input type="radio" value="4" name="product_rating" id="rating4">Good  &nbsp&nbsp -->
                                            <!-- <label for="rating4" class="fa fa-star"></label> -->
                                            <!-- <input type="radio" value="5" name="product_rating" id="rating5">Very Good  &nbsp&nbsp -->
                                            <!-- <label for="rating5" class="fa fa-star"></label> -->
                                        <!-- </div> -->

                                        <div class="star-icon">
                                            <p style="color: grey">How did the food taste?<p>
                                            <input type="radio" value="Very Bad" name="food_rating" checked id="frating1">
                                            <label for="frating1" class="fa fa-star"></label>
                                            <input type="radio" value="Bad" name="food_rating" id="frating2">
                                            <label for="frating2" class="fa fa-star"></label>
                                            <input type="radio" value="Moderate" name="food_rating" id="frating3">
                                            <label for="frating3" class="fa fa-star"></label>
                                            <input type="radio" value="Good" name="food_rating" id="frating4">
                                            <label for="frating4" class="fa fa-star"></label>
                                            <input type="radio" value="Very Good" name="food_rating" id="frating5">
                                            <label for="frating5" class="fa fa-star"></label>


                                        </div>

                                        <div class="star-icon">
                                            <p style="color: grey">Are you happy about the portion sizes of the dishes and the value for money?<p>
                                            <input type="radio" value="Very Bad" name="size_rating" checked id="srating1">
                                            <label for="srating1" class="fa fa-star"></label>
                                            <input type="radio" value="Bad" name="size_rating" id="srating2">
                                            <label for="srating2" class="fa fa-star"></label>
                                            <input type="radio" value="Moderate" name="size_rating" id="srating3">
                                            <label for="srating3" class="fa fa-star"></label>
                                            <input type="radio" value="Good" name="size_rating" id="srating4">
                                            <label for="srating4" class="fa fa-star"></label>
                                            <input type="radio" value="Very Good" name="size_rating" id="srating5">
                                            <label for="srating5" class="fa fa-star"></label>
                                        </div>

                                        <div class="star-icon">
                                            <p style="color: grey">How was the service and the friendliness of the staff?<p>
                                            <input type="radio" value="Very Bad" name="staff_rating" checked id="strating1">
                                            <label for="strating1" class="fa fa-star"></label>
                                            <input type="radio" value="Bad" name="staff_rating" id="strating2">
                                            <label for="strating2" class="fa fa-star"></label>
                                            <input type="radio" value="Moderate" name="staff_rating" id="strating3">
                                            <label for="strating3" class="fa fa-star"></label>
                                            <input type="radio" value="Good" name="staff_rating" id="strating4">
                                            <label for="strating4" class="fa fa-star"></label>
                                            <input type="radio" value="Very Good" name="staff_rating" id="strating5">
                                            <label for="strating5" class="fa fa-star"></label>
                                        </div>

                                        <div class="star-icon">
                                            <p style="color: grey">How was the ambience and the interior of the restaurant?<p>
                                            <input type="radio" value="Very Bad" name="interior_rating" checked id="rrating1">
                                            <label for="rrating1" class="fa fa-star"></label>
                                            <input type="radio" value="Bad" name="interior_rating" id="rrating2">
                                            <label for="rrating2" class="fa fa-star"></label>
                                            <input type="radio" value="Moderate" name="interior_rating" id="rrating3">
                                            <label for="rrating3" class="fa fa-star"></label>
                                            <input type="radio" value="Good" name="interior_rating" id="rrating4">
                                            <label for="rrating4" class="fa fa-star"></label>
                                            <input type="radio" value="Very Good" name="interior_rating" id="rrating5">
                                            <label for="rrating5" class="fa fa-star"></label>
                                        </div>

                                        <div class="textcomment">
                                            <p style="color: grey">Any other comments you would like to add?<p> 
                                            <textarea id="tcomment" name="tcomment" rows="4" cols="50">
                                                {{-- {{-- <input type="text" name="other"  > --}}

                                            </textarea>
                                            
                                            
                                        </div>


                                        

                                    

                                    
                                    </div>
                                    

                                    <div>
                                        <h3>Please provide us with your details so that we can let you know about the offers,
                                            discounts and many more!</h3>
                                        <br><br>

                                        


                                        <div class="text-group row">
                                            <label class="label">Customer Name </label>
                                            <input type="text" name="c_name" placeholder="" >
                                           
                                        </div>
                        
                                        
                        
                                        <div class="text-group row">
                                            <label class="label">Customer Contact Number</label>
                                            <input type="number" name="c_contact_number" >
                                        </div>

                                        <div class="text-group row">
                                            <label class="label">Customer Email</label>
                                            <input type="text" name="c_email"  >
                                        </div>

                                        {{-- <div>Name
                                        <input type="text" name="customer_name" >
                                        </div>

                                        <br>
                                        
                                        <div>Contact Number
                                        <input type="text" name="customer_contact_n" >
                                        </div>

                                        <br>

                                        <div>Email address
                                        <input type="text" name="customer_email" >
                                        </div> --}}

                                        <br>

                                    </div>

                                    <div>
                                        <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Save">
                                    </div>

                                </form>

                                    {{-- <input type="submit" value="Submit"> --}}
                                </div>
                            </div>
                        </div>

                        

                      


                    </div>
                </div>
</section> 

</body>
</html> 


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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/assets/css/ratingCss.min.css') }}" rel="stylesheet">
    <title>Document</title>
 </head>
 <body>
    <h1>Give us a feedback on the dishes you enjoyed!</h1>
    <div class="rating-css">
        <div class="star-icon">
            <h2>How did the food taste?</h2>
            <input type="radio" value="1" name="product_rating" checked id="rating1">
            <label for="rating1" class="fa fa-star"></label>
            <input type="radio" value="2" name="product_rating" id="rating2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" value="3" name="product_rating" id="rating3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" value="4" name="product_rating" id="rating4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" value="5" name="product_rating" id="rating5">
            <label for="rating5" class="fa fa-star"></label>
        </div>

        <div class="star-icon">
            <h2>Are you happy about the portion sizes of the dishes and the value for money?</h2>
            <input type="radio" value="1" name="product_rating" checked id="rating1">
            <label for="rating1" class="fa fa-star"></label>
            <input type="radio" value="2" name="product_rating" id="rating2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" value="3" name="product_rating" id="rating3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" value="4" name="product_rating" id="rating4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" value="5" name="product_rating" id="rating5">
            <label for="rating5" class="fa fa-star"></label>
        </div>

        <div class="star-icon">
            <h2>How was the service and the friendliness of the staff?</h2>
            <input type="radio" value="1" name="product_rating" checked id="rating1">
            <label for="rating1" class="fa fa-star"></label>
            <input type="radio" value="2" name="product_rating" id="rating2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" value="3" name="product_rating" id="rating3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" value="4" name="product_rating" id="rating4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" value="5" name="product_rating" id="rating5">
            <label for="rating5" class="fa fa-star"></label>
        </div>

        <div class="star-icon">
            <h2>How was the ambience and the interior of the restaurant?</h2>
            <input type="radio" value="1" name="product_rating" checked id="rating1">
            <label for="rating1" class="fa fa-star"></label>
            <input type="radio" value="2" name="product_rating" id="rating2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" value="3" name="product_rating" id="rating3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" value="4" name="product_rating" id="rating4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" value="5" name="product_rating" id="rating5">
            <label for="rating5" class="fa fa-star"></label>
        </div>

        <div class="textcomment">
            <h2>Any other comments you would like to add?</h2>
            <textarea id="w3review" name="w3review" rows="4" cols="50">
            </textarea>
            
            
        </div>

      

    
    </div>

    <div>
        <h1>Please provide us with your details so that we can let you know about the offers,discounts and many more!</h1>

        <div>Name
        <input type="text" name="customer_name" >
        </div>

        <br>
        
        <div>Contact Number
        <input type="text" name="customer_contact_n" >
        </div>

        <br>

        <div>Email address
        <input type="text" name="customer_email" >
        </div>

        <br>

    </div>

    <input type="submit" value="Submit">
 </body>
 </html>

 
 -->





