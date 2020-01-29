<div class="container-fluid">
    <div class="row">
        <!-- menu desktop -->
        <div class="col-12 d-none d-lg-block bottom-shaded" style="z-index:2;">
            <div class="col-12 header-affix topbar mt-1">
                <div style="width: 100%;bottom: 0;z-index: 999;" data-spy="affix" data-offset-top="38" class="affix-top">
                    <div class="container">
                        <div class="row">
                            <div class="topbar--menu col-12 col-sm-6 p-0">
                                <a href="https://www.caffelattehome.com/download-brochure">BROCHURE</a>
                                <a>PRICELIST</a>
                                <a>ABOUT US</a>
                                <a href="{{route('terms-and-conditions')}}">TERMS & CONDITIONS</a>
                            </div>
    
                            <div class="topbar--icons col-12 col-sm-6 p-0 text-right">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=351911780428&amp;text=Hello, I'm interested in CAFFE LATTE products. Can you help me?"><i class="fab fa-whatsapp"></i></a>
                                <a target="_blank" href="mailto:info@caffelattehome.com"><i class="far fa-envelope"></i></a>
                                <a target="_blank" href="tel:+351911780428"><i class="fas fa-phone"></i></a>
                                <a target="_blank" href="https://www.facebook.com/caffelattehome/"><i class="fab fa-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/caffelattehome/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://www.pinterest.pt/caffelattehome/"><i class="fab fa-pinterest"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/company/caffelattehome"><i class="fab fa-linkedin"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-12 text-center">
                <a href="{{route('homepage')}}">
                    <img src="/img/caffe-latte-logo.png" class="img-fluid logo" alt="">
                </a>
            </div>
    
            <div class="col-12 text-center">
                <nav class="navbar navbar-expand-lg position-static container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="{{route('products')}}">ALL PRODUCTS</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="/products#upholstery">UPHOLSTERY</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="/products#tables">TABLES</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="/products#mirrors">MIRRORS</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="/products#lighting">LIGHTING</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="/products#rugs">RUGS</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="https://www.caffelattehome.com/download-brochure">BROCHURE</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header" href="https://www.caffelattehome.com/events/maison-objet-paris-january-2020">NEWS & EVENTS</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header">PRESS</a>
                            </li>
    
                            <li class="nav-item position-static">
                                <a class="nav-link menu-header">CONTACT US</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
    
                </nav>
            </div>
        </div>

        <!-- menu mobile -->
        <div class="col-12 d-block d-lg-none menu_mobile_fixed">
            <div class="row">
                <div class="col-3">
                    <button style="margin: 0;padding-left: 0;display:block" type="button" class="navbar-toggle collapsed teste-collapse" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>

                <div class="col-6 text-center">
                    <a href="{{route('homepage')}}">
                        <img src="/img/caffe-latte-logo.png" class="center-block" style="width:100%;max-width:220px;">
                    </a>
                </div>

                <div class="col-3 text-right">
                    <a target="_blank" href=""><i class="fab fa-whatsapp"></i></a>
                    <a target="_blank" href=""><i class="far fa-envelope"></i></a>
                    <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        
        <div class="d-block d-lg-none menu_mobile main_menu_mobile">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 new_menu_open text-right">
                        <a class="nav-link menu-header close-menu d-inline-block">CLOSE X</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="{{route('products')}}">ALL PRODUCTS</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="/products#upholstery">UPHOLSTERY</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="/products#tables">TABLES</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="/products#mirrors">MIRRORS</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="/products#lighting">LIGHTING</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="/products#rugs">RUGS</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="https://www.caffelattehome.com/download-brochure">BROCHURE</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header" href="https://www.caffelattehome.com/events/maison-objet-paris-january-2020">NEWS & EVENTS</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header">PRESS</a>
                    </div>

                    <div class="col-12 new_menu_open">
                        <a class="nav-link menu-header">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>