@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
  <div class="container-fluid body-c" id="body-c">
  {{--   <header class="dark-header careers-header" style="background-color: white;">
      <div class="logo-dark">
         <a class="logo-a" href="index.html">Mahkam Building</a>
      </div>
      <nav>
        <ul class="dark">
          <form class="search-box dark">
                 <input class="search-txt" type="text" name="" placeholder="type to search">
                 <a class="search-btn-dark" href="#">
                  <i class="fa fa-search"></i>
                 </a>
              </form>
              <br>
          <li><a href="projects.html" class=" dark active">Projects</a></li>
          <li><a href="studio.html" class="dark">Studio</a></li>
          <li><a href="expertise.html" class="dark">Expertise</a></li>
          <li><a href="news.html" class="dark">News</a></li>
          <li><a href="careers.html" class="dark">Careers</a></li>
          <li><a href="contacts.html" class="dark">Contacts</a></li>
          <li class="li-lang">
            <img src="images/language-white.svg" class="lang-svg">
            <a href="#" class="collapse-lang">English</a>
          </li>
          <li>
            <ul class="nav-lang">
              <li>Uzbek</li>
              <li>Russia</li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <img class="toggle-img" src="images/white-circle.svg" style="height: 20px;">
      </div>
    </header> --}}
  <div class="row contact-info-row container-fluid">
      @foreach($contacts as $c)
    	<div class="col-lg-3 contact-info-box">
         <h5>{{$c->getTranslatedAttribute('place',  app()->getLocale(), 'fallbackLocale')}}</h5>
    		 <h6 class="span-date">{{$c->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h6>
    		 <h6 class="span-date">{{$c->getTranslatedAttribute('position',  app()->getLocale(), 'fallbackLocale')}}</h6>
    		 <h6 class="span-date">{{$c->getTranslatedAttribute('phone',  app()->getLocale(), 'fallbackLocale')}}</h6>
         {{-- <button class="mb-button">Email</button>  --}}
        <div style="margin-top: 20px; margin-bottom: 20px;" class="sharethis-inline-share-buttons"></div>
    	</div>
      @endforeach
  </div>

  <style type="text/css">
    iframe{
      padding: 0;
    }
  </style>
  <div class="contact-frame" style="padding: 0;">
  	{!!$banner[9]->link!!}
  </div>
  </div><!-- container-fluid -->
@endsection