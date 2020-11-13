
<header class="header-light" id="transparentNavId"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <div class="">
        <a class="logo-a" href="/"><h6 class="logo">MAHKAM BUILDING</h6></a>
      </div>
  <nav>
    <ul class="">
      <div class="search-box" style="padding-top: 18px; z-index: 5000;">
         <a class="search-btn" href="#">
           <i class="fa fa-search"></i>
         </a>
         <input autocomplete="off" id="search" class="search-txt" type="text" name="search"  placeholder="{{__('messages.type_to_search')}}">
         <span id="cose-search" class="close-search-tr" style="z-index: 2">×</span>
      </div>


        <br>
        {{menu('User', 'menus.items-transparent')}}
        <li class="nav-lang">
        <img src="{{asset('images/language-white.svg')}}" class="lang-svg" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
        
            @if((\App::isLocale('ru')))
              <a href="#" class="collapse-lang">
                {{__('messages.russian')}}
              </a>

            @elseif((\App::isLocale('uz')))
            <a href="#" class="collapse-lang">
                {{__('messages.uzbek')}}
              </a>

           @elseif((\App::isLocale('en')))

              <a href="#" class="collapse-lang">
                {{__('messages.english')}}
              </a>
            @endif   
      </li>
      <li>

        <ul class="nav-lang">
            @if(!(\App::isLocale('ru')))
            <li>
                <a href="{{ route('lang.switch',['locale'=>'ru']) }}">
                    {{__('messages.russian')}}
                </a>
            </li>
            @endif    
            @if(!(\App::isLocale('uz')))
            <li>    
                <a href="{{ route('lang.switch',['locale'=>'uz']) }}">
                    {{__('messages.uzbek')}}
                </a>
            </li>    
            @endif
             @if(!(\App::isLocale('en')))
            <li> 
              <a href="{{ route('lang.switch',['locale'=>'en']) }}">
                    {{__('messages.english')}}
                </a>
            </li>    
            @endif
        </ul>
      </li>
    </ul>
  </nav>
  <div class="menu-toggle-tr">
    <img class="toggle-img-transparent" src="{{asset('images/white-circle.svg')}}" alt="интерьер экстерьер пейзаж ландшафт  архитектура и дизайн авторский надзор">
  </div>
</header>