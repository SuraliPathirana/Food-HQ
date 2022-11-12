<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "Users" @endphp
    @php $title = "Users" @endphp
    @include("owner.ownernavbar")
    @include("headerbar")

    <div class="content">
        <div>
            <a class="btn btn-filled btn-theme-purple formBtn" type="button" href="{{  route('register') }}" style="width: 150px; position:relative; left:50px;">Add new user</a>
        </div>

        <div>
            <table class="tableGG">
                <thead>
                    <tr>
                        <th style="padding: 20px">Name</th>
                        <th style="padding: 20px">Email</th>
                        <th style="padding: 20px">User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        @if($data->usertype==0)
                            <td>{{"Owner"}}</td>
                        @elseif($data->usertype==1)
                            <td>{{"Kitchen Manager"}}</td>

                        @elseif($data->usertype==2)
                            <td>{{"Inventory Manager"}}</td>
                            
                        @elseif($data->usertype==3)
                            <td>{{"Tablet"}}</td>

                        @elseif($data->usertype==4)
                            <td>{{"Cashier"}}</td>

                        {{-- <td>{{$data->usertype}}</td> --}}
                        @endif

                        @if($data->usertype!=0)
                        <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

                        @else
                        <td><a>Not allowed</a></td>

                        @endif
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>


        <div>

            <a type="button" href="{{  route('register') }}" style="position:relative; top:400px ;right:250px">Add new user to the system</a>

        </div>

    </div>
    <!-- @include("admin.adminscript") -->

</body>

</html>
