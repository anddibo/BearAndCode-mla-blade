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
                    type="error"
                    :$title
                    :$message>
                    
                    <!-- Se não for passado o icon (trecho de código abaixo) não dá erro, por que o valor padrão é uma string vazia,
                     definida em Alert.php -->
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </x-slot:icon>

                    <p class="text-yellow-600"> oi eu sou um parágrafo dentro do slot do componente de alerta. </p>
                </x-alert>
               
            </main>

        </div>
        
    </div>        
</body>
</html>