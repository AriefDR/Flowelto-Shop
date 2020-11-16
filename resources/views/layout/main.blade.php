<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>@yield('title')</title>

        <style>
            .jumbotron {
                background-image: url(img/megan-markham-zebbovVjMvM-unsplash.jpg);
                background-size: cover;
                height: 650px;
                text-align: center;
            }

            .jumbotron .display-4 {
                margin-top: 200px;
                color: white;
            }

            .jumbotron p {
                color: white;
                font-size: 25px;
            }

            .jumbotron hr {
                /* border-color: #F05F40; */
                border-color: cadetblue;
                width: 70px;
                border-width: 4px;
            }

            .jumbotron .btn {
                background-color: cadetblue;
                border: none;
                border-radius: 25px;
                padding-right: 25px;
                padding-left: 25px;
                margin-top: 40px;
            }

            .carousel-item {
                height: 650px;
            }

            /* .carousel-item img {
                margin-top: -60px;
            } */

            .carousel-item .display-4 {
                margin-top: -400px;
                color: white;
            }

            .carousel-item hr {
                /* border-color: #F05F40; */
                border-color: cadetblue;
                width: 70px;
                border-width: 4px;
            }

            .carousel-item .btn {
                background-color: cadetblue;
                border: none;
                border-radius: 25px;
                padding-right: 25px;
                padding-left: 25px;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <h3><i class="fas fa-spa text-success mr-2"></i></h3>
            <a class="navbar-brand text-white" href="/">FLOWELTO SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                <a class="nav-link text-white" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @for ($i=0; $i<2; $i++)
                        <a class="dropdown-item" href="{{url('/category/'.$category[$i]->slug)}}">{{$category[$i]->category_name}}</a>
                    <div class="dropdown-divider"></div>
                    @endfor
                    <a class="dropdown-item" href="{{route('user.search')}}">View All Categories</a>
                </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('/about')}}">About Us <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('user.search')}}">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-2">
                @if(!Auth::check())
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('/login')}}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('/register')}}">Register <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white"  id="drProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{strtoupper(Auth::user()->role)}}</a>
                    <div class="dropdown-menu" aria-labelledby="drProfile">
                        <a class="dropdown-item" href="{{route('flower.shoppingCart')}}">MyChart <span class="badge badge-info">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span> </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Transaction History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                    </li>
                @endif
            </ul>
            <div id="date" class="text-white ml-2"></div>
                <script>
                var d = new Date();
                var n = d.toDateString();
                document.getElementById("date").innerHTML = n;
                </script>
            </div>
        </div>
    </nav>

    @yield('container')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>


    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> --}}

  </body>
</html>
