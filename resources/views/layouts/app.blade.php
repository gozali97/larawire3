<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<x-navigation-menu/>

<div class="py-5">
    <div class="container">
    {{ $slot }}
    </div>
</div>

@livewireScripts
</body>
</html>
