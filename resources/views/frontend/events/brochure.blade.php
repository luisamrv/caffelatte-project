@extends('layouts.master')

@section('main-content')
<div class="container" id="main-slide">
    <div class="row">
        <div class="col-12 col-lg-6 owl-main owl-carousel owl-slide owl-theme nopadding position-relative pt-5 ">
            <div class="item">
                <img src="https://via.placeholder.com/550x450">
            </div>
        </div>

        <div class="col-12 col-lg-6 leftside">
            <div class="titulo">
                <h1><b>THERE'S BEAUTY IN SIMPLICITY</b></h1>
            </div>
            <div class="sub-titulo">
                <h2>CAFFE LATTE CREATED A COLLECTION OF FURNITURE, LIGHTING AND ACESSORIES</h2>
            </div>
            <div class="sub-titulo" style="text-align:justify;">
                <p>CAFFE LATTE is a collection of furniture, lighting and acessories with a remarkable ability to fit into any style of interiors duw to its modern aesthetic, minimalist and functional design, and consensual focus on neutral tones.</p>
                <p>The strong yet not overpowering Designs value first and foremost the space and concept they are selected to furnish, while Craftmanship provides the quality in details that makes all projects unique.</p>
            </div>
            <div style="padding:0;">
                <a href="mailto:info@caffelattehome.com?subject=Get%20my%20discount%20Maison%20et%20Objet%202020"  class="btn-background-full col-12 col-lg-5">DOWNLOAD NOW</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mt-5 mb-5">
            <h2>MOST WANTED <b>PRODUCTS</b></h2>
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
       @media only screen and (min-width: 1200px){
            .leftside {
                margin-top:210px;
            }
        }

        @media only screen and (max-width: 1199px){
            .leftside {
                margin-top:74px;
            }
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
@endsection