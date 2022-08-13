<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Vie onepage themeforest" />
    <meta name="description" content="Vie - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Vie</title>

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
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index2.html">Creative Agency</a>
                            <a class="dropdown-item" href="index5.html">Digital Agency</a>
                            <a class="dropdown-item" href="index4.html">Business One Page</a>
                            <a class="dropdown-item" href="index3.html">Corporate Business</a>
                            <a class="dropdown-item" href="index6.html">Modern Agency</a>
                            <a class="dropdown-item" href="index7.html">Freelancer</a>
                            <a class="dropdown-item" href="index8.html">Architecture</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Works</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="showcase.html">Showcase Parallax</a>
                            <a class="dropdown-item" href="showcase4.html">Showcase Carousel</a>
                            <a class="dropdown-item" href="showcase3.html">Showcase Circle</a>
                            <a class="dropdown-item" href="works.html">Portfolio Masonry</a>
                            <a class="dropdown-item" href="works2.html">Portfolio Filtering</a>
                            <a class="dropdown-item" href="works3.html">Portfolio Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blog Standerd</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
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

</body>


</html>
