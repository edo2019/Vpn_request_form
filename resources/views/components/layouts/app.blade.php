
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 text-gray-800">
    <x-layouts.app.sidebar :title="$title ?? null">
        <flux:main>
            {{ $slot }}
        </flux:main>
    </x-layouts.app.sidebar>
    @livewireScripts
</body>

</html>