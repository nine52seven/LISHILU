@extends('layouts.admin')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')
<!-- 导航 -->
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">用户管理<small><a href="/admin/users"><<返回</a></small></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-md-12">
    {!! Form::open(array('url' => 'admin/users/'.$user->id, 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PUT')) !!}
      <div class="form-group">
          <label class="control-label col-md-2">姓名</label>
          <div class="col-md-8">
            <input class="form-control" value="{{$user->name}}" name="name">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">性别</label>
          <div class="col-md-8">
            <label class="radio-inline">
              <input type="radio" name="sex" value="0" @if ($user->sex == 0) checked @endif> 男
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="1" @if ($user->sex == 1) checked @endif> 女
            </label>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">Email</label>
          <div class="col-md-8">
            <input class="form-control" value="{{$user->email}}" name="email">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">手机</label>
          <div class="col-md-8">
            <input class="form-control" value="{{$user->mobile}}" name="mobile">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">电话</label>
          <div class="col-md-8">
            <input class="form-control" value="{{$user->tel}}" name="tel">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">是否激活</label>
          <div class="col-md-8">
            <label class="radio-inline">
              <input type="radio" name="active" value="0" @if ($user->active == 0) checked @endif> 未激活
            </label>
            <label class="radio-inline">
              <input type="radio" name="active" value="1" @if ($user->active == 1) checked @endif> 激活
            </label>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-2">备注</label>
          <div class="col-md-8">
            <textarea class="form-control" rows="2" name="description">{{$user->description}}</textarea>
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-8">
          <button class="btn btn-default" type="submit">更新信息</button>

          @if(Session::has('message'))
          <span class="text-success" >{{Session::get('message')}}</span>
          @endif
        </div>
      </div>
    </form>
    {!! Form::close() !!}
  </div>
</div>

@stop

@section('js')
@stop