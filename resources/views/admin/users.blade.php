<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @include("admin.admincss")

</head>

<body class="layout-template-1">
    @php $selectedMain = "Users" @endphp
    @php $title = "Users" @endphp
    @include("admin.navbar")
    @include("headerbar")

    <div class="content">
        <table class="tableGG">
            <thead>
                <tr>
                    <th class="column-center-align">Name</th>
                    <th class="column-center-align">Email</th>
                    <th class="column-center-align">User Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr align="center">
                    <td class="column-left-align">{{$data->name}}</td>
                    <td class="column-left-align">{{$data->email}}</td>
                    <td>{{$data->usertype}}</td>

                    @if($data->usertype!=0)
                    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

                    @else
                    <td><a>Not allowed</a></td>
                    @endif
                </tr>

                @endforeach
            </tbody>

        </table>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>


</body>

</html>
