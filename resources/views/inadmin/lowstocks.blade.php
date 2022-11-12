<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")
</head>

<body class="layout-template-1">
    @php $selectedMain = "lowstocks" @endphp
    @php $title = "Low stocks" @endphp
    @include("inadmin.innavbar")
    @include("headerbar")

    <div class="content">
        <table class="tableGG">
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

          

        </table>
    </div>


</body>

</html>
