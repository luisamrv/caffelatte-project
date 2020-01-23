@extends('layouts.master')

@section('main-content')
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


<div class="container">

    <div class="row">
        <div class="col-12 col-lg-7 mt-5 mb-5 text-center ">
            <div class="swiper-container swiper-product swiper_style">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper padding-0">
                    <!-- Slides -->
                    <div class="swiper-slide "><img src="https://via.placeholder.com/700x401" class="img-fluid img-height center-block"></div>
                    <div class="swiper-slide "><img src="https://via.placeholder.com/700x402" class="img-fluid img-height center-block"></div>
                    <div class="swiper-slide "><img src="https://via.placeholder.com/700x403" class="img-fluid img-height center-block"></div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-product-pagination"></div>



            </div>

            <div class="col-xs-12 d-none d-lg-block d-lg-block mt-1 p-0">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper" style="margin-left:-8%">
                        <div class="swiper-slide col-md-3 p-0">
                          <img src="https://via.placeholder.com/180x160" class="img-responsive center-block img-fluid">
                        </div>

                        <div class="swiper-slide col-md-3 p-0">
                          <img src="https://via.placeholder.com/180x160" class="img-responsive center-block img-fluid">
                        </div>

                        <div class="swiper-slide col-md-3 p-0">
                          <img src="https://via.placeholder.com/180x160" class="img-responsive center-block img-fluid">
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 leftside">
            <div class="titulo text-center">
                <h3><b>Marco</b></h3>
            </div>
            <div class="sub-titulo text-center">
                <h4>Sofa</h4>
            </div>
            <div class="col-12" style="padding:0;text-align: justify;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div style="padding:0;">
              <a rel="modal:open" href="https://www.caffelattehome.com/includes/modal-product-price/kafe-sideboard" class="btn-background-full col-12 col-lg-6">REQUEST PRICE</a>
            </div>
        </div>
    </div>

    <div class="row">
          <div class="container mt-5">

              <ul class="nav nav-tabs nav-tabs-all-products">
                <li class="active"><a data-toggle="tab" href="#product-details" class="active"><h5 class="m-0 boldtext">PRODUCT DETAILS</h5></a></li>
                <li class="ml-5"><a data-toggle="tab" href="#shipping"><h5 class="m-0 boldtext">SHIPPING & RETURNS</h5></a></li>
                <li class="ml-5"><a data-toggle="tab" href="#product-files"><h5 class="m-0 boldtext">PRODUCT FILES</h5></a></li>
              </ul>

            <div class="tab-content">
                <div id="product-details" class="tab-pane fade in active show">
                  <div class="col-12 pl-0 mt-3 float-left">
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>WIDTH</b></h5>
                      <p class="normal-transform">360 millimeters (14.17in)</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>HEIGHT</b></h5>
                      <p class="normal-transform">480 millimeters (18.901in)</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>DEPTH</b></h5>
                      <p class="normal-transform">360 millimeters (14.17in)</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>Weight</b></h5>
                      <p class="normal-transform">7,5 kilograms</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>CUBICAGE</b></h5>
                      <p class="normal-transform">0,110 m3</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>Metric</b></h5>
                      <p class="normal-transform">2 meters (78.74in)</p>
                    </div>
                    <div class="col-6 col-lg-3 p-0 float-left">
                      <h5 class="mb-0"><b>MATERIALS AND FINISHES</b></h5>
                      <p class="normal-transform">Fabric:<br />Salvador 02<br />Sofia 59</p>
                    </div>
                  </div>
                </div>

                <div id="shipping" class="tab-pane fade mt-3">
                    <!-- <h5><b>Shipping and returns</b></h5> -->
                    <p class="text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <a target="_blank" href="https://www.caffelattehome.com/"><b>Terms&Conditions</b></a>.
                    </p>
                </div>

                <div id="product-files" class="tab-pane fade mt-3">
                        <a href="https://www.caffelattehome.com/" target="_blank"><i class="fas fa-file fa-2x "></i> DOWNLOAD EN</a><br><br>
                        <a href="https://www.caffelattehome.com/" target="_blank"><i class="fas fa-file fa-2x"></i> DOWNLOAD PT</a>
                </div>
              </div>
          </div>
    </div>

    <div class="row">
      <div class="col-12  mt-5" >
        <img src="https://via.placeholder.com/1110x550" class="img-fluid d-none d-md-block">
        <img src="https://via.placeholder.com/600x550" class="img-fluid d-block d-md-none ">
      </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mt-5 mb-5">
            <h2>COMPLETE THE ROOM</h2>
        </div>
    </div>

    <div class="row">
                @foreach($products as $product)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 my-3">
                        <a rel="modal:open" href="{{route('modal-product-price', ['product' => $product->slug] )}}">
                            <img src="/img/products/exclusive-products/{{ $product->slug }}.png" alt="" class="img-fluid">
                            <div class="caption">{{ $product->name }}</div>
                            <div class="caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                        </a>
                        <div class="text-center">
                            <a rel="modal:open" href="{{route('modal-product-price', ['product' => $product->slug] )}}" class="btn-border-full btn-get-price">GET PRICE</a>
                        </div>
                </div>
                @endforeach
        </div>

