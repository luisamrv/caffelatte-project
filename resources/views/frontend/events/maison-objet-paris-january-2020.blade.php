@extends('layouts.master')

@section('main-content')
    <div class="container-fluid" id="main-slide">
        <div class="row">
            <div class="col-12 p-0 owl-main owl-carousel owl-slide owl-theme nopadding position-relative">
                <div class="item">
                    <img src="/img/homepage/slide/maison-et-objet-2020.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-md-block">
                    <img src="/img/homepage/slide/maison-et-objet-2020-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-md-none">
                    <div class="position-absolute text-container text-light">
                        <img src="/img/landing/events/maison-et-objet-paris-jan-2020/maison-et-objet-logo.png" alt="" class="d-none d-md-inline img_logo">
                        <div class="title">
                            <h2>LAUNCHING JANUARY 17 <br> M&O PARIS HALL 8 STAND C13</h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                        <a rel="modal:open" href="{{route('modal-ebook', ['ebook' => 'ebook-new-products'] )}}">
                        <img src="/img/homepage/slide/ebook-banner.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-md-block">
                        <img src="/img/homepage/slide/ebook-banner-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-md-none">
                        <div class="position-absolute text-container text-light">
                            <div class="title" style="color:#3a2d24 !important;">
                                <h2>THE PERFECT BLEND BETWEEN DESIGN,</h2>
                                <h4>TEXTURES, FABRICS AND MATERIALS</h4>
                            </div>
                            <div class="btn-border-full" style="color:#3a2d24 !important;">Download Now</div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 my-3 py-3 py-md-5 event-description">
                <p>There's beauty in simplicity and that's why <b>CAFFE LATTE</b> created a collection of <b>furniture, lighting</b> and <b>accessories</b> with a remarkable ability to fit into any style of interiors due to its <b>modern aesthetics, minimalist</b> and <b>functional design</b>, with a consensual focus on <b>neutral tones</b>.</p>
                <h4>Looking for</h4>
                <h2>TRENDY MODERN DESIGN PIECES?</h2>
                <p>Visit us at <b>Hall 8, Stand C13</b>, in Maison et Objet 2020, and meet all this new incredible neutral toned designs first hand.</p>

                <div class="col-12 p-0">
                        <a rel="modal:open" href="{{route('modal-download-pricelist')}}" class="btn-border-full btn-get-price mr-1">DOWNLOAD PRICELIST</a>

                        <a rel="modal:open" href="{{route('modal-download-brochure')}}" class="btn-border-full btn-get-price mr-1">DOWNLOAD BROCHURE</a>

                        <a rel="modal:open" href="{{route('modal-book-a-meeting')}}" class="btn-border-full btn-get-price mr-1">BOOK A MEETING</a>

                </div>
            </div>

            <div class="col-12 col-lg-6 px-1 my-3 position-relative">
                <a rel="modal:open" href="{{route('modal-download-press-release', ['slug' => 'press-release-maison-objet-paris-2020'] )}}">
                    <img src="/img/landing/events/maison-et-objet-paris-jan-2020/press-release-mo.jpg" alt="" class="img-fluid">
                    <div class="position-absolute text-container text-light" style="left:9%;bottom:12%;">
                        <div class="title">
                            <h2>FRESH & NEW</h2>
                            <h4>Press Release <br>Caffe Latte M&O 2020</h4>
                            <span class="btn-border-full btn-get-price">DOWNLOAD NOW</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 p-1 text-center">
                <a rel="modal:open" href="https://www.caffelattehome.com/includes/modal-product-price/winnow-table-lamp">
                    <img src="/img/landing/events/maison-et-objet-paris-jan-2020/products/winnow-table-lamp.jpg" alt="" class="img-fluid">
                    <div class="position-absolute" style="bottom:1rem;left:0;right:0;">
                        <div class="caption">Winnow Table</div>
                        <div class="btn-border-full btn-get-price mt-1">GET PRICE</div>
                    </div> 
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 p-1 text-center">
                <div class="section-bg-latte">
                    <a rel="modal:open" href="https://www.caffelattehome.com/includes/modal-product-price/liberica-console">
                        <img src="/img/landing/events/maison-et-objet-paris-jan-2020/products/liberica-console.jpg" alt="" class="img-fluid">
                        <div class="position-absolute" style="bottom:1rem;left:0;right:0;">
                            <div class="caption">Liberica Console</div>
                            <div class="btn-border-full btn-get-price mt-1">GET PRICE</div>
                        </div> 
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 p-1 text-center">
                <div class="section-bg-latte">
                    <a rel="modal:open" href="https://www.caffelattehome.com/includes/modal-product-price/jute-rug">
                        <img src="/img/landing/events/maison-et-objet-paris-jan-2020/products/jute-rug.jpg" alt="" class="img-fluid">
                        <div class="position-absolute" style="bottom:1rem;left:0;right:0;">
                            <div class="caption">Jute Rug</div>
                            <div class="btn-border-full btn-get-price mt-1">GET PRICE</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 pr-1 position-relative d-none d-md-block">
                <div class="position-absolute" style="top:50%;transform: translateY(-50%);">
                    <div class="title">
                        <h5>TAKE A PEEK AT <br> SOME OF OUR PRODUCTS</h5>
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <a rel="modal:open" href="{{route('modal-download-hr-images', ['slug' => 'maison-objet-paris-january-2020'])}}" class="w-75 btn-background-full btn-get-price">DOWNLOAD HR IMAGES</a>
                        </div>

                        <div class="col-12">
                            <a href="mailto:info@caffelattehome.com?subject=Get%20my%20discount%20Maison%20et%20Objet%202020" class="w-75 btn-border-full btn-get-price">GET MY SPECIAL PRICE</a>
                        </div>

                        <div class="col-12 mt-5">
                            <a href="{{route('products')}}" class="btn-border-full btn-get-price px-4">DISCOVER ALL OUR PRODUCTS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                            
                    <div class="col-12 p-0 carrouselImages owl-slide owl-theme owl-carousel position-relative pt-5" >

                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-1.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-2.jpg"   class="cd-dot img-fluid">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-3.jpg"  class="cd-dot img-fluid ">
                        </div>
                         <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-4.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-5.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-6.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-7.jpg"   class="cd-dot img-fluid">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-8.jpg"  class="cd-dot img-fluid ">
                        </div>
                         <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-9.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-10.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-11.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-12.jpg"   class="cd-dot img-fluid">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-13.jpg"  class="cd-dot img-fluid ">
                        </div>
                         <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-14.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-15.jpg"  class="cd-dot img-fluid ">
                        </div>
                        <div class="item">
                            <img src="/img/landing/events/maison-et-objet-paris-jan-2020/carrousel/maison-objet-paris-january-2020-16.jpg"  class="cd-dot img-fluid ">
                        </div>
                        
                    </div>

                    <div class="col-12">


                    <div class="col-12 text-center" >
                            <a rel="modal:open" href="{{route('modal-download-hr-images', ['slug' => 'maison-objet-paris-january-2020'])}}" class="btn-background-full btn-get-price" >DOWNLOAD HR IMAGES</a>
                        </div>


                    </div>
                    
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 pr-1 position-relative d-block d-md-none mt-4">
                    <div class="title text-center">
                        <h5>TAKE A PEEK AT SOME OF OUR PRODUCTS</h5>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a rel="modal:open" href="{{route('modal-download-pricelist')}}" class="w-100 btn-border-full btn-get-price">DOWNLOAD PRICELIST</a>
                        </div>

                        <div class="col-12">
                            <a rel="modal:open" href="{{route('modal-download-brochure')}}" class="w-100 btn-border-full btn-get-price">DOWNLOAD BROCHURE</a>
                        </div>

                        <div class="col-12">
                            <a href="mailto:info@caffelattehome.com?subject=Get%20my%20discount%20Maison%20et%20Objet%202020" class="w-100 btn-border-full btn-get-price">GET MY SPECIAL PRICE</a>
                        </div>

                        <div class="col-12">
                            <a href="{{route('products')}}" class="w-100 btn-border-full btn-get-price px-4">DISCOVER ALL OUR PRODUCTS</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="container py-2">
        <div class="row">
            <div class="col-12 col-lg-6 px-1 my-3">
                <a rel="modal:open" href="{{route('modal-ebook', ['ebook' => 'ebook-top-15-id-paris'] )}}">
                    <img src="/img/landing/events/maison-et-objet-paris-jan-2020/ebook-top-15-id-paris.jpg" alt="" class="img-fluid">
                    <div class="position-absolute text-container text-light" style="left:9%;bottom:12%;">
                        <div class="title">
                            <h2>EBOOK</h2>
                            <h4>Top 25 ID Paris</h4>
                            <span class="btn-border-full btn-get-price">DOWNLOAD NOW</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-lg-6 px-1 my-3">
                <a rel="modal:open" href="{{route('modal-ebook', ['ebook' => 'ebook-paris-guidebook-2020'] )}}">
                    <img src="/img/landing/events/maison-et-objet-paris-jan-2020/ebook-paris-guidebook-2020.jpg" alt="" class="img-fluid">
                    <div class="position-absolute text-container text-light" style="left:9%;bottom:12%;">
                        <div class="title">
                            <h2>EBOOK</h2>
                            <h4>Paris Guidebook 2020</h4>
                            <span class="btn-border-full btn-get-price">DOWNLOAD NOW</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

