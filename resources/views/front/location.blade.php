@extends('front.master')

@section('content')
<!-- ==================== Start Header ==================== -->

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="cont text-center">
                    <h1 class="mb-10 color-font">{{$title}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== Start Header ==================== -->
<section class="blog-pg single section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="post">
                    <div class="img">
                        <img src="{{url('/')}}/uploads/portfolio/{{$image}}" alt="{{$title}}">
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ==================== Start Footer ==================== -->

    @include('front.footer')

    <!-- ==================== End Footer ==================== -->
@endsection
