<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Archivo+Black&family=Tajawal:wght@900&family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'I-Order.com')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
<div class="container-fluid p-0 mb-3 align-items-center">
    @yield('header')
</div>
<main class="container">
    @yield('main', 'Page under construction ...')
</main>

{{--  Footer  --}}
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
