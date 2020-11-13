@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
 <div class="portfolio section body-c" id="body-c">
  <div class="container-fluid">

 

{{--     <div class="news-container">
      <div class="row grid container-fluid">
        <div class="col-sm-12 all corporate ">
         <div class="container-fluid">
          <div class="row twitter-posts-row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 twitter-posts">
              <div class="ellipsis-container" id="e1">
              <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
              </div>
          </div>
              <a href="twitter.com" class="bottom-twitter-link">
                <i class="fa fa-twitter twitter-post-icon"></i>
                <span class="twitter-account">
                  @ Mahkam Building
                </span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 twitter-posts">
              <div class="ellipsis-container" id="e4">
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                    quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                    quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                    quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                    quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                </div>
            </div>
              <a href="twitter.com" class="bottom-twitter-link">
                <i class="fa fa-twitter twitter-post-icon"></i>
                <span class="twitter-account">@ Mahkam Building</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 twitter-posts">
              <div class="ellipsis-container" id="e2">
              <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
              </div>
          </div>
              <a href="twitter.com" class="bottom-twitter-link">
                <i class="fa fa-twitter twitter-post-icon"></i>
                <span class="twitter-account">@ Mahkam Building</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 twitter-posts">
              <div class="ellipsis-container" id="e3">
              <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloribus earum itaque magni nulla, possimus quaerat
                  quam reprehenderit sed sequi similique, totam ut veritatis. Aliquid animi fuga molestias odio soluta?
              </div>
          </div>
        <a href="twitter.com" class="bottom-twitter-link">
          <i class="fa fa-twitter twitter-post-icon"></i>
          <span class="twitter-account">@ Mahkam Building</span>
        </a>
      </div>
    </div> --}}



{{-- <a class="twitter-timeline"
data-width="600"
data-height="600"
data-theme="light"
data-link-color="#2B7BB9"
data-tweet-limit="3"
data-chrome="nofooter noborders transparent"
href="https://twitter.com/POTUS?ref_src=twsrc%5Etfw">
Mahkam building tweets
 </a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<style type="text/css">
  ol.timeline-TweetList{
    display: flex;
  }
</style> --}}
    @foreach($posts as $post)     
      <div class="row long-post-row container-fluid">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 long-post-header">
        <span class="span-date"> {{$post->created_at}}</span>
        <h4 class="long-post-h4">
        {{-- Mahkam building to design Red Sea airport --}}
          {{$post->getTranslatedAttribute('title',  app()->getLocale(), 'fallbackLocale')}}
      </h4>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 long-post">
        <div class="" id="">
          <div class="content">
            <p>
             {!!$post->getTranslatedAttribute('excerpt', app()->getLocale(), 'fallbackLocale')!!}
             </p>
          </div>
      </div>
          <a href="{{ url("/news/{$post->slug}")}}" class="read-article">{{__('messages.read_article')}}</a>
      </div>
      </div>
       
      <div class="gallery aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> 
         <img src="{{ Voyager::image( $post->img) }}" class="img-fluid"  alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
      </div>
     @endforeach
   </div>
  </div>        
     {{--  </div>
    </div>
  </div>
</div> --}}
@stop