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
                    @foreach ($Service as $S)
                    <div class="img">
                        <img src="{{url('/')}}/uploads/{{$S->image}}" alt="{{$title}}">
                    </div>
                    @endforeach
                    <div class="content pt-60">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="cont">
                                    
                                    @foreach ($Service as $S)
                                    <div class="spacial">
                                        {!! html_entity_decode($S->content, ENT_QUOTES, 'UTF-8') !!}
                                    </div>
                                    @endforeach
                                    
                                   

                                   

                                    
                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-10">
                                                <img src="img/blog/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-10">
                                                <img src="img/blog/3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="pagination">
                            <?php
                                    $ProductID = $S->id;
                                    $ProductNext = $ProductID+1;
                                    $ProductPrev = $ProductID-1;
                            ?>
                            @if($ProductPrev<1)

                            @else
                                <?php
                                    $ProductPrevFetch = App\Models\Service::find($ProductPrev);
                                ?>

                                @if($ProductPrevFetch == null)

                                @else
                                <span><a href="{{url('/')}}/services/{{$ProductPrevFetch->slung}}">Prev Post</a></span>
                                @endif
                            @endif
                            <span class="icon"><a href="{{url('/')}}"><i class="fas fa-th-large"></i></a></span>

                            <?php $ProductNextFetch = App\Models\Service::find($ProductNext); ?>
                            @if($ProductNextFetch==null)

                            @else
                               <span class="text-right"><a href="{{url('/')}}/services/{{$ProductNextFetch->slung}}">Next Post</a></span>
                            @endif
                        
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
