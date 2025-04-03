<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" href="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Goodfood') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div id="app">
        <main-app></main-app>
    </div>
</body>

</html>