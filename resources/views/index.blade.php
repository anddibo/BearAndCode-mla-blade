<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @stack('scripts')
</head>
<body class="min-h-screen">
    <div class="min-h-screen flex flex-col items-center justify-center">
        
        <div class="px-32">
            
            <main>
                <x-button type="submit">
                </x-button> 
            </main>

        </div>
        
    </div>        
</body>
</html>