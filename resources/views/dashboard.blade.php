@extends('layouts.dashboard')

@section('title') {{ trans('site.dashboard_title') }} @stop

@section('headjs')
@stop

@section('content')
<!-- 导航 -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{trans('site.dashboard')}}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- 内容正文 -->

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>New Comments!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>New Tasks!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">124</div>
                        <div>New Orders!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Support Tickets!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-bell fa-fw"></i>
                最新动态
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    <a class="list-group-item" href="#"> <i class="fa fa-comment fa-fw"></i>
                        New Comment
                        <span class="pull-right text-muted small"> <em>4 minutes ago</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-twitter fa-fw"></i>
                        3 New Followers
                        <span class="pull-right text-muted small"> <em>12 minutes ago</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-envelope fa-fw"></i>
                        Message Sent
                        <span class="pull-right text-muted small">
                            <em>27 minutes ago</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-tasks fa-fw"></i>
                        New Task
                        <span class="pull-right text-muted small">
                            <em>43 minutes ago</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-upload fa-fw"></i>
                        Server Rebooted
                        <span class="pull-right text-muted small">
                            <em>11:32 AM</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-bolt fa-fw"></i>
                        Server Crashed!
                        <span class="pull-right text-muted small">
                            <em>11:13 AM</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-warning fa-fw"></i>
                        Server Not Responding
                        <span class="pull-right text-muted small">
                            <em>10:57 AM</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-shopping-cart fa-fw"></i>
                        New Order Placed
                        <span class="pull-right text-muted small">
                            <em>9:49 AM</em>
                        </span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-money fa-fw"></i>
                        Payment Received
                        <span class="pull-right text-muted small">
                            <em>Yesterday</em>
                        </span>
                    </a>
                </div>
                <!-- /.list-group -->
                <a class="btn btn-default btn-block" href="#">View All Alerts</a>
            </div>
            <!-- /.panel-body --> </div>
        <!-- /.panel -->
    </div>
</div>

@stop

@section('js')
@stop