<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-gray-100 to-gray-50 min-h-screen">
<x-header></x-header>
<main class="mx-auto max-w-7xl mt-12 px-8 pb-28">
    {{ $slot }}
</main>
@persist('player')
@livewire('player')
@endpersist
</body>
</html>
