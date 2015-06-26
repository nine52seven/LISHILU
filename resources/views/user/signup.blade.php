@extends('layouts.site')

@section('title') {{ trans('site.signup') }} @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 register">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">注册用户</h2>
      </div>
      <div class="panel-body">
      {!! Form::open(array('url' => 'user/signup', 'class' => 'form-horizontal', 'method' => 'post')) !!}
        <fieldset>
          <legend>账号信息</legend>
          @if ($errors->has('username'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_username', '用户名', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('username', old('username'), ['class' => 'form-control', 'id' => 'icon_username']) !!}
            </div>
            @if ($errors->has('username'))
              <span class="col-md-5 control-hint text-danger">{!! $errors->first('username') !!}</span>
            @else
              <span class="col-md-5 control-hint">长度为3-16,字母或数字的组合</span>
            @endif
          </div>
          @if ($errors->has('password'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_password', '密码', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::password('password', ['class' => 'form-control', 'id' => 'icon_password']) !!}
            </div>
            @if ($errors->has('password'))
              <span class="col-md-5 control-hint">{!! $errors->first('password') !!}</span>
            @else
              <span class="col-md-5 control-hint">长度为8-16,字母或数字的组合</span>
            @endif
          </div>
          @if ($errors->has('password_confirmation'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_password_confirmation', '重复密码', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'icon_password_confirmation']) !!}
            </div>
            @if ($errors->has('password_confirmation'))
              <span class="col-md-5 control-hint">{!! $errors->first('password_confirmation') !!}</span>
            @endif
          </div>
          @if ($errors->has('name'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_name', '真实姓名', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'icon_name']) !!}
            </div>
            @if ($errors->has('name'))
              <span class="col-md-5 control-hint">{!! $errors->first('name') !!}</span>
            @endif
          </div>
          @if ($errors->has('contact_info'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_contact_info', '联系方式', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('contact_info', old('contact_info'), ['class' => 'form-control', 'id' => 'icon_contact_info']) !!}
            </div>
            @if ($errors->has('contact_info'))
              <span class="col-md-5 control-hint">{!! $errors->first('contact_info') !!}</span>
            @else
              <span class="col-md-5 control-hint">手机或者公司固话</span>
            @endif
          </div>
          @if ($errors->has('email'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_email', 'email', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'icon_email']) !!}
            </div>
            @if ($errors->has('email'))
              <span class="col-md-5 control-hint">{!! $errors->first('email') !!}</span>
            @else
              <span class="col-md-5 control-hint">用于接收通知信息</span>
            @endif
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>公司详细资料</legend>
          @if ($errors->has('company_name'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_com_name', '公司名称', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
              {!! Form::text('company_name', old('company_name'), ['class' => 'form-control', 'id' => 'icon_com_name']) !!}
              @if ($errors->has('email'))
                <span class="help-block">{!! $errors->first('company_name') !!}</span>
              @endif
            </div>
          </div>
          @if ($errors->has('legal_person'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_legal_person', '法人', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
              {!! Form::text('legal_person', old('legal_person'), ['class' => 'form-control', 'id' => 'icon_legal_person']) !!}
              @if ($errors->has('legal_person'))
                <span class="help-block">{!! $errors->first('legal_person') !!}</span>
              @endif
            </div>
          </div>
          @if ($errors->has('reg_address'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_reg_addr', '注册地址', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
              {!! Form::text('reg_address', old('reg_address'), ['class' => 'form-control', 'id' => 'icon_reg_addr']) !!}
              @if ($errors->has('reg_address'))
                <span class="help-block">{!! $errors->first('reg_address') !!}</span>
              @endif
            </div>
          </div>
          @if ($errors->has('office_address'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_office_addr', '办公地址', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
              {!! Form::text('office_address', old('office_address'), ['class' => 'form-control', 'id' => 'icon_office_addr']) !!}
              @if ($errors->has('office_address'))
                <span class="help-block">{!! $errors->first('office_address') !!}</span>
              @endif
            </div>
          </div>
          @if ($errors->has('staff_num'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            {!! Form::label('icon_staff_num', '员工人数', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
              <label class="radio-inline">
                <input type="radio" name="staff_num" value="1" @if (old('staff_num') == 1) checked @endif> 1-20
              </label>
              <label class="radio-inline">
                <input type="radio" name="staff_num" value="2" @if (old('staff_num') == 2) checked @endif> 20-50
              </label>
              <label class="radio-inline">
                <input type="radio" name="staff_num" value="3" @if (old('staff_num') == 3) checked @endif> 50-100
              </label>
              <label class="radio-inline">
                <input type="radio" name="staff_num" value="4" @if (old('staff_num') == 4) checked @endif> 100-500
              </label>
              <label class="radio-inline">
                <input type="radio" name="staff_num" value="5" @if (old('staff_num') == 5) checked @endif> 500以上
              </label>
              @if ($errors->has('staff_num'))
                <span class="help-block">{!! $errors->first('staff_num') !!}</span>
              @endif
            </div>
          </div>
          @if ($errors->has('agreement'))
          <div class="form-group has-error">
          @else
          <div class="form-group">
          @endif
            <div class="col-md-offset-2 col-md-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="agreement" @if (old('agreement')) checked @endif> 阅读并同意<a href="#"><<用户服务协议>></a>
                </label>
              </div>
              @if ($errors->has('agreement'))
                <span class="help-block">{!! $errors->first('agreement') !!}</span>
              @endif
            </div>
          </div>
        </fieldset>
        <div class="form-group">
          <div class="col-md-offset-2 col-md-8">
            <button type="submit" class="btn btn-primary">{{ trans('site.signup') }}</button>
          </div>
        </div>
      {!! Form::close() !!}
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-md-6 text-center"><a href="/user/signin">{{trans('site.i_want_signin')}}</a></div>
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


