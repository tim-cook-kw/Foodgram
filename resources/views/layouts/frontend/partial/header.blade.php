   <div id="site-header">
       <header id="header" class="header-block-top">
           <div class="container">
               <div class="row">
                   <div class="main-menu">
                       <!-- navbar -->
                       <nav class="navbar navbar-default" id="mainNav">
                           <div class="navbar-header">
                               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                               </button>
                               <div class="logo">
                                   <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                       <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                                   </a>
                               </div>
                           </div>
                           <div id="navbar" class="navbar-collapse collapse">
                               <ul class="nav navbar-nav navbar-right">
                                <li class="{{ Request::is('homeindex') ? 'active' : '' }}"><a href="{{route('home.index')}}">Home</a></li>
                                <li class="{{ Request::is('homeblog') ? 'active' : '' }}"><a href="{{route('blog.index')}}">Blog</a></li>
                                <li class="{{ Request::is('homerecipe') ? 'active' : '' }}"><a href="{{route('recipe.index')}}">Recipes</a></li>
                                <li class="{{ Request::is('homeabout') ? 'active' : '' }}"><a href="{{route('about.index')}}">About us</a></li>   
                                <li class="{{ Request::is('homecontact') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact us</a></li>   
                               </ul>
                           </div>
                           <!-- end nav-collapse -->
                       </nav>
                       <!-- end navbar -->
                   </div>
               </div>
               <!-- end row -->
           </div>
           <!-- end container-fluid -->
       </header>
       <!-- end header -->
   </div>
   <!-- end site-header -->
   
   <div id="banner" class="banner full-screen-mode parallax">
       <div class="container pr">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="banner-static">
                   <div class="banner-text">
                       <div class="banner-cell">
                           <h1>Foodgram with secret recipes </h1>
                           <h2> <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Food:Drink:Dessert" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span> </h2>
                    
                    
                           <a href="#about">
                               <div class="mouse"></div>
                           </a>
                       </div>
                       <!-- end banner-cell -->
                   </div>
                   <!-- end banner-text -->
               </div>
               <!-- end banner-static -->
           </div>
           <!-- end col -->
       </div>
       <!-- end container -->
   </div>
   <!-- end banner -->