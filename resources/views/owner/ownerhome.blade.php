<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
 
 
  @include("admin.admincss")
 
 
  <link rel="stylesheet" href="css/InventoryDash.css" />
  
</head>

<body class="layout-template-1">
  @php $selectedMain = "Dashboard" @endphp
  @php $title = "Dashboard" @endphp
  @include("owner.ownernavbar")
  @include("headerbar")

  <div class="content">

    
    <div class="table-layout">
 
      <div class="row"> 
        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center"   style="width:15rem;height:7rem;border-radius: 5px 5px 5px 5px;margin-left:70px">
            <div class="card-body">
              <h6 class="card-title" style="padding-bottom:10px !important;">Total Users</h6>
              <div style="text-align:center;color:black">12</div>
             
            </div>
          </div>
        </div>


        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:7rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              <h6 class="card-title" style="padding-bottom:10px !important;">Inventory Items</h6>
              <div style="text-align:center;color:black">52</div>
             
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:7rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              <h6 class="card-title" style="padding-bottom:10px !important;">No of Dishes</h6>
              <div style="text-align:center;color:black">20</div>
             
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:15rem;height:7rem;border-radius: 5px 5px 5px 5px">
            <div class="card-body">
              <h6 class="card-title" style="padding-bottom:10px !important;">Last Month Sales</h6>
              <div style="text-align:center;color:black">5,200,000 LKR</div>
             
            </div>
          </div>
        </div>

      </div>

   
 
        
    
    </div>

  
  </div>
{{-- 
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
 --}}



</body>


</html>


<!-- //////////////////////////////////////////////////////////////////////////// -->
