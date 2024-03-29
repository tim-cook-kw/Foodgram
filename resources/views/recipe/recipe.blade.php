@extends('layouts.frontend.app')

@section('title','Recipe')


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
              @foreach ($recipe as $item)
                <div class="col-md-4"><a class="blog_post_area" href="{{route('singlerecipe.index',['id' => $item->title])}}">
                    <div class="blog_img"><img class="resize" src="{{ asset($item->image) }} " alt=""></div>
                    <div class="blog_desc">
                      <div class="title">{{$item->title}}</div>
                      <div class="desc dot">{!! str_limit($item->description, $limit = 150, $end = '...') !!} </div>
                    </div></a></div>
              @endforeach
            </div>
          </div>
          {{$recipe->links()}}
        </div>
        <div class="col-lg-3 col-md-12 wide_side">
          <aside class="sidebar">
            <div class="side_rec_area" style="margin-top:-31px">
              <div class="side_title">Best recipes of the month</div>
              <div class="side_recipes">
                @foreach ($bestrecipe as $item)
                  <a class="side_item" href="#">
                    <div class="img">
                      <img class="resize" src="{{ asset($item->image) }} " alt="">
                    </div>
                    <div class="title dot">
                      {{$item->title}}
                    </div>
                  </a>  
                @endforeach
              </div>
            </div>
            <div class="side_rec_area side_rec_area_2" style="height:669px">
              <div class="side_title">Latest recipes</div>
              <div class="side_recipes">
                @foreach ($latestrecipe as $item)
                  <a class="side_item" href="#">
                    <div class="img">
                      <img class="resize" src="{{ asset($item->image) }} " alt="">
                    </div>
                    <div class="title dot">
                      {{$item->title}}
                    </div>
                  </a>
                @endforeach
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  
  </div>


@endsection

@push('js')
    
@endpush