<div class="container py-2">

    <div class="row">
        <div class="col-12 text-center title">
            <h2>START SHOPPING OUR PIECES</h2>
            <h5>WITH OUR EXCLUSIVE PARTNER COVET HOUSE</h5>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 my-3 text-center">
            <a href="https://shop.covethouse.eu/aroma-console-1.html" target="_blank">
                <img src="/img/products/thumbnails/aroma-console.jpg" alt="" class="img-fluid">
                <div class="caption">Aroma</div>
                <div class="caption-sub"> Console</div>
                <div class="btn-border-full btn-get-price">SHOP NOW</div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 my-3 text-center">
            <a href="https://shop.covethouse.eu/persia-mirror-1.html" target="_blank">
                <img src="/img/products/thumbnails/persia-mirror.jpg" alt="" class="img-fluid">
                <div class="caption">Persia</div>
                <div class="caption-sub"> Mirror</div>
                <div class="btn-border-full btn-get-price">SHOP NOW</div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 my-3 text-center">
            <a href="https://shop.covethouse.eu/kafe-sideboard.html" target="_blank">
                <img src="/img/products/thumbnails/kafe-sideboard.jpg" alt="" class="img-fluid">
                <div class="caption">Kafe</div>
                <div class="caption-sub"> Sideboard</div>
                <div class="btn-border-full btn-get-price">SHOP NOW</div>
            </a>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 my-3 text-center">
            <a href="https://shop.covethouse.eu/marco-sofa.html" target="_blank">
                <img src="/img/products/thumbnails/marco-sofa.jpg" alt="" class="img-fluid">
                <div class="caption">Marco</div>
                <div class="caption-sub"> Sofa</div>
                <div class="btn-border-full btn-get-price">SHOP NOW</div>
            </a>
        </div>
        
    </div>

