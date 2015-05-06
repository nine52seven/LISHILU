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
          @if(Session::has('message'))
          <div class="col-md-12 bg-danger center-block" style="padding:5px 0;">{{Session::get('message')}}</div>
          @endif
          <div class="form-group">
            <label for="input_email" class="col-sm-3 control-label">邮箱</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" placeholder="Email" name="email" id="input_email" value="{{old('email')}}">
            </div>
          </div>
          <div class="form-group">
            <label for="input_password" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" placeholder="Password" name="password" id="input_password" value="{{old('password')}}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-success btn-block">登录</button>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@stop


@section('js')
@stop