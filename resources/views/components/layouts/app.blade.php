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
        <header class="flex items-center justify-between px-6 py-4">
            <h1 class="text-2xl font-medium">My<span class="font-bold">Tasks</span></h1>

            <x-ui.avatar srcImg='https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp' />
        </header>
        <main class="flex flex-col flex-1 gap-4 p-6">
            {{ $slot }}
        </main>
    </div>
    <div id="notify-target"></div>
</body>

</html>
