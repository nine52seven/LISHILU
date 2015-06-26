@extends('layouts.site')

@section('title') {{ trans('site.signin') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 register">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">用户登录</h2>
      </div>
      <div class="panel-body">
      {!! Form::open(array('url' => 'user/signin', 'class' => 'form-horizontal', 'method' => 'post')) !!}
        <fieldset>
          @if ($errors->has('username'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_username', '用户名', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
              {!! Form::text('username', old('username'), ['class' => 'form-control', 'id' => 'icon_username']) !!}
            </div>
            @if ($errors->has('username'))
              <span class="col-md-4 control-hint text-danger">{!! $errors->first('username') !!}</span>
            @endif
          </div>
          @if ($errors->has('password'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_password', '密码', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
              {!! Form::password('password', ['class' => 'form-control', 'id' => 'icon_password']) !!}
            </div>
            @if ($errors->has('password'))
              <span class="col-md-4 control-hint">{!! $errors->first('password') !!}</span>
            @endif
          </div>
          <div class="form-group">
            <div class="col-md-offset-4 col-md-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" @if (old('remember')) checked @endif> 记住我
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group">
          <div class="col-md-offset-4 col-md-8">
            <button type="submit" class="btn btn-primary">{{ trans('site.signin') }}</button>
          </div>
        </div>
      {!! Form::close() !!}
      @if(Session::has('message'))
        <div class="row">
          <h3 class="text-center text-danger" style="padding:5px 0;">{{Session::get('message')}}</h3>
        </div>
      @endif

      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-md-6 text-center"><a href="/user/signup">{{trans('site.i_want_signup')}}</a></div>
          <div class="col-md-6 text-center"><a href="/user/forgot">{{trans('site.forget_password')}}</a></div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop