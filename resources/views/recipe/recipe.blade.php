@extends('layouts.frontend.app')

@section('title','Recipes')


@push('css')
   
@endpush
@section('content')



<div class="content">
        <div class="container cont_area">
          <div class="row" style="margin-top:30px">
            <div class="col-lg-9 col-md-12">
              <div class="row">
                <div class="col-md-12">
                 
                </div>
              </div>
              <div class="blog_posts_area blog_posts_area_3">     
                <div class="row">
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/13.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Good Old Fashioned Pancakes</div>
                        <div class="desc dot">This is a great recipe that I found in my Grandma's recipe book. Judging from the weathered look of this recipe card, this was a family favorite. </div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/18.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Fast and Friendly Meatballs</div>
                        <div class="desc dot">These oven-baked meatballs are fast and easy to prepare and very kid-friendly. You can serve them with pasta and spaghetti sauce or just eat them with ketchup, as my children do. Feel free to substitute lean ground beef for the ground turkey. The turkey should have at least 7% fat.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/17.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Strawberry Shortcake</div>
                        <div class="desc dot">An old-fashioned, tender shortcake with two layers of strawberries topped with whipped cream.  </div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/14.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Chicken and Chourico Pizza</div>
                        <div class="desc dot">My mom always made pizza with chourico growing up and I loved it. I have redone it and added more protein - chicken! I love homemade pizza.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/16.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Blackened Fish</div>
                        <div class="desc dot">This recipe calls for trout, but catfish or red snapper would be equally good. Be sure to have a well-ventilated kitchen!</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/2.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Slow Cooker Chicken and Salsa</div>
                        <div class="desc dot">Easy recipe! Chicken comes out moist and sweet. Slice breast to serve as main course or shred and use in tacos. Very versatile. Enjoy!</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/7.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Bacon Ranch Pasta Salad </div>
                        <div class="desc dot">This is a very flavorful pasta salad. The crisp cooked bacon really adds a nice flavor. I get requests for this pasta salad for every get together and cook out.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/4.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Strawberry Spinach Salad</div>
                        <div class="desc dot">What a wonderful surprise the dressing is in this refreshing salad. Raspberry jam is swirled into raspberry vinegar, and then mixed with oil. This luscious dressing is tossed with the kiwi, strawberries, walnuts and spinach. Makes eight servings.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/5.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Spring Vegetable Frittata</div>
                        <div class="desc dot">Leftover ham from the big dinner? Bought more eggs than your kids could boil and color? Open the fridge and throw together this pasta frittata: an easy one-pan dinner that's sure to please. Serve with heated spaghetti sauce on top, if desired.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/8.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Healthy Green Juice</div>
                        <div class="desc dot">Great healthy drink for detoxing after the holidays or whenever you have overdone it. Worth it to buy the organic celery, even if you buy conventional for everything else. Adjust fruit and veggie amounts to suit your personal taste. More apple equals a sweeter drink. Store any extra in a glass jar in the fridge for up to a day. Shake before drinking.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/9.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Making Espresso Drinks</div>
                        <div class="desc dot">While there’s definitely an art to preparing the perfect espresso drink, the process doesn’t have to be a foreign concept.</div>
                      </div></a></div>
                  <div class="col-md-4"><a class="blog_post_area" href="#">
                      <div class="blog_img"><img class="resize" src="{{ asset('assets/recipes/img/demo/10.jpg') }} " alt=""></div>
                      <div class="blog_desc">
                        <div class="title">Yummy Mango Citrus Drink</div>
                        <div class="desc dot">This is a modified version of one of the expensive all natural drinks sold commercially! Enjoy!</div>
                      </div></a></div>
                </div>
              </div>
              <ul class="page-nav" style="margin-bottom: 100px">
                    <li class="current"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 wide_side">
              <aside class="sidebar">
                <div class="side_rec_area" style="margin-top:-31px">
                  <div class="side_title">Best recipes of the month</div>
                  <div class="side_recipes"><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/10.jpg') }} " alt=""></div>
                      <div class="title dot">Yummy Mango Citrus Drink</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/14.jpg') }} " alt=""></div>
                      <div class="title dot">Chicken and Chourico Pizza</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/15.jpg') }} " alt=""></div>
                      <div class="title dot">Veal Marsala</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/8.jpg') }} " alt=""></div>
                      <div class="title dot">Healthy Green Juice</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/4.jpg') }} " alt=""></div>
                      <div class="title dot">Strawberry Spinach Salad</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/2.jpg') }} " alt=""></div>
                      <div class="title dot">Slow Cooker Chicken and Salsa </div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/12.jpg') }} " alt=""></div>
                      <div class="title dot">Egg in a Hole</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/11.jpg') }} " alt=""></div>
                      <div class="title dot">Tropical Cooler Smoothie</div></a></div>
                </div>
                <div class="side_rec_area side_rec_area_2" style="height:669px">
                  <div class="side_title">Latest recipes</div>
                  <div class="side_recipes"><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/10.jpg') }} " alt=""></div>
                      <div class="title dot">Yummy Mango Citrus Drink</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/14.jpg') }} " alt=""></div>
                      <div class="title dot">Chicken and Chourico Pizza</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/15.jpg') }} " alt=""></div>
                      <div class="title dot">Veal Marsala</div></a><a class="side_item" href="#">
                      <div class="img"><img class="resize" src="{{ asset('assets/recipes/img/demo/8.jpg') }} " alt=""></div>
                      <div class="title dot">Healthy Green Juice            </div></a></div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      
      </div>


@endsection

@push('js')

@endpush

