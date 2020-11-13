@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
  <div class="team-member-info-container body-c" id="body-c" style="position: absolute; z-index: 2000; top: 15%;">
    <div class="row container-fluid">
      <a href="/studio">
        <span id="close-member-info" class="closebtn" style="z-index: 2">×</span>
      </a>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 member-info-img-div">
        <img class="member-info-img" src="{{ Voyager::image( $membersInfo->img ) }}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 member-info-col">
        <h3 style="padding-bottom: 1em;">{{$membersInfo->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')}}</h3>
        <h6>{{$membersInfo->getTranslatedAttribute('position', app()->getLocale(), 'fallbackLocale')}}</h6>
        {!!$membersInfo->getTranslatedAttribute('desc', app()->getLocale(), 'fallbackLocale')!!}
  <div class="sharethis-inline-share-buttons"></div>
        <p class="member-info-desc">
        </p>

        <h4>{{__('messages.project_experience')}}</h4>
        <ul style="padding: 0;">
          @foreach($projects as $pr)
          @foreach($pr as $p)
                <li class="member-info-t-item" style="border-top: solid 1px rgba(0,0,0,0.12);">
                       <a href="projects/{{$p->slug}}">
                        <span class="member-info-td">
                          {{$p->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')}}
                          <img class="go-to-project" src="{{asset('images/long-arrow-right.png')}}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
                        </span>
                       </a>  
                </li>
      @endforeach
      @endforeach
              </ul>
      </div>
    </div>
  </div>
  <style type="text/css">
    .footer{
      display: none;
    }
  </style>
@endsection