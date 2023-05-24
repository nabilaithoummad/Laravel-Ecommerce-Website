<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>


            #header{
                box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
                background-color: rgb(255, 248, 248);
                height: 60px;
                width: 100%;
                padding-top: 10px;
                padding-bottom: 10px;

            }

            #logo{
                width: 25%;
                margin: 0;
                padding-left: 20px;
            }
            #logo h2{
                width: 100%;
                margin: 0;
            }

            /* ---------------------searching form------------------------------ */

            #formSearch{
                width: 30%;
                display: flex;
                flex-direction: row;
            }

            #formSearch #hidden_i{
                display: none;
            }

            #formdiv{
                display: flex;
                flex-direction: row;
                width: 100%;
            }

            #search{
                border-radius: 0.25rem 0 0 0.25rem;
                height: 40px;
            }



            #searchimg{
                border-radius: 0 0.25rem 0.25rem 0;
            }

            /* --------------------notification and profile div---------------------- */

            #notf{
                width: 45%;
                display: flex;
                flex-direction: row;
            }

            /* -------------------notifications and messages icons */
            #not{
                width: 33.33%;
                display: flex;
                flex-direction: row;
                justify-content: end;
            }
            #mess{
                width: 33.33%;
                display: flex;
                flex-direction: row;
                justify-content: center;
            }

            #not i{
                height: 40px;
                cursor: pointer;
                font-size: 23px;
                padding-top: 2px;
                color: #0d6efd;
            }

            #not i:hover{
                color: blue;
            }

            #mess i{
                height: 40px;
                cursor: pointer;
                font-size: 23px;
                padding-top: 2px;

                color: #0d6efd;
            }

            #mess i:hover{
                color: blue;
            }

            /* --------------------dropdown profile div------------------- */

            #profiledev{
                cursor: pointer;
                display: flex;
                flex-direction: row;
                width: 33.33%;
                padding-top: 5px;
                justify-content: center;
                border-left: 1px solid;
            }
            #prfl{
                height: 35px;
                margin-top: -1px;
                margin-right: 15px;
            }
            #user_name{
                color: blue;
                margin-right: 15px;
            }

            @media only screen and (max-width: 700px) {

            header{
                padding-top: 0px;
                padding-bottom: 0px;
            }
            #logo{
                width: 37%;
                margin: 0;
                padding-left: 5px;
            }
            #logo h2{
                width: 100%;
            }





            #formSearch #hidden_i{
                display: block;
                color: #0d6efd;
                font-size: larger;
                cursor: pointer;
            }


            #notf{
                width: 40%;
                padding-top: 5px;
            }

            #not{
                display: flex;
                flex-direction: row;
                justify-content: center;
                margin-top: 4px;
            }
            #mess{
                display: flex;
                flex-direction: row;
                justify-content: center;
                margin-top: 2px;
            }


            #profiledev{
                cursor: pointer;
                width: 30%;
                display: flex;
                flex-direction: row;
                justify-content: center;
                border-left: hidden;
            }
            #prfl{
                height: 35px;
                margin-top: -1px;
                margin-left: 19px;
            }
            #user_name{
                display: none;
            }



            #formdiv {
                    display: none;
                    flex-direction: row;
                    width: 653px;
                    position: absolute;
                    BACKGROUND-COLOR: white;
                    top: 75px;
                    /* z-index: 000000000000000; */
                    left: -241px;
                    padding: 10px 10px 10px 10px;
                    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
                }




                #formSearch {
                    width: 23%;
                    padding-top: 13px;
                    display: flex;
                    flex-direction: row;
                    position: relative;
                    padding-left: 13%;
                }

            }




            @media only screen and (min-width: 701px) {

                #profiledev {
                    cursor: pointer;
                    display: flex;
                    flex-direction: row;
                    width: 48.33%;
                    padding-top: 5px;
                    justify-content: right;
                    border-left: 1px solid;
                    /* flex-wrap: wrap; */
                }
                #mess {
                    width: 33.33%;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }
                #not {
                    width: 18.33%;
                    display: flex;
                    flex-direction: row;
                    justify-content: end;
                }

                #notf {
                    width: 36%;
                    display: flex;
                    flex-direction: row;
                }

                #formSearch {
                    width: 39%;
                    display: flex;
                    flex-direction: row;
                }




            }




            @media only screen and (min-width: 850px) {


                #profiledev {
                    cursor: pointer;
                    display: flex;
                    flex-direction: row;
                    width: 48.33%;
                    padding-top: 5px;
                    justify-content: right;
                    border-left: 1px solid;
                    /* flex-wrap: wrap; */
                }
                #mess {
                    width: 33.33%;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }
                #not {
                    width: 18.33%;
                    display: flex;
                    flex-direction: row;
                    justify-content: end;
                }

                #notf {
                    width: 36%;
                    display: flex;
                    flex-direction: row;
                }

                #formSearch {
                    width: 39%;
                    display: flex;
                    flex-direction: row;
                }




            }



        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


            <header class="d-flex flex-row " id="header">
                <div id="logo">
                    <h1 style="font-size: 30px" class="text-primary"><a href="{{route('redirect')}}">Dashboard</a></h1>
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

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
