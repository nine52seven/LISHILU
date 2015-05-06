@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')
<!-- 导航 -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{trans('site.profile')}}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- 内容正文 -->
<div class="row">
    <div class="col-md-8">
        {!! Form::open(array('url' => 'user/profile','method' => 'post')) !!}
            <div class="form-group">
                <label>姓名</label>
                {!! Form::text('name', old('name') ? old('name') : $currentUser->name, array('class' => 'form-control', 'id' => 'icon_name')) !!}
                @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>性别</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="0" @if ($currentUser->sex == 0) checked @endif>男
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="1" @if ($currentUser->sex == 1) checked @endif>女
                    </label>
                </div>
                @if ($errors->has('sex'))
                <p class="text-danger">{{ $errors->first('sex') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>手机</label>
                {!! Form::text('mobile', old('mobile')?old('mobile'):$currentUser->mobile, array('class' => 'form-control', 'id' => 'icon_mobile')) !!}
                @if ($errors->has('mobile'))
                <p class="text-danger">{{ $errors->first('mobile') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>公司电话</label>
                {!! Form::text('tel', old('tel')?old('tel'):$currentUser->tel, array('class' => 'form-control', 'id' => 'icon_tel')) !!}
                @if ($errors->has('tel'))
                <p class="text-danger">{{ $errors->first('tel') }}</p>
                @endif
            </div>
            <input type="hidden" name="id" value="{{ $currentUser->id }}"/>
            <button class="btn btn-default" type="submit">{{trans('site.update')}}</button>
            @if(Session::has('message'))
                <span class="text-success" >{{Session::get('message')}}</span>
            @endif
        {!! Form::close() !!}
    </div>
</div>

@stop

@section('js')
@stop