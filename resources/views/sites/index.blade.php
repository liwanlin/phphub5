@extends('layouts.default')

@section('title')
{{ lang('Recommended Sites') }} @parent
@stop

@section('content')

    <div class="box text-center site-intro rm-link-color">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        欢迎交换友链，目前只接受“技术博客”类的站点，如需请入群联系管理员！
    </div>

    <div class="sites-index">

{{--        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-weibo text-md"></i> Laravel/PHP 圈内人的微博', 'filterd_sites' => $sites['weibo']])--}}

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-globe text-md"></i> 推荐网站', 'filterd_sites' => $sites['site']])

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-flag text-md"></i> 推荐博客', 'filterd_sites' => $sites['blog']])

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-cloud text-md"></i> 开发者服务推荐', 'filterd_sites' => $sites['dev_service']])

    </div>

    @include('layouts.partials.topbanner')

@stop
