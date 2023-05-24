<header class="d-flex flex-row w-100 bg-black" style="height: 70px;">
    <div class="col-lg-4 col-xl-4 col-xxl-4 d-lg-flex d-xl-flex d-xxl-flex flex-lg-row flex-xl-row flex-xxl-row pt-2 col-md-4 col-sm-4 col-4">
        <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-sm-12 col-12 d-flex flex-row justify-content-center">
            <h1 class="text-white">E-Store</h1>
        </div>
    </div>
    <div class="col-lg-8 col-xl-8 col-xxl-8 d-lg-flex d-xl-flex d-xxl-flex flex-lg-row flex-xl-row flex-xxl-row justify-content-lg-between justify-content-xl-between justify-content-xxl-between pt-lg-3 pt-xl-3 pt-xxl-3 d-md-none d-sm-none d-none">
        <div class="col-lg-12 col-xl-12 col-xxl-12 d-lg-flex d-xl-flex d-xxl-flex flex-lg-row flex-xl-row flex-xxl-row justify-content-lg-around justify-content-xl-around justify-content-xxl-around">
            <a href="{{route('index')}}" class="p-lg-2 p-xl-2 p-xxl-2 text-white text-decoration-none"><h5>Home</h5></a>
            <a href="{{route('allproducts')}}" class="p-lg-2 p-xl-2 p-xxl-2 text-white text-decoration-none"><h5>All Products</h5></a>
            <a href="{{route('show_myorders')}}" class="p-lg-2 p-xl-2 p-xxl-2 text-white text-decoration-none"><h5>My Orders</h5></a>
            <div style="position: relative;width: 40px;" class="p-2">
                <span class=" pt-0 w-50 text-white"
                 style="background-color: rgb(17, 180, 17);
                 position: absolute;
                 top:3px;right: 2px;
                 border-radius: 50%;
                 font-size: 12px;
                 text-align: center;
                 ">{{$cart}}</span>

                <a href="{{route('show_cart')}}" class="text-white" style="position: absolute;left: 0;"><h5><i class="bi bi-cart-fill"></i></h5></a>
            </div>
            <div>

                @if (Route::has('login'))

                        @auth
                            @if ( Auth::user()->status == '1')
                                <a href="{{ route('redirect') }}" class="btn btn-primary">dashboard</a>

                            @else
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-danger w-100" type="submit">Log Out</button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>

                            @if (Route::has('register'))
                                <a  href="{{ route('register') }}" style="background-color: rgb(32, 211, 32);color: white;" class="btn">Register</a>
                            @endif
                        @endauth
                @endif

            </div>
        </div>
    </div>


    <div class="col-md-8 col-sm-8 col-8 d-lg-none d-xl-none d-xxl-none" style="position: relative;">
        <i id="menubtn"  style="position: absolute; font-size: 40px;right: 20px;cursor: pointer;" class="bi bi-list text-white"></i>
        <div id="dropmenu" style="position: absolute;top: 50px;right: 40px;box-shadow: 0px 5px 100px 24px rgba(0,0,0,0.1);"
        class="px-4 pt-2 d-md-none d-sm-none d-none flex-column d-lg-none d-xl-none d-xxl-none bg-white">
            <a href="{{route('index')}}" class="text-dark my-2 text-decoration-none" >Home</a>
            <a href="{{route('allproducts')}}" class="text-dark my-2 text-decoration-none" >All Products</a>
            <a href="#" class="text-dark my-2 text-decoration-none">Categories</a>
            <a href="#" class="text-dark my-2 text-decoration-none">Products</a>
            <a href="{{route('show_myorders')}}" class="text-dark my-2 text-decoration-none">Orders</a>
            <div style="position: relative;width: 40px;" class="pb-4 my-2">
                <span class=" pt-0 w-50 text-dark"
                 style="background-color: rgb(17, 180, 17);
                 position: absolute;
                 top:3px;right: 2px;
                 border-radius: 50%;
                 font-size: 12px;
                 text-align: center;
                 ">{{$cart}}</span>

                <a href="{{route('show_cart')}}" class="text-dark " style="position: absolute;left: 0;"><h5><i class="bi bi-cart-fill"></i></h5></a>
            </div>


            @if (Route::has('login'))

                @auth
                    @if ( Auth::user()->status == '1')
                        <a href="{{ route('redirect') }}" class="btn btn-primary my-2">dashboard</a>

                    @else
                        <form method="POST" class="my-2" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger w-100" type="submit">Log Out</button>
                        </form>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary my-2">log in</a>

                    @if (Route::has('register'))
                        <a  href="{{ route('register') }}" style="background-color: rgb(32, 211, 32);color: white;" class="btn my-2">Register</a>
                    @endif
                @endauth
            @endif


        </div>
    </div>
</header>
