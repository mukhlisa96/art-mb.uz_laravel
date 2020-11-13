  @extends('layouts.index')
  @extends('menus.white-menu')
 @section('content')
<div class="body-c" id="body-c">
  <div class="bigmenu">
    <ul class="menu-main">
      <li class="bigmenu-li">
          <a class="bigmenu-title" href="#">
       <h6>{{$thiscategory->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}} <i class="fa fa-angle-down"></i></h6>
       </a>
        <div class="menu-sub">
          <div class="menu-col-1">
            <ul><h6>
              @foreach($projectcategories as $pc)
              <li><a class="sub-menu-item" href="/expertise/{{$pc->slug}}"> {{$pc->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</a></li>
              @endforeach</h6>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div><!-- bigmenu-end -->
  <div class="category-def-banner">
    <img src="{{ Voyager::image( $thiscategory->img ) }}" class="category-def-banner-img" alt="интерьер экстерьер landscape архитектура и дизайн авторский надзор">
  </div><!-- banner-end -->
  <div class="category-def-txt">
      <h1 class="def-title">{{$thiscategory->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h1>
    <p>
       {!!$thiscategory->getTranslatedAttribute('desc',  app()->getLocale(), 'fallbackLocale')!!}
    </p>
    <div style="margin-top: 20px; margin-bottom: 20px;" class="sharethis-inline-share-buttons"></div>
  </div><!-- category-def-text-end -->
  <div id="w " class="category-def-w">
    <h4>{{__('messages.more_projects')}}</h4>
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">

        @foreach($projects as $p)
        <div class="crsl-item">
          <div class="thumbnail">
             <a href="/projects/{{$thiscategory->slug}}/{{$p->slug}}">
           <img src="{{ Voyager::image( $p->img ) }}" class="mult-item-car-img" alt="nyc subway" alt="интерьер экстерьер landscape архитектура и дизайн авторский надзор">
         </a>
          </div>
          <div class="mult-item-car-caption">
            <h6>
             <a href="{{$p->slug}}">{{$p->getTranslatedAttribute('location',  app()->getLocale(), 'fallbackLocale')}}</a>
           </h6>
            <h6>
              <a href="{{$p->slug}}">
                {{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}
              </a>
            </h6>  
          </div>
        </div><!-- post #1 -->
        @endforeach
      </div><!-- .crsl-wrap -->
    </div><!-- .crsl-items -->
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous"><i class="fa fa-angle-left"></i> </a>
        <a href="#" class="next"><i class="fa fa-angle-right"></i> </a>
      </div>
    </nav>
  </div><!-- #w -->
 {{--  <div class="documents-section">
    <div class="documents-container">
      <h4>{{__('messages.documents')}}</h4>
      <div class="row container-fluid">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 doc-col">
          <span class="member-info-td">
            Some document to download 
            <a href="documents/document.pdf" download="document.pdf" target="">
              <img class="go-to-project" src="images/long-arrow-right.png" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            </a>
          </span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 doc-col">
          <span class="member-info-td">
            Some document to download 
            <a href="documents/document.pdf" download>
              <img class="go-to-project" src="images/long-arrow-right.png" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            </a>
          </span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 doc-col">
          <span class="member-info-td">
            Some document to download 
            <a href="documents/document.pdf" download>
              <img class="go-to-project" src="images/long-arrow-right.png" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            </a>
          </span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 doc-col">
          <span class="member-info-td">
            Some document to download 
            <a href="documents/document.pdf" download>
              <img class="go-to-project" src="images/long-arrow-right.png" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            </a>
          </span>
        </div>
      </div>
    </div>
  </div> --}}
</div>
@endsection