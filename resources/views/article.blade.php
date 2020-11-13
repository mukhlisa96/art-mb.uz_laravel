@extends('layouts.index')
@extends('menus.transparent-menu')
@section('content')

<div class="studio-div body-c" id="body-c">
<div class="container-fluid">
<div class="banner">
  <img src="{{ Voyager::image( $post->img ) }}" class="banner-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
  <div class="row container-fluid banner-caption align-items-end">
               <div class="project-name col-md-6 col-sm-12 col-xs-12">
                <p class="time-and-city">
                   {{$post->created_at}}
                </p>
                <h4 class="project-name">
                  {{$post->getTranslatedAttribute('title',  app()->getLocale(), 'fallbackLocale')}}
                </h4>
              </div>
            </div>
</div>
<div class="expertise-txt">
  <p>
    {!!$post->getTranslatedAttribute('body',  app()->getLocale(), 'fallbackLocale')!!}
  </p>
 {{--  <button class="mb-button">{{__('messages.download_press_release')}}</button>
  <button class="mb-button">Share</button> --}}
  <div class="sharethis-inline-share-buttons"></div>

</div>


 <!-- 2-item-carousel -->
    <div id="w" style="padding-top: 50px;">
        <h4 class="w-header">{{__('messages.more_projects')}}</h4>
        
        <nav class="slidernav">
          <div id="navbtns" class="clearfix">
            <a href="#" class="previous"><i class="fa fa-angle-left"></i> </a>
            <a href="#" class="next"><i class="fa fa-angle-right"></i> </a>
          </div>
        </nav>
        
        <div class="crsl-items" data-navigation="navbtns">
          <div class="crsl-wrap">             
              @foreach( $allposts as $p)
              <a href="/news/{{$p->slug}}">
                <div class="crsl-item">
                <div class="thumbnail">
                  <img src="{{ Voyager::image( $p->img ) }}" class="mult-item-car-img" alt="{{$p->slug}}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
                </div>
                <div class="mult-item-car-caption">
                <h6><a href="/news/{{$p->slug}}">{{$p->getTranslatedAttribute('title',  app()->getLocale(), 'fallbackLocale')}}</a></h6>  
                </div>
                </div><!-- post #1 -->
                </a>
              @endforeach
          </div><!--.crsl-wrap -->
        </div><!--.crsl-items -->
    </div><!--#w -->

<!-- filter-team-gallery -->
</div>
</div>

@endsection