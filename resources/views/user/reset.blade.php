@extends('layouts.site')

@section('title') {{ trans('passwords.title') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 register">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">{{ trans('passwords.title') }}</h2>
      </div>
      <div class="panel-body">
      {!! Form::open(array('url' => 'user/reset', 'class' => 'form-horizontal', 'method' => 'post')) !!}
        <fieldset>
          @if ($errors->has('email'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_email', trans('site.email'), ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
              {!! Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'icon_email']) !!}
            </div>
            @if ($errors->has('email'))
              <span class="col-md-4 control-hint text-danger">{!! $errors->first('email') !!}</span>
            @endif
          </div>
          @if ($errors->has('password'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_password', trans('site.password'), ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
              {!! Form::password('password', ['class' => 'form-control', 'id' => 'icon_password']) !!}
            </div>
            @if ($errors->has('password'))
              <span class="col-md-4 control-hint">{!! $errors->first('password') !!}</span>
            @endif
          </div>

          @if ($errors->has('password_confirmation'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_password_confirmation', trans('site.repeat_password'), ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
              {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'icon_password_confirmation']) !!}
            </div>
            @if ($errors->has('password_confirmation'))
              <span class="col-md-4 control-hint">{!! $errors->first('password_confirmation') !!}</span>
            @endif
          </div>
        </fieldset>
        <div class="form-group">
          <div class="col-md-offset-4 col-md-8">
            <input type="hidden" name="token" value="{{ $token }}"/>
            <button type="submit" class="btn btn-primary" name="reset">{{ trans('passwords.title') }}</button>
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
          <div class="col-md-6 text-center"><a href="/user/signup">{{trans('site.i_want_signin')}}</a></div>
          <div class="col-md-6 text-center"><a href="/user/forgot">{{trans('site.i_want_signup')}}</a></div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop


