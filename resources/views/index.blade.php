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
            <main class="space-y-4">
                <!-- 
                <x-alert 
                    type="error"
                    :title="$title"
                    :message="$message" 
                />

                <!-- Forma mais resumida de chamar o componente: quando o nome da variável é o mesmo do atributo -->
                <x-alert 
                    type="success"
                    :$title
                    :$message 
                />

                <x-alert 
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