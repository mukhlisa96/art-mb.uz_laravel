@extends('layouts.index')
@section('content')
<div class="studio-div" id="body-c">
    @extends('menus.transparent-menu')
    <div class="container-fluid body-c">
        <div class="banner">
          <img src="{{ Voyager::image( $bs[3]->img ) }}" class="banner-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
        </div>
        <div class="studio-txt">
          <h4>{!!$ts[0]->getTranslatedAttribute('header', app()->getLocale(), 'fallbackLocale')!!}</h4>
          <p>{!!$ts[0]->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale')!!}</p>
          {{-- <button class="mb-button">{{__('messages.our_approach')}}</button> --}}
        </div>
        <div class="row container-fluid">
         <div class="my-col-6 col-md-6 col-sm-12 col-xs-12"> 
          <a href="">
            <div class="header">
            </div>
            <div class="media-content">
              <a href="#team">
                <img src="{{ Voyager::image( $bs[5]->img ) }}" class="img-fluid" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
              </a>
            </div>
          </a>
        </div>
         <div class="my-col-6 col-md-6 col-sm-12 col-xs-12"> 
            <a href="">
              <div class="header">
              </div>
              <div class="media-content">
                <a href="#team">
                  <img src="{{ Voyager::image( $bs[6]->img ) }}" class="img-fluid" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
                </a>
              </div>
            </a>
        </div>
        </div>
        <div class="studio-txt">
          <h4>{!!$ts[1]->getTranslatedAttribute('header', app()->getLocale(), 'fallbackLocale')!!}</h4>
          <p>{!!$ts[1]->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale')!!}</p>
          {{-- <button class="mb-button">{{__('messages.our_commitment')}}</button> --}}
        </div>
        <div class=" " data-aos="fade-up" data-aos-anchor-placement="top-bottom"> 
           <img src="{{ Voyager::image( $bs[4]->img ) }}" class="img-fluid" id="show-gallery" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
        </div> 
        <!-- filter-team-gallery -->
        <div class="my-filter-team container-fluid" id="team">
          <ul class="f-items">
            <li class="filter-item-studio team border-b" data-filter="team-member">Our team</li>
            <li class="filter-item-studio part " data-filter="partner">Partners</li>
            <div style="clear: both;"></div>
          </ul>
        <div class="row container-fluid">
           @foreach($members as $tm)
            <div class="team-member col-lg-3 col-md-3 col-sm-6 col-xs-6 member-div">
              <a href="studio/{{$tm->slug}}">
              <img class="img-fluid show-member-info" src="{{ Voyager::image( $tm->img ) }}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
              </a>
              <div class="item-caption">
                <span style="font-size: 12px;">{{$tm->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')}}</span>
                <br>
                <span style="font-size: 12px; font-style: bold;">{{$tm->getTranslatedAttribute('position', app()->getLocale(), 'fallbackLocale')}}</span>
              </div>
            </div>
          @endforeach
          @foreach($partners as $p)
            <div class="partners col-lg-3 col-md-3 col-sm-6 col-xs-6 partners-div member-div">
              <img class="img-fluid" src="{{ Voyager::image( $p->img ) }}" alt="{{$p->name}}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
            </div>
          @endforeach
        </div>  
        </div>
    </div>
</div>
 @endsection