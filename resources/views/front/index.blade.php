@extends('front.master')

@section('content')

    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('theme/img/slid/5fd84f336cbf2.png')}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30 text-center">
                                        <h1 class="color-font">Digital <br> Design <span class="text-white beWhite">Solutions</span></h1>
                                        <p style="margin:0 auto; max-width:500px">
                                            At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                                            Interactively by design®.
                                        </p>
                                        <a href="#0" class="butn bord curve mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('theme/img/slid/JCDecaux-Airport_collage-01.png')}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30">
                                        <h1>Original <span class="color-font">Solutions</span> </h1>

                                        <p style="margin:0 auto; max-width:500px">
                                            At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                                            Interactively by design®.
                                        </p>
                                        <a href="#0" class="butn bord curve mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('theme/img/slid/hero-ivision_0.jpg')}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30 text-center">
                                        <h1>Business <span class="color-font">value</span> <br> <span
                                            class="color-font">through</span> innovation</h1>
                                        <p style="margin:0 auto; max-width:500px">
                                            At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                                            Interactively by design®.
                                        </p>
                                        <a href="#0" class="butn bord curve mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{asset('theme/img/slid/how-to-advertise-in-shopping-malls-1200x675.jpg')}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30 text-center">
                                        <h1 class="color-font">Digital <br> Design <span class="text-white beWhite">Solutions</span></h1>
                                        <p style="margin:0 auto; max-width:500px">
                                            At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                                            Interactively by design®.
                                        </p>
                                        <a href="#0" class="butn bord curve mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm "></div>

            <div class="social-icon">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
                <a href="#0"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </header>



    <!-- ==================== End Slider ==================== -->



    <div class="main-content">


        <!-- ==================== Start about ==================== -->

        <section class="about-us section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="mb-50">
                            <h6 class="fw-100 text-u ls10 mb-10">About Us</h6>
                            <h3 class="fw-600 text-u ls1 mb-30 color-font">Our Comapny</h3>
                            <p>
                                At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                                Interactively by design®.
                                <br><br>
                                With strategic thinking and smart technology, meticulous attention to detail and careful curation, we help
                                brands own the spotlight. To be seen, appreciated, and remembered by the right people. We call this approach
                                Interactively by Design. Because we believe sought after brands don’t happen by chance. They’re created.
                            </p>
                            <a href="{{url('/')}}/about-us" class="butn bord curve mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 img">
                        <img src="{{asset('theme/img/feat.jpg')}}" alt="">
                        <div class="stauts">
                            <div class="item">
                                <h4>50<span></span></h4>
                                <h6>Happy Clients</h6>
                            </div>
                            <div class="item">
                                <h4>100<span></span></h4>
                                <h6>Success Projects</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="services bords section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            {{-- <h6 class="wow fadeIn" data-wow-delay=".5s">Quality Guaranteed</h6>
                            <h3 class="wow color-font">Digital Design Solutions</h3> --}}
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow color-font">We are a new digital product development agency</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $Services = DB::table('services')->get(); $Count = 5;  ?>
                    @foreach ($Services as $services)
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".{{$Count}}s">
                        <div class="item-box md-mb50">
                            <span class="icon {{$services->icon}}"></span>
                            <h6>{{$services->title}}</h6>
                            <p>{{$services->meta}}
                            </p>
                            <div class="text-center">
                                <a href="{{url('/')}}/services/{{$services->slung}}" class="butn bord curve mt-30">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <?php $Count = $Count+2; ?>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start works ==================== -->

        <section class="work-carousel metro position-re">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{asset('theme/coming-soon.jpg')}}">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a style="font-weight: 900" href="#0">Network & Locations</a></h6>
                                            {{-- <h4><a href="#">Our Work</a></h4> --}}

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{asset('theme/coming-soon.jpg')}}">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a style="font-weight: 900" href="#0">Network & Locations</a></h6>
                                            {{-- <h4><a href="#">Our Work</a></h4> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{asset('theme/coming-soon.jpg')}}">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a style="font-weight: 900" href="#0">Network & Locations</a></h6>
                                            {{-- <h4><a href="#">Our Work</a></h4> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{asset('theme/coming-soon.jpg')}}">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a style="font-weight: 900" href="#0">Network & Locations</a></h6>
                                            {{-- <h4><a href="#">Our Work</a></h4> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="{{asset('theme/coming-soon.jpg')}}">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a style="font-weight: 900" href="#0">Network & Locations</a></h6>
                                            {{-- <h4><a href="#">Our Work</a></h4> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                                <span class="simple-btn right">Next</span>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                                <span class="simple-btn">Prev</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End works ==================== -->



        <!-- ==================== Start numbers ==================== -->

        <section class="number-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">FUN FACTS</h6>
                            <h3 class="wow color-font">Pleasure in the job puts perfection in the work.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon pe-7s-smile"></span>
                            <h3 class=""><span class="count">24</span></h3>
                            <p class="wow txt" data-splitting>Staff</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon pe-7s-portfolio"></span>
                            <h3 class=""><span class="count">50</span></h3>
                            <p class="wow txt" data-splitting>Projects</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord">
                            <span class="icon pe-7s-medal"></span>
                            <h3 class=""><span class="count">3</span></h3>
                            <p class="wow txt" data-splitting>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End numbers ==================== -->

        <!-- ==================== Start video ==================== -->

        <section class="block-sec">
            <div class="background bg-img pt-100 pb-0 parallaxie" data-background="{{asset('theme/img/bg-vid.jpg')}}"
                data-overlay-dark="5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="vid-area">
                                <span class="text">Watch Video</span>
                                <div class="vid-icon">
                                    <a class="vid" href="https://vimeo.com/127203262">
                                        <div class="vid-butn">
                                            <span class="icon">
                                                <i class="fas fa-play"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="testim-box">
                                <div class="head-box">
                                    <h6 class="wow fadeIn" data-wow-delay=".5s">Our Clients</h6>
                                    <h4 class="wow fadeInLeft" data-wow-delay=".5s">What Client's Say?</h4>
                                </div>
                                <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="item">
                                        <p>"In my history of working with marketing and advertising agency I can honestly say that there is not one company that I've ever worked with that has better service than Vartech East Africa.”</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="{{asset('theme/img/clients/istockphoto-1300845620-612x612.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Morris Ndonye</h6>
                                                    <span class="author-details">Client</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>"I’m never really worried about service delivery. I can call over there and talk to anyone and get my questions answered in an instant. Ease of getting a hold of people. All communication with them is really easy. They do handle everything.“</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="{{asset('theme/img/clients/istockphoto-1300845620-612x612.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Errick Otieno</h6>
                                                    <span class="author-details">Client</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>“Vartech East Africa is not a provider. They are not a supplier. They are a partner with expertise in making sure your brand is interactively by design, that makes you Stand out in market.”</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="{{asset('theme/img/clients/myPhoto.jpeg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Albert Muhatia</h6>
                                                    <span class="author-details">Operations Manager, Designekta Studios</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End video ==================== -->


        <!-- ==================== Start Skills Circle ==================== -->

        <section class="skills-circle pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item wow fadeInLeft" data-wow-delay=".6">
                                        <div class="skill" data-value="1">
                                            <span class="">33.3%</span>
                                        </div>
                                        <div class="cont">
                                            <span></span>
                                            <h6>Marketing</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item wow fadeInLeft" data-wow-delay=".3">
                                        <div class="skill" data-value="1">
                                            <span class="">33.3%</span>
                                        </div>
                                        <div class="cont">
                                            <span></span>
                                            <h6>Advertisement</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="item wow fadeInLeft" data-wow-delay=".3">
                                        <div class="skill" data-value="1">
                                            <span class="">33.3%</span>
                                        </div>
                                        <div class="cont">
                                            <span></span>
                                            <h6>Production</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Skills Circle ==================== -->



        <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign md-mb50">
                        <div class="sec-head mb-0">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow mb-20 color-font">Our Clients</h3>
                            <p>Our area of practice is quite wide: design, graphics, branding, development.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord">
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-1.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.safaricom.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-2.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.toyota.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".8s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-4.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.airtel.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-5.png" alt="">
                                            <a href="#0" class="link" data-splitting>Crowne</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-6.png" alt="">
                                            <a href="#0" class="link" data-splitting>whats Good Network</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".7s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-7.png" alt="">
                                            <a href="#0" class="link" data-splitting>IsMarriot</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".5s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-8.png" alt="">
                                            <a href="#0" class="link" data-splitting>C-Hub</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-9.png" alt="">
                                            <a href="#0" class="link" data-splitting>Fusion HR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{url('/')}}/uploads/clients/logos-10.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.aste.co.ke</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End clients Brands ==================== -->



        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding sub-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">RECENT ARTICLES</h6>
                            <h3 class="wow color-font">From our blogs.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="{{asset('theme/img/blog/1.jpg')}}" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="info">
                                        <a href="#0" class="date">
                                            <span><i>06</i> August</span>
                                        </a>
                                        <span>/</span>
                                        <a href="#0" class="tag">
                                            <span>WordPress</span>
                                        </a>
                                    </div>
                                    <h5>
                                        <a href="#0">How to use solid color combine with simple furnitures.</a>
                                    </h5>
                                    <div class="btn-more">
                                        <a href="#0" class="simple-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="{{asset('theme/img/blog/2.jpg')}}" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="info">
                                        <a href="#0" class="date">
                                            <span><i>06</i> August</span>
                                        </a>
                                        <span>/</span>
                                        <a href="#0" class="tag">
                                            <span>WordPress</span>
                                        </a>
                                    </div>
                                    <h5>
                                        <a href="#0">How to use solid color combine with simple furnitures.</a>
                                    </h5>
                                    <div class="btn-more">
                                        <a href="#0" class="simple-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



        <!-- ==================== Start call-to-action ==================== -->
        <section class="call-action section-padding sub-bg bg-img" data-background="{{asset('theme/img/patrn.svg')}}">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Let’s Talk</h6>
                            <h2 class="wow" data-splitting>about your <br> <b class="back-color">next project</b>.</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="{{url('/')}}/contact-us" class="butn bord curve wow fadeInUp" data-wow-delay=".5s">
                            <span>Get In Touch</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        @include('front.footer')

        <!-- ==================== End Footer ==================== -->


    </div>


@endsection
