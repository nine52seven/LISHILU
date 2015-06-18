@extends('layouts.site')

@section('title') {{ trans('site.slogan') }} @stop

@section('headjs')
@stop

@section('content')

<div class="jumbotron">
    <h1><span>让你的工作更简单</span></h1>
    <p class="lead">让创业者专注创业,其他小事交给我们</p>
    <p><a role="button" href="docs/getting-started/" class="btn btn-lg btn-success">开始了解</a>
    </p>
</div>

@stop

@section('js')
<script type="text/javascript">
</script>
@stop


