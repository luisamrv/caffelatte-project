<div class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-lg-12 py-3">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-2 ft-col my-3">
                    <h6>THE BRAND</h6>
                    <ul>
                        <li><a>About Us</a></li>
                        <li><a>Contact Us</a></li>
                        <li><a>Terms & Conditions</a></li>
                        <li><a>Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-2 ft-col my-3">
                    <h6>ALL PRODUCTS</h6>
                    <ul>
                        <li><a href="/products#upholstery">Upholstery</a></li>
                        <li><a href="/products#tables">Tables</a></li>
                        <li><a href="/products#mirrors">Mirrors</a></li>
                        <li><a href="/products#lighting">Lighting</a></li>
                        <li><a href="/products#rugs">Rugs</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-2 ft-col my-3">
                    <h6>COLLECTIONS</h6>
                    <ul>
                        <li><a>Press</a></li>
                        <li><a>Blog</a></li>
                        <li><a>Brochure</a></li>
                        <li><a>Pricelist</a></li>
                        <li><a>News & Events</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3 ft-col my-3">
                    <h6>IN PARTNERSHIP WITH</h6>
                    <ul>
                        <li>
                            <a href="https://delightfull.eu/en" target="_blank"><img src="/img/icons/partners/logo-delightfull.png" alt="" style="height:50px;"></a>
                        </li>
                        <li>
                            <a href="http://essentialhome.eu/" target="_blank"><img src="/img/icons/partners/logo-essential-home.png" alt="" style="height:50px;"></a>
                        </li>
                        <li>
                            <a href="https://brabbu.com/" target="_blank"><img src="/img/icons/partners/logo-brabbu.png" alt="" style="height:50px;"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3 ft-col my-3">
                    <h6>SUBSCRIBE NEWSLETTER</h6>
                    <div>
                        <form action="{{route('process.subscribe')}}" method="post" class="form_subscribe_ft">
                            @csrf()
                            <input type="text" name="interested" class="form-control interested">
                            <input type="hidden" name="origin" class="origin"/>
                            <input type="hidden" name="referrer" class="referrer"/>
                            <input type="hidden" name="lead_path" class="lead_path"/>
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                            <button style="background-color: transparent;color: white;width:auto;" type="submit">
                                <img style="filter:invert(100%)" src="https://pullcast.eu/img/right-arrow.png" class="img-fluid text-center">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="/js/parsley.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

@section('footer-includes')
    @show