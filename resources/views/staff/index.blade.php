@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('page-left')
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">@if ($company) {{$company->name}} <small>{{$company->office_address}}</small>@else ... @endif</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- 内容正文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
            @if ($staff)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>性别</th>
                            <th>email</th>
                            <th>手机</th>
                            <th>身份证</th>
                            <th>入职日期</th>
                            <th>状态</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach ($staff as $s)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->tel}}</td>
                            <td>@if ($s->sex == 0) 男 @else 女 @endif</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->mobile}}</td>
                            <td>{{$s->idcard}}</td>
                            <td>{{$s->entrydate}}</td>
                            <td>@if ($s->status == 1) <span class="label label-sm label-success">正式</span> @elseif ($s->status == 2) <span class="label label-sm label-warning">试用</span> @else <span class="label label-sm label-default">离职</span> @endif</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="jumbotron">
                  <h3>还没有成员,你可以点击下面按钮添加或者导入excel:</h3>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">导入Excel</a></p>
                </div>
            @endif
            </div>
        </div>
    </div>
@stop

@section('page-right')
    <div class="list-group">
      <a href="/staff" class="list-group-item active"><i class="fa fa-users fa-fw"></i> 全部员工</a></a>
      <a href="/staff/create" class="list-group-item"><i class="fa fa-plus-square fa-fw"></i> 添加员工</a></a>
    </div>
@stop

@section('js')
@stop