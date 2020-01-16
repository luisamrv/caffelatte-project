@extends('layouts.master')

@section('main-content')
<div class="container-fluid padding-top-mobile">
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <img src="/img/landing/thank-you/thank-you-background.jpg" width="1920" height="800" class="img-fluid">
            <div class="position-absolute text-container thank-you col-10 col-md-4 text-dark">
                <div class="title">
                    <h2>THANK YOU</h2>
                    <h5>Download your ebook below</h5>
                </div>
                <div class="btn-border-full mt-2"><a href="/resources/ebooks/{{$slug}}.pdf" target="_blank">Download Now</a></div>
                <br>
                <div class="btn-underline mt-5"><a href="{{ URL::previous() }}">< Return</a></div>
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