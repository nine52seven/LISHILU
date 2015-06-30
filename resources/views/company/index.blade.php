@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('page-left')
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">{{ $company->name }} <small>{{$company->office_address}}</small></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- 内容正文 -->
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-3 control-label">公司名称</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->name}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">注册地址</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->reg_address}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">办公地址</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->office_address}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">法人</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->legal_person}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">员工人数</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->staff_num}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">营业执照</label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-default">上传扫描件</button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">营业执照代码</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->business_licence_code}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">税务登记证</label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-default">上传扫描件</button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">税务登记代码</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->taxation_code}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">组织代码证</label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-default">上传扫描件</button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">组织机构代码</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->organization_code}}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">注册时间</label>
                    <div class="col-md-9">
                        <p class="form-control-static">{{$company->created_at}}</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('page-right')
    <div class="list-group">
      <a href="/company/edit/1" class="list-group-item"><i class="fa fa-users fa-fw"></i> 修改公司信息</a></a>
    </div>
@stop

@section('js')
@stop