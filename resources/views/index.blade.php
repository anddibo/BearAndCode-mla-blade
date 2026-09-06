<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    @for($i = 0; $i < 10; $i++)
        {{ $i }} <br/>    
    @endfor

    <br/>
    
    @foreach($users as $user)
        Usuário: {{ $user['id'] }} - {{ $user['name'] }} <br/>
    @endforeach

    <br/>

    @foreach($users as $user)
        Index: {{ $loop->index }} <br/>
        Iteration: {{ $loop->iteration }} <br/>
        Remaining: {{ $loop->remaining }} <br/>

        @if($loop->first)
            Primeira iteração <br/>
        @endif
        @if($loop->last)
            Última iteração <br/>
        @endif

        @if($loop->even)
            Iteração PAR {{ $loop->iteration }} <br/>
        @endif
        @if($loop->odd)
            Iteração ÍMPAR {{ $loop->iteration }} <br/>
        @endif

    @endforeach

    <br/>

    @foreach($users as $user)
        @foreach($users as $user)
            Iteração do pai: {{ $loop->parent->iteration }} <br/>
            Iteração do filho: {{ $loop->iteration }} <br/>
        @endforeach
        <br/>
    @endforeach

    <br/>

    @forelse($users2 as $user2)
        Usuário: {{ $user2['id'] }} - {{ $user2['name'] }} <br/>
    @empty
        Nenhum usuário encontrado.
    @endforelse

    <br/>
    <br/>

    @while($count < 10)
        Contador: {{ $count }} <br/>
        @php
            $count++;
        @endphp
    @endwhile
</body>
</html>