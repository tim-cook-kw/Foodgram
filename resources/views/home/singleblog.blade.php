@extends('layouts.frontend.app')

@section('title','Blog')


@push('css')
    
@endpush
@section('content')
<div class="container">
        <div class="wrapper-search" style="margin-top: 100px">
      
            <div class="outer-advance-search">

                <form action="#" id="advance-search">
                    <fieldset>
                        <div class="inner-advance-search">

                            <div class="form-field">
                                <label for="ingredient">ingredient</label>
                                <select name="ingredient" id="ingredient" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Ingredient</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="course">course</label>
                                <select name="course" id="course" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Course</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="cuisine">cuisine</label>
                                <select name="cuisine" id="cuisine" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cuisine</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="time">Cooking Time</label>
                                <select name="time" id="time" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cooking Time</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="calories">calories</label>
                                <select name="calories" id="calories" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Calories</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <button type="submit"><i class="fa fa-search"></i></button>

                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>

    <!--advance search form ends-->
</div>
<!--banner ends-->

<!--main content area-->

<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9">
    <!--single post-->
    <article class="post-single">
        <div class="post-visuals">
            <a href="#">
                <img src="{{ asset($singleblog->image) }}" alt="image"/>
            </a>
        </div>
        <div class="post-contents">
            <div class="post-contents-inner">
                <h2><a href="#">{{$singleblog->title}}</a></h2>
                <ul class="news-post-meta post-meta">
                    <li class="calendar">{{$singleblog->created_at}}</li>

                    <li class="author"><a href="#">{{$singleblog->name}}</a></li>

                    <li class="comments"><a href="#">12 Comments</a></li>
                </ul>
                {{$singleblog->description}}       
            </div>
        </div>
    </article>
    <!--single post-->

</div>
<div class="col-md-4 col-lg-3">

    <!--sidebar-->
    <aside>
        <div class="side-bar">
            <!--search widget-->
            <div class="widget search-bar-widget">
                <h2>Search</h2>
                <form action="#">
                    <div class="search-field">
                        <input type="search" name="search" placeholder="Search"/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <!--search widget ends-->

            <!--widget category-->
            <div class="widget category-widget">
                <h2>Categories</h2>
                <ul>
                    @foreach ($category as $item)  
                        <li><a href="#">{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--widget category ends-->


            <!--latest news widget-->
            <div class="widget latest-news-widget">
                <h2>Latest News</h2>
                <ul>
                    @foreach ($latestnews as $item)
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset($item->image) }}" alt="thumbnail"/>
                                </a>
                            </div>
                            <div class="detail">
                                <a href="#">{{$item->title}}</a>
                                <span class="post-date">{{$item->created_at}}</span>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
            <!--latest news widget ends-->

            <!--tags widget-->
            <div class="widget tags-widget">
                <h2>Tags</h2>
                <ul>
                    <li><a href="#">loren</a><li>
                    <li><a href="#">food</a><li>
                    <li><a href="#">chicken</a><li>
                    <li><a href="#">dolor</a><li>
                    <li><a href="#">amet</a><li>
                    <li><a href="#">fusicon</a><li>
                    <li><a href="#">corn</a><li>
                    <li><a href="#">hot chicken</a><li>
                    <li><a href="#">lorem</a><li>
                </ul>
            </div>
            <!--tags widget ends-->

        </div>
    </aside>
    <!--sidebar ends-->


                    </div>

                </div>
            </div>
                    <!--main content area ends-->
                  
                    <!-- end gal-container -->
        </div>
                <!-- end col -->
    </div>
            <!-- end row -->
</div>
        <!-- end container -->
@endsection

@push('js')
    
@endpush