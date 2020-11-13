@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
  <div class="expertise-grid body-c" id="body-c">
    <div class="banner">
    <video autoplay loop muted class="banner-img">
    <source src="{{$banner[8]->link}}"  type="video/mp4">
    </video>
    <!-- <video  src="videos/expertise-banner-video.mp4" class="banner-img" autoplay loop></video> -->
    </div>
    <div class="expertise-txt">
    <h4>{!!$text[4]->getTranslatedAttribute('header',  app()->getLocale(), 'fallbackLocale')!!}</h4>
    <p>
    {!!$text[4]->getTranslatedAttribute('content',  app()->getLocale(), 'fallbackLocale')!!}
    </p>
    <!-- <button class="mb-button">Our approach</button> -->
    </div>
    <div class="projects-grid" style="margin-top: 20px;">
      <div class="row container-fluid flex-container" >
          @foreach($projectCategory as $p)
             <div class="col-md-6 sos-img ">
                <div id="spinner"></div>
                <a href="{{ url("/expertise/{$p->slug}")}}">
                <img class="proj-img" src="{{ Voyager::image( $p->img ) }}" id="loaded-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
                <div class="img-cap">
                  <h5>{{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h5>
                </div>
                </a>
              </div>
          @endforeach
      </div>
    </div>
  </div>
@endsection