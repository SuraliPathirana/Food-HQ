<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "Orders" @endphp
    @php $title = "Orders" @endphp
    @include("admin.navbar")
    @include("headerbar")

    <div class="content">

        <a class="btn btn-filled btn-theme-purple" style="width: 170px; position:relative; left:50px; padding: 10px 15px" href=" {{'/dynamic_pdf'}}" data-inline="true" type="button">Sales reports</a>

        <table class="tableGG">
            <thead>
                <tr>
                    <th class="column-center-align">Order_id</th>
                    <th class="column-center-align">no_of_items</th>
                    <th class="column-center-align">total</th>
                    <th class="column-center-align">Order placed at</th>
                    {{-- <th class="column-center-align">table Id</th> --}}
                    {{-- <th class="column-center-align">confirmed</th>
                    <th class="column-center-align">served</th> --}}
                    <!-- <th class="column-center-align">confirm</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)

                <tr>
                    {{-- <td class="column-left-align">{{$data->Order_id}}</td> --}}
                    <td>{{$data->order_id}}</td>
                    <td>{{$data->no_of_items}}</td>
                    <td>{{$data->total}}</td>
                    <td>{{$data->created_at}}</td>
                    {{-- <td>{{$data->table_id}}</td> --}}
                    {{-- <td>{{$data->confirmed}}</td>
                    <td>{{$data->served}}</td> --}}
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>
