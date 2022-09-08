@extends('front.master')

@section('content')

<header class="pages-header circle-bg valign position-re">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11">
                <div class="capt">
                    <div class="text-center">
                        <h1 class="color-font mb-10 fw-700">Let's talk <br> about your project.</h1>
                        <p>Feel free to ask me any question or let’s do to talk about
                            our future collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="circle-color">
        <div class="gradient-circle"></div>
        <div class="gradient-circle two"></div>
    </div>

    <div class="line bottom right"></div>
</header>

<!-- ==================== End header ==================== -->


<!-- ==================== Start main-content ==================== -->

<div class="main-content">

    <!-- ==================== Start Contact ==================== -->

    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form md-mb50">

                        <h4 class="fw-700 color-font mb-50">Get In Touch.</h4>

                        <form id="contact-form" method="post" action="#">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Name"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                        required="required"></textarea>
                                </div>

                                <button type="submit" class="butn bord"><span>Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="fw-700 color-font mb-50">Contact Info.</h4>
                        <h3 class="wow" data-splitting>Let's Talk.
                        </h3>
                        <div class="item mb-40">
                            <h5><a href="#0">info@vartecheastafrica.com</a></h5>
                            <h5>+254 722 237351</h5>
                        </div>
                        <h3 class="wow" data-splitting>Visit Us.
                        </h3>
                        <div class="item">
                            <h6>Kileleshwa Heights, Nyeri Rd,,
                                <br> Nairobi
                            </h6>
                        </div>
                        <div class="social mt-50">
                            <a href="https://www.facebook.com/VartechEastAfrica"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/Vartecheast"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/vartecheastafrica/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/vartech-east-africa-11674b1ab/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://pin.it/7xD8Y7q"><i class="fab fa-pinterest-p"></i></a>
                            {{-- <a href="#0" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->


    <!-- ==================== Start Map ==================== -->

    <div class="map" id="ieatmaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.278735044094!2d36.7799344!3d-1.2819582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ae3d137c7a19a23!2sVartech%20East%20Africa!5e0!3m2!1sen!2ske!4v1652370712304!5m2!1sen!2ske" height="450" width="100%" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <!-- ==================== End Map ==================== -->


    <!-- ==================== Start Footer ==================== -->

    @include('front.footer')

    <!-- ==================== End Footer ==================== -->


</div>

<!-- ==================== End main-content ==================== -->
@endsection
