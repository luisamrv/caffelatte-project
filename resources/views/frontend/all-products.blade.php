@extends('layouts.master')

@section('main-content')

    @include('includes.menu-visual')

    <div class="container-fluid section-bg-latte py-3">
        
        <div class="row">
            <div class="col-12 text-center">
                <h2>CAFFE LATTE <b>EXCLUSIVE PRODUCTS</b></h2>
            </div>

            <div class="col-12">
                <div class="row">
                    @foreach($brand_products as $brand_product)
                        <div class="col-12 col-lg-3">
                            {{ $brand_product->name }}
                        </div>  
                    @endforeach
                </div>
            </div>
            
        </div>

    </div>

    <div class="container-fluid py-3">

        <div class="row">
            @foreach( $all_products as $key => $category)
                <div class="col-12 text-center">
                    <a name="{{ $key }}" href="#"></a>
                    <h2>NEUTRAL <b>{{ ucwords($key) }}</b></h2>
                </div>
                
                <div class="col-12">
                    <div class="row">
                        @foreach($category as $product)
                            <div class="col-12 col-lg-3">   
                                {{ $product->name }}
                            </div>
                        @endforeach
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
@endsection

@section('footer-includes')
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: true,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {items: 1},
            600: {items: 3},
            768: {items: 5}
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