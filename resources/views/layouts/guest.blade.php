<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Hously - Tailwind CSS Real Estate Website Landing Page Template</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Real Estate Website Landing Page" name="description" />
        <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.5.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="dark:bg-slate-900">
        @include('layouts.partials.guest.header')

        {{$slot}}

        @include('layouts.partials.guest.footer')
        @include('layouts.partials.guest.script')
    </body>
</html>
