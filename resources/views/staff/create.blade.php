@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')
<!-- 导航 -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{trans('site.staff')}}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- 内容正文 -->
<div class="row">
    <div class="col-md-8">

        {!! Form::open(array('url' => '/staff', 'class' => 'form-horizontal', 'method' => 'post')) !!}
            <div class="form-group">
                <label>姓名</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>性别</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>手机</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>公司</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>公司电话</label>
                <input class="form-control">
            </div>
            <button class="btn btn-default" type="submit">添加员工</button>
        </form>
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                操作
            </div>
            <div class="panel-body">
                <a href="/staff"><i class="fa fa-users fa-fw"></i> 全部员工</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
@stop