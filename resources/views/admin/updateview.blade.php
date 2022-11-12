<!DOCTYPE html>
<html lang="en">

<head>
    

    <base href="/public">

    @include("admin.admincss")

</head>

<body class="layout-template-1">

  @php $selectedMain = "FoodMenu" @endphp
  @php $title = "Update Menu Item" @endphp
  @include("admin.navbar")
  @include("headerbar")

    <div class="content">
       
    <div class="formContainer">

            <form class="form" action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="text-group row">
                    <label class="label" >Title</label>
                    <input  type="text" name="title" value={{$data->title}} required>
                </div>

                <div class="text-group row">
                    <label class="label">Price</label>
                    <input  type="number" name="price" value={{$data->price}} required>
                </div>



                <div class="text-group row">
                    <label class="label">Description</label>
                    <input  type="text" name="description" value={{$data->description}} required>
                </div>

                <div class="text-group row">
                    <label class="label">Old Image</label>
                    <img height="100" width="100" src="/foodimage/{{$data->image}}">
                </div>

                <div class="text-group row">
                    <label class="label">New Image</label>
                    <input  type="file" name="image" required>
                </div>


                <div >
                    <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Save">
                </div>


            </form>

            <div>



            </div>
            @include("admin.adminscript")
</body>

</html>
