@extends('layouts.index')
@extends('menus.white-menu')
@section('content')
{{-- <div class="category-def-banner">
    <img src="{{ asset('images/studio-banner.jpg') }}" class="category-def-banner-img">
  </div> --}}
<div class="form-class body-c" id="body-c">
  <form action="{{url('/send')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">{{__('messages.name')}}</label>
      <input name="name" id="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{__('messages.namepl')}}">
    </div> 
   <div class="form-group">
      <label for="exampleFormControlInput1">{{__('messages.position')}}</label>
      <input name="position" id="position" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{__('messages.positionpl')}}">
    </div>
     <div class="form-group">
      <label for="exampleFormControlInput1">{{__('messages.phone')}}</label>
      <input name="phone" id="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="90 999 99 99">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">{{__('messages.msg')}}</label>
      <textarea name="mes" id="mes" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{__('messages.msgpl')}}"></textarea>
    </div>
    <button class="mb-button" style="margin-bottom: 0;">{{__('messages.apply')}}</button>
  </form>
  <div class="line"></div>
</div>
@endsection