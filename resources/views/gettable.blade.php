<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- <link rel="stylesheet" href="css/InventoryDash.css" /> --}}

    @include("admin.admincss")

</head>
<body style="background-image:url({{URL::asset('assets/images/cafee.jpg')}});background-repeat: no-repeat; background-attachment: fixed;
background-size: cover;">
    {{-- <h2>Please Enter the Table Number:</h2> --}}

    

    <form class="form" action="{{url('/callhome')}}" method="get" enctype="multipart/form-data">

        @csrf


       
            {{-- <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-left:30px;margin-top:30px">
              <div class="card-body">
                <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 5</h5>
                <div class="status-box card served shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                  <h6 class="card-status" ></h6>
                  <p class="order-id"></p>
                </div>
              </div>
            </div>
          </div> --}}
        
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:30rem;height:15rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin: 10rem auto;background-color:rgba(151, 141, 141, 0.804)">
            {{-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> --}}

                <h3 style="text-align: center;margin-top:20px">Please enter the table number to proceed</h3>
                <div class="container  " style="margin-top:20px">
                

                    <div class="text-group row " style="text-align: center;margin:auto">
                        <label class="label" >Table Number</label>
                        <input type="number" min="0" max="12" name="table_id" placeholder="Enter your table number" required>
                    </div>
        
                    <div>
                        <input class="btn btn-filled btn-theme-purple formBtn" style="text-align: center;margin-top:40px;margin-left:170px"   type="submit" value="Proceed">
                    </div>


                
                
                </div>
          
        
        
            </div>

       

    </form>

    
    <form method="POST" action="{{ route('logout') }}" class="inline">
      @csrf
      

      <!-- <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
          {{ __('Log Out') }}
      </button> -->
      {{-- <button class="header-profile-logout" type="submit">
          <i class="sidenav-icon ci-logout "></i>
      </button> --}}
      {{-- <input class="logout-button" type="submit" value="logout"> --}}
      <div>
        <input class="btn btn-filled btn-theme-purple formBtn" style="text-align: center;position:absolute;top:7px;right:7px;"   type="submit" value="Log out">
    </div>
  </form>



</body>


</html>