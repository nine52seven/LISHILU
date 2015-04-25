<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{config('APP_SITE')}} - @yield('title', '')</title>

  <!-- CSS  -->
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href='http://fonts.useso.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
  @section('header')
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Lishilu</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/user/signin">登录</a></li>
        <li><a href="/user/signup">注册</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/user/signin">登录</a></li>
        <li><a href="/user/signup">注册</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
  @show

  @yield('content')

  @section('footer')
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">one2one studio!</a>
      </div>
    </div>
  </footer>
  @show

  <!--  Scripts-->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/all.js"></script>
  @yield('js')
  </body>
</html>
