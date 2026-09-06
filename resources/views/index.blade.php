<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    {{ $user['name'] }} <br/>

    @switch($user['id'])
        @case(1)
            <p>Usuário 1</p>
            @break
        @case(2)
            <p>Usuário 2</p>
            @break
        @default
            <p>Outro usuário</p>
    @endswitch
    
</body>
</html>