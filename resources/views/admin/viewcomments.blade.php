<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")
</head>

<body class="layout-template-1">
    @php $selectedMain = "Feedback" @endphp
    @php $title = "Feedback" @endphp
    @include("owner.ownernavbar")
    @include("headerbar")
    
    <div class="content">

        
        
        <table class="tableGG">
            <thead>
                <tr>
                    <th class="column-center-align">Order</th>
                    <th class="column-center-align">Food</th>
                    <th class="column-center-align">Portion size</th>
                    <th class="column-center-align">Service</th>
                    <th class="column-center-align">Ambience </th>
                    <th class="column-center-align">Other Comments</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->order_id}}</td>
                    <td>{{$data->food}}</td>
                    <td>{{$data->portion}}</td>
                    <td>{{$data->service}}</td>
                    <td>{{$data->interior}}</td>
                    <td>{{$data->other}}</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


</body>

</html>
