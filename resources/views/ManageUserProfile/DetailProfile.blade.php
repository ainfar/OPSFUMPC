<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OPSFUMPC</title>

     <!----======== CSS ======== -->
     <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Boxicons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<style>

    :root{
        /* color */
        --body-color: #00b3b3;
        --sidebar-color: #99ebff;
        --primary-color: #0000ff;
        --primary-color-light: #F6F5FF;
        --toggle-color: #DDD;
        --text-color: BLACK;

        /* transition */
        --tran-03: all 0.2s ease;
        --tran-03: all 0.3s ease;
        --tran-04: all 0.3s ease;
        --tran-05: all 0.3s ease;
    }
    
        body{
            height: 100vh;
            /* background-image: url('umpbg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
            opacity: 1.0; */
            background: var(--body-color);
            transition: var(--tran-02);
            font-size: 14px;
        }

        /* cursor */
        body.dark{
            --body-color: #18191A;
            --sidebar-color: #242526;
            --primary-color: #3A3B3C;
            --primary-color-light: #3A3B3C;
            --toggle-color: #FFF;
            --text-color: #CCC;
        }

        
        /* sidebar */
        .sidebar{
            position: fixed;
            top: 0;
            left:0;
            height:100%;
            width: 200px;
            padding: 10px 14px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
        }

        /* sidebar close js */
        .sidebar.close{
            width: 90px;
        }

        /* Reusable css */
        .sidebar .text{
            font-size: 16px;
            font-weight: 500;
            color: var(--text-color);
            transition: var(--tran-03);
            white-space: nowrap;
            opacity: 1;
        }

        .sidebar.close .text{
            opacity: 0;
        }

        .sidebar .image{
            min-width: 60px;
            display: flex;
            align-items: center;
        }


        /* sidebar dashboard */
        .sidebar li{
            height: 50x;
            margin-top: 10px;
            list-style: none;
            display: flex;
            align-items: center;
        }

        /* sidebar search */
        .sidebar li .icon{
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 60px;
            font-size:20px;
        }

        .sidebar li .icon,
        .sidebar li .text{
            color: var(--text-color);
            transition: var(--tran-02);
        }


        .sidebar header{
            position: relative;
        }

        .sidebar .image-text img{
            width: 40px;
            border-radius: 6px;
        }

        .sidebar header .image-text{
            display: flex;
            align-items:center;
        }

        header .image-text .header-text{
            display: flex;
            flex-direction:column;

        }

        .header-text .name{
            font-weight: 600;
        }

        .header-text .profession{
            margin-top: -2px;
        }

        /* toggle */
        .sidebar header .toggle{
            position: absolute;
            top: 50px;
            right: -25px;
            transform: translateY(-50%);
            height: 25px;
            width: 25px;
            background:var(--primary-color);
            display: flex;
            align-items:center;
            justify-content: center;
            border-radius: 50px;
            color: var(--sidebar-color);
            font-size: 22px;
            transition: var(--tran-03);
        }

        .sidebar.close header .toggle{
            transform: translateY(-50%) rotate(180deg);
        }

        body.dark .sidebar header .toggle{
            transform: rotate(180deg);
            color: var(--text-color);
        }

        /* search box */
        /* .sidebar .search-box{
            background: var(--primary-color-light);
        } */

        /* .search-box input{
            height:50px;
            width:70px;
            outline: none;
            border:none;
            border-radius: 6px;
            background: var(--primary-color-light);
        } */

        .sidebar li a{
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 6px;
            transition: var(--tran-04);
        }

        .sidebar li a:hover{
            background: var(--primary-color);
        }

        body.dark .sidebar li a:hover .icon,
        body.dark .sidebar li a:hover .text{
            color: var(--text-color);
        }

        .sidebar li a:hover .icon,
        .sidebar li a:hover .text{
            color: var(--sidebar-color);
        }

        .sidebar .menu-bar{
            height: calc(100% - 50px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-bar .mode{
            position: relative;
            border-radius: 6px;
            background: var(--primary-color-light);
        }

        .menu-bar .mode .moon-sun{
            height: 50px;
            width: 60px;
            display: flex;
            align-items: center;
        }

        .menu-bar .mode i{
            position: absolute;
            transition: var(--tran-03);
        }

        .menu-bar .mode i.sun{
            opacity: 0;
        }

        body.dark .menu-bar .mode i.sun{
            opacity: 1;
        }

        body.dark .menu-bar .mode i.moon{
            opacity: 0;
        }

        .menu-bar .mode .toggle-switch{
            position: absolute;
            right: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            cursor: pointer;
            border-radius: 6px;
            min-width: 60px;
            background: var(--primary-color-light);
        }

        .toggle-switch .switch{
            position: relative;
            height: 22px;
            width: 44px;
            border-radius: 25px;
            background: var(--toggle-color);
        }

        .switch::before{
            content: '';
            position: absolute;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            background: var(--sidebar-color);
            transition: var(--tran-03);
        }

        body.dark .switch::before{
            left: 24px;
        }

        .sidebar .profile-details{
            position: fixed;
            
        }
        
        /* profile */
        /* .b{
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: green;

        } */


        .b .card .image{
            height: 150px;
            width: 150px;
            border-radius: 50%;
            padding: 3px;
            background: #008080;
        }

        .b .card .image img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
            
        }

        .b .card{
            position: relative;
            border-radius: 20px;
            background: #fff;
            width:70%;
            margin: 20px 0;
            margin-top: 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: #0073e6;
        }

        .b .card::before{
            content: "";
            position: absolute;
            height: 45%;
            width:100%;
            background: #99ccff;
            border-radius: 20px 20px 0 0;
        }

        .b .card .card-content{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            position: relative;
            z-index: 100;
            
        }

        .b .card .name-profession{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
            color: #333;
        }

         .name-profession .names{
            font-size: 20px;
            font-weight: 600;
        }

        .name-profession .profession{
            font-size: 15px;
            font-weight: 500;
        }

        .b .card .button{
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .b .card .button button{
            background: #00b3b3;
            outline: none;
            border: none;
            color: #fff;
            padding: 8px 22px;
            border-radius: 20px;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .b .button button:hover{
            background: #00b3b3;
        }



        
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color:#99ebff;">
            <div class="container" >
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'OPSFUMPC') }}
                </a> -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <nav class="sidebar close">
                                <header>
                                    <div class="image-text">
                                        <span class="image">
                                            <img src="logo.png" alt="logo"></img>
                                        </span>

                                        <div class="text header-text">
                                            <span class="name">OPSFUMPC</span>
                                            <span class="profession">Printing service</span>
                            
                                        </div>

                                    </div>

                                    <i class='bx bx-chevron-right toggle'></i>
                                </header>

                                <div class="menu-bar">
                                    <div class="menu">

                                            <li class="nav-link">
                                                <a href="{{url('staffPDashboard')}}">
                                                    <i class='bx bx-home-alt icon'></i>
                                                    <span class="text nav-text">Dashboard</span>

                                                </a>
                                            </li>

                                            <li class="nav-link">
                                                <a href="{{url('staffPProducts')}}">
                                                <i class='bx bx-package icon'></i>
                                                    <span class="text nav-text">Products</span>

                                                </a>
                                            </li>

                                            <li class="nav-link">
                                                <a href="#">
                                                    <i class='bx bx-cart icon'></i>
                                                    <span class="text nav-text">Orders</span>

                                                </a>
                                            </li>

                                            <li class="nav-link">
                                                <a href="#">
                                                <i class='bx bx-receipt icon'></i>
                                                    <span class="text nav-text">Report</span>

                                                </a>
                                            </li>

                                    </div>

                                    <div class="bottom-content">

                                            <li class="">
                                            <a href="{{url('DetailProfile')}}">
                                                <i class='bx bx-user icon'></i>
                                                    <span class="text nav-text">{{ Auth::user()->name }}</span>
                                                </a>
                                            </li>

                                            <li class="mode">
                                                <div class="moon-sun">
                                                    <i class='bx bx-moon icon moon'></i>
                                                    <i class='bx bx-sun icon sun'></i>
                                                </div>
                                                <span class="mode-text text">Dark Mode</span>

                                                <div class="toggle-switch">
                                                    <span class="switch"></span>
                                                </div>
                                            </li>
                                    </div>

                                </div>

                            </nav>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- js -->
        <script>
            const body = document.querySelector("body"),
            sidebar = body.querySelector(".sidebar"),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

            toggle.addEventListener("click", () =>{
                sidebar.classList.toggle("close");
                                    
            });

            modeSwitch.addEventListener("click", () =>{
                body.classList.toggle("dark");

                if(body.classList.contains("dark")){
                    modeText.innerText = "Light Mode"
                }else{
                    modeText.innerText = "Dark Mode"
                }                
            });

        </script>

        
    </div>

    <!-- <div class="container" style="margin-top:30px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background:#e6faff;">
                <div class="card-header">{{ __('Manage Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('error') )
                    <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif -->

                    <div class="container" style="margin-top:30px">

    <div class="row">
        <div class="col-md-12">
<div class="b">
<!-- new container -->
<!-- <div class="container" style="margin-top:0px; background: red"> -->
    <!-- <div class="content" style="background: green"> -->


<form action="{{route('ManageUserProfile.updateProfile')}}" method= "post">
@csrf 
@method('PUT')        
<div class="card" >     
            <div class="card-content">
            <h4>Manage Profile</h4>
                <div class="image">
                    <img src="" alt="" class="src">
                </div>
                
                <div class="name-profession">

                <!-- <label for="name">Name</label>
                <input type="name" name="name" id="name" value="{{$user->name}}"> -->

                
                    <span class="name">Name: {{$user->name}}</span>
                    <span class="phoneNum">Phone Num: {{$user->phoneNum}}</span>
                    <span class="accountType">Account Type:{{$user->accountType}}</span>
                    <span class="gender">Gender: {{$user->gender}}</span>
                    <span class="location">Location: {{$user->location}}</span>
                    <span class="email">Email: {{$user->email}}</span>
                    
                </div>
                
                

                <div class="button">
                <a href="{{url('updateProfile')}}" ><button>Update</button></a>
                </div>

            </div>

             
        </div>

        </form>

    <!-- </div> -->
<!-- </div> -->
</div>

        </div>
             <!-- send a message acivity has been added succesfully or not -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif


           

        </div>

            
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
















