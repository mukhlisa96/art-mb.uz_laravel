@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
<div class="body-c" id="body-c">
<div class="page-header">
  <div class="page-header-title" >
    <h6 data-aos="fade-up" data-aos-duration="3000" class="">{{__('messages.project_types')}}</h6>
  </div>
  <div class="view-all-projects-button header">
    <a class="mb-button" href="/show-all-projects" >{{__('messages.view_all_projects')}}</a>
  </div>
</div>
<div class="projects-grid">
  <div class="row container-fluid flex-container" >
      @foreach($projectCategory as $pc)
        <div class="col-md-6 sos-img">
          <div id="spinner"></div>
          <a href="{{ url("/projects/{$pc->slug}")}}">
          <img class="proj-img " src="{{ Voyager::image( $pc->img ) }}" id="loaded-img" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
          <div class="img-cap">
            <h5>{{$pc->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h5>
          </div>
          </a>
        </div>
      @endforeach
  </div>
 </div>
</div>
@stop

