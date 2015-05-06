<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_SITE')}} @yield('title', '')</title>

  <!-- CSS  -->

  {!! Html::style('/assets/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('/assets/bootstrap/css/bootstrap-theme.min.css') !!}
  {!! Html::style('/assets/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('http://fonts.useso.com/css?family=Lato:100') !!}
  {!! Html::style('/assets/css/style.css') !!}

  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
<div id="page-wrapper" style="padding-top:70px;">
  @section('header')
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin"><i class="fa fa-windows"> </i> Lishilu</a>
      </div>

      <div class="collapse navbar-collapse" id="admin-menu">
        @if (isset($currentUser))
        <ul class="nav navbar-nav">
          <li><a href="#">公司管理 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">社保管理</a></li>
          <li><a href="/admin/users">用户管理</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">其他 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/admin/users">用户管理</a></li>
              <li class="divider"></li>
              <li><a href="#">卖保险</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/admin/signout">退出</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/admin/signin">登录</a></li>
        </ul>
        @endif
      </div>
    </div>
  </nav>
  @show

  @section('body')
  <div class="container" style="min-height: 471px;">
    @yield('content')
  </div>
  @show

  @section('footer')
  <div class="container">
    <div class="row">
      <div class="well text-center">
        &copy;one2one studio!
      </div>
    </div>
  </div>
  @show
</div>

  <!--  Scripts-->
  {!! Html::script('/assets/js/jquery.min.js') !!}
  {!! Html::script('/assets/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('/assets/js/all.js') !!}

  @yield('js')
</body>
</html>
