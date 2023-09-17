@php
use Illuminate\Support\Facades\Vite;
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Vue JS CRUD Operations in Laravel</title>
    <!-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> -->
    <style>
        {!! Vite::content('resources/sass/app.scss') !!}
    </style>
</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>
    <!-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> -->
    <script>
        {!! Vite::content('resources/js/app.js') !!}
    </script>
</body>
</html>
