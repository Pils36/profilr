<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from themezhub.net/workoo-demo/workoo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Sep 2021 17:40:23 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- All Plugins Css -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body class="blue-skin">