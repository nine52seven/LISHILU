<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{env('APP_SITE')}} @yield('title', '')</title>

  <!-- CSS  -->
  {!! Html::style('/css/style.css') !!}
  {!! Html::style('/css/materialize.css') !!}
  {!! Html::style('http://fonts.useso.com/css?family=Lato:100') !!}

  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
  @section('header')
  <div class="navbar-fixed">
    <nav class="orange" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo"><i class="mdi-maps-location-history left"></i> Lishilu</a>
        @if (Auth::check())
        <ul class="right hide-on-med-and-down">
          <li><a href="/dashboard">{{ trans('site.dashboard') }}</a></li>
          <li><a href="/user/profile">{{ trans('site.profile') }}</a></li>
          <li><a href="/user/signout">{{ trans('site.signout') }}</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="/dashboard">{{ trans('site.dashboard') }}</a></li>
          <li><a href="/user/profile">{{ trans('site.profile') }}</a></li>
          <li><a href="/user/signout">{{ trans('site.signout') }}</a></li>
        </ul>
        @else
        <ul class="right hide-on-med-and-down">
          <li><a href="/user/signin">{{ trans('site.signin') }}</a></li>
          <li><a href="/user/signup">{{ trans('site.signup') }}</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="/user/signin">{{ trans('site.signin') }}</a></li>
          <li><a href="/user/signup">{{ trans('site.signup') }}</a></li>
        </ul>
        @endif
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>
  </div>
  @show

  @yield('content')

  @section('footer')
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">{{ trans('site.summary') }}</h5>
          <p class="grey-text text-lighten-4">{{ trans('site.summary_desc') }}</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{ trans('site.product') }}</h5>
          <ul>
            <li><a class="white-text" href="#!">功能特性</a></li>
            <li><a class="white-text" href="#!">数据安全</a></li>
            <li><a class="white-text" href="#!">移动版本</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{ trans('site.company') }}</h5>
          <ul>
            <li><a class="white-text" href="about">{{ trans('site.about') }}</a></li>
            <li><a class="white-text" href="contact">{{ trans('site.contact') }}</a></li>
            <li><a class="white-text" href="privacy">{{ trans('site.privacy') }}</a></li>
            <li><a class="white-text" href="terms">{{ trans('site.terms') }}</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">{{ trans('site.copyright') }}</a>
      </div>
    </div>
  </footer>
  @show

  <!--  Scripts-->
  {!! Html::script('/js/jquery.min.js') !!}
  {!! Html::script('/js/materialize.js') !!}
  {!! Html::script('/js/all.js') !!}

  @yield('js')
  </body>
</html>
