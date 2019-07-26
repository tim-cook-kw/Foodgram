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
						Resep Terbaik di Foodgram	
					</h2>
                        <p class="title-caption text-center">Terdapat berbagai macam menu variasi makanan dan minuman dari Foodgram </p>
                    </div>

                    <section class="hot-recipes-var2 ext-var3 corner-bg-var">
                            <div class="container">
                                <div class="wrapper-hot-recipe-var2">
                                    <div class="hot-recipes-bordered">
                                         <div class="hot-row">
                                            @foreach ($receipe as $item)
                                            <div class="split-images-var2 col-size text-center">
                                                <div class="image-first inner-split">
                                                    <div class="image common-split animated wow flipInY animation-delay100ms">
                                                        <a href="#"><img src="{{ asset($item->image) }}" alt="image"/></a>
                                                    </div>
                                                    <div class="intro common-split animated wow flipInY animation-delay200ms">
                                                        <div class="intro-inner ">
                                                            <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                                            
                                                            <p>
                                                                    {!! str_limit($item->description, $limit = 30, $end = '...')!!}
                                                            </p>
                                                            <a class="read-more" href="{{route('singlerecipe.index',['id ' => $item->title])}}">Learn more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                        
                                                                       
                                        </div>
                                    </div>
                                    <div class="corner-image hot animated wow rollIn animation-delay800ms">
                                    <img src="images/slider-bg-corner2.png" alt="image">
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
                        @foreach ($article as $item)
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-block">
                                        <div class="blog-img-box" style="padding:20px; margin-top:20px; margin-bottom:20px">
                                            <img src="{{ asset($item->image) }}" alt="" />
                                            <div class="overlay">
                                                <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-dit">
                                            <article class="col-single text-center">
                                                <h3><a href="#">{{$item->title}}</a></h3>
                                                <div class="short-separator"></div>
                                                <ul class="news-post-meta post-meta">
                                                    <li class="author"><a href="#">{{$item->name}}</a></li>
                                                    <li class="date">{{$item->created_at}}</li>
                                                </ul>
                                                <p>
                                                {!! str_limit($item->description, $limit = 150, $end = '...')!!}
                                                </p>
                                                <a class="read-more-bordered" style="margin-bottom:50px" href="{{route('singleblog.index',['id ' => $item->title])}}">read more</a>
                                            </article>
                                        </div>            
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>

                        
                        @endforeach
                        
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="{{route('blog.index')}}">View Blog</a>
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