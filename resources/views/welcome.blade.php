<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caffe Latte Modern Design</title>
        <link REL="SHORTCUT ICON" HREF="/favicon.png">
        <meta name="author" content="Caffe Latte Modern Design">
        <meta name="image" content="/img/caffe-latte-logo.png">
        <meta name="description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic">
        <meta name="keywords" content="Neutral Furniture, Minimalist Designs, Modern Aesthetic, Neutral Tones">

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

        <style>
          body {
            width: 100%;
            text-align: left;
            color: #f1ede4;
            font-family:'Avenir', sans-serif;
            word-wrap: break-word;
            margin: 0px;
            background-color: #d7cdc3;
            font-size: 10px;
          }

          .jumbotron {
            background-image: url("/img/homepage/background.jpg");
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin: 0;
            padding: 2rem;
          }

          .logo {
            width: 220px;
          }

          p { 
            color: #3a2d24; 
            font-size: 0.85rem;
          }

          nav {
            margin: 2rem 0 0;
          }

          .nav-tabs {
              border-bottom: 1px solid #f1ede4;
          }

          .nav-tabs .nav-link {
            font-size: 0.8rem;
            color: #3b2c25;
            background: #f1ede4;
            text-align: center;
              font-weight: 500;
              min-width: 8.5rem;
              padding: 0.5rem 1rem 0.3rem;
              margin-right: 1.6rem;
              cursor: pointer;
              border: 1px solid transparent;
              border-radius: 0;
              text-transform: uppercase;
              opacity: .7;
          }

          .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
              color: #3b2c25;
              background-color: #f1ede4;
              border-color: #f1ede4;
              opacity: 1;
          }

          .tab-content {
            height: 22rem;
            padding: 1.6rem 0rem;
            color: #3a2d24;
          }

          .tab-content .tab-about p {
            font-family: 'AvenirMedium', sans-serif;
            font-size: 1rem;
            letter-spacing: 0rem;
            text-align: justify;
          }

          .tab-content .tab-coming-soon .title_area p {
            font-family: 'AvenirRoman', sans-serif;
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            line-height: 2.5rem;
          }

          .tab-content .tab-coming-soon .subscribe_area h6 {
            font-size: 0.85rem;
            color: #f1ede4;
          }

          .subscribe_area {
            margin-top: 3.6rem;
          }

          .subscribe_area input[type="text"] {
            width: 70%;
            border: 1px solid #f1ede4;
            background: transparent;
            padding: 0.5rem 1rem 0.3rem;

          }

          .subscribe_area button[type="submit"] {
            color: #f1ede4;
            background-color:#3a2d24;
            border: 1px solid #3a2d24;
            padding: 0.5rem 1rem 0.3rem;
          }

          ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #f1ede4;
            opacity: 1; /* Firefox */
          }

          :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #f1ede4;
          }

          ::-ms-input-placeholder { /* Microsoft Edge */
            color: #f1ede4;
          }

          .insta, .insta a { 
            margin-top: 4rem;
            color: #9b867e; 
            font-size: 0.85rem; 
            text-decoration: none;
            cursor: pointer;
          }

          .insta span { line-height: 1.2rem; vertical-align: sub;}

          .txt-bolder { font-weight: bold; }

          .icon-insta { width: 16px; }

          .img-mobile-background { position: relative; width: 100%; z-index: 1;}

          @media (max-width: 320px)  {
            .nav-tabs .nav-link {
                font-size: 0.6rem;
            }
            .tab-content .tab-about p {
                font-size: 0.75rem;
                line-height: 1.5;
                margin-bottom: 0.6rem;
            }
            .tab-content .tab-coming-soon .title_area p {
                font-size: 1.2rem;
                letter-spacing: 0.1rem;
                line-height: 1.6rem;
            }
            .tab-content .tab-coming-soon .subscribe_area h6 {
                font-size: 0.7rem;
            }
            .subscribe_area {
                margin-top: 0rem;
            }
          }

          @media (max-width: 576px) {
            .tab-content {
                padding: 0.5rem 0rem;
            }
            .jumbotron {
              background: none;
              position: absolute;
              top: 0;
              left: 0;
              z-index: 2;
              padding: 0rem;
            }
            .insta { 
              margin: 0rem;
              color: #9b867e;
              font-size: 0.85rem;
              text-decoration: none;
              padding: 0 0 2rem;
              text-align: center;
              background-color: #d7cdc3;
              left: 0;
              right: 0;
              z-index: 999;
              cursor: pointer;
              position: absolute;
            }
            nav {
                margin: 1rem 0 0;
            }
            .nav-tabs .nav-link { min-width: 50%; margin: 0 auto; text-align: center; font-size:0.65rem;}
            .tab-content .tab-coming-soon .title_area p {
                font-size: 1.3rem;
                text-transform: uppercase;
                letter-spacing: 0.02rem;
                line-height: 2rem;
                text-align: left;
            }
            .tab-content .tab-about p {
                font-size: 0.85rem;
            }
            .subscribe_area {
              margin-top: 1.2rem;
            }
            .subscribe_area input[type="text"] {
              width: 64%;
            }
          }

          @media (min-width: 1460px) {
            .tab-content {
                padding: 2.2rem 0rem;
            }
            nav {
              margin: 6rem 0 0;
            }
            .insta, .insta a { 
              margin-top: 6rem;
            }
            .subscribe_area {
              margin-top: 1.6rem;
            }
            .tab-content {
              height: 20rem;
            }
          }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
          <div class="container-fluid">
            <div class="col-12 text-center"><a href="https://www.caffelattehome.com/"><img src="./img/caffe-latte-logo.png" class="img-fluid logo" alt=""></a></div>
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
                        <p>Neutral and <span class="txt-bolder">Minimalist Designs</span> for Functional Environments with a Modern Aesthetic</p>
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
                        <img src="./img/instagram.svg" class="img-fluid icon-insta" alt=""> <span>@caffelattehome</span>
                    </a>
                </div>
            </div>
            
          </div>
        </div>

        <img src="./img/homepage/background-mobile.jpg" alt="" class="img-fluid d-block d-sm-none img-mobile-background">

        <div class="insta d-block d-sm-none">
            <a href="https://www.instagram.com/caffelattehome/" target="_blank">
                <img src="./img/instagram.svg" class="img-fluid icon-insta" alt=""> <span>@caffelattehome</span>
            </a>
        </div>

        <script src="./js/app.js"></script>
    </body>
</html>
