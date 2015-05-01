@extends('layouts.site')

@section('title') {{ trans('site.signin') }} @stop

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
            {!! Form::open(array('url' => 'user/signin', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  {!! Form::text('email', old('email'), ['class' => 'validate', 'id' => 'icon_email']) !!}
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
                <div class="input-field col s8">
                  {!! Form::checkbox('remember', '1', '', ['id' => 'remember']) !!}
                  {!! Form::label('remember', trans('site.remember_me')) !!}
                </div>
                <div class="input-field col s4">
                  <button class="btn waves-effect waves-light orange" type="submit" name="signin">{{ trans('site.signin') }}
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
            @if(Session::has('message'))
            <div class="col s12 card-panel red center-align white-text" style="padding:5px 0;">{{Session::get('message')}}</div>
            @endif
          </div>
        </div>
        <div class="card-action">
            <div class="col s6 m6 center-align"><a href="/user/signup">{{trans('site.i_want_signup')}}</a></div>
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