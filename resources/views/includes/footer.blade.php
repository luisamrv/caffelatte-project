<div class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-lg-10 py-3">
            <div class="row">
                <div class="col-12 col-lg-2 ft-col">
                    <h6>THE BRAND</h6>
                    <ul>
                        <li><a>About Us</a></li>
                        <li><a>Contact Us</a></li>
                        <li><a>Terms & Conditions</a></li>
                        <li><a>Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-2 ft-col">
                    <h6>ALL PRODUCTS</h6>
                    <ul>
                        <li><a>Upholstery</a></li>
                        <li><a>Tables</a></li>
                        <li><a>Mirrors</a></li>
                        <li><a>Lighting</a></li>
                        <li><a>Rugs</a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-2 ft-col">
                    <h6>COLLECTIONS</h6>
                    <ul>
                        <li><a>Press</a></li>
                        <li><a>Blog</a></li>
                        <li><a>Brochure</a></li>
                        <li><a>Pricelist</a></li>
                        <li><a>News & Events</a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-3 ft-col">
                    <h6>IN PARTNERSHIP WITH</h6>
                    <ul>
                        <li><a></a></li>
                        <li><a></a></li>
                        <li><a></a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-3 ft-col">
                    <h6>SUBSCRIBE NEWSLETTER</h6>
                    <div>
                        <form action="" method="post" class="form_subscribe_ft">
                            @csrf()
                            <input type="email" placeholder="Email Address" class="form-control">
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

<script type="text/javascript">
    $(".origin").val(tracker.url_origin);
    $(".referrer").val(tracker.referrer);
    $(".lead_path").val(tracker.flow);
</script>

<script type="text/javascript" src="https://www.circu.net/js/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

@section('footer-includes')
    @show