</div>

@include('includes.forms.message-feedback')

@endsection

@section('meta')
    <title>Caffe Latte Modern Design</title>
    <meta name="description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic">
    <meta name="keywords" content="Neutral Furniture, Minimalist Designs, Modern Aesthetic, Neutral Tones">
    <meta name="author" content="Caffe Latte Modern Design">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Caffe Latte Modern Design" />
    <meta property="og:description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic" />
    <meta property="og:url" content="https://www.caffelattehome.com/products/" />
    <meta property="og:site_name" content="Caffe Latte Modern Design" />
    <meta name="image" content="/img/caffe-latte-logo.png">
    <meta property="og:image" content="/img/caffe-latte-logo.png" />
@endsection

@section('head-includes')
    <style>
        .event-description p {
            font-size: .95rem;
        }
        .event-description h4 { text-transform: uppercase; margin: 0; font-size: 1.1rem; }
        .event-description h2 { font-weight: normal; font-size: 1.2rem; }
        .btn-border-full {
            border: 1px solid;
            margin-top: 0.4rem;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.03rem;
            padding: 0.2rem .5rem;
            text-align: center;
        }
        .title h2 {
            text-transform: uppercase;
            margin-bottom: 0;
            letter-spacing: 0.1rem;
            font-size: 1.3rem;
        }
        .title h5 {
            text-transform: uppercase;
            letter-spacing: 0.1rem;
        }
        .position-absolute.text-container h4 {
            font-size: 1.1rem;
            letter-spacing: 0.1rem;
        }
        .btn-small { font-size: 0.65rem; }
        .text-separator {

        }
    </style>
@endsection

@section('footer-includes')
<script>
    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: true,
        nav: false,
        autoplay: true,
        fluidSpeed: 900,
        autoplaySpeed: 900,
        responsive: {
            0: {items: 1},
            600: {items: 1},
            768: {items: 1}
        }
    });

    $('.teste-collapse').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });

    $('.close-menu').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });
</script>

<script>
    $('.carrouselImages').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: true,
        nav: false,
        autoplay: true,
        fluidSpeed: 900,
        autoplaySpeed: 900,
        responsive: {
            0: {items: 1},
            600: {items: 2},
            768: {items: 3}
        }
    });

    $('.teste-collapse').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });

    $('.close-menu').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });
</script>
@endsection