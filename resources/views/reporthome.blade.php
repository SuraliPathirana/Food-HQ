<!DOCTYPE html>
<html lang="en">

<head>

  @include("admin.admincss")

</head>

<body class="layout-template-1">
  @php $selectedMain = "Reports" @endphp
  @php $title = "Reports" @endphp
  @include("admin.navbar")
  @include("headerbar")

  <div class="content">

    <a class="btn btn-filled btn-theme-purple" style="width: 170px; position:relative; left:50px; padding: 10px 15px" href=" {{'/dynamic_pdf'}}" data-inline="true" type="button">Sales reports</a>

    <br>
    <a class="btn btn-filled btn-theme-purple" style="width: 170px; position:relative; left:50px; padding: 10px 15px" href="" data-inline="true" type="button">Inventory reports</a>
  </div>


</body>

</html>
