<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="item md-mb50">
                    <div class="title">
                        <h5>Contact Us</h5>
                    </div>
                    <ul>
                        <li>
                            <span class="icon pe-7s-map-marker"></span>
                            <div class="cont">
                                <h6>Office Address</h6>
                                <p>Kileleshwa Heights, Nyeri Rd, Nairobi</p>
                            </div>
                        </li>
                        <li>
                            <span class="icon pe-7s-mail"></span>
                            <div class="cont">
                                <h6>Email Us</h6>
                                <p>support@vartecheastafrica.com</p>
                            </div>
                        </li>
                        <li>
                            <span class="icon pe-7s-call"></span>
                            <div class="cont">
                                <h6>Call Us</h6>
                                <p>+254 723 405320</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item md-mb50">
                    <div class="title">
                        <h5>Recent News</h5>
                    </div>
                    <ul>
                        <?php
                            $Blog = DB::table('blogs')->limit('2')->orderby('id','DESC')->get();
                        ?>
                        @foreach ($Blog as $item)
                        <li>
                            <div class="img">
                                <img src="{{url('/')}}/uploads/blog/{{$item->image}}" alt="{{$item->title}}">
                            </div>
                            <div class="sm-post">
                                <p>{{$item->title}}</p>
                                <span class="date">{{date('d', strtotime($item->created_at))}} {{date('M', strtotime($item->created_at))}} {{date('Y', strtotime($item->created_at))}}</span>
                            </div>
                        </li>
                        @endforeach

                        <li>
                            <div class="subscribe">
                                <input type="text" placeholder="Type Your Email">
                                <span class="subs pe-7s-paper-plane"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="logo">
                        <img src="img/logo-light.png" alt="">
                    </div>
                    <div class="social">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                        <a href="#0"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <div class="copy-right">
                        <p>© Copyrights {{date('Y')}},  <a href="#0">Vartech East Africa Limited</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
