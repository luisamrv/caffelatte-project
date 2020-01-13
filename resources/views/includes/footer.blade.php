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
                        <a href="https://delightfull.eu/en" target="_blank"><img src="./img/icons/partners/logo-delightfull.png" alt="" class="mr-2" style="width:90px;"></a>
                        <a href="http://essentialhome.eu/" target="_blank"><img src="./img/icons/partners/logo-essential-home.png" alt="" class="mx-2"></a>
                        <a href="https://brabbu.com/" target="_blank"><img src="./img/icons/partners/logo-brabbu.png" alt="" class="mx-2" style="width:80px;"></a>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-2 ft-col my-3">
                    <h6>SUBSCRIBE NEWSLETTER</h6>
                    <div>
                        <form action="" method="post" class="form_subscribe_ft">
                            @csrf()
                            <input type="text" name="interested" class="form-control interested">
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

<script type="text/javascript">
    $(".origin").val(tracker.url_origin);
    $(".referrer").val(tracker.referrer);
    $(".lead_path").val(tracker.flow);
</script>

<script type="text/javascript" src="https://www.circu.net/js/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

@section('footer-includes')
    @show