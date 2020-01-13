@extends('layouts.master')

@section('main-content')
<div class="container-fluid" id="main-slide">
    <div class="row">
        <div class="col-12 p-0 owl-main owl-carousel owl-slide owl-theme nopadding position-relative">
            <div class="item">
                <a href="">
                    <img src="./img/homepage/slide/maison-et-objet-2020.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-md-block">
                    <img src="./img/homepage/slide/maison-et-objet-2020-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-md-none">
                    <div class="position-absolute text-container">
                        <img src="./img/landing/events/maison-et-objet-paris-jan-2020/maison-et-objet-logo.png" alt="" class="img_logo">
                        <div class="title">
                            <h2>LOOKING FOR TRENDY MODERN DESIGN PIECES?</h2>
                            <h4>VISIT US AT HALL 8, STAND C13 IN MAISON ET OBJET 2020</h4>
                        </div>
                        <div class="btn-border-full">Discover More</div>
                  </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="./img/homepage/slide/new-products-caffe-latte.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-md-block">
                    <img src="./img/homepage/slide/new-products-caffe-latte-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-md-none">
                    <div class="position-absolute text-container">
                        <img src="./img/landing/events/maison-et-objet-paris-jan-2020/maison-et-objet-logo.png" alt="" class="img_logo">
                        <div class="title">
                            <h2>NEUTRAL DESIGNS FOR FUNCTIONAL INTERIORS WITH MODERN AESTHETICS</h2>
                        </div>
                        <div class="btn-border-full">Discover More</div>
                  </div>
                </a>
            </div>
        </div>
    </div>
</div>

@include('includes.menu-visual')

@endsection

@section('meta')
    <title>Caffe Latte Modern Design</title>
    <meta name="description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic">
    <meta name="keywords" content="Neutral Furniture, Minimalist Designs, Modern Aesthetic, Neutral Tones">
    <meta name="author" content="Caffe Latte Modern Design">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Caffe Latte Modern Design" />
    <meta property="og:description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic" />
    <meta property="og:url" content="https://www.caffelattehome.com/" />
    <meta property="og:site_name" content="Caffe Latte Modern Design" />
    <meta name="image" content="/img/caffe-latte-logo.png">
    <meta property="og:image" content="/img/caffe-latte-logo.png" />
@endsection

@section('head-includes')
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
        fluidSpeed: 1500,
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