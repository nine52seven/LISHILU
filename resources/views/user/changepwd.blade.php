@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('page-left')
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">修改密码</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- 内容正文 -->
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('url' => 'user/changepwd', 'class' => 'form-horizontal', 'method' => 'post')) !!}
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
              <span class="col-md-5 control-hint text-danger">{!! $errors->first('password') !!}</span>
            @endif
            </div>

            @if ($errors->has('newpassword'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_newpassword', '新密码', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::password('newpassword', ['class' => 'form-control', 'id' => 'icon_newpassword']) !!}
            </div>
            @if ($errors->has('newpassword'))
              <span class="col-md-5 control-hint">{!! $errors->first('newpassword') !!}</span>
            @endif
            </div>

            @if ($errors->has('newpassword_confirmation'))
            <div class="form-group has-error">
            @else
            <div class="form-group">
            @endif
            {!! Form::label('icon_newpassword_confirmation', '确认新密码', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-5">
              {!! Form::password('newpassword_confirmation', ['class' => 'form-control', 'id' => 'icon_newpassword_confirmation']) !!}
            </div>
            @if ($errors->has('newpassword_confirmation'))
              <span class="col-md-5 control-hint">{!! $errors->first('newpassword_confirmation') !!}</span>
            @endif
            </div>


            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <input type="hidden" name="id" value="{{ $currentUser->id }}"/>
                <button class="btn btn-default" type="submit">{{trans('site.update')}}</button>
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
    <div class="panel panel-primary">
        <div class="panel-heading">
            操作
        </div>
        <div class="panel-body">

        </div>
    </div>
@stop

@section('js')
@stop