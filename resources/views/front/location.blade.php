@extends('front.master')

@section('content')
<!-- ==================== Start Header ==================== -->

{{-- <section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="cont text-center">
                    <h1 class="mb-10 color-font">{{$title}}</h1>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{--  --}}
<br><br><br><br>
@if($title == "Highways")
<header class="slider showcase-full">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/uploads/portfolio/{{$image}}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                    {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider setting -->
        <div class="txt-botm">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <div>
                    <span>Next Slide</span>
                </div>
                <div><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <div><i class="fas fa-chevron-left"></i></div>
                <div>
                    <span>Prev Slide</span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination dots"></div>
    </div>
</header>
@elseif($title == "Private Property")
<header class="slider showcase-full">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/uploads/portfolio/soon3.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                  {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/uploads/portfolio/soon2.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                  {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/uploads/portfolio/soon1.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                  {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/uploads/portfolio/soon5.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                  {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider setting -->
        <div class="txt-botm">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <div>
                    <span>Next Slide</span>
                </div>
                <div><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <div><i class="fas fa-chevron-left"></i></div>
                <div>
                    <span>Prev Slide</span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination dots"></div>
    </div>
</header>
@else
<header class="slider showcase-full">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{url('/')}}/theme/coming-soon.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="caption">
                                    <h1>
                                        <a href="#">
                                            <div class="stroke" data-swiper-parallax="-2000">{{$title}}</div>
                                        </a>
                                        <div class="bord"></div>
                                    </h1>
                                  {{-- <div class="discover">
                                        <a href="#"><span>Explore <br> More</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

@endif
{{--  --}}






<!-- ==================== End works ==================== -->

    <!-- ==================== Start Footer ==================== -->

    @include('front.footer')

    <!-- ==================== End Footer ==================== -->
@endsection
