@extends('layouts.master')

@section('main-content')
<div class="container">

    <div class="row">
        <div class="col-12 col-lg-7 mt-5 mb-5 text-center ">
            
        @php
          $directory = "./img/products/product-page/".$product->slug."/slide/";
          $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
        @endphp

            <div class="swiper-container swiper-product swiper_style">
                <div class="swiper-wrapper padding-0">
                  @for($i = 1; $i <= $filecount; $i++)
                    <div class="swiper-slide">
                      <img src="/img/products/product-page/{{$product->slug}}/slide/{{$product->slug}}-{{$i}}.jpg" class="img-fluid img-height center-block">
                    </div>
                  @endfor
                </div>

                <div class="swiper-pagination swiper-product-pagination"></div>
            </div>
            
            <div class="col-12 d-none d-lg-block d-lg-block mt-1 p-0">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper" style="margin-left:-14%">
                      @for($i = 1; $i <= $filecount; $i++)
                        <div class="swiper-slide col-md-3 p-0">
                          <img src="/img/products/product-page/{{$product->slug}}/slide/thumbs/{{$product->slug}}-{{$i}}.jpg" class="img-fluid center-block">
                        </div>
                      @endfor
                    </div>
                </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 leftside">
            <div class="product_title">
                <h3><b>{{$product->name}}</b></h3>
            </div>
            <div class="product_sub_title">
                <h4 class="text-uppercase">{{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }}</h4>
            </div>
            <div class="product_description col-12 p-0 text-justify my-4">
                 {!! $product->product_languages[0]->description !!}
            </div>
            <div class="p-0">
                <a rel="modal:open" href="{{route('modal-product-price', ['product' => $product->slug] )}}" class="btn-background-full col-12 col-lg-6">REQUEST PRICE</a>
            </div>
            
            @if($product->is_partner == 1)
            <div class="col-12 p-0 mt-5 product_partners"> 
                <span class="text-uppercase">in partnership with</span> <br>
                <a href="{{ $product->product_brands[0]->brand->website_url }}" target="_blank">
                  <img src="/img/icons/partners/logo-{{ $product->product_brands[0]->brand->slug }}-d.png" alt="">
                </a>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
      <div class="container mt-5">

        <ul class="nav nav-tabs nav-tabs-all-products">
          <li class="active"><a data-toggle="tab" href="#product-details" class="active"><h5 class="m-0 boldtext">PRODUCT DETAILS</h5></a></li>
          <li class="ml-5"><a data-toggle="tab" href="#shipping"><h5 class="m-0 boldtext">SHIPPING & RETURNS</h5></a></li>
          <!-- <li class="ml-5"><a data-toggle="tab" href="#product-files"><h5 class="m-0 boldtext">PRODUCT FILES</h5></a></li> -->
        </ul>

        <div class="tab-content">
            <div id="product-details" class="tab-pane in active show">
              <div class="col-12 pl-0 mt-3 float-left">
                
                <div class="row">
                  
                  @foreach($product->product_languages[0]->getAttributes() as $key => $value)
                    
                    @if(!($key == 'id') && !($key == 'product_id') && !($key == 'description') && !($key == 'language_id') && !($key == 'materials_finishes') && ($value != NULL)) 
                      <div class="col-6 col-lg-3 mb-4">
                        {!! $value !!}
                      </div>
                    @endif

                  @endforeach

                  <div class="col-6 col-lg-3 mb-3">
                    {!!$product->product_languages[0]->materials_finishes !!}
                  </div>
                </div>

              </div>
            </div>

            <div id="shipping" class="tab-pane fade mt-3">
                <p class="text-justify">
                Shipping Incoterm could be Ex Works (EXW), DAP or DDP – Origin Porto, Portugal; <br>
                All the transports made by COVET Lda are insured. If transportation is arranged by COVET HOUSE, fees will be charged separately from the product(s) value. Standard shipping quotation includes door-to-door, drop off service only. If a different service or urgent delivery is required, the customer must clearly request it when placing the order and will be charged accordingly. All products are carefully packed and inspected prior to shipment. <br>
                We are not responsible for damages caused by handling, loading or unloading by people acting on behalf of the customer. COVET HOUSE is not responsible for loss or damage in transit. Should visible or concealed damage occur in transit, immediately notify the delivering carrier with initial notification of intent to file a claim. <br>
                Any damage should be communicated to the sales rep during the first 48 hours after receiving the order; photographic and video evidence of the damages should be sent via email. Failure to report concealed damage within 48 hours of reception may result in the denial of the claim. <br>
                You can find more information about shipping and returns at <a href="{{route('terms-and-conditions')}}">Terms&Conditions</a>.
                </p>
            </div>

            <!-- <div id="product-files" class="tab-pane fade mt-3">
                    <a href="https://www.caffelattehome.com/" target="_blank"><i class="fas fa-file fa-2x "></i> DOWNLOAD EN</a><br><br>
                    <a href="https://www.caffelattehome.com/" target="_blank"><i class="fas fa-file fa-2x"></i> DOWNLOAD PT</a>
            </div> -->
          </div>
      </div>
    </div>
    
    @php
      $directory = "./img/products/product-page/".$product->slug."/ambiences/";
      $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
    @endphp
    
    @if($filecount > 0)
    <div class="row">
      <div class="col-12 mt-5" >
        <img src="/img/products/product-page/{{$product->slug}}/ambiences/{{$product->slug}}-1.jpg" class="img-fluid">
        <!-- <img src="https://via.placeholder.com/600x550" class="img-fluid d-block d-md-none "> -->
      </div>
    </div>
    @endif

    <div class="row">
      <div class="col-12 text-center mt-5 mb-5">
        <h2>COMPLETE THE ROOM</h2>
      </div>
    </div>

    <div class="row">
      @foreach($random_products as $random_product)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3">
          <a rel="modal:open" href="{{route('modal-product-price', ['product' => $random_product->slug] )}}">
              <img src="/img/products/exclusive-products/{{ $random_product->slug }}.png" alt="" class="img-fluid">
              <div class="caption">{{ $random_product->name }}</div>
              <div class="caption-sub"> {{ ucwords($random_product->sub_category->sub_category_languages[0]->name) }}</div>
          </a>
          <div class="text-center">
              <a rel="modal:open" href="{{route('modal-product-price', ['product' => $random_product->slug] )}}" class="btn-border-full btn-get-price">GET PRICE</a>
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
    <meta property="og:url" content="https://www.caffelattehome.com/products/{{$product->slug}}" />
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
            
        }

        @media only screen and (min-width: 517px) and (max-width: 767px){ 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

          
        }

        @media only screen and (min-width: 412px) and (max-width: 517px){ 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

            
        }

        @media only screen and (max-width: 412px) { 
            .nav-tabs-all-products li a.active h5{
              font-weight: bold !important;
            }

          
        }
    </style>



@endsection

@section('footer-includes')
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
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
</script>

<script>
$(window).load(function(){
  var swiper = new Swiper('.swiper-product', {
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.swiper-button-next-thumb',
      prevEl: '.swiper-button-prev-thumb',
    },
    loop:true,
    loopedSlides:4
  });

  galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop:true,
    loopedSlides:3,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  swiper.controller.control = galleryThumbs;
  galleryThumbs.controller.control = swiper;


});

  </script>
@endsection