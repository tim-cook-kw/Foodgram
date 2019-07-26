@extends('layouts.frontend.app')

@section('title','Recipes')


@push('css')
   
@endpush
@section('content')

<div class="content">
        <div class="container cont_area">
          
          <div class="row">
            <div class="col-md-12">
              <article class="recipe_area">
                <h2 class="recipe_title">{{$singlerecipe->title}}</h2>
                <div class="recipe_header">
                  <div class="author"> <i class="fa fa-user-circle-o"></i><span>author:</span>{{$singlerecipe->name}}</div><a class="print" href="#" onclick="window.print()"> <i class="fa fa-print"></i></a><a class="category" href="#"> <i class="fa fa-folder-o"></i>Breakfast</a>
                  <div class="time"> <i class="fa fa-clock-o"></i>75<span>Mins  </span></div>
                  <div class="people"><i class="fa fa-users"></i>4<span>people   </span></div>
                </div>
                <div class="recipe_img_desc">
                  <div class="img"><img class="resize" src="{{ asset($singlerecipe->image) }}" alt=""></div>
                  <div class="desc"> 
                    <div class="title">Description</div>
                    {!! $singlerecipe->description !!}
                  </div>
                </div>
                <div class="recipe_ing_dir">
                  <div class="row">
                    <div class="col-lg-4 col-md-5">
                      <div class="ing">
                        <div class="title">Ingredients</div>
                        <ul>
                          {!! $singlerecipe->ingredient !!}
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-7"> 
                      <div class="desc"> 
                        <div class="title">Directions</div>
                        {!! $singlerecipe->direction !!}
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <section class="same_recipes">
            <div class="row">
              <div class="col-sm-12">
                <div class="line">
                  <h2></h2>
                </div>
              </div>
            </div>
            <div class="rec_area">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="rec_item">
                    <div class="cat">
                      <div class="txt">Dinner</div>
                    </div>
                    <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/2.jpg') }} " alt=""></div>
                    <div class="desc_info">
                      <div class="time"><i class="fa fa-clock-o"></i>5<span>Hours </span></div>
                      <div class="people"><i class="fa fa-users"></i>6<span>people  </span></div>
                    </div>
                    <div class="desc_area"><a class="title" href="#">Slow Cooker Chicken and Salsa </a>
                      <div class="desc dot">Easy recipe! Chicken comes out moist and sweet. Slice breast to serve as main course or shred and use in tacos. Very versatile. Enjoy!        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="rec_item">
                    <div class="cat">
                      <div class="txt">Breakfast</div>
                    </div>
                    <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/7.jpg') }}" alt=""></div>
                    <div class="desc_info">
                      <div class="time"><i class="fa fa-clock-o"></i>45<span>Mins  </span></div>
                      <div class="people"><i class="fa fa-users"></i>3<span>people    </span></div>
                    </div>
                    <div class="desc_area"><a class="title" href="#">Bacon Ranch Pasta Salad </a>
                      <div class="desc dot">This is a very flavorful pasta salad. The crisp cooked bacon really adds a nice flavor. I get requests for this pasta salad for every get together and cook out.</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="rec_item">
                    <div class="cat">
                      <div class="txt">Desert</div>
                    </div>
                    <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/4.jpg') }}" alt=""></div>
                    <div class="desc_info">
                      <div class="time"><i class="fa fa-clock-o"></i>15 <span>Mins  </span></div>
                      <div class="people"><i class="fa fa-users"></i>2<span>people    </span></div>
                    </div>
                    <div class="desc_area"><a class="title" href="#">Strawberry Spinach Salad</a>
                      <div class="desc dot">What a wonderful surprise the dressing is in this refreshing salad. Raspberry jam is swirled into raspberry vinegar, and then mixed with oil. This luscious dressing is tossed with the kiwi, strawberries, walnuts and spinach. Makes eight servings.</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="rec_item">
                    <div class="cat">
                      <div class="txt">Breakfast</div>
                    </div>
                    <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/5.jpg') }}" alt=""></div>
                    <div class="desc_info">
                      <div class="time"><i class="fa fa-clock-o"></i>35 <span>Mins  </span></div>
                      <div class="people"><i class="fa fa-users"></i>4<span>people    </span></div>
                    </div>
                    <div class="desc_area"><a class="title" href="#">Spring Vegetable Frittata</a>
                      <div class="desc dot">Leftover ham from the big dinner? Bought more eggs than your kids could boil and color? Open the fridge and throw together this pasta frittata: an easy one-pan dinner that's sure to please. Serve with heated spaghetti sauce on top, if desired.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
       
      </div>
     
     </div>



@endsection

@push('js')

@endpush

