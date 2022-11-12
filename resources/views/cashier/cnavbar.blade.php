<!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">

  <ul class="nav">


    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/inUser')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/infoodmenu')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Food Menu</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/inventory')}}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Inventory</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Reports</span>
      </a>
    </li>

  </ul>
</nav> -->


<!--Sidebar-->
<div class="sidebar">
  <!--Sidebar Header-->
  <div class="header">
    <a href="">
      <div>
        <img src="logoGG.png" alt="FoodHQ" class="full-logo">
        <!-- <img src="" alt="BootyCraft" class="icon-logo"> -->
      </div>
    </a>
  </div>
  <!--End Sidebar Header-->

  <!--Sidebar Navigation-->
  <nav class="nav">
    <!--Sidebar Menu-->
    <ul class="mainMenu">

      <!--Sidebar Item-->
      <li class="mainOption">
        <a class="optionLink @if($selectedMain == 'Dashboard') {{' selected'}} @endif " href="{{url('/inUser')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-sysLog"></i>
          </div>
          <div class="optionTitle">Dashboard</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'FoodMenu') {{' selected'}} @endif " href="{{url('/infoodmenu')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-menuBoard "></i>
          </div>
          <div class="optionTitle">Food Menu</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'Inventory') {{' selected'}} @endif " href="{{url('/inventory')}}">
          <div class="optionIcon ci-elements">
            <i class="sidenav-icon "></i>
          </div>
          <div class="optionTitle">Inventory</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'lowstocks') {{' selected'}} @endif " href="{{url('/lowstocks')}}">
          <div class="optionIcon ci-elements">
            <i class="sidenav-icon "></i>
          </div>
          <div class="optionTitle">Low Stocks</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'Reports') {{' selected'}} @endif " href="pages/charts/chartjs.html">
          <div class="optionIcon">
            <i class="sidenav-icon ci-analytics "></i>
          </div>
          <div class="optionTitle">Reports</div>
        </a>
      </li>
      <!--End Sidebar Item-->

    </ul>
    <!--End Sidebar Menu-->
  </nav>
  <!--End Sidebar Navigation-->

</div>
<!--End Sidebar-->
