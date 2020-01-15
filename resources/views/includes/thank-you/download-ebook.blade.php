@extends('layouts.master')

@section('main-content')
<div class="container-fluid padding-top-mobile">
    <div class="row">
        <div class="col-12 p-0 position-relative">
            <img src="/img/landing/thank-you/thank-you-background.jpg" width="1920" height="800" class="img-fluid">
            <div class="position-absolute text-container col-10 col-md-4 text-dark">
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
    <style>
        .position-absolute.text-container {
            margin-left: 6%;
            top: 50%;
            transform: translateY(-50%);
        }
        .position-absolute.text-container h2, .position-absolute.text-container h4, .position-absolute.text-container p {
            font-weight: bold;
            text-align: left;
        }
        .position-absolute.text-container .btn-border-full {
            font-size: 0.75rem;
            border: 1px solid;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.03rem;
            padding: 0.4rem;
        }
        .btn-underline {
            padding: 0px 0px 2px;
            text-decoration: none;
            border-radius: 0px;
            display: inline-block;
            position: relative;
            border-bottom: 1px solid #808080;
            color: #212529;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 13px;
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

        @media only screen and (max-width: 575.98px) {
            .padding-top-mobile { padding-top:5rem; }
            .title h2 {
                letter-spacing: 0rem;
                font-size: 1rem;
            }
            .title h5 {
                letter-spacing: 0rem;
                font-size: .85rem;
            }
        }

        @media only screen and (min-width: 576px) {
            .padding-top-mobile { padding-top:5rem; }
            .title h2 {
                letter-spacing: 0rem;
                font-size: 1rem;
            }
            .title h5 {
                letter-spacing: 0rem;
                font-size: .85rem;
            }
        }
        @media only screen and (min-width: 992px) {
            .padding-top-mobile { padding-top:0rem; }
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
        }
    </style>
@endsection

@section('footer-includes')
<script>
    // $( document ).ready(function() {
    //     window.setTimeout(function () {
    //         $('#target_url')[0].click();
    //     }, 1000);
    // });

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