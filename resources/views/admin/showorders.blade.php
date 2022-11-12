<!DOCTYPE html>
<html lang="en">

<head>

 

    {{-- @include('admin.admincss') --}}
 
    {{-- <link href="{{('resources/views/admin/admincss.blade.php') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layoutTemplate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sideNav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tableTemplate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">
    



    {{-- <link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/layoutTemplate.css" />
<link rel="stylesheet" href="css/sideNav.css" />
<link rel="stylesheet" href="css/icons.css" />
<link rel="stylesheet" href="css/formStyle.css" />
<link rel="stylesheet" href="css/tableTemplate.css" /> --}}


</head>

<body class="layout-template-1">
    @php $selectedMain = "Dashboard" @endphp
    @php $title = "Order Details" @endphp
    @include("admin.navbar")
    @include("headerbar")

    <div class="content">


        {{-- <h2>Show Order details</h2> --}}

        <h3 style="margin-left:30px">Order Number: {{$order_id}}</h3>

        <table class="tableGG" >
            <thead>
                <tr>
                    {{-- <th class="column-center-align">Order_id</th> --}}
                    
                    
                    <th class="column-center-align">Item code</th>
                    <th class="column-center-align">Item name</th>
                    <th class="column-center-align">Quantity</th>
                    <th class="column-center-align">Order placed at</th>
                    {{-- <th class="column-center-align">served</th> --}}
                    <!-- <th class="column-center-align">confirm</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)

                <tr>
                    {{-- <td class="column-left-align">{{$data->Order_id}}</td> --}}
                    <td>{{$data->food_id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->created_at}}</td>
                    {{-- <td>{{$data->table_id}}</td>
                    <td>{{$data->confirmed}}</td>
                    <td>{{$data->served}}</td> --}}
                </tr>

                @endforeach
            </tbody>

        </table>

        <div class="container">


            <h3 style="margin-left:30px; margin-top:100px">Preperation notes:</h3>
        
            <div class="table-card card shadow d-flex align-items-center justify-content-center" style="width:32rem;height:7rem;border-radius: 5px 5px 5px 5px;background-color:white;margin-left:auto;margin-right:auto;margin-top:0px">
            <div class="card-body" >
                <br>
              <div style="padding:20px,20px;">&nbsp;{{" Less salt and medium spice level"}}</div>
            
            {{-- {{$data2->remarks}} --}}
        </div>




        </div>

        
        


{{--         
    @php 
    $status=1;

    @endphp --}}


    @if($data3->status==0)

    {{-- <h3 style="margin-left:30px; margin-top:100px">Order status: Order placed</h3> --}}
    <h3 style="margin-left:30px; margin-top:100px">Order status: <span style="color: red">Order Placed</span></h3>
    <a class="btn btn-filled btn-theme-purple" href="{{url('/markAsConfirmed',$order_id)}} "  type="button" style="width:200px;margin-left:auto;margin-right:auto;margin-top:20px;">Mark as Confirmed</a> 
        
    @elseif($data3->status==1)

    <h3 style="margin-left:30px; margin-top:100px">Order status: <span style="color: red">Order confirmed</span></h3>

    {{-- <button  href="{{url('/home2',$order_id)}} " style="text-align: center;margin-top:40px;margin-left:170px">Mark as Served</button> --}}
    
    <a class="btn btn-filled btn-theme-purple" href="{{url('/markAsServed',$order_id)}} "  type="button" style="width:200px;margin-left:auto;margin-right:auto;margin-top:20px;">Mark as Served</a> 

    @endif
    </div>
</body>

</html>