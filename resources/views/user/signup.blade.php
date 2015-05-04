@extends('layouts.site')

@section('title') {{ trans('site.signup') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3 sign_form">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12 center-align orange-text"> <i class="mdi-maps-location-history medium"></i></div>
            {!! Form::open(array('url' => 'user/signup', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix"></i>
                  {!! Form::text('email', old('email'), array('class' => 'validate', 'id' => 'icon_email')) !!}
                  @if ($errors->has('email'))
                    {!! Form::label('icon_email', $errors->first('email'), ['class' => 'red-text active']) !!}
                  @else
                    {!! Form::label('icon_email', trans('site.email').','.trans('site.email_hint')) !!}
                  @endif
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock prefix"></i>
                  {!! Form::password('password', ['class' => 'validate', 'id' => 'icon_password']) !!}
                  @if ($errors->has('password'))
                    {!! Form::label('icon_password', $errors->first('password'), ['class' => 'red-text active']) !!}
                  @else
                    {!! Form::label('icon_password', trans('site.password')) !!}
                  @endif
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock-outline prefix"></i>
                  {!! Form::password('password_confirmation', ['class' => 'validate', 'id' => 'icon_password_confirmation']) !!}
                  @if ($errors->has('password_confirmation'))
                    {!! Form::label('icon_password_confirmation', $errors->first('password_confirmation'), ['class' => 'red-text active']) !!}
                  @else
                    {!! Form::label('icon_password_confirmation', trans('site.repeat_password')) !!}
                  @endif
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-account-box prefix"></i>
                  {!! Form::text('name', old('name'), array('class' => 'validate', 'id' => 'icon_name')) !!}
                  @if ($errors->has('name'))
                    {!! Form::label('icon_name', $errors->first('name'), ['class' => 'red-text active']) !!}
                  @else
                    {!! Form::label('icon_name', trans('site.name')) !!}
                  @endif
                </div>
                <!-- <div class="input-field col s12">
                  <i class="mdi-action-home prefix"></i>
                  {!! Form::text('company', '', array('class' => 'validate', 'id' => 'icon_company')) !!}
                  {!! Form::label('icon_company', '公司') !!}
                </div>
                <div class="input-field col s12">
                  <i class="mdi-hardware-phone-iphone prefix"></i>
                  {!! Form::text('mobile', '', array('class' => 'validate', 'id' => 'icon_mobile')) !!}
                  {!! Form::label('icon_mobile', '手机') !!}
                </div> -->
                <!-- <div class="input-field col s12">
                  {!! Form::checkbox('remember', '1', '', array('id' => 'remember')) !!}
                  {!! Form::label('remember', '记住我') !!}
                </div> -->
                <div class="input-field col s12 center-align">
                  <button class="btn waves-effect waves-light orange" type="submit" name="signup">{{ trans('site.signup') }}
                    <i class="mdi-navigation-arrow-forward right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
        <div class="card-action">
            <div class="col s6 m6 center-align"><a href="/user/signin">{{trans('site.i_want_signin')}}</a></div>
            <div class="col s6 m6 center-align"><a href="/user/forgot">{{trans('site.forget_password')}}</a></div>
        </div>
        <div class="right" style="margin-top:15px;">
          <span class=" grey-text text-lighten-4"> {{ trans('site.slogan') }}</span>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop


