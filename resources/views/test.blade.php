{{-- resources/views/admin/dashboard.blade.php --}}
<!-- <link rel="stylesheet" href="/public/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/bower_components/font-awesome/css/font-awesome.min.css"> -->
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop