<!--Header(Top Bar)-->
<header>
    <!--Header left section-->
    <div class="header-left verticalCenter">
        <i class="fas fa-bars fa-2x header-menu_icon"></i>
        <h1 class="header-title">{{$title}}</h1>
    </div>
    <!--End header left section-->

    <!--Header profile section-->

    <div class="header-profile">
        <img class="header-profilepic" src="{{URL::asset('assets/images/profpic.jpg')}}"></img>
        <span class="header-username">{{ auth()->user()->name}}</span>

        @if(auth()->user()->usertype==1)
        <span class="header-userRole">Kitchen Manager</span>
        @elseif(auth()->user()->usertype==2)
        <span class="header-userRole">Inventory Manager</span>
        @elseif(auth()->user()->usertype==0)
        <span class="header-userRole">Owner</span>
        @endif
        <!-- <span class="header-userRole">{{ auth()->user()->usertype}}</span> -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf

            <!-- <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                {{ __('Log Out') }}
            </button> -->
            <button class="header-profile-logout" type="submit">
                <i class="sidenav-icon ci-logout "></i>
            </button>
        </form>

    </div>
    <!--Header profile menu-->
    <div class="profile_menu">
        <ul>
            <li>
                <i class="far fa-user"></i>
                <a href="">Home Page</a>
            </li>
            <li>
                <i class="far fa-cog"></i>

                <a href="" onclick="sessionStorage.setItem('returnReferer',window.location.href);">
                    {{"GG"}}
                </a>

            </li>
            <li>
                <i class="far fa-sign-out"></i>
                <a href="">Sign Out</a>
            </li>
        </ul>
    </div>

    <!--End header profile menu-->
</header>
<!--End Header(Top Bar)-->
