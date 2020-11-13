@extends('layouts.index')
@section('content')
<div class="body-c" id="body-c">
  <div class="container-fluid resp-gallery">
    <div class="carousel">
      <div class="slider">
        @if($images != null)
           @foreach($images as $image)
             <section>
               <img class="g-i" src="{{ Voyager::image( $image ) }}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
             </section>
           @endforeach
        @endif
      </div>
    </div>
    <div class="controls">
      <span id="close-gallery1" class="closebtn1">&times;</span> <!-- onclick="this.parentElement.style.display='none'" -->
      <button class="next"><i class="fa fa-angle-right"></i></button>
      <button class="prev"><i class="fa fa-angle-left"></i></button>
    </div>
  </div>
  <div class="gallery-album display-none">
    <div class="big-container ">
      <div class="row container-fluid">
          <div class="col-2">
            <div class="g-row">
               @if($images != null)
                 @foreach($images as $image)
                      <div class="gallery-column">
                        <img class="square-img" src="{{ Voyager::image( $image ) }}" alt="архитектура и дизайн" style="width:100%" onclick="myFunction(this);" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
                      </div>
                   @endforeach
                @endif
            </div>
          </div>
        <div class="col-10 fixed-zoom">
          <div class="g-container" style="float: right;">
            <span id="close-gallery" class="closebtn">&times;</span> <!-- onclick="this.parentElement.style.display='none'" -->
            <img id="expandedImg" style="width:100%" src="{{ Voyager::image( $images[0] ) }}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            <div id="imgtext"></div>
          </div>
        </div> 
      </div>
    </div>
  </div> 
  <div class="body-div">
     @extends('menus.transparent-menu')
      <div class="container-fluid">
          <div class="banner">
              <img src="{{ Voyager::image( $p->img ) }}" class="banner-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
              <div class="row container-fluid banner-caption row align-items-end">
                 <div class="caption-on-left">
                  <p class="time-and-city">
                     2019 - Tashkent, Uzbekistan
                  </p>
                  <h4 class="project-name">
                    {{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}
                  </h4>
                </div>
               {{-- <div class="col-3"></div> --}}
                <div class=" col-5 caption-on-right">
              @foreach($c as $cat)
                <a type="btn-mb project-banner-btn" class="btn btn-mb" href="/projects/{{$cat->slug}}">
                   <span>{{$cat->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</span>
                </a>
              @endforeach
               </div>
              </div>
          </div>
          <div class="margin-after-banner-big"></div>
          <!-- //banner  -->
          <div class="caption-on-right-resp">
            <h6 class="resp-header">{{__('messages.categories')}}</h6 class="resp-header">
              @foreach($c as $cat)
                <a type="btn-mb project-banner-btn" class="btn btn-mb" href="/projects/{{$cat->slug}}">
                   <span>{{$cat->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</span>
                </a>
              @endforeach
          </div>
          <div class="gallery"> 
             <img src="{{ Voyager::image( $images[0] ) }}" class="img-fluid" id="show-gallery" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
             <button id="show-gallery1" class="btn-center" href="#">{{__('messages.gallery')}}</button>
          </div> 
          <div class="gallery-txt " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
               <h2 class="">
                    {{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}
                  </h2>
            <p>
              {!!$p->getTranslatedAttribute('desc',  app()->getLocale(), 'fallbackLocale')!!}
            </p>
          </div>
          <div style="margin-bottom: 20px;" class="sharethis-inline-share-buttons"></div>
          <!--<div class="mb-map container-fluid" data-aos="fade-up" data-aos-anchor-placement="top-bottom">-->
          <!--    <img src="{{ Voyager::image( $p->iframe ) }}" class="img-fluid" id="show-gallery" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">-->
          <!--</div>-->
         {{--<div class="facts-and-figures" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="facts-header-container">
            <h6 class="facts-header">{{__('messages.facts_and_figures')}}</h6>
              
            </div>
            <ul class="mb-table-resp">
              <li class="resp-t-item">
                <span class="resp-th">Appointment</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Completion</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Area</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Height</span>
                <span class="resp-td">2013</span>
              </li>
                  <li class="resp-t-item">
                <span class="resp-th">Capacity</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Completion</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Client</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Colloborating architect</span>
                <span class="resp-td">2013</span>
              </li>
                  <li class="resp-t-item">
                <span class="resp-th">Structural engineer</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Landscape architect</span>
                <span class="resp-td">2013</span>
              </li>
              <li class="resp-t-item">
                <span class="resp-th">Lighting engineer</span>
                <span class="resp-td">2013</span>
              </li>
            </ul>
          <div class="table-responsive">
            <table class="table" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <thead>
                <tr>
                  <td>Appointment</td>
                  <td>2013</td>
                  <td>Completion</td>
                  <td>2019</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Area</td>
                  <td>26,012m²</td>
                  <td>Height</td>
                  <td>@341m</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          </div> --}}
          <!-- fact-and-figures-end -->
      </div>
      
        <div id="w " class="category-def-w">
    <h4>{{__('messages.more_projects')}}</h4>
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">

        @foreach($ps as $p)
        <div class="crsl-item">
          <div class="thumbnail">
             <a href="/show-all-projects/{{$p->slug}}">
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
  

  </div>
</div>
@endsection