<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{!empty($title)? $title : trans('admin.admin-panel')}}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"/>
    <!-- Theme -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/AdminLTE/dist/css/adminlte.min.css')}}">

    @if(direction() == 'ltr')

    @else
{{--        <link rel="stylesheet" href="{{asset('design/AdminLTE/distltr/css/adminlte.min.css')}}">--}}

        <link rel="stylesheet" href="{{asset('design/AdminLTE/distltr/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('design/AdminLTE/distltr/css/custom-style.css')}}">
        @endif


    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')}}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('design/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- flag-icon-css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">






</head>
