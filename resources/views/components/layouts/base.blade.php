<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>{{ $title ?? "MLA" }}</title>
</head>
<body>
    <div class="min-h-full">

        <!-- Se nenhum navigation foi definido, usa o componente navigation padrão -->
        @if (!isset($navigation))
            <x-layouts.navigation></x-layouts.navigation>
        @else
            {{ $navigation }}
        @endif

        <div class="py-10">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>