</div>


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
        @media only screen and (min-width: 992px){
            .leftside {
                margin-top:100px;
            }
          }

        @media only screen and (min-width: 992px){
            .titulo {
              text-align:left !important;
            }
            .sub-titulo {
                text-align:left !important;
            }
        }

        @media only screen and (min-width: 768px){
            .nav-tabs-all-products li a.active h5{
              border-bottom: 2px solid #3a2d24;
            }
        }

        @media only screen and (min-width: 517px) and (max-width: 767px){ 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

            .nav-tabs-all-products li h5{
              font-size:15px;
            }
        }

        @media only screen and (min-width: 412px) and (max-width: 517px){ 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

            .nav-tabs-all-products li h5{
              font-size:11px;
            }
        }

        @media only screen and (max-width: 412px) { 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

            .nav-tabs-all-products li h5{
              font-size:50%;
            }
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar{
            bottom:0 !important;
            top: auto !important;
            height:2px !important;
        }
        .swiper-pagination-progressbar-fill{
          background-color:#3a2d24 !important;
        }

        .nav-tabs {
            border-bottom: 1px solid #3a2d24 !important;
        }
        .gallery-thumbs {
          height: 20%;
          box-sizing: border-box;
          padding: 10px 0;
        }
        .gallery-thumbs .swiper-slide {
          height: 100%;
          opacity: 0.4;
        }
        .gallery-thumbs .swiper-slide-active {
          opacity: 1;
        }
    </style>



@endsection

@section('footer-includes')

<script>
$(window).load(function(){
  var swiper = new Swiper('.swiper-product', {
            pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          loop:true,
          loopedSlides:4,
     });
     galleryThumbs = new Swiper('.gallery-thumbs', {
         spaceBetween: 4,
         centeredSlides: true,
         slidesPerView: 'auto',
         touchRatio: 0.2,
         slideToClickedSlide: true,
         loop:true,
         loopedSlides:4,
        breakpoints: {
       1024: {
         slidesPerView: 3,
       },
       768: {
         slidesPerView: 3,
       },
       640: {
         slidesPerView: 2,
       },
       320: {
         slidesPerView: 1,
       }
     }
      });

      swiper.controller.control = galleryThumbs;
      galleryThumbs.controller.control = swiper;
     // $('.swiper-product').css('height',$('.teste').height());
     imgheight = $('.img-height').height();
     $('.swiper-button-next-novelties').css("height", imgheight);
     $('.swiper-button-prev-novelties').css("height", imgheight);



     swiper = new Swiper('swiper-recomended', {
         spaceBetween: 0,
         slidesPerView: 3,
         loop:true,
         navigation: {
            nextEl: '.swiper-button-next-rec',
            prevEl: '.swiper-button-prev-rec',
          },
        breakpoints: {
       1024: {
         slidesPerView: 3,
         spaceBetween: 0,
       },
       768: {
         slidesPerView: 2,
         spaceBetween: 0,
         autoplay: {
           delay: 2000,
           disableOnInteraction: false,
         },
       },
       640: {
         slidesPerView: 2,
         spaceBetween: 0,
         autoplay: {
           delay: 2000,
           disableOnInteraction: false,
         },
       },
       320: {
         slidesPerView: 1,
         spaceBetween: 0,
         autoplay: {
           delay: 2000,
           disableOnInteraction: false,
         },

       }
     }
      });

});

  </script>
@endsection