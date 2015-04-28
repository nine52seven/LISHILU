@extends('layouts.site')

@section('title') {{ trans('site.signin') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3 signin">
      <div class="card">
        <div class="card-content">
          <div class="col s12 center-align orange-text"> <i class="mdi-file-cloud-queue medium"></i></div>
          <div class="row">
            {!! Form::open(array('url' => 'user/signin', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  {!! Form::text('email', old('email'), ['class' => 'validate', 'id' => 'icon_email']) !!}
                  {!! Form::label('icon_email', trans('site.email')) !!}
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock prefix"></i>
                  {!! Form::password('password', ['class' => 'validate', 'id' => 'icon_password']) !!}
                  {!! Form::label('icon_password', trans('site.password')) !!}
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
          <a href="/user/foget_password">{{trans('site.forget_password')}}</a>
          {{trans('site.have_no_account')}}? <a href="/user/signup">{{trans('site.i_want_signup')}}</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop