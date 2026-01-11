<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <title>MealMet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <x-header>

    </x-header>

    <main>
        {{ $slot }}
    </main>

    <x-footer>

    </x-footer>

    <script src="{{ asset('resources/js/header.js') }}"></script>
</body>
</html>