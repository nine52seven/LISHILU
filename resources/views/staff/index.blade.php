@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('page-left')
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">{{trans('site.profile')}}</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- 内容正文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>部门</th>
                            <th>入职日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
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