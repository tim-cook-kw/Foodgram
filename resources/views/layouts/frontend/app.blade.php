<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon_logo.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Foodgram') }}</title>
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" type="image/x-icon" />
 

    <link rel="stylesheet" href="{{ asset('assets/recipes/css/priority-nav-core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/recipes/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pathway+Gothic+One|Roboto:100,300,400" rel="stylesheet">
  
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }} ">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('assets/frontend/css/colors/orange.css') }}" />

 <!--animate stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/priority-nav-core.css') }} ">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/css/main.css') }}">
  
    
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pathway+Gothic+One|Roboto:100,300,400" rel="stylesheet">

<!--selectric stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/selectric.css') }}"/>
    @stack('css')
</head>
<body >
        <div id="loader">
                <div class="wrapper">
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
               <div>
                 <div class="bar"></div>
               </div>
             </div>
           </div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
    @include('layouts.frontend.partial.header')
<!-- #Top Bar -->


<section class="content">
    @yield('content')
</section>

<section>
    <!-- Left Sidebar -->
    @include('layouts.frontend.partial.footer')
    <!-- #END# Left Sidebar -->
</section>

   <!-- Modernizer -->
   <script src="{{ asset('assets/frontend/js/modernizer.js') }}"></script>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets/frontend/js/all.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/priority-nav.js') }} "></script>


    
    <script src="{{ asset('assets/contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/contact/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/contact/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/contact/js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{ asset('assets/contact/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/contact/js/mail.js') }}"></script>

    <script src="{{ asset('assets/recipes/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/recipes/js/jquery.resizeimagetoparent.min.js') }}"></script>
    <script src="{{ asset('assets/recipes/js/jquery.dotdotdot.min.js"') }}"></script>
    <script src="{{ asset('assets/recipes/js/common.js') }}"></script>


@stack('js')
</body>
</html>
