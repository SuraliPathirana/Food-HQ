<!DOCTYPE html>
<html lang="en">
  <head>
    
  <base href="/public">

  @include("admin.admincss")

  </head>
  <body class="layout-template-1">

  @php $selectedMain = "FoodMenu" @endphp
  @php $title = "Ingredients" @endphp
  @include("admin.navbar")
  @include("headerbar")



  <div class="content">
        
    <div class="formContainer">



<form class="form" action="{{url('/uploadingredients',$id)}}" method="post" enctype="multipart/form-data">
    

            @csrf 

           
            <!-- <span>{{$id}}</span> -->

            <div class="text-group row">
                <label class="label" >Item code</label>
                <input style="color:grey" type="number" name="item_code" placeholder="Item_code" required>
            </div>

             <div class="text-group row">
                <label class="label" >Quantity</label>
                <input style="color:grey" type="text" name="quantity" placeholder="Quantity" required>
            </div>

            <!-- <div>
                <label style="padding:30px">Quantity</label>
                <input style="color:grey" type="file" name="image"  required>
            </div> -->
<!-- 
            <div>
                <label style="padding:30px">Description</label>
                <input style="color:grey" type="text" name="description" placeholder="Description" required>
            </div> -->

            <div>
                
                <input class="btn btn-filled btn-theme-purple formBtn" type="submit" value="Save">
            </div>


            


    </form><br><br>

    <table class="tableGG">
        <thead>

        <tr>
            <td>Item Code</td>
            
            <td>Quantity</td>
            
        </tr>
        </thead>

        <tbody>

        @foreach($data as $data)
        <tr>
            <td>{{$data->item_code}}</td>
            <td>{{$data->quantity}}</td>
            

        </tr>

        @endforeach($data as $data)

        </tbody>

    </table>

    
 
    @include("admin.adminscript")  
</body>
</html>