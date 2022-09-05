@extends('front.master')

@section('content')

    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header circle-bg valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cont mt-100 mb-50 text-center">
                        <h1 class="color-font fw-700">Our dedicated team of creatives is bursting with talent,
                            experience and passion for what we do.</h1>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="img">
                        <img src="{{asset('theme/img/slid/about.jpg')}}" alt="Vartech East Africa">
                    </div>
                </div>
            </div>
        </div>
        <div class="half sub-bg">
            <div class="circle-color">
                <div class="gradient-circle"></div>
                <div class="gradient-circle two"></div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Intro ==================== -->

    <section class="intro-section section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="htit sm-mb30">
                        <h4>Who We Are ?</h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-8">
                    <div class="text">
                        <p class="wow txt mb-10" data-splitting>
                            At Vartech East Africa, we believe a brand’s sustainability and how it can be maximized. We call this
                            Interactively by design®.
                            <br>
                            With strategic thinking and smart technology, meticulous attention to detail and careful curation, we help
                            brands own the spotlight. To be seen, appreciated, and remembered by the right people. We call this approach
                            Interactively by Design. Because we believe sought after brands don’t happen by chance. They’re created.
                        </p>
                        <p class="wow txt" data-splitting>
                            Bring your brand’s creative vision in the best light, with exceptionally designed sites in landmark locations, we
                            believe that Quality matters. We deliver it with personalized service, clever strategic thinking and meticulous
                            attention to detail. We dont stop there, they say you’re known by the company you keep. And this rings true
                            for brands, as well as people.
                            <br>
                            We also have advanced data collection technology gathered from over 10 million mobiles in the East and
                            Central Africa ensures creating campaigns that are seen by the right people.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <!-- ==================== End Intro ==================== -->


    <!-- ==================== Start Minimal-Area ==================== -->

    <section class="min-area sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <img class="thumparallax-down" src="{{asset('theme/img/min-area.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content pt-0">
                        <h4 class="wow color-font">About us.</h4>
                        <p class="wow txt" data-splitting>Our creative Ad agency is ranked among the finest in
                            Africa. We cultivate smart ideas for start-ups and seasoned players.
                        </p>
                        <ul class="feat">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6><span>1</span> Our Mission</h6>
                                <p>We’re in business to save your brand</p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6><span>2</span> Our Goals</h6>
                                <p>To offer a wide range of well-designed, functional interactively by design ideas to brands.</p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <h6><span>3</span> Why Us? </h6>
                                <p>
                                    “We are NEW. We are DIFFERENT. We are here to SERVE YOU BETTER,”.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Minimal-Area ==================== -->







    <!-- ==================== Start call-to-action ==================== -->

    <section class="call-action section-padding bg-img" data-background="img/patrn.svg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="content sm-mb30">
                        <h6 class="wow" data-splitting>Let’s Talk</h6>
                        <h2 class="wow" data-splitting>about your <br> <b class="back-color">next project</b>.</h2>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 valign">
                    <a href="{{url('/')}}/contact-us" class="butn bord curve wow fadeInUp" data-wow-delay=".5s"><span>Get In
                            Touch</span></a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End call-to-action ==================== -->



    <!-- ==================== Start Footer ==================== -->

    @include('front.footer')

    <!-- ==================== End Footer ==================== -->
@endsection
