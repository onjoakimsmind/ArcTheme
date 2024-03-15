<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    @vite(['css/app.css', 'js/app.js'])
    @if ($css)
        <style>
            {{ $css ?? null }}
        </style>
    @endif
    <script>
        const slug = "{{ $slug }}"
    </script>
</head>

<body class="antialiased">
    <section class="hero">
    </section>
