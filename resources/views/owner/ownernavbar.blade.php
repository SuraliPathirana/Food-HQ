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
        <a class="optionLink @if($selectedMain == 'Dashboard') {{' selected'}} @endif " href=" {{url('/redirects')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-sysLog"></i>
          </div>
          <div class="optionTitle">Dashboard</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'Users') {{' selected'}} @endif " href="{{url('/ownerusers')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-people"></i>
          </div>
          <div class="optionTitle">Users</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'FoodMenu') {{' selected'}} @endif " href="{{url('/ownerfoodmenu')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-menuBoard "></i>
          </div>
          <div class="optionTitle">Food Menu</div>
        </a>
      </li>
      <!--End Sidebar Item-->

      <!--Sidebar Item-->
      <li class="mainOption menuOption">
        <a class="optionLink @if($selectedMain == 'Feedback') {{' selected'}} @endif " href="{{url('/viewcomments')}}">
          <div class="optionIcon">
            <i class="sidenav-icon ci-analytics "></i>
          </div>
          <div class="optionTitle">Feedback</div>
        </a>
      </li>
      <!--End Sidebar Item-->

    </ul>
    <!--End Sidebar Menu-->
  </nav>
  <!--End Sidebar Navigation-->

</div>
<!--End Sidebar-->
