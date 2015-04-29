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
<body class="blue-grey darken-3">
  @section('header')
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
      <ul id='dropdown2' class='dropdown-content'>
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
      <div class="nav-wrapper">
        <a id="logo-container" href="/" class="brand-logo blue-grey-text "><i class="mdi-maps-location-history left"></i> Lishilu</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#!" class="dropdown-button blue-grey-text" data-activates="dropdown1">{{Auth::user()->name}} <i class="mdi-navigation-arrow-drop-down right"></i> </a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
          <li><a href="#!" class="dropdown-button blue-grey-text" data-activates="dropdown2">{{Auth::user()->name}} <i class="mdi-navigation-arrow-drop-down right"></i> </a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse blue-grey-text"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>
  </div>
  @show
  <div class="">
    <div class="left">

    </div>
    <div class="main">
      welcome to lishilu!
      @yield('content')
    </div>
  </div>
  @show

  <!--  Scripts-->
  {!! Html::script('/js/jquery.min.js') !!}
  {!! Html::script('/js/materialize.js') !!}
  {!! Html::script('/js/all.js') !!}

  @yield('js')
  </body>
</html>
