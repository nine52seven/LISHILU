@extends('layouts.site')

@section('title') {{ trans('site.forget_password') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3 sign_form">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12 center-align orange-text"> <i class="mdi-file-cloud-queue medium"></i></div>
            {!! Form::open(array('url' => 'user/forgot', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix"></i>
                  {!! Form::text('email', old('email'), ['class' => 'validate', 'id' => 'icon_email']) !!}
                  {!! Form::label('icon_email', trans('site.input_email')) !!}
                </div>
                <div class="input-field col s12 center-align">
                  <button class="btn waves-effect waves-light orange" type="submit" name="signin">{{ trans('site.send_forgot_link') }}
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
            @if(Session::has('message'))
            <div class="col s12 card-panel green center-align white-text" style="padding:5px 0;">{{Session::get('message')}}</div>
            @endif
          </div>
        </div>
        <div class="card-action">
            <div class="col s6 m6 center-align"><a href="/user/signin">{{trans('site.i_want_signin')}}</a></div>
            <div class="col s6 m6 center-align"><a href="/user/signup">{{trans('site.i_want_signup')}}</a></div>
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