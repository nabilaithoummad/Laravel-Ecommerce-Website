<header class="d-flex flex-row " >
    <div id="logo">
        <h2 class="text-primary"><a href="{{route('redirect')}}" class="text-decoration-none"> Dashboard</a></h2>
    </div>

    <form id="formSearch" action="" method="" >

    </form>

    <div id="notf">
        <div id="not">
        </div>
        <div id="mess">
        </div>
        <div id="profiledev" class="dropdown ">
            <div class="w-100 d-flex flex-row justify-content-center" data-bs-toggle="dropdown" aria-expanded="false">
                <p id="user_name" class="mt-1">{{Auth::user()->name}}</p>
                <img id="prfl" src="{{ asset('admin2/img/undraw_profile.png') }}" />
            </div>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('profile.edit',Auth::user()->id)}}">Profile</a></li>
                <li>
                    <form class="dropdown-item d-flex flex-row" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input class="ps-0 border-0 w-75" type="submit" value="Log Out" style="background-color: inherit;text-align:start;"/>
                        <i class="bi bi-box-arrow-right w-25" style="text-align: start"></i>
                    </form>
                </li>
            </ul>
        </div>
    </div>

</header>
