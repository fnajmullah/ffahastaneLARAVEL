@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @if(!auth()->check())
        <div class="col-md-6">
            <img src="/banner/login-banner1.png" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>{{__('messages.welcomecontent.title')}}</h2>
            <p> {{__('messages.welcomecontent.description')}}</p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success" style="line-height: 1.2;">{{__('messages.welcomecontent.registeraspatient')}}</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary" style="line-height: 1.2;">{{ __('messages.login') }}</button></a>
            </div>
        </div>
        @endif
    </div>
    <hr>
  <!--date picker component-->
  <find-doctor></find-doctor>
  
</div>
@endsection
