<!--    
    O método get() é usado para obter o valor de um atributo.
    
    No exemplo abaixo, estamos verificando se o atributo data-customerid existe usando o método has().
    Se o atributo existir, exibimos o valor do atributo usando o método get().
    Caso contrário, exibimos o texto "Enviar".
-->
<button
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    @if($attributes->has('data-customerid'))
        Customerid: {{ $attributes->get('data-customerid') }}
    @else
        Enviar
    @endif
</button>