@extends('layouts.admin')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default" style="margin-top:25%">
      <div class="panel-heading">
        <h3 class="panel-title">请登录</h3>
      </div>
      <div class="panel-body">
        {!! Form::open(array('url' => 'admin/signin', 'class' => 'form-horizontal', 'method' => 'post')) !!}
          <div class="form-group">
            <label for="input_username" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Username" name="username" id="input_username" value="{{old('username')}}">
            </div>
          </div>
          <div class="form-group">
            <label for="input_password" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" placeholder="Password" name="password" id="input_password" value="{{old('password')}}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" @if (old('remember')) checked @endif> 记住我
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-success btn-block">登录</button>
            </div>
          </div>
        {!! Form::close() !!}
        @if(Session::has('message'))
          <div class="row">
            <h3 class="text-center text-danger" style="padding:5px 0;">{{Session::get('message')}}</h3>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

@stop


@section('js')
@stop