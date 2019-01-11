@extends('adminlte::page')

@section('title')
	@yield('manager_title')
@stop

@section('content_header')
    @yield('manager_content_header')
@stop

@section('content')
    @include('admin.partials.admin_notificarion')
	@yield('manager_content')
@stop
{{-- 
@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager.css') }}">
    @yield('manager_css')
@stop

@section('js')
    <script rel="application/javascript" src="{{ asset('js/manager.js') }}"></script>
    @yield('manager_js')
@stop
--}}