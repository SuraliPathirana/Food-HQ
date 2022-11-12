<!DOCTYPE html>
<html lang="en">

<head>
    

    <base href="/public">

    @include("admin.admincss")

</head>

<body class="layout-template-1">

  @php $selectedMain = "Inventory" @endphp
  @php $title = "Update Inventory Item" @endphp
  @include("admin.navbar")
  @include("headerbar")

  <div class="content">

        
{{-- <table class="tableGG">
    <thead>
        <tr>
            <th class="column-center-align">Item_code</th>
            <th class="column-center-align">Item_name</th>
            <th class="column-center-align">Unit</th>
            <th class="column-center-align">Available Quantity</th>
            <th class="column-center-align">Last restocked on</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{$data->item_code}}</td>
            <td>{{$data->item_name}}</td>
            <td>{{$data->unit}}</td>
            <td>{{$data->available_quantity}}</td>
            <td>{{$data->created_at}}</td>

        </tr>
        @endforeach
    </tbody>

</table> --}}
</div>
    <div class="content">
       
    

            <!-- <form class="form" action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data"> -->

                <!-- @csrf -->

                <div class="text-group row" style="margin-left: 30px">
                    <label class="label" >Restocked amount</label>
                    <input  type="text" name="title" plcaholder="Enter the new stock" value="{{$data->title}}" required>
                </div>

                

                <div >
                    <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Save" style="margin-left: 30px;margin-top:10px">
                </div>


        

            <div>



            </div>
            @include("admin.adminscript")
</body>

</html>
