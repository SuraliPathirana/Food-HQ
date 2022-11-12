<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
 
 
  @include("admin.admincss")
 
 
  <link rel="stylesheet" href="css/cards.css" />
  
</head>

<body class="layout-template-1">
  @php $selectedMain = "Dashboard" @endphp
  @php $title = "Dashboard" @endphp
  @include("admin.navbar")
  @include("headerbar")

  <div class="content">

    
    <div class="table-layout">
 
      <div class="row"> 
        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center"   style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;margin-left:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 1</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                </a>
                  <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 2</h5>
              <div class="status-box card confirm shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                  <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 3</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                  <p class="order-id"></p>
              </div>  
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 4</h5>
              <div class="status-box card confirm shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                  <p class="order-id"></p>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="row mt-3">

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-left:30px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 5</h5>
              <div class="status-box card served shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 6</h5>
              <div class="status-box card confirm shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 7</h5>
              <div class="status-box card served shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 8</h5>
              <div class="status-box card confirm shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="row mt-3">


        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-left:30px;margin-top:30px">
            
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 9</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 10</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 11</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 12</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div>



        {{-- <div class="col-3 ">
          <div class="card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 10</h5>
              <div class="status-box card placed shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div> --}}


        {{-- <div class="col-3 ">
          <div class="card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 11</h5>
              <div class="status-box card confirm shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" ></h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div> --}}

        {{-- <div class="col-3 ">
          <div class="card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:12rem;border-radius: 5px 5px 5px 5px;padding:10px 10px 10px 10px;margin-top:30px">
            <div class="card-body">
              <h5 class="card-title" style="padding-left:10px;padding-bottom:10px !important;">Table 12</h5>
              <div class="status-box card served shadow  d-flex align-items-center justify-content-center" id="statusCard" style="width:10rem;height:5rem; !important;">
                <h6 class="card-status" >Order Served</h6>
                <p class="order-id"></p>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    
    </div>

    



  </div>

  <!-- <form method="POST" action="{{ route('logout') }}" class="inline">
    @csrf

    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
      {{ __('Log Out') }}
    </button>
  </form> -->

  <!-- <a href="{{ route('logout') }}">log out</a> -->
  <!-- <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
  </form> -->




</body>
<script src="{{URL::asset('assets/js/FetchRequests/tablesOverview.js')}}"></script>

</html>


<!-- //////////////////////////////////////////////////////////////////////////// -->
