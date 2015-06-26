<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_SITE')}} @yield('title', '')</title>

  <!-- CSS  -->

  {!! Html::style('/assets/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('/assets/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('http://fonts.useso.com/css?family=Lato:100') !!}
  {!! Html::style('/assets/css/style.css') !!}

  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
@section('header')
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{env('APP_SITE')}}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard fa-fw"></i>
            {{trans('site.dashboard')}}
          </a>
        </li>
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard fa-fw"></i>
            公司信息
          </a>
        </li>
        <li>
          <a href="/staff">
            <i class="fa fa-bar-chart-o fa-fw"></i>
            {{trans('site.staff')}}
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-table fa-fw"></i>
            员工福利
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">熟悉我们</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">我们的团队</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- 新消息 -->
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle">
            <i class="fa fa-bell fa-fw"></i>
            <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-comment fa-fw"></i>
                  New Comment
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-twitter fa-fw"></i>
                  3 New Followers
                  <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle">
            <i class="fa fa-user fa-fw"></i>
            {{$currentUser->name}}
            <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li>
              <a href="/user/profile">
                <i class="fa fa-gear fa-fw"></i>
                {{trans('site.profile')}}
              </a>
            </li>
            <li>
              <a href="/user/changepwd">
                <i class="fa fa-key fa-fw"></i>
                修改密码
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="/user/signout">
                <i class="fa fa-sign-out fa-fw"></i>
                {{trans('site.signout')}}
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
@show

@section('body')
<div id="page-wrapper">
  <div class="container" style="min-height: 471px;">
    @yield('content')
  </div>
</div>
@show

@section('footer')
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="well text-center">
        {{trans('site.copyright')}}
      </div>
    </div>
  </div>
</div>
@show
  <!--  Scripts-->
  {!! Html::script('/assets/js/jquery.min.js') !!}
  {!! Html::script('/assets/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('/assets/js/all.js') !!}

  @yield('js')
  </body>
</html>
