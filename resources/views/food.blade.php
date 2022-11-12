

{{-- style="background-image: url({{URL::asset('assets/images/about2.jpg')}} --}}
<!-- <section style="background-image: url(assets/images/menu-bg.png);" -->
<section class="our-menu section bg-light repeat-img" style="background-image:url({{URL::asset('assets/images/menu_bg.png')}});">
    
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our Menu</p>
                                    <h2 class="h2-title">
                                        We serve tasty,<span>fresh and healthy food</span>
                                    </h2>
                                    <div class="sec-title-shape mb-4">
                                    <img src="{{URL::asset('assets/images/title-shape.svg')}}" alt="">
                                        <!-- <img src="assets/images/title-shape.svg" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wrap">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"> </div>
                                            <li class="filter" data-filter=".all,.appetizers,.mains,.desserts,.beverages">
                                                <img src="{{URL::asset('assets/images/menu-1.png')}}" alt="">
                                                <!-- <img src="assets/images/menu-1.png" alt=""> -->
                                                All
                                            </li>
                                            <li class="filter" data-filter=".appetizers">
                                                <img src="{{URL::asset('assets/images/menu-2.png')}}" alt="">
                                                <!-- <img src="assets/images/menu-2.png" alt=""> -->
                                                Appetizers
                                            </li>
                                            <li class="filter" data-filter=".mains">
                                            <img src="{{URL::asset('assets/images/menu-3.png')}}" alt="">
                                                <!-- <img src="assets/images/menu-3.png" alt=""> -->
                                                Mains
                                            </li>
                                            <li class="filter" data-filter=".desserts">
                                            <img src="{{URL::asset('assets/images/menu-4.png')}}" alt="">
                                                <!-- <img src="assets/images/menu-4.png" alt=""> -->
                                                Desserts
                                            </li>
                                            <li class="filter" data-filter=".beverages">
                                            <img src="{{URL::asset('assets/images/menu-5.jpg')}}" alt="">
                                                <!-- <img src="assets/images/menu-5.jpg" alt=""> -->
                                                Beverages
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <div class="row g-xl-5 bydefault_show" id="menu-dish">
                                @foreach($data as $data)

                                <!-- href="{{url('/showcart',$table_id)}}" -->
                                    <!-- <span>{{$data->id}}</span> -->
                                    <form action="{{url('/addcart',[$table_id,$data->id])}}" method="post">

                                    @csrf
                                    
                                        @if($data->dish_type=='appetizer')
                                            <div class="col-lg-12 col-sm-6 dish-box-wp appetizers" data-cat="appetizers"> 

                                               
            
                                                    
{{-- 
                                                  <div class="card" style="padding: 10px,10px,10px,10px;margin-top:20px;">
                                                    
                                                    <img src="{{ asset('foodimage/' . $data->image) }}" alt="Avatar" style="width:100%">
                                                    <div class="container" style="padding: 10px,10px,10px,10px;margin-top:20px;">
                                                        <div class="dish-title">
                                                            <h3 class="h3-title">{{$data->title}}</h3>
                                                        </div> 
                                                        <div class="dish-info">
                                                            <ul>
                                                                <li><p>Non-veg</p> </li>
                                                                <li><p>2 persons</p></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dist-bottom-row">
                                                            <ul>
                                                                <li><b class="price">Rs. {{$data->price}}</b></li>
                                                                <li><input type="number" name="quantity" min="1" value="1" style="width:40px;"></li>
                                                                <li>
                                                                    <button class="dish-add-btn" type="submit" value="add cart">
                                                                        <i class="uil uil-plus"></i>
                                                                    </button>     
                                                                </li>
                                                            </ul>
        
                                                            <!-- <input type="number" name="quantity" min="1" value="1" style="width:80px;"> -->
                                                            <!-- <input type="submit" value="add cart"> -->
        
                                                        </div>
                                                       
                                                    </div>
                                                  </div> --}}











                                                <div class="dish-box text-center">
                                                    <div class="dist-img">
                                                    <img src="{{ asset('foodimage/' . $data->image) }}">
                                                     
                                                        <!-- <img src="foodimage/{{$data->image}}" alt=""> -->
                                                    </div>
                                                    <div class="dish-title">
                                                        <h3 class="h3-title">{{$data->title}}</h3>
                                                    </div>
                                                    <!-- <div class="dish-id">
                                                        <h3 class="h3-title">{{$data->id}}</h3>
                                                    </div> -->
                                                    <div class="dish-info">
                                                        <ul>
                                                            <li><p>Non-veg</p> </li>
                                                            <li><p>2 persons</p></li>
                                                        </ul>
                                                    </div>
                                                    <div class="dist-bottom-row">
                                                        <ul>
                                                            <li><b class="price">Rs. {{$data->price}}</b></li>
                                                            <li><input type="number" name="quantity" min="1" value="1" style="width:40px;"></li>
                                                            <li>
                                                                <button class="dish-add-btn" type="submit" value="add cart">
                                                                    <i class="uil uil-plus"></i>
                                                                </button>     
                                                            </li>
                                                        </ul> 
    
                                                        <!-- <input type="number" name="quantity" min="1" value="1" style="width:80px;"> -->
                                                        <!-- <input type="submit" value="add cart"> -->
    
                                                    </div>
                                                </div>

                                        

                                            </div>

                                        

                                        @elseif($data->dish_type=='main')
                                            <div class="col-lg-12 col-sm-6 dish-box-wp mains" data-cat="mains"> 
                                                <div class="dish-box text-center">
                                                    <div class="dist-img">
                                                        <img src="{{ asset('foodimage/' . $data->image) }}">
                                                        <!-- <img src="foodimage/{{$data->image}}" alt=""> -->
                                                    </div>
                                                    <div class="dish-title">
                                                        <h3 class="h3-title">{{$data->title}}</h3>
                                                    </div>
                                                    <div class="dish-info">
                                                        <ul>
                                                            <li>
                                                                <p>Non-veg</p>
                                                            </li>
                                                            <li>
                                                                <p>2 persons</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="dist-bottom-row">
                                                        <ul>
                                                            <li>
                                                                <b class="price">Rs. {{$data->price}}</b>
                                                            </li>
                                                            <li>
                                                                <input type="number" name="quantity" min="1" value="1" style="width:40px;">
                                                            </li>
                                                            <li>
                                                                <button class="dish-add-btn" type="submit" value="add cart">
                                                                    <i class="uil uil-plus"></i>
                                                                </button>   
                                                            </li>
                                                        </ul>
   
                                                    </div>
                                                </div>
                                            </div>

                                        @elseif($data->dish_type=='dessert')
                                            <div class="col-lg-12 col-sm-6 dish-box-wp desserts" data-cat="desserts">

                                                <div class="dish-box text-center">
                                                    <div class="dist-img">
                                                        <img src="{{ asset('foodimage/' . $data->image) }}">
                                                        <!-- <img src="foodimage/{{$data->image}}" alt=""> -->
                                                    </div>

                                                    <div class="dish-title">
                                                        <h3 class="h3-title">{{$data->title}}</h3>
                                                    </div>
                                                    <div class="dish-info">
                                                        <ul>
                                                            <li>  
                                                                <p>Non-veg</p>

                                                            </li>
                                                            <li>
                                                                <p>2 persons</p>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="dist-bottom-row">

                                                        <ul>
                                                            <li>
                                                                <b class="price">Rs. {{$data->price}}</b>
                                                            </li>
                                                            <li>
                                                                <input type="number" name="quantity" min="1" value="1" style="width:40px;">
                                                            </li>
                                                            <li>
                                                                
                                                                <button class="dish-add-btn" type="submit" value="add cart">
                                                                    <i class="uil uil-plus"></i>
                                                                </button>
                                                                
                                                            </li>
                                                        </ul>
     
                                                    </div>
                                                </div>

                                            </div>

                                        
                                        @elseif($data->dish_type=='beverage')
                                            <div class="col-lg-12 col-sm-6 dish-box-wp beverages" data-cat="beverages">
                                                <div class="dish-box text-center">
                                                    <div class="dist-img">
                                                    <img src="{{ asset('foodimage/' . $data->image) }}">
                                                        <!-- <img src="foodimage/{{$data->image}}" alt=""> -->
                                                    </div>
                                                   
                                                    <div class="dish-title">
                                                        <h3 class="h3-title">{{$data->title}}</h3>
                                                    </div>
                                                    <div class="dish-info">
                                                        <ul>
                                                            <li>
                                                                <p>Non-veg</p>

                                                            </li>
                                                            <li>
                                                                <p>2 persons</p>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="dist-bottom-row">
                                                        <ul>
                                                            <li>
                                                                <b class="price">Rs. {{$data->price}}</b>
                                                            </li>
                                                            <li>
                                                                <input type="number" name="quantity" min="1" value="1" style="width:40px;">
                                                            </li>
                                                            <li>
                                                                
                                                                <button class="dish-add-btn" type="submit" value="add cart">
                                                                    <i class="uil uil-plus"></i>
                                                                </button>
                                                                
                                                            </li>
                                                        </ul>   
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                   
                                    </form> 
                                @endforeach

                              

                                

                                

                                

                                

                                
                            </div>
                        </div>
                    </div>
            </div>
</section>