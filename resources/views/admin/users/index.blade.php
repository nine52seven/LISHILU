@extends('layouts.admin')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')
<!-- 导航 -->
<div class="row">
    <div class="col-md-12">
    <h3 class="page-header">用户管理</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <td>#</td>
          <td>姓名</td>
          <td>Email</td>
          <td>性别</td>
          <td>手机</td>
          <td>电话</td>
          <td>状态</td>
          <td>加入时间</td>
          <td>操作</td>
        </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->sex == 0? '男' : '女'}}</td>
          <td>{{$user->mobile}}</td>
          <td>{{$user->tel}}</td>
          <td>
            @if ($user->active == 1)
            <span class="label label-success">通过</span>
            @else
            <span class="label label-default">未通过</span>
            @endif
          </td>
          <td>{{$user->created_at}}</td>
          <td><a href="/admin/users/{{$user->id}}/edit"><i class="fa fa-edit"> </i></a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>

@stop

@section('js')
@stop