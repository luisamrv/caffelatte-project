@extends('layouts.master')

@section('main-content')
<div class="container-fluid" id="main-slide">
    <div class="row">
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-none d-sm-block">
            <div class="item">
                <a href="">
                    <img src="https://www.circu.net/img/slides/home-ambiences/mermaid-bed-circu-magical-furniture.jpg" width="1920" height="800" class="cd-dot img-fluid">
                    <div class="position-absolute text-container d-none d-sm-inline">
                      <h2>CLOUD COLLECTION</h2>
                      <h4>A DREAMY COLLECTION THAT WILL TAKE YOU TO THE CLOUDS</h4>
                      <div>Discover More <i class="fas fa-caret-right"></i> </div>
                  </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="https://www.circu.net/img/slides/home-ambiences/mermaid-bed-circu-magical-furniture.jpg" width="1920" height="800" class="cd-dot img-fluid">
                    <div class="position-absolute text-container d-none d-sm-inline">
                      <h2>CLOUD COLLECTION</h2>
                      <h4>A DREAMY COLLECTION THAT WILL TAKE YOU TO THE CLOUDS</h4>
                      <div>Discover More <i class="fas fa-caret-right"></i> </div>
                  </div>
                </a>
            </div>
        </div>
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
</script>
@endsection