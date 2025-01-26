<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Code.Zone
    </title>

    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- SEO -->
    <meta name="robots" content="index, follow">
    <meta property="description" content="@if (isset($description)) {{$description}} @endif">

    <meta property="og:title" content="{{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }} Code.Zone">
    <meta property="og:description" content="@if (isset($description)) {{$description}} @endif">
    <meta property="og:image" content="{{asset('img/logo.png')}}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Code.Zone">
    <meta name="og:autor" content="Code.Zone">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@NxHostFR">
    <meta name="twitter:creator" content="@NxHostFR">
    <meta name="twitter:title" content="@yield('title', "") - Code.Zone">
    <meta name="twitter:description" content="@if (isset($description)) {{$description}} @endif">
    <meta name="twitter:image" content="{{asset('img/logo.png')}}">


    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-white text-black dark:bg-light_gray dark:text-white font-mono">
    @if (isset($slimHeader) && $slimHeader)
        @yield('body')
        
    @else
        @include('partials.header')
        
        <div class="flex flex-row">
            @include('partials.sidebar')

            @yield('body')
        </div>
    @endif

    @include('partials.footer')
</body>
</html>