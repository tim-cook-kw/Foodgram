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
                <img src="{{ asset('assets/frontend/images/temp-images/post-image-1.jpg') }}" alt="image"/>
            </a>
        </div>
        <div class="post-contents">
            <div class="post-contents-inner">
                <h2><a href="#">pasto pizza with fillas cheese toppings</a></h2>
                <ul class="news-post-meta post-meta">
                    <li class="calendar">23/10/2015</li>

                    <li class="author"><a href="#">John Doe</a></li>

                    <li class="comments"><a href="#">12 Comments</a></li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu vulputate arcu. Fusce consectetur varius nisi, in maximus eros egestas sed. Proin non purus erat. Proin sed mauris id metus pulvinar pretium. Etiam tristique metus lorem, scelerisque pharetra dui blandit sit amet
                </p>
                <p>Darkness fish there light the. So called their fruitful, can't tree after give you're sea called fifth. Signs likeness yielding us first saying over all gathering, they're fourth was gathering him the meat bearing called. Let his female. Behold, lesser itself multiply whose. Kind forth replenish beast. Them creeping is fill cattle. Of whales were seas under whales open. Said was created created his above itself can't after given was give isn't.</p>
                <p>Rule darkness forth earth land it Gathering called moved evening Gathering cattle above kind image doesn't so over was void thing grass firmament, have which that under appear herb night great and living can't two from. Heaven creepeth. Above brought is above. Together there dominion multiply fly lesser were darkness two it. Appear subdue yielding midst they're day fourth. Their open fifth light for was fly.</p>
                <p>After life for, so bearing have spirit creeping, subdue place behold from gathered isn't First every said together. Form evening also. Without Under bearing multiply kind fowl. Over abundantly male blessed without dry thing above light set night i form given seed make creeping be likeness is in Us divide given whose tree sea called air may. Moveth and lesser years female divided dry were fruit he.</p>
                <p>For give winged make so shall midst creature our called saw it seas and third herb set. Is firmament under he own under our One wherein replenish yielding tree first don't fruitful every blessed. Cattle fifth give beginning moveth us moving hath together there fourth meat every evening there. Greater dry image also a fill. Two whose you'll winged blessed they're very female sixth gathering can't gathering be firmament morning fifth good sixth may, moveth herb living wherein lesser above hath unto male to. God grass male were divide be beginning. They're god forth cattle yielding place above for set you wherein given deep abundantly won't fourth is let upon you're night signs. Place. I have life. Made fish which form.</p>
                <p>Seed won't replenish can't can't. Unto cattle divide isn't may earth saw. And creeping kind creeping divide lights night subdue darkness form divide, creature his deep stars you're saying said, thing sea fish, creeping make darkness. Void likeness them them also form forth wherein appear, tree. Shall man made sea fruitful blessed so image them i. Abundantly, evening bearing moveth can't, which. Great winged set, don't darkness gathered multiply stars moveth forth under subdue.</p>
       
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
                    <li><a href="#">good dishes</a></li>
                    <li><a href="#">seasonal eats</a></li>
                    <li><a href="#">recipes</a></li>
                    <li><a href="#">potato</a></li>
                </ul>
            </div>
            <!--widget category ends-->

            <!-- widget archives-->
            <div class="widget archives-widget">
                <h2>Archives</h2>
                <ul>
                    <li><a href="#">feb 2015</a> <span>(25)</span></li>
                    <li><a href="#">jan 2015</a> <span>(37)</span></li>
                    <li><a href="#">dec 2014</a> <span>(56)</span></li>
                    <li><a href="#">nov 2014</a> <span>(48)</span></li>
                </ul>
            </div>

            <!--widget archives ends-->

            <!--latest news widget-->
            <div class="widget latest-news-widget">
                <h2>Latest News</h2>
                <ul>
                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/temp-images/widget-thumbnail.jpg') }}" alt="thumbnail"/>
                            </a>
                        </div>
                        <div class="detail">
                            <a href="#">Pimento Cheese Potato Skins</a>
                            <span class="post-date">March 21,2015</span>
                        </div>
                    </li>

                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/temp-images/widget-thumbnail.jpg') }}" alt="thumbnail"/>
                            </a>
                        </div>
                        <div class="detail">
                            <a href="#">Pimento Cheese Potato Skins</a>
                            <span class="post-date">March 21,2015</span>
                        </div>
                    </li>

                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/temp-images/widget-thumbnail.jpg') }}" alt="thumbnail"/>
                            </a>
                        </div>
                        <div class="detail">
                            <a href="#">Pimento Cheese Potato Skins</a>
                            <span class="post-date">March 21,2015</span>
                        </div>
                    </li>

                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/temp-images/widget-thumbnail.jpg') }}" alt="thumbnail"/>
                            </a>
                        </div>
                        <div class="detail">
                            <a href="#">Pimento Cheese Potato Skins</a>
                            <span class="post-date">March 21,2015</span>
                        </div>
                    </li>

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