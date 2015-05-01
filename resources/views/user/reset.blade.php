@extends('layouts.site')

@section('title') {{ trans('passwords.title') }} @stop

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
            {!! Form::open(array('url' => 'user/reset', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <input type="hidden" name="token" value="{{ $token }}"/>
                </div>
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix"></i>
                  {!! Form::text('email', old('email'), array('class' => 'validate', 'id' => 'icon_email')) !!}
                  @if ($errors->has('email'))
                    {!! Form::label('icon_email', $errors->first('email'), ['class' => 'red-text active']) !!}
                  @else
                    {!! Form::label('icon_email', trans('site.email')) !!}
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
                <div class="input-field col s12 center-align">
                  <button class="btn waves-effect waves-light orange" type="submit" name="reset">{{ trans('passwords.title') }}
                    <i class="mdi-navigation-arrow-forward right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
            @if(Session::has('error'))
            <div class="col s12 card-panel red center-align white-text" style="padding:5px 0;">{{Session::get('error')}}</div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop


