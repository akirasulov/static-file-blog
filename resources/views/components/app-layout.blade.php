<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="max-w-2xl mx-auto py-16">
        <a href="{{ route('posts.index') }}"
            class="inline-block text-2xl font-extrabold hover:text-blue-500 transition-colors duration-100">{{ config('app.name') }}</a>
        <main class="mt-16">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
