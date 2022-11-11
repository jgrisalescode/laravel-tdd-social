<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>SocialApp</title>
</head>
<body>
    <x-shared.navbar />
    <main class="py-4">
        {{ $slot }}
    </main>
</body>
</html>
