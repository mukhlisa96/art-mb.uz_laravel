@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
<div class="body-c" id="body-c">
<div class="row container-fluid this-cat-header">
  <div class="proj-header col-sm-6">
    <h6>{{__('messages.recent_projects')}}</h6>
  </div>
  <div class="proj-numb col-sm-6">
    <h6>{{$count}}  {{__('messages.number_ofprojects')}}</h6>
  </div>
</div>

<div class="">
   <div class="row container-fluid flex-container">
    @foreach($projects as $p)
       <div class="col-md-6 sos-img">
          <div id="spinner"></div>
          <a href="{{ url("show-all-projects/{$p->slug}")}}">
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