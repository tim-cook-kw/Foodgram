@extends('layouts.frontend.app')

@section('title','Home')


@push('css')
    
@endpush
@section('content')
<div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Hottest Recipes at Foodgram	
					</h2>
                        <p class="title-caption text-center">There are many variations recipes food and drink of Foodgram </p>
                    </div>

<section class="hot-recipes-var2 ext-var3 corner-bg-var">
    <div class="container">
        <div class="wrapper-hot-recipe-var2">
            <div class="hot-recipes-bordered">
                 <div class="hot-row">
                    <div class="split-images-var2 col-size text-center">
                        <div class="image-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay100ms">
                                <a href="#"><img src="{{ asset('assets/frontend/images/temp-images/hot3-var1.jpg') }}" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay200ms">
                                <div class="intro-inner ">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="image-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay300ms">
                                <a href="#"><img src="{{ asset('assets/frontend/images/temp-images/hot3-var2.jpg') }}" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay400ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="intro-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay600ms">
                                <a href="#"><img src="{{ asset('assets/frontend/images/temp-images/hot3-var3.jpg') }}" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay500ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="intro-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay800ms">
                                <a href="#"><img src="{{ asset('assets/frontend/images/temp-images/hot3-var4.jpg') }}" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay700ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="corner-image hot animated wow rollIn animation-delay800ms">
            <img src="{{ asset('assets/frontend/images/menu-item-thumbnail-02.jpg') }} " alt="image">
        </div>
        </div>
    </div>
</section>
                  
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
					Blog	
				</h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('assets/frontend/images/featured-image-01.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <article class="col-single text-center">
                                            <h3 style="margin-top: -20px"><a href="#">Pasto Pizza with Extra fillas</a></h3>
                                            <div class="short-separator"></div>
                                            <ul class="news-post-meta post-meta">
                                                <li class="author"><a href="#">Reezky Illma</a></li>
                                                <li class="date">23/10/2015</li>
                                            </ul>
                                            <p>
                                                Nam ornare arcu turpis ne congues with
                                                Curabitur quis euismod mauris.
                                            </p>

                                            <a class="read-more-bordered" href="#">read more</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('assets/frontend/images/featured-image-02.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <article class="col-single text-center">
                                            <h3 style="margin-top: -20px"><a href="#">Pasto Pizza with Extra fillas</a></h3>
                                            <div class="short-separator"></div>
                                            <ul class="news-post-meta post-meta">
                                                <li class="author"><a href="#">Reezky Ilma</a></li>
                                                <li class="date">25/07/2019</li>
                                            </ul>
                                            <p>
                                                Nam ornare arcu turpis ne congues with
                                                Curabitur quis euismod mauris.
                                            </p>

                                            <a class="read-more-bordered" href="#">read more</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('assets/frontend/images/featured-image-03.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                         <article class="col-single text-center">
                                            <h3 style="margin-top: -20px"><a href="#">Pasto Pizza with Extra fillas</a></h3>
                                            <div class="short-separator"></div>
                                            <ul class="news-post-meta post-meta">
                                                <li class="author"><a href="#">Reezky Illma</a></li>
                                                <li class="date">25/07/2019</li>
                                            </ul>
                                            <p>
                                                Nam ornare arcu turpis ne congues with
                                                Curabitur quis euismod mauris.
                                            </p>

                                            <a class="read-more-bordered" href="#">read more</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{ asset('assets/frontend/images/featured-image-04.jpg') }}" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                         <article class="col-single text-center">
                                            <h3 style="margin-top: -20px"><a href="#">Pasto Pizza with Extra fillas</a></h3>
                                            <div class="short-separator"></div>
                                            <ul class="news-post-meta post-meta">
                                                <li class="author"><a href="#">Reezky Illma</a></li>
                                                <li class="date">25/07/2019</li>
                                            </ul>
                                            <p>
                                                Nam ornare arcu turpis ne congues with
                                                Curabitur quis euismod mauris.
                                            </p>

                                            <a class="read-more-bordered" href="#">read more</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="#">View Blog</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->

@endsection

@push('js')
    
@endpush