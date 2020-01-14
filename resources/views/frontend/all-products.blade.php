@extends('layouts.master')

@section('main-content')

    @include('includes.menu-visual')

    <div class="container-fluid section-bg-latte pt-5">
        
        <div class="row">
            <div class="col-12 text-center">
                <a name="exclusive-products" href="#"></a>
                <h2>CAFFE LATTE <b>EXCLUSIVE PRODUCTS</b></h2>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0 owl-carousel owl-slide owl-theme nopadding position-relative pb-5">
                        @foreach($brand_products as $brand_product)
                            <div class="item my-3">
                                <a>
                                    <img src="./img/products/exclusive-products/{{ $brand_product->slug }}.png" alt="" class="img-fluid">
                                    <div class="caption">{{ $brand_product->name }}</div>
                                    <div class="caption-sub"> {{ ucwords($brand_product->sub_category->sub_category_languages[0]->name) }}</div>
                                </a>
                            </div>  
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <div class="container-fluid py-3">

        <div class="row">
            @foreach( $all_products as $key => $category)
                <div class="col-12 text-center mt-5">
                    <a name="{{ $key }}" href="#"></a>
                    <h2>NEUTRAL <b>{{ strtoupper($key) }}</b></h2>
                </div>
                
                <div class="col-12 mb-5">
                    <div class="row">
                        @foreach($category as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                            <a rel="modal:open" href="{{route('modal-product-price', ['product' => $product->slug] )}}">
                                <img src="./img/products/thumbnails/{{ $product->slug }}.jpg" alt="" class="img-fluid">
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
    $(document).on("click", ".open-AddBookDialog", function () {
        var myBookId = $(this).data('id');
        $(".modal-body #bookId").val( myBookId );
    });

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
            600: {items: 3},
            768: {items: 4}
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