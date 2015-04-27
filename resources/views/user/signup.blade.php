@extends('layouts.site')

@section('title') 注册 @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3 signin">
      <div class="card">
        <div class="card-content">
          <div class="row">
            {!! Form::open(array('url' => 'user/signup', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                @foreach ($errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix"></i>
                  {!! Form::text('email', old('email'), array('class' => 'validate', 'id' => 'icon_email')) !!}
                  {!! Form::label('icon_email', 'Email') !!}
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock prefix"></i>
                  {!! Form::password('password', '', array('class' => 'validate', 'id' => 'icon_password')) !!}
                  {!! Form::label('icon_password', '密码') !!}
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock-outline prefix"></i>
                  {!! Form::password('password_confirmation', '', array('class' => 'validate', 'id' => 'icon_password_confirmation')) !!}
                  {!! Form::label('icon_password_confirmation', '重复密码') !!}
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
                  <button class="btn waves-effect waves-light orange" type="submit" name="signup">免费注册
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
        <div class="card-action">
          <a href="/user/foget_password">忘记密码</a>
          已有账号? <a href="/user/signin">我要登录</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
<script type="text/javascript">
</script>
@stop


