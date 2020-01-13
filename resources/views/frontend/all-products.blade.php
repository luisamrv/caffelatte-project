@extends('layouts.master')

@section('main-content')

    @include('includes.menu-visual')

    <div class="container-fluid section-bg-latte py-5">
        
        <div class="row">
            <div class="col-12 text-center mb-4">
                <a name="exclusive-products" href="#"></a>
                <h2>CAFFE LATTE <b>EXCLUSIVE PRODUCTS</b></h2>
            </div>

            <div class="col-12">
                <div class="row">
                    @foreach($brand_products as $brand_product)
                        <div class="col-12 col-lg-3 my-3">
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
                            <a data-toggle="modal" data-id="{{ $product->slug }}" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#exampleModalCenter">
                                <img src="./img/products/thumbnails/{{ $product->slug }}.jpg" alt="" class="img-fluid">
                                <div class="caption">{{ $product->name }}</div>
                                <div class="caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>

                                <div class="text-center">
                                    <a class="btn-border-full btn-get-price">GET PRICE</a>
                                </div>
                            </a>
                        </div> 

                        @endforeach
                    </div>
                </div>

            @endforeach
            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="text" name="bookId" id="bookId" value=""/>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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