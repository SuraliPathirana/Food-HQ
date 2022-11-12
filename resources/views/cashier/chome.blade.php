<!DOCTYPE html>
<html lang="en">

<head>

  @include("admin.admincss")

</head>

<body class="layout-template-1">
  @php $selectedMain = "Dashboard" @endphp
  @php $title = "Cashier Home" @endphp
  @include("inadmin.innavbar")
  @include("headerbar")

  <div class="content">
    <h3>Work in Progress...</h3>

    <br><br>

    <a class="btn btn-filled btn-theme-purple" 
  style="width: 170px; position:relative; left:50px; padding: 10px 15px" href=" {{'/home2/0'}}" 
  data-inline="true" type="button">Take away Orders</a>
  
  </div>


  


  @include("admin.adminscript")


  
</body>

</html>
