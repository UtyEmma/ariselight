<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>{{$title ?? ''}} - {{$settings->site_title->value}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="{{$settings->seo_description->value}}" name="description" />
        <meta content="{{$settings->seo_tags->value}}" name="keywords" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="{{env('APP_DOMAIN')}}" />
        <meta name="email" content="{{$settings->site_email->value}}" />
        <meta name="version" content="1.5.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/icon.PNG')}}" />

        <!-- Css -->
        <link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">
        <script src="{{asset('assets/alpine.js')}}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="dark:bg-slate-900">
        @include('layouts.partials.guest.header')

        {{$slot}}

        @include('layouts.partials.guest.footer')
        @include('layouts.partials.guest.script')

        @livewireScripts
    </body>
</html>
