  @extends('layouts.index')
  @extends('menus.white-menu')
 @section('content')
<div class="body-c" id="body-c">
<div class="row container-fluid this-cat-header">
  <div class="proj-header col-sm-6">
    <h6>{{__('messages.careers')}}</h6>
  </div>
</div>

  @if(session('success'))
  <div class="row container-fluid" style="display: block;">
    <div class="col-md-6 mx-auto text-center">
      <div class="alert alert-success">
        {{__('messages.success_msg')}}
      </div>
    </div>
  </div>
@endif
  <!-- projects-body -->
  {{-- <div class="bigmenu">
    <ul class="menu-main">
      <li class="bigmenu-li"><a class="bigmenu-title" href="#">{{__('messages.careers')}} <i class="fa fa-angle-down"></i></a>
        <div class="menu-sub">
          <div class="menu-col-1">
            <ul>
              <li><a class="sub-menu-item" href="">Exterior</a></li>
              <li><a class="sub-menu-item" href="">3D</a></li>
              <li><a class="sub-menu-item" href="">Animation</a></li>
              <li><a class="sub-menu-item" href="">Exterior</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div> --}}<!-- bigmenu-end -->
  <div class="category-def-banner">
    <img src="{{ Voyager::image( $bs[7]->img ) }}" class="category-def-banner-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
  </div><!-- banner-end -->
  <div class="category-def-txt">
    <p>
      {!!$ts[2]->getTranslatedAttribute('content',  app()->getLocale(), 'fallbackLocale')!!}
    </p>
     {{-- <button class="mb-button">{{__('messages.discover_life')}}</button> --}}
  </div><!-- category-def-text-end -->
  <div class="sharethis-inline-share-buttons"></div>
  
  <div class="line"></div>

<div class="vacancy-container">
  <h4>{{__('messages.vacancies')}}</h4>
  <div class="row">

    @foreach($cs as $c)
    <div class="col-lg-4">
      <div class="vacancy-box">
      <span class="span-date">{{$c->getTranslatedAttribute('city',  app()->getLocale(), 'fallbackLocale')}}</span>
      <h5>{{$c->getTranslatedAttribute('position',  app()->getLocale(), 'fallbackLocale')}}</h5>
      <div class="a-container-div"><a class="mb-button" href="form" value="submit" enabled>{{__('messages.apply')}}</a></div> 
    </div>
    </div>
    @endforeach
  </div>
<div class="line"></div>
<div class="col-lg-6 submit-your-details">
  <h4>{{__('messages.cant_find')}}</h4>
  <p>
    {!!$ts[3]->getTranslatedAttribute('content',  app()->getLocale(), 'fallbackLocale')!!}
  </p>
  <div class="a-container-div"><a class="mb-button" href="form" value="submit">{{__('messages.submit_your_details')}}</a></div>
</div>
</div>

</div>
@stop