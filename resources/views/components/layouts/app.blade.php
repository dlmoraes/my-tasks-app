<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col min-h-screen antialiased">
        <x-ui.header />
        <main class="flex flex-col flex-1 gap-4 p-6">
            {{ $slot }}
        </main>
    </div>
    <div id="notify-target"></div>
</body>

</html>
