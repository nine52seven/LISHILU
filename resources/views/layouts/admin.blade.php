<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{env('APP_SITE')}} @yield('title', '')</title>

  <!-- CSS  -->

  {!! Html::style('/assets/css/style.css') !!}
  {!! Html::style('/assets/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('/assets/bootstrap/css/bootstrap-theme.min.css') !!}
  {!! Html::style('/assets/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('/assets/metisMenu/metisMenu.min.css') !!}
  {!! Html::style('/assets/sb-admin-2/css/sb-admin-2.css') !!}
  {!! Html::style('http://fonts.useso.com/css?family=Lato:100') !!}

  @yield('css')

  <!-- js  -->
  @yield('headjs')

</head>
<body>
<div class="wrapper">
  @section('header')
  <nav style="margin-bottom: 0" role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
      <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/dashboard" class="navbar-brand">Lishilu.com</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
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
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-envelope fa-fw"></i>
                Message Sent
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-tasks fa-fw"></i>
                New Task
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-upload fa-fw"></i>
                Server Rebooted
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#" class="text-center">
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-alerts --> </li>
      <!-- 个人设置 -->
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
          <i class="fa fa-user fa-fw"></i>
          {{$currentUser->email}}
          <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li>
            <a href="/user/profile">
              <i class="fa fa-gear fa-fw"></i>
              {{trans('site.profile')}}
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
        <!-- /.dropdown-user --> </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div role="navigation" class="navbar-default sidebar">
      <div class="sidebar-nav navbar-collapse">
        <ul id="side-menu" class="nav in">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" placeholder="Search..." class="form-control">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
            <!-- /input-group --> </li>
          <li>
            <a href="/dashboard">
              <i class="fa fa-dashboard fa-fw"></i>
              {{trans('site.dashboard')}}
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
          <li>
            <a href="#">
              <i class="fa fa-edit fa-fw"></i>
              社保基金
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-files-o fa-fw"></i>
              关于Lishilu
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
              <li>
                <a href="#">熟悉Lishilu</a>
              </li>
              <li>
                <a href="#">我们团队</a>
              </li>
            </ul>
            <!-- /.nav-second-level --> </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse --> </div>
    <!-- /.navbar-static-side --> </nav>
  @show

  @section('body')
  <div id="page-wrapper" style="min-height: 471px;">
    @yield('content')
  </div>
  @show

</div>
  <!--  Scripts-->
  {!! Html::script('/assets/js/jquery.min.js') !!}
  {!! Html::script('/assets/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('/assets/metisMenu/metisMenu.min.js') !!}
  {!! Html::script('/assets/sb-admin-2/js/sb-admin-2.js') !!}
  {!! Html::script('/assets/js/all.js') !!}

  @yield('js')
  </body>
</html>
