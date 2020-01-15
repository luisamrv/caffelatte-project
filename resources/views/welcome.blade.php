<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caffe Latte Modern Design</title>
        <link REL="SHORTCUT ICON" HREF="/favicon.png">

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153396341-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
         
          gtag('config', 'UA-153396341-1');
        </script>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid" id="app">
          <div class="container-fluid">
            <div class="col-12 text-center"><a href="https://www.caffelattehome.com/"><img src="/img/caffe-latte-logo.png" class="img-fluid logo" alt=""></a></div>
            <div class="col col-md-10 col-lg-5">

                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link tab-label" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-home" aria-selected="true">About</a>
                    <a class="nav-item nav-link tab-label active" id="nav-coming-soon-tab" data-toggle="tab" href="#nav-coming-soon" role="tab" aria-controls="nav-profile" aria-selected="false">Launching Soon</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade tab-about" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <p>CAFFE LATTE is a collection of furniture, lighting and accessories with a remarkable ability to fit into any style of interiors due to its modern aesthetic, minimalist and functional design, and consensual focus on neutral tones.</p>
                    <p>The strong yet not overpowering Designs value first and foremost the space and concept they are selected to furnish, while Craftsmanship provides the quality in details that makes all projects unique.</p>
                  </div>
                  <div class="tab-pane fade tab-coming-soon show active" id="nav-coming-soon" role="tabpanel" aria-labelledby="nav-coming-soon-tab">
                    <div class="title_area">
                        <p><span class="txt-bolder">Neutral Designs</span> for Functional Interiors with Modern Aesthetics</p>
                    </div>
                    
                    <div class="col p-0 subscribe_area">
                        <h6>LAUNCHING SOON</h6>
                        <form action="{{route('process.early-registration')}}" method="post" class="mb-3">
                            {{ csrf_field() }}
                            <input type="text" name="email" placeholder="ENTER YOUR EMAIL">
                            <button type="submit">SUBSCRIBE</button>
                            @if(Session::has('message'))
                                <p>{{ Session::get('message') }}</p>
                            @elseif ($errors->has('email'))
                                <p>{{ $errors->first('email') }}</p>
                            @endif
                        </form>
                    </div>
                  </div>
                </div>

                <div class="insta d-none d-sm-block">
                    <a href="https://www.instagram.com/caffelattehome/" target="_blank">
                        <img src="/img/instagram.svg" class="img-fluid icon-insta" alt=""> <span>@caffelattehome</span>
                    </a>
                </div>
            </div>
            
          </div>
        </div>

        <img src="/img/homepage/background-mobile.jpg" alt="" class="img-fluid d-block d-sm-none img-mobile-background">

        <div class="insta d-block d-sm-none">
            <a href="https://www.instagram.com/caffelattehome/" target="_blank">
                <img src="/img/instagram.svg" class="img-fluid icon-insta" alt=""> <span>@caffelattehome</span>
            </a>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
