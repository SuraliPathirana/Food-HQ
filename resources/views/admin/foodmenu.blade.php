<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "FoodMenu" @endphp
    @php $title = "Food Menu" @endphp
    @include("admin.navbar")
    @include("headerbar")

    <div class="content">
        <div class="formContainer">

            <form class="form" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="text-group row">
                    <label class="label">Title</label>
                    <input type="text" name="title" placeholder="Write a title" required>
                </div>

                <div class="text-group row">
                    <label class="label">Price</label>
                    <input type="number" name="price" placeholder="Price" required>
                </div>

                <div class="text-group row">
                    <label class="label">Image</label>
                    <input type="file" name="image" required>
                </div>

                <div class="text-group row">
                    <label class="label">Description</label>
                    <input type="text" name="description" placeholder="Description" required>
                </div>

                <div class="text-group row">
                    <label class="label">Dish type</label>
                    <input type="text" name="dish_type" placeholder="Description" required>
                </div>

                <h3 class="form-topic">Required Ingredients</h3>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    
                    <select name="Invitem1">
                        <option value= '' selected disabled>
                            Select ingredient
                        </option>
                        @foreach($ingredients as $ingredient)
                            
                            <option value= '@php echo $ingredient->item_code @endphp'>
                                @php echo $ingredient->item_name," (",$ingredient->unit,")" @endphp
                            </option>
                            
                        @endforeach
                    </select>
                    <input type=number name="amount1" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    
                    <select name="Invitem2">
                        <option value= '' selected disabled>
                            Select ingredient
                        </option>
                        @foreach($ingredients as $ingredient)
                            
                            <option value= '@php echo $ingredient->item_code @endphp'>
                                @php echo $ingredient->item_name," (",$ingredient->unit,")" @endphp
                            </option>
                            
                        @endforeach
                    </select>
                    <input type=number name="amount2" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    
                    <select name="Invitem3">
                        <option value= '' selected disabled>
                            Select ingredient
                        </option>
                        @foreach($ingredients as $ingredient)
                            
                            <option value= '@php echo $ingredient->item_code @endphp'>
                                @php echo $ingredient->item_name," (",$ingredient->unit,")" @endphp
                            </option>
                            
                        @endforeach
                    </select>
                    <input type=number name="amount3" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    
                    <select name="Invitem4">
                        <option value= '' selected disabled>
                            Select ingredient
                        </option>
                        @foreach($ingredients as $ingredient)
                            
                            <option value= '@php echo $ingredient->item_code @endphp'>
                                @php echo $ingredient->item_name," (",$ingredient->unit,")" @endphp
                            </option>
                            
                        @endforeach
                    </select>
                    <input type=number name="amount4" placeholder="amount " required>
                </div>

                <div class="text-group row">
                    <label class="label">Inventory item </label>
                    
                    <select name="Invitem5">
                        <option value= '' selected disabled>
                            Select ingredient
                        </option>
                        @foreach($ingredients as $ingredient)
                            
                            <option value= '@php echo $ingredient->item_code @endphp'>
                                @php echo $ingredient->item_name," (",$ingredient->unit,")" @endphp
                            </option>
                            
                        @endforeach
                    </select>
                    <input type=number name="amount5" placeholder="amount " required>
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
                        <th style="padding:30px">Delete</th>
                        <th style="padding:30px">Update</th>
                        <th style="padding:30px">Add Ingredients</th>
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
                        <td><a href="{{url('/addingredients',$data->id)}}">Add Ingredients</a></td>

                    </tr>

                    @endforeach
                </tbody>


            </table>

        </div>
</body>

</html>
