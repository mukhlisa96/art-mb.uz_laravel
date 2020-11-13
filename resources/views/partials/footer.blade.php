<footer class="footer">
<div class="footer-accardion">
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               <h6 class="footer-col-header">{{__('messages.projects')}}</h6>
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          @foreach($projs as $p)
            <div class="footer-col-link">
            <a href="show-all-projects/{{$p->slug}}">
              {{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}
            </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <h6 class="footer-col-header">{{__('messages.expertise')}}</h6>
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
           @foreach($cats as $c)
            <div class="footer-col-link">
            <a href="expertise/{{$c->slug}}">
              {{$c->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}
            </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <h6 class="footer-col-header">{{__('messages.news')}}</h6>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
           @foreach($posts as $p)
            <div class="footer-col-link">
            <a href="news/{{$p->slug}}">
              {{$p->getTranslatedAttribute('title',  app()->getLocale(), 'fallbackLocale')}}
            </a>
            <div class="news-f-l"></div>
            </div>

          @endforeach
        </div>
      </div>
    </div>

      <div class="card">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
               <h6 class="footer-col-header">{{__('messages.about_us')}}</h6>
          </button>
        </h2>
      </div>

      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
           <div class="footer-col-link">
              <a href="/studio#team">{{__('messages.team')}}</a> 
            </div>
            <div class="footer-col-link">
              <a href="/careers">{{__('messages.careers')}}</a>
            </div>
            <div class="footer-col-link">
              <a href="/contact">{{__('messages.contacts')}}</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="container-fluid footer-list header">
   <div class="row footer-div container-fluid">
      <div class="col-3 "  data-aos="fade-up" data-aos-duration="3000">
        <h6>{{__('messages.projects')}}</h6>
        @foreach($projs as $p)
          <div>
          <a href="show-all-projects/{{$p->slug}}">
            <h6 class="seo-h6">{{$p->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h6>
          </a>
          </div>
        @endforeach
      </div>
    <div class="col-3" data-aos="fade-down" data-aos-duration="3000">

        <h6>{{__('messages.expertise')}}</h6>
        @foreach($cats as $c)
          <div>
          <a href="expertise/{{$c->slug}}">
            <h6 class="seo-h6">{{$c->getTranslatedAttribute('name',  app()->getLocale(), 'fallbackLocale')}}</h6>
          </a>
          </div>
        @endforeach
        
      </div>

      <div class="col-3"  data-aos="fade-up" data-aos-duration="3000">
        <h6>{{__('messages.news')}}</h6>
          @foreach($posts as $p)
          <div>
          <a href="news/{{$p->slug}}">
            <h6 class="seo-h6">{{$p->getTranslatedAttribute('title',  app()->getLocale(), 'fallbackLocale')}}</h6>
          </a>
          <div class="news-f-l"></div>
          </div>
        @endforeach
      </div>

      <div class="col-3"  data-aos="fade-down" data-aos-duration="3000">
        <h6>{{__('messages.about_us')}}</h6>
        <div>
        <h6 class="seo-h6"><a href="/studio#team">{{__('messages.team')}}</a></h6>
        </div>

        <div>
        <h6 class="seo-h6"><a href="/careers">{{__('messages.careers')}}</a></h6>
        </div>

        <div>
        <h6 class="seo-h6"><a href="/contact">{{__('messages.contacts')}}</a></h6>
        </div>       
      </div>
    </div>   
</div>
<div class="container-fluid bottom-footer-list row">
    <div class="col copyright-col"><h6 class="seo-h6"><a>2019 ©  <span style="font-weight: bold; color: grey;">Mahkam building</span> {{ __('messages.copyright') }}</a></h6></div>
    <div class="col copyright-col">
        <h6 class="seo-h6">
                {{ __('messages.privacy') }}
                <a href="https://t.me/mukhlisaKhusanboeva"><span style="font-weight: bold; color: grey;">{{ __('messages.muk') }}<span></a>
                </h6>
    </div>
    <div class="col copyright-col last">
      <ul class="social-list">
        @foreach($socials as $s)
        <li class="social-icon">
          <a href="{{$s->link}}"><i class="fa {{$s->class}}"></i></a>
        </li>
        @endforeach
      </ul>

       <div class="btn-group dropup lang-footer">
          <button type="button" class="btn btn-mb-footer-lang dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/grey-globe-icon.png')}}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор"  style="height: 17px;" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">

              @if((\App::isLocale('ru')))
              <span class="footer-lang-word">
                {{__('messages.russian')}}
              </span>

            @elseif((\App::isLocale('uz')))
              <span class="footer-lang-word">
                {{__('messages.uzbek')}}
              </span>

           @elseif((\App::isLocale('en')))

              <span class="footer-lang-word">
                {{__('messages.english')}}
              </span>
            @endif   

          </button>
          <div class="dropdown-menu footer-dd-show">
            @if(!(\App::isLocale('ru')))
                 <a class="dropdown-item dropdown-item-footer-lang" href="{{ route('lang.switch',['locale'=>'ru']) }}">{{ __('messages.russian') }}</a>
            @endif
            @if(!(\App::isLocale('uz')))
                <a class="dropdown-item dropdown-item-footer-lang" href="{{ route('lang.switch',['locale'=>'uz']) }}">{{ __('messages.uzbek') }}</a>
            @endif
            @if(!(\App::isLocale('en')))
                <a class="dropdown-item dropdown-item-footer-lang" href="{{ route('lang.switch',['locale'=>'en']) }}">{{ __('messages.english') }}</a>
            @endif
          </div>
        </div>
    </div>
</div>
</footer>
      