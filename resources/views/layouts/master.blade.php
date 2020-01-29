<!DOCTYPE html>
@php session_start(); @endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="generator" content="Adobe GoLive" />
        <link REL="SHORTCUT ICON" HREF="/favicon.png">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link href="/css/app.css" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153396341-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
         
          gtag('config', 'UA-153396341-1');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5DVMRPH');</script>
        <!-- End Google Tag Manager -->

        <meta name="p:domain_verify" content="ac9591e6110fb8404314279743729c08"/>

        @section('head-includes')
            @show
    </head>

    <body>
        <script type="text/javascript" src="/js/megaTracker.js"></script>
        <script>var tracker=getUrl();</script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DVMRPH"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('includes.header')

            @yield('main-content')

        @include('includes.footer')

        <script type="text/javascript">
            $(".origin").val(tracker.url_origin);
            $(".referrer").val(tracker.referrer);
            $(".lead_path").val(tracker.flow);
        </script>
    </body>

</html>
