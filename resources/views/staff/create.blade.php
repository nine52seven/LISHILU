@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('page-left')
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">添加员工</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- 内容正文 -->
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('url' => 'user/profile', 'class' => 'form-horizontal', 'method' => 'post')) !!}

            @if ($errors->has('name'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_name', '姓名', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('name', old('name') ? old('name') : '', ['class' => 'form-control', 'id' => 'icon_name']) !!}
            </div>
            @if ($errors->has('username'))
              <span class="col-md-5 control-hint text-danger">{!! $errors->first('username') !!}</span>
            @endif
            </div>

            @if ($errors->has('email'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_email', 'email', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('email', old('email') ? old('email') : $currentUser->email, ['class' => 'form-control', 'id' => 'icon_email']) !!}
            </div>
            @if ($errors->has('email'))
              <span class="col-md-5 control-hint">{!! $errors->first('email') !!}</span>
            @endif
            </div>

            @if ($errors->has('sex'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_email', '性别', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
                <label class="radio-inline">
                  <input type="radio" name="sex" value="0" @if ($currentUser->sex == 0) checked @endif> 男
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value="1" @if ($currentUser->sex == 1) checked @endif> 女
                </label>
            </div>
            @if ($errors->has('sex'))
              <span class="col-md-5 control-hint">{!! $errors->first('sex') !!}</span>
            @endif
            </div>

            @if ($errors->has('tel'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_tel', '公司电话', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('tel', old('tel') ? old('tel') : $currentUser->tel, ['class' => 'form-control', 'id' => 'icon_tel']) !!}
            </div>
            @if ($errors->has('tel'))
              <span class="col-md-5 control-hint">{!! $errors->first('tel') !!}</span>
            @endif
            </div>

            @if ($errors->has('mobile'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_mobile', '手机', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('mobile', old('mobile') ? old('mobile') : $currentUser->mobile, ['class' => 'form-control', 'id' => 'icon_mobile']) !!}
            </div>
            @if ($errors->has('mobile'))
              <span class="col-md-5 control-hint">{!! $errors->first('mobile') !!}</span>
            @endif
            </div>

            @if ($errors->has('idcard'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_idcard', '身份证', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::text('idcard', old('idcard') ? old('idcard') : $currentUser->idcard, ['class' => 'form-control', 'id' => 'icon_idcard']) !!}
            </div>
            @if ($errors->has('idcard'))
              <span class="col-md-5 control-hint">{!! $errors->first('idcard') !!}</span>
            @endif
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <input type="hidden" name="id" value="{{ $currentUser->id }}"/>
                <button class="btn btn-primary" type="submit">{{trans('site.update')}}</button>
              </div>
            </div>
            {!! Form::close() !!}
            @if(Session::has('message'))
                <div class="row">
                  <h3 class="text-center text-danger" style="padding:5px 0;">{{Session::get('message')}}</h3>
                </div>
            @endif
        </div>
    </div>
@stop

@section('page-right')
    <div class="list-group">
      <a href="/staff" class="list-group-item"><i class="fa fa-users fa-fw"></i> 全部员工</a></a>
      <a href="/staff/create" class="list-group-item active"><i class="fa fa-plus-square fa-fw"></i> 添加员工</a></a>
    </div>
@stop

@section('js')
@stop