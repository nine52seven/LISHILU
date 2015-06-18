<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/> -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_SITE')}} @yield('title', '')</title>

  <!-- CSS  -->
  {!! Html::style('/assets/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('http://fonts.useso.com/css?family=Lato:100') !!}
  {!! Html::style('/assets/css/style.css') !!}

  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
  @section('header')
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Shitafu</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
                <li><a href="/dashboard">{{ trans('site.dashboard') }}</a></li>
                <li><a href="/user/profile">{{ trans('site.profile') }}</a></li>
                <li><a href="/user/signout">{{ trans('site.signout') }}</a></li>
              @else
                <li><a href="/user/signin">{{ trans('site.signin') }}</a></li>
                <li><a href="/user/signup">{{ trans('site.signup') }}</a></li>
              @endif
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
  </nav>
  @show

  @yield('content')

  @section('footer')
  <div class="container footer">
    <hr/>
    <div class="row">
      <div class="col-md-6">
        <h5 class="">{{ trans('site.summary') }}</h5>
        <p class="grey-text text-lighten-4">{{ trans('site.summary_desc') }}</p>
      </div>
      <div class="col-md-3">
        <h5 class="">{{ trans('site.product') }}</h5>
        <ul>
          <li><a class="" href="#!">功能特性</a></li>
          <li><a class="" href="#!">数据安全</a></li>
          <li><a class="" href="#!">移动版本</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="">{{ trans('site.company') }}</h5>
        <ul>
          <li><a class="" href="about">{{ trans('site.about') }}</a></li>
          <li><a class="" href="contact">{{ trans('site.contact') }}</a></li>
          <li><a class="" href="privacy">{{ trans('site.privacy') }}</a></li>
          <li><a class="" href="terms">{{ trans('site.terms') }}</a></li>
        </ul>
      </div>
    </div>
    <footer>
      <p>&copy; 施塔福 2015</p>
    </footer>
  </div>
  @show

  <!--  Scripts-->
  {!! Html::script('/assets/js/jquery.min.js') !!}
  {!! Html::script('/assets/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('/assets/js/all.js') !!}

  @yield('js')
  </body>
</html>
