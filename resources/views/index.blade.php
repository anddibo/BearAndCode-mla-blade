<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    {{ $user['name'] }} <br/>

    @if($user['admin'] === true)
        Você é um administrador.
    @elseif($user['id'] === 1)
        Você é o primeiro usuário do sistema.
    @else
        Olá usuário.
    @endif

    @unless($user['admin'])
        <p>Você não é um administrador.</p>
    @endunless
    
    @isset($user['name'])
        Existe a propridade name no array user.
    @endisset

    <br/>

    @empty($user['name'])
        Nome não preenchido.
    @endempty

    <br/>

    @auth
        Usuário Logado
    @endauth

    @guest
        Olá visitante!
    @endguest

    @production
        <p>Estamos em produção.</p>
    @endproduction

    @env('local')
        <p>Estamos em ambiente local.</p>
    @endenv

</body>
</html>