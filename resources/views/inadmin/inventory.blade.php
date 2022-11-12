<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "Inventory" @endphp
    @php $title = "Inventory" @endphp
    @include("inadmin.innavbar")
    @include("headerbar")

    <div class="content">
        <div class="formContainer">
            <h3 class="form-topic">Add Inventory Item</h3>

            <form class="form" action="{{url('/uploadinventory')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="text-group row">
                    <label class="label">Item name</label>
                    <input style="color:grey" type="text" name="item_name" placeholder="Write a title" required>
                </div>

                <div class="text-group row">
                    <label class="label">Unit</label>
                    <input style="color:grey" type="text" name="unit" placeholder="Write a title" required>
                </div>

                <div class="text-group row">
                    <label class="label">Available quantity</label>
                    <input style="color:grey" type="number" name="available_quantity" placeholder="quantity" required>
                </div>

                <div class="text-group row">
                    <label class="label">Minimum stock limit</label>
                    <input style="color:grey" type="number" name="min_limit" placeholder="min_limit" required>
                </div>

                <div>
                    <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Save">
                </div>
            </form>
        </div>

        <div>
            <table class="tableGG">
                <thead>
                    <tr>
                        <th style="padding:30px">Item_code</th>
                        <th style="padding:30px">Item_name</th>
                        <th style="padding:30px">Unit</th>
                        <th style="padding:30px">Available Quantity</th>
                        <th class="column-center-align">Last restocked on</th>
                        <th class="column-center-align">Update</th>
                        <!-- <th style="padding:30px">Action2</th> -->
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $data)

                    <tr align="center">
                        <td>{{$data->item_code}}</td>
                        <td>{{$data->item_name}}</td>
                        <td>{{$data->unit}}</td>
                        <td>{{$data->available_quantity}}</td>
                        <td>{{$data->created_at}}</td>
                        <td><a  href="{{url('/updateinview',$data->item_code)}}">Update</a></td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>
