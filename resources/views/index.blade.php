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
                <x-alert 
                    type="success"
                    :$title
                    :$message 
                />

                <x-alert 
                    class="my-4"
                    type="error"
                    :$title
                    :$message 
                />

                <x-alert 
                    type="warning"
                    :$title
                    :$message 
                />
            </main>
        </div>
        
    </div>        
</body>
</html>