  @foreach ($items as $menu_item)
    <li><a class="dark" href="{{url($menu_item->url)}}">{{$menu_item->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')}}</a></li>
  @endforeach