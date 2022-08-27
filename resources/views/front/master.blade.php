<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Title  -->
    <title>Vartech East Africa | Marketing and Agency in Kenya</title>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Vartech East Africa | Marketing and Agency in Kenya" />
    <meta name="description" content="Vartech East Africa | Marketing and Agency in Kenya" />
    <meta name="author" content="Designekta Studios" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="{{asset('theme/fonts.googleapis.com/css35c2.css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap')}}"
        rel="stylesheet">
    <link
        href="{{asset('theme/fonts.googleapis.com/css237d6.css?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&amp;display=swap')}}"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('theme/css/plugins.css')}}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" />

</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div class="loading">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{url('/')}}">
                <img src="{{asset('theme/img/website-logos-1.png')}}" alt="Vartech East Africa">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('/')}}">Home <i class="fa fa-home"></i></a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('/')}}/about-us">About Us </a>

                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Location & Networks </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Location & Networks </a>
                        <div class="dropdown-menu">
                            <?php
                                $Services = DB::table('portfolios')->get();
                            ?>
                            @foreach ($Services as $S)
                            <a class="dropdown-item" href="{{url('/')}}/location-and-networks/{{$S->slung}}">{{$S->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Our Services</a>
                        <div class="dropdown-menu">
                            <?php
                                $Services = DB::table('services')->get();
                            ?>
                            @foreach ($Services as $S)
                            <a class="dropdown-item" href="{{url('/')}}/services/{{$S->slung}}">{{$S->title}}</a>
                            @endforeach
                        </div>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Our Services </a>

                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/contact-us">Contact Us <i class="fa fa-phone"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    @yield('content')




    <!-- jQuery -->
    <script src="{{asset('theme/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-migrate-3.0.0.min.js')}}"></script>

    <!-- plugins -->
    <script src="{{asset('theme/js/plugins.js')}}"></script>

    <!-- custom scripts -->
    <script src="{{asset('theme/js/scripts.js')}}"></script>

    <script>
        $(document).ready(function(){
          $(".beWhite").css("color","white");
        });
    </script>

</body>


</html>
