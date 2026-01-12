<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <title>{{ $title }}</title>
    <meta name="description" content="MealMet is your AI-powered meal manager, helping you plan, organize, and enjoy your meals effortlessly.">
    <meta name="keywords" content="MealMet, AI Meal Manager, Meal Planning, Food Organization, Healthy Eating, Meal Prep, Nutrition, AI Technology">
    @vite([ 'resources/css/app.css', 'resources/js/app.js' ])
</head>

<body>
    <x-header>

    </x-header>

    <main>
        {{ $slot }}
    </main>

    <x-footer>

    </x-footer>
</body>

</html>