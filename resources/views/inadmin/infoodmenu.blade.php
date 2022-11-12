<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "FoodMenu" @endphp
    @php $title = "Food Menu" @endphp
    @include("inadmin.innavbar")
    @include("headerbar")

    <div class="content">

        <div class="formContainer">

            <form class="form" saction="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="text-group row">
                    <label class="label">Title</label>
                    <input type="text" name="title" placeholder="Write a title" required>
                </div>

                <div class="text-group row">
                    <label class="label">Price</label>
                    <input style="color:grey" type="number" name="price" placeholder="Price" required>
                </div>

                <div class="text-group row">
                    <label class="label">Image</label>
                    <input style="color:grey" type="file" name="image" required>
                </div>

                <div class="text-group row">
                    <label class="label">Description</label>
                    <input style="color:grey" type="text" name="description" placeholder="Description" required>
                </div>

                <h3 class="form-topic">Required Ingredients</h3>
                
                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    <input style="color:grey" type="text" name="Inventory item1" placeholder="select menu item" required>
                    <input style="color:grey" type=number name="amount" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    <input style="color:grey" type="text" name="Inventory item2" placeholder="select menu item" required>
                    <input style="color:grey" type=number name="amount" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    <input style="color:grey" type="text" name="Inventory item3" placeholder="select menu item" required>
                    <input style="color:grey" type=number name="amount" placeholder="amount " required>
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
                        <th style="padding:30px">Food Name</th>
                        <th style="padding:30px">Price</th>
                        <th style="padding:30px">Description</th>
                        <th style="padding:30px">Image</th>
                        <th style="padding:30px">Action</th>
                        <th style="padding:30px">Action2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)

                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="200" width="200" src="/foodimage/{{$data->image}}" alt=""></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                    </tr>

                    @endforeach
                </tbody>


            </table>

        </div>


    </div>

    @include("admin.adminscript")
</body>

</